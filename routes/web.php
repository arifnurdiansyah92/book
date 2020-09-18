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
})->name("home")->middleware(['guest']);

Route::group([
    "prefix" => "master-data",
    "middleware" => ["admin"]
],function(){
    Route::get('/category','CategoryController@index')->name('category.index');
    Route::get('/category/create','CategoryController@create')->name('category.create');
    Route::post('/category','CategoryController@store')->name('category.store');
    Route::get('/category/{id}','CategoryController@show')->name('category.show');
    Route::put('/category/{id}','CategoryController@update')->name('category.update');
    Route::get('/category/{id}/delete','CategoryController@delete')->name('category.delete');
});

Route::post('login','LoginController@login')->name('login');
Route::get('logout','LoginController@logout')->name('logout');
Route::get('register', function(){
    return view('pages.auth.register');
})->name('register');
Route::post('register', 'UserController@store')->name('user.register');


Route::group([
    "prefix" => "book"
],function(){
    Route::get('/','BookController@index')->name('book.index');
    Route::get('/create','BookController@create')->name('book.create')->middleware(['admin']);
    Route::post('/','BookController@store')->name('book.store')->middleware(['admin']);
    Route::get('/{id}','BookController@show')->name('book.show')->middleware(['admin']);
    Route::put('/{id}','BookController@update')->name('book.update')->middleware(['admin']);
    Route::get('/{id}/delete','BookController@delete')->name('book.delete')->middleware(['admin']);
    Route::get('/{pretty_url}','BookController@show_by_url')->name('book.detail');
});