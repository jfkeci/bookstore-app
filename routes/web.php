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

Route::get('/', 'App\Http\Controllers\PagesController@index');
Route::get('/about', 'App\Http\Controllers\PagesController@index');
Route::get('/contact', 'App\Http\Controllers\PagesController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('books', 'App\Http\Controllers\CategoriesController');
Route::resource('authors', 'App\Http\Controllers\AuthorsController');
Route::resource('categories', 'App\Http\Controllers\CategoriesController');
Route::resource('publishers', 'App\Http\Controllers\PublishersController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
