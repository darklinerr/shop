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

Route::get('/', 'HomeController@index')->name('home');
Route::get('category/{category}', 'HomeController@category')->name('category');
Route::get('product/{product}', 'HomeController@product')->name('product');
Route::get('cart', 'HomeController@cart')->name('cart');

Auth::routes();


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function(){
    Route::get('/', function (){
        return view('admin.index');
    })->name('admin');
    Route::get('category', 'Admin\CategoryController@index')->name('admin.category');
    Route::get('category/add', 'Admin\CategoryController@add')->name('admin.category.add');
    Route::post('category/create', 'Admin\CategoryController@create')->name('admin.category.create');
    Route::get('category/show/{category}', 'Admin\CategoryController@show')->name('admin.category.show');
    Route::put('category/edit/{category}', 'Admin\CategoryController@edit')->name('admin.category.edit');
    Route::get('category/delete/{id}', 'Admin\CategoryController@delete')->name('admin.category.delete');
    Route::get('product', 'Admin\ProductController@index')->name('admin.product');
    Route::get('product/add', 'Admin\ProductController@add')->name('admin.product.add');
    Route::post('product/create', 'Admin\ProductController@create')->name('admin.product.create');
    Route::get('product/show/{product}', 'Admin\ProductController@show')->name('admin.product.show');
    Route::put('product/edit/{product}', 'Admin\ProductController@edit')->name('admin.product.edit');
    Route::get('product/delete/{id}', 'Admin\ProductController@delete')->name('admin.product.delete');
});

Route::group(['prefix' => 'ajax', 'middleware' => ['auth', 'ajax']], function (){
    Route::any('cart/add', 'AjaxController@addToCart');
    Route::any('cart/show', 'AjaxController@showCart');
    Route::get('cart/change', 'AjaxController@changeCart');
    Route::get('cart/delete', 'AjaxController@deleteCart');

});


