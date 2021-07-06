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
    return view('welcome');
});
Route::get('/search', function () {
    return view('pagesearchs/pagesearch');
});

Route::get('/author', function () {
    return view('authors/authorlist');
});

Route::get('/authordetail', function () {
    return view('authors/authordetail');
});

Route::get('/book', function () {
    return view('books/bookdetail');
});

Route::get('/myprofile', function () {
    return view('profiles/myaccount');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
