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
// Login

// Customer-create
Route::get('/customer/create', 'CustomerController@index')->name('createCustomer')->middleware('auth');
Route::post('/customer/create', 'CustomerController@create')->name('postCustomer')->middleware('auth');
// Customer-change
Route::get('/customer/change', 'CustomerController@indexChange');
Route::get('/customer/change/{id}', 'CustomerController@showChange');
Route::post('/customer/change', 'CustomerController@change');
// Customer-display
//Route::get('/customer', 'CustomerController@indexDisplay')->name('displayCustomer')->middleware('auth');
Route::get('/customer/display', 'CustomerController@indexDisplay')->name('displayCustomer')->middleware('auth');
Route::get('/customer/display/{id}', 'CustomerController@display')->name('displayCustomerId')->middleware('auth');

// Material-delete
Route::get('/customer/delete', 'MaterialController@showDelete');
Route::post('/customer/delete', 'MaterialController@delete');
Route::POST('/customer/delete', 'MaterialController@delete');
// Material-create
Route::get('/material/create', 'MaterialController@index')->name('createMaterial')->middleware('auth');
Route::post('/material/create', 'MaterialController@create')->name('postMaterial')->middleware('auth');
// Material-change
Route::get('/material/change', 'MaterialController@indexChange');
Route::get('/material/change/{id}', 'MaterialController@showChange');
Route::post('/material/change', 'MaterialController@change');
// Material-display
//Route::get('/material', 'MaterialController@indexDisplay')->name('Material')->middleware('auth');
Route::get('/material/display', 'MaterialController@indexDisplay')->name('displayMaterial')->middleware('auth');
Route::get('/material/display/{id}', 'MaterialController@display')->name('displayMaterialId')->middleware('auth');
// Material-delete
Route::get('/material/delete', 'MaterialController@showDelete');
Route::post('/material/delete', 'MaterialController@delete');

// Quotation-create
Route::get('/quotation/create', 'QuotationController@indexQuotation')->name('createQuotation')->middleware('auth');
// Quotation-display
Route::get('/quotation/display', 'QuotationController@displayQuotation')->name('displayQuotation')->middleware('auth');

// Availability-display
Route::get('/availability/display', 'AvailabilityController@display')->name('displayAvailability')->middleware('auth');

//GoodsIssue-create
Route::get('/goodsissue/create', 'GoodsIssueController@create')->name('createGoodsIssue')->middleware('auth');
//GoodsIssue-display
Route::get('/goodsissue/display', 'GoodsIssueController@display')->name('displayGoodsIssue')->middleware('auth');

//PurchaseOrder-create
Route::get('/po/create', 'PurchaseOrderController@create')->name('createPurchaseOrder')->middleware('auth');

//SaleOrder-create
Route::get('/so/create', 'SaleOrderController@create')->name('createSaleOrder')->middleware('auth');
//SaleOrder-display
Route::get('/so/display', 'SaleOrderController@display')->name('displaySaleOrder')->middleware('auth');

//invoice-create
Route::get('/invoice/create', 'InvoiceController@create')->name('createInvoice')->middleware('auth');
//invoice-display
Route::get('/invoice/display', 'InvoiceController@display')->name('displayInvoice')->middleware('auth');

//receipt-create
Route::get('/receipt/create', 'ReceiptController@create')->name('createReceipt')->middleware('auth');
//receipt-display
Route::get('/receipt/display', 'ReceiptController@display')->name('displayReceipt')->middleware('auth');


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

Route::get('/inquiry/change-result', function () {
    return view('presale.inquiry.inquiry-change-result');
});

Route::get('/inquiry/create', function () {
    return view('presale.inquiry.inquiry-create');
});

Route::get('/inquiry/delete', function () {
    return view('presale.inquiry.inquiry-delete');
});

Route::get('/inquiry/display', function () {
    return view('presale.inquiry.inquiry-display');
});

Route::get('/inquiry/display-result', function () {
    return view('presale.inquiry.inquiry-display-result');
});

Route::get('/quotation/change', function () {
    return view('presale.quotation.quotation-change');
});

Route::get('/quotation/change-result', function () {
    return view('presale.quotation.quotation-change-result');
});

Route::get('/quotation/create', function () {
    return view('presale.quotation.quotation-create');
});

Route::get('/quotation/delete', function () {
    return view('presale.quotation.quotation-delete');
});

Route::get('/quotation/display', function () {
    return view('presale.quotation.quotation-display');
});

Route::get('/quotation/display-result', function () {
    return view('presale.quotation.quotation-display-result');
});

Route::get('/invoice/create', function () {
    return view('payment.invoice.invoice-create');
});

Route::get('/invoice/display', function () {
    return view('payment.invoice.invoice-display');
});

Route::get('/invoice/display-result', function () {
    return view('payment.invoice.invoice-display-result');
});

Route::get('/receipt/create', function () {
    return view('payment.receipt.receipt-create');
});

Route::get('/receipt/display', function () {
    return view('payment.receipt.receipt-display');
});

Route::get('/receipt/display-result', function () {
    return view('payment.receipt.receipt-display-result');
});

Route::get('/presale/inquiry/create', function () {
    return view('presale.inquiry.inquiry-create');
});


// ============================================================
// Condition-create
Route::get('/condition/create/material', 'ConditionController@showCreateMaterial')->name('createConditionMaterial')->middleware('auth');
Route::get('/condition/create/general', 'ConditionController@showCreateGeneral')->name('createConditionGeneral')->middleware('auth');

Route::post('/condition/create/general', 'ConditionController@createGeneral')->name('postConditionGeneral')->middleware('auth');
Route::post('/condition/create/material', 'ConditionController@createMaterial')->name('postConditionMaterial')->middleware('auth');
// Condition-display
//Route::get('/condition', 'ConditionController@indexDisplay')->name('Condition')->middleware('auth');
Route::get('/condition/display', 'ConditionController@indexDisplay')->name('displayCondition')->middleware('auth');
Route::get('/condition/display/general/{id}', 'ConditionController@displayGeneral')->name('displayConditionGeneral')->middleware('auth');
Route::get('/condition/display/material/{id}', 'ConditionController@displayMaterial')->name('displayConditionMaterial')->middleware('auth');


// ============================================================
// Inquiry
Route::get('/inquiry/create', 'InquiryController@showCreate')->name('createInquiry')->middleware('auth');
Route::post('/inquiry/create', 'InquiryController@create')->name('postInquiry')->middleware('auth');


Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout');

Route::get('/default', function () {
    return view('default.layout');
});