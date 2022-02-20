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

Route::get('/', 'Front\HomeController@index')->name('home.index');

Route::get('/faq', 'Front\FaqController@index')->name('faq.index');
Route::get('/contact', 'Front\ContactController@index')->name('contact.index');
Route::get('/product', 'Front\ProductController@index')->name('product.index');
Route::get('/about', 'Front\AboutController@index')->name('about.index');
Route::get('/detail', 'Front\DetailController@index')->name('detail.index');
Route::get('/detail/{id}', 'Front\ProductController@detail')->name('produk.detail');
