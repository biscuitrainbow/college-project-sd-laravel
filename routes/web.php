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
Route::get('/customer/create','CustomerController@index');
Route::post('/customer/create','CustomerController@create');

Route::get('/customer/change','CustomerController@indexChange');
Route::get('/customer/change/{id}','CustomerController@showChange');
Route::post('/customer/change','CustomerController@change');

// Material-create
Route::get('/material/create','MaterialController@index');
Route::POST('/material/create','MaterialController@create');
// Material-change
Route::get('/material/change','MaterialController@indexChange');
Route::get('/material/change/{id}','MaterialController@showChange');
Route::POST('/material/change','MaterialController@change');
// Material-display
Route::get('/material','MaterialController@indexDisplay');
Route::get('/material/display','MaterialController@indexDisplay');
Route::get('/material/display/{id}','MaterialController@display');
// Material-delete
Route::get('/material/delete','MaterialController@showDelete');
Route::POST('/material/delete','MaterialController@delete');



Route::get('/', function () {
    return view('default.layout');
});

Route::get('/customer/create', function () {
    return view('customer.customer-create');
});
Route::get('/customer/display', function () {
    return view('customer.customer-display');
});

Route::get('/customer/display-result', function () {
    return view('customer.customer-display-result');
});


Route::get('/inquiry/change', function () {
    return view('presale.inquiry.inquiry-change');
});

Route::get('/inquiry/change-result', function (){
    return view('presale.inquiry.inquiry-change-result');
});

Route::get('/inquiry/create', function (){
    return view('presale.inquiry.inquiry-create');
});

Route::get('/inquiry/delete', function (){
    return view('presale.inquiry.inquiry-delete');
});

Route::get('/inquiry/display', function (){
    return view('presale.inquiry.inquiry-display');
});

Route::get('/inquiry/display-result', function (){
    return view('presale.inquiry.inquiry-display-result');
});

Route::get('/quotation/change', function (){
    return view('presale.quotation.quotation-change');
});

Route::get('/quotation/change-result', function (){
    return view('presale.quotation.quotation-change-result');
});

Route::get('/quotation/create', function (){
    return view('presale.quotation.quotation-create');
});

Route::get('/quotation/delete', function (){
    return view('presale.quotation.quotation-delete');
});

Route::get('/quotation/display', function (){
    return view('presale.quotation.quotation-display');
});

Route::get('/quotation/display-result', function (){
    return view('presale.quotation.quotation-display-result');
});

Route::get('/invoice/create', function (){
    return view('payment.invoice.invoice-create');
});

Route::get('/invoice/display', function (){
    return view('payment.invoice.invoice-display');
});

Route::get('/invoice/display-result', function (){
    return view('payment.invoice.invoice-display-result');
});

Route::get('/receipt/create', function (){
    return view('payment.receipt.receipt-create');
});

Route::get('/receipt/display', function (){
    return view('payment.receipt.receipt-display');
});

Route::get('/receipt/display-result', function (){
    return view('payment.receipt.receipt-display-result');
});

