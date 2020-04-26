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
Route::get('/my-transactions', 'HomeController@transactionList')->name('my-transactions');
Route::post('/confirm-payment', 'HomeController@confirmPackagePayment')->name('confirm-package-payment');
Route::get('/approve-payment', 'HomeController@approvePayment')->name('approve-payment');
Route::get('/mgt-profit', 'HomeController@getAllProfitManagements');
Route::get('/payment-info', 'HomeController@paymentInfo')->name('payment-info');
Route::post('/update-payment-profile', 'HomeController@updatePaymentProfile')->name('update-payment-profile');

Route::group(['prefix' => 'admin',  'middleware' => ['auth','isadmin',]], function() {
    Route::get('/dashboard','AdminController@dashboard')->name('admin-dashboard');
    Route::get('/transactions','AdminController@allTransactions')->name('all-transactions');
    Route::get('/packages','AdminController@allPackages')->name('all-packages');
    Route::get('/customers','AdminController@allCustomers')->name('all-customers');
    Route::get('/active-subscribers','AdminController@activeSubscribedCustomers')->name('active-subscribers');
});