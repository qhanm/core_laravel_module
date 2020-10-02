<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::prefix('backend')->group(function() {
    Route::get('/auth/login', 'AuthController@login')->name('backend.auth.login');
    Route::get('auth/logout', 'AuthController@logout')->name('backend.auth.logout');
    Route::post('auth/login', 'AuthController@checkLogin')->name('backend.auth.checkLogin');
    Route::post('auth/forgot-password', 'AuthController@forgotPassword')->name('backend.auth.forgotPassword');

    Route::middleware([\Modules\Backend\Http\Middleware\User::class])->group(function (){
        Route::get('/', 'BackendController@index');
    });
});
