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
Route::get('/', 'PagesController@home');








Route::get('/books/All', 'PagesController@booksAll');
Route::get('/books/{books}', 'PagesController@show');
Route::get('books.show', 'PagesController@show');
Route::any('/search', 'PagesController@search')->name('search');
Route::get('/books/{books}', 'PagesController@show')->name('books.show');

