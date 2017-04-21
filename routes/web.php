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
// Customer-create
Route::get('/customer/create', 'CustomerController@index');
Route::post('/customer/create', 'CustomerController@create');
// Customer-change
Route::get('/customer/change', 'CustomerController@indexChange');
Route::get('/customer/change/{id}', 'CustomerController@showChange');
Route::post('/customer/change', 'CustomerController@change');
// Customer-display
Route::get('/customer', 'CustomerController@indexDisplay');
Route::get('/customer/display', 'CustomerController@indexDisplay');
Route::get('/customer/display/{id}', 'CustomerController@display');
// Material-delete
Route::get('/customer/delete', 'MaterialController@showDelete');

Route::post('/customer/delete', 'MaterialController@delete');
Route::POST('/customer/delete', 'MaterialController@delete');



// Material-create
Route::get('/material/create', 'MaterialController@index');
Route::post('/material/create', 'MaterialController@create');
// Material-change
Route::get('/material/change', 'MaterialController@indexChange');
Route::get('/material/change/{id}', 'MaterialController@showChange');
Route::post('/material/change', 'MaterialController@change');
// Material-display
Route::get('/material', 'MaterialController@indexDisplay');
Route::get('/material/display', 'MaterialController@indexDisplay');
Route::get('/material/display/{id}', 'MaterialController@display');
// Material-delete
Route::get('/material/delete', 'MaterialController@showDelete');
Route::post('/material/delete', 'MaterialController@delete');

// ============================================================
// Condition-create
Route::get('/condition/create', 'ConditionController@showCreate');
Route::post('/condition/create/general', 'ConditionController@createGeneral');
Route::post('/condition/create/material', 'ConditionController@createMaterial');
// Condition-display
Route::get('/condition', 'ConditionController@indexDisplay');
Route::get('/condition/display', 'ConditionController@indexDisplay');
Route::get('/condition/display/general/{id}', 'ConditionController@displayGeneral');
Route::get('/condition/display/material/{id}', 'ConditionController@displayMaterial');


// ============================================================
// Inquiry
Route::get('/inquiry/create','InquiryController@showCreate');
Route::post('/inquiry/create','InquiryController@create');

