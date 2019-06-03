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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'CategoryController@index');

Route::resource('products', 'ProductController');

// project.local/products/create/23
Route::get('products/create/{category_id}', 'ProductController@create')->name('product.create.category');

Route::resource('categories', 'CategoryController');
