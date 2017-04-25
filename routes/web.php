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

/* Customer */
Route::get('/customer/create', 'CustomerController@index')->middleware('auth')->name('createCustomer');
Route::post('/customer/create', 'CustomerController@postCustomer')->middleware('auth')->name('postCustomer');
Route::get('/customer/display', 'CustomerController@displayCustomers')->middleware('auth')->name('displayCustomers');
Route::get('/customer/display/{id}', 'CustomerController@displayCustomer')->middleware('auth')->name('displayCustomer');

/* Material */
Route::get('/material/create', 'MaterialController@index')->name('createMaterial')->middleware('auth');
Route::post('/material/create', 'MaterialController@create')->name('postMaterial')->middleware('auth');
Route::get('/material/display', 'MaterialController@displayMaterials')->name('displayMaterials')->middleware('auth');
Route::get('/material/display/{id}', 'MaterialController@displayMaterial')->middleware('auth');

/* Inquiry */
Route::get('/inquiry/create', 'InquiryController@showCreate')->name('createInquiry')->middleware('auth');
Route::get('/inquiry/display', 'InquiryController@displayInquiries')->name('displayInquiries')->middleware('auth');
Route::get('/inquiry/display/{id}', 'InquiryController@displayInquiry')->middleware('auth');
Route::post('/inquiry/create', 'InquiryController@create')->name('postInquiry')->middleware('auth');

/* Quotation */
Route::get('/quotation/create', 'QuotationController@indexQuotation')->name('createQuotation')->middleware('auth');
Route::get('/quotation/create/form/{id}', 'QuotationController@createQuotationForm')->name('createQuotationForm')->middleware('auth');
Route::POST('/quotation/create', 'QuotationController@create')->name('postQuotation')->middleware('auth');
Route::get('/quotation/display', 'QuotationController@displayQuotation')->name('displayQuotation')->middleware('auth');
Route::get('/quotation/display/{id}', 'QuotationController@displayQuotationDocument')->name('displayQuotationDocument')->middleware('auth');

/* Availability */
Route::get('/availability/display', 'AvailabilityController@display')->name('displayAvailability')->middleware('auth');


/* Purchase Order */
Route::get('/po/create', 'PurchaseOrderController@create')->name('createPurchaseOrder')->middleware('auth');

/* Sale Order */
Route::get('/so/create', 'SaleOrderController@create')->name('createSaleOrder')->middleware('auth');
Route::get('/so/create/form/{id}', 'SaleOrderController@createSaleOrderForm')->middleware('auth');
Route::post('/so/create','SaleOrderController@store')->name('storeSaleOrder')->middleware('auth');
Route::get('/so/display', 'SaleOrderController@display')->name('displaySaleOrder')->middleware('auth');
Route::get('/so/display/{id}', 'SaleOrderController@displaySaleOrderDocument')->name('displaySaleOrderDocument')->middleware('auth');

/* Goods Issue */
Route::get('/goodsissue/create', 'GoodsIssueController@create')->name('createGoodsIssue')->middleware('auth');
Route::get('/goodsissue/display', 'GoodsIssueController@display')->name('displayGoodsIssue')->middleware('auth');

/*Invoice */
Route::get('/invoice/create', 'InvoiceController@create')->name('createInvoice')->middleware('auth');
Route::get('/invoice/display', 'InvoiceController@display')->name('displayInvoice')->middleware('auth');

/*Receipt */
Route::get('/receipt/create', 'ReceiptController@create')->name('createReceipt')->middleware('auth');
Route::get('/receipt/display', 'ReceiptController@display')->name('displayReceipt')->middleware('auth');

/* Condition */
Route::get('/condition/create/material', 'ConditionController@showCreateMaterial')->name('showCreateMaterial')->middleware('auth');
Route::get('/condition/create/general', 'ConditionController@showCreateGeneral')->name('showCreateGeneral')->middleware('auth');
Route::post('/condition/create/general', 'ConditionController@createGeneral')->name('postConditionGeneral')->middleware('auth');
Route::post('/condition/create/material', 'ConditionController@createMaterial')->name('postConditionMaterial')->middleware('auth');

Route::get('/condition/display/general/', 'ConditionController@displayGenerals')->name('displayConditionGeneral')->middleware('auth');
Route::get('/condition/display/material/', 'ConditionController@displayMaterials')->name('displayConditionMaterial')->middleware('auth');


/* Login */
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('/register', 'RegisterController@index');
Route::post('/register', 'RegisterController@create');

/* DashBoard */
Route::get('/dashboard/overall', 'DashBoardController@overall')->name('overallDashboard');

/* Other */
Auth::routes();
Route::get('/home', 'MaterialController@displayMaterials');
Route::get('/', 'MaterialController@displayMaterials');