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


Route::get('/chart', function () {
    return view('material.material-display-result');
});
