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
Route::post('/profile/update/{id}', 'HomeController@updateProfile')->name('update-profile');
Route::post('/wallet/update/{id}', 'HomeController@updateWalletProfile')->name('update-wallet');

Route::get('/packages', 'HomeController@plans')->name('plans');
Route::get('/my-transactions', 'HomeController@transactionList')->name('my-transactions');
Route::post('/confirm-payment', 'HomeController@confirmPackagePayment')->name('confirm-package-payment');
Route::get('/approve-payment', 'HomeController@approvePayment')->name('approve-payment');
Route::get('/mgt-profit', 'HomeController@getAllProfitManagements');
Route::get('/payment-info', 'HomeController@paymentInfo')->name('payment-info');
Route::post('/update-payment-profile', 'HomeController@updatePaymentProfile')->name('update-payment-profile');
Route::get('/payment-request','HomeController@paymentRequestLists')->name('payment-request');
Route::get('/withdrawal','HomeController@paymentRequestForm')->name('payment-request-form');
Route::post('/payment-request','HomeController@makePaymentRequest')->name('make-payment-request');
Route::post('/cancel-request/{id}','HomeController@cancelPaymentRequest')->name('cancel-request');

Route::group(['prefix' => 'admin',  'middleware' => ['auth','isadmin',]], function() {
    Route::post('/approve-payment/{ref}','AdminController@approvePayment')->name('approve-payment');
    Route::get('/dashboard','AdminController@dashboard')->name('admin-dashboard');
    Route::get('/transactions','AdminController@allTransactions')->name('all-transactions');

    Route::get('/packages','AdminController@allPackages')->name('all-packages');
    Route::get('/package/{id}/edit','AdminController@editPackage')->name('edit-package');
    Route::post('/package/{id}/update','AdminController@updatePackage')->name('update-package');

    Route::get('/customers','AdminController@allCustomers')->name('all-customers');
    Route::get('/active-subscribers','AdminController@activeSubscribedCustomers')->name('active-subscribers');
    Route::get('/payment-request','AdminController@paymentRequestLists')->name('admin-payment-request');
    Route::post('/approve-request/{id}','AdminController@approvePaymentRequest')->name('admin-approve-request');
    Route::get('/decline-request/{id}','AdminController@declinePaymentRequest')->name('admin-decline-request');
});