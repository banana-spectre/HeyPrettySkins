<?php

use Illuminate\Support\Facades\Route;

//---------------------- CONTROLLERS ----------------------------//
use App\Http\Controllers\DashboardController;
//Shared Controllers by 2 or more user
use App\Http\Controllers\StoreIssuanceVoucherController;
use App\Http\Controllers\PurchaseOrderFormController;

//Admin
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;

//CEO
use App\Http\Controllers\CEO\CeoMonthlyController;

//Executive Secretary
use App\Http\Controllers\Executive_Secretary\ExecOrderController;

//Sales Manager
use App\Http\Controllers\Sales_Manager\SM_orderController;
//Accounting Head
use App\Http\Controllers\Accounting_Head\AcctngInvoiceController;

//Warehouse Manager
use App\Http\Controllers\Warehouse_Manager\InventoryController;

use App\Http\Controllers\Warehouse_Manager\PDFController;

use App\Http\Controllers\Warehouse_Manager\ProdReqFormController;
use App\Http\Controllers\Warehouse_Manager\DeliveryReceiptController;

//Depot
use App\Http\Controllers\Depot\OrderController;
use App\Http\Controllers\Depot\InvoiceController;

//---------------------- ROUTES ----------------------------//
Route::get('/', function () {
    return view('welcome');
});

//POLICY AND APPROPRIATE USE
// Route::view( uri: '/policy-updates', view: 'policy-updates');
// Route::view( uri: '/appropriate-use', view: 'appropriate-use');

//Routing to Dashboard with Authentication
Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
        ->name('dashboard');
});

/*
 * ALL ROUTES WILL BE GROUPED BY USER TYPE!
 * 
 * They all need authentication for security; hence,
 * they are now grouped and put under a single authentication code, 
 * which will check if they are logged in or not.
 */

//SHARED ROUTES BY TWO OR MORE USERS
Route::group(['middleware' => ['auth', 'role:executive_secretary|sales_manager|depot']], function(){
        //Put every links or URL or routes here for admin
        Route::resource('store_issuance_voucher', StoreIssuanceVoucherController::class);
    });

Route::group(['middleware' => ['auth', 'role:executive_secretary|sales_manager|depot|ceo|accounting_head|warehouse']], function(){
        //Put every links or URL or routes here for admin
        Route::resource('purchase_order_form', PurchaseOrderFormController::class);
    });


//ADMIN ROUTES
Route::group(['middleware' => ['auth', 'role:admin']], function(){
    Route::prefix('admin')->group(function (){
        //Put every links or URL or routes here for admin
        Route::resource('users', UserController::class);
        Route::resource('products', ProductController::class);
    });
});

//CEO ROUTES
Route::group(['middleware' => ['auth', 'role:ceo']], function(){
    Route::prefix('ceo')->group(function (){
        //Put every links or URL or routes here for admin
        Route::resource('ceo_monthly_sales_report', CeoMonthlyController::class);

    });
});

//EXECUTIVE SECRETARY ROUTES
Route::group(['middleware' => ['auth', 'role:executive_secretary']], function(){
    Route::prefix('exec_secretary')->group(function (){
        //Put every links or URL or routes here for exe
        Route::resource('exec_sec_order', ExecOrderController::class);
    });
});

//SALES MANAGER ROUTES
Route::group(['middleware' => ['auth', 'role:sales_manager']], function(){
    Route::prefix('sales_manager')->group(function (){
        //Put every links or URL or routes here for sales
        Route::resource('sales_manager_order', SM_orderController::class);
    });
});

//ACCOUNTING HEAD ROUTES
Route::group(['middleware' => ['auth', 'role:accounting_head']], function(){
    Route::prefix('accounting_head')->group(function (){
        //Put every links or URL or routes here for acc
        Route::resource('acctng_invoice', AcctngInvoiceController::class);
    });
}); 
//WAREHOUSE MANAGER ROUTES
Route::group(['middleware' => ['auth', 'role:warehouse_manager']], function(){
    Route::prefix('warehouse_manager')->group(function (){
        //Put every links or URL or routes here for warehouse
        
        Route::get("/inventory/search/", [InventoryController::class, 'search']);
        Route::get("/inventory/view-pdf", 'App\Http\Controllers\Warehouse_Manager\PDFController@getAllInventory')->name('inventory.view-pdf');
        Route::resource('inventory', InventoryController::class);

        Route::resource('delivery_receipt', DeliveryReceiptController::class);
        Route::resource('product_requisiton_form', ProdReqFormController::class);
    });
});

//DEPOT ROUTES
Route::group(['middleware' => ['auth', 'role:depot']], function(){
    Route::prefix('depot')->group(function (){
        //Put every links or URL or routes here for depot
        Route::resource('order', OrderController::class);
        Route::resource('invoice', InvoiceController::class);
    });
});

require __DIR__.'/auth.php';
