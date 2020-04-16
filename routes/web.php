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

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/about-us', 'PagesController@about');
Route::get('/features', 'PagesController@features');

Auth::routes();

Route::get('/app', 'HomeController@index')->name('app');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/plans', 'HomeController@plans')->name('plans');