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
    Route::get('/', function () {
        return view('auth.login');
    })->middleware('guest');
    
    Auth::routes();
    
    Route::group(['prefix' => 'catalogue','middleware' => 'auth'],function(){
        Route::get('/','Admin\CatalogueController@index')->name('catalogue.index');
        Route::get('/{id}', 'Admin\CatalogueController@getDetail')->name('catalogue.detail');
        Route::post('/create', 'Admin\CatalogueController@create')->name('catalogue.create');
        Route::post('/update', 'Admin\CatalogueController@update')->name('catalogue.update');
        Route::post('/delete', 'Admin\CatalogueController@delete')->name('catalogue.delete');
        
        Route::group(['prefix' => 'image'], function(){
            Route::post('/upload', 'Admin\CatalogueImage@Upload')->name('catalogue.image.upload');
            Route::post('/delete/{id}', 'Admin\CatalogueImage@Delete')->name('catalogue.image.delete');
            Route::get('/{id}', 'Admin\CatalogueImage@GetImage')->name('catalogue.image.get');
        });
    });
});






