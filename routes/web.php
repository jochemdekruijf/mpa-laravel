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


Route::get('/addCart', 'CartController@addCart')->name('addCart');
Route::get('/viewCart', 'CartController@getCart')->name('viewCart');
Route::get('/kill', 'CartController@kill')->name('kill');
Route::get('/killone', 'CartController@killOne')->name('killOne');


Route::get('products/create/{category_id}', 'ProductController@create')->name('product.create.category');

Route::resource('categories', 'CategoryController');

Route::get('/order', 'OrderController@getOrder')->name('orders');
Route::get('/add-to-order', [ 
    'uses' => 'OrderController@addOrder', 
    'as' => 'addOrder'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

