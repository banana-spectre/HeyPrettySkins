<?php

use Illuminate\Support\Facades\Route;

//Add Controllers here
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductController;

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
    Route::resource('/admin/users', UserController::class);
    Route::resource('/admin/products', ProductController::class);
    

});

require __DIR__.'/auth.php';
