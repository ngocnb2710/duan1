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

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'AdminController@index');
Route::group(['prefix'=>'category'],function(){
    Route::get('list', 'CategoryController@index');
    Route::get('add-cate','CategoryController@addForm');
    Route::post('add','CategoryController@add');
});
Route::group(['prefix' => 'product'], function () {
    Route::get('list', 'ProductController@index');
    Route::get('add-product', 'ProductController@addForm');
    Route::post('add', 'ProductController@add');
    Route::get('delete/{id}', 'ProductController@delete');
    Route::get('edit-form/{id}', 'ProductController@editForm');
    Route::post('edit/{id}', 'ProductController@edit');
});
