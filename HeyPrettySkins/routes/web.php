<?php

use Illuminate\Support\Facades\Route;

//Add Controllers here
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminProductController;

Route::get('/', function () {
    return view('welcome');
});

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

//ADMIN ROUTES
Route::group(['middleware' => ['auth', 'role:admin']], function(){
    //Put every links or URL or routes here for admin
    Route::resource('/admin/users', AdminUserController::class);
    Route::resource('/admin/products', AdminProductController::class);
    

});

require __DIR__.'/auth.php';
