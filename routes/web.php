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

Route::get('/', function () {
    return view('pages.auth.login');
})->name("home");

Route::group([
    "prefix" => "master-data"
],function(){
    Route::get('/category','CategoryController@index')->name('category.index');
    Route::get('/category/create','CategoryController@create')->name('category.create');
    Route::post('/category','CategoryController@store')->name('category.store');
    Route::get('/category/{id}','CategoryController@show')->name('category.show');
    Route::put('/category/{id}','CategoryController@update')->name('category.update');
    Route::get('/category/{id}/delete','CategoryController@delete')->name('category.delete');
});


Route::group([
    "prefix" => "book"
],function(){
    Route::get('/','BookController@index')->name('book.index');
    Route::get('/create','BookController@create')->name('book.create');
    Route::post('/','BookController@store')->name('book.store');
    Route::get('/{id}','BookController@show')->name('book.show');
    Route::put('/{id}','BookController@update')->name('book.update');
    Route::get('/{id}/delete','BookController@delete')->name('book.delete');
});