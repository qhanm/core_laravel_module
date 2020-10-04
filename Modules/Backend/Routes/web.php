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
use Illuminate\Support\Facades\Route;


App::setLocale('en');
Route::get('backend/auth/login', 'AuthController@login')->name('backend.auth.login');
Route::get('backend/auth/logout', 'AuthController@logout')->name('backend.auth.logout');
Route::post('backend/auth/login', 'AuthController@checkLogin')->name('backend.auth.checkLogin');
Route::post('backend/auth/forgot-password', 'AuthController@forgotPassword')->name('backend.auth.forgotPassword');

Route::middleware([\Modules\Backend\Http\Middleware\User::class])->prefix('dashboard')->group(function () {
    Route::get('/', 'BackendController@index')->name('backend.dashboard.index');

});

//Route::middleware([\Modules\Backend\Http\Middleware\User::class])->group(function (){
//    Route::prefix('backend')->group(function() {
//    });
//});
