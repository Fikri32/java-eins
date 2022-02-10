<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'java-admin'],function(){
    
    Route::get('', function () {
        return view('auth.login');
    })->middleware('guest');
    
    Auth::routes();
    
    Route::group(['prefix' => 'catalogue','middleware' => 'auth'],function(){
        Route::get('','Admin\CatalogueController@index')->name('catalogue.index');
    });
});






