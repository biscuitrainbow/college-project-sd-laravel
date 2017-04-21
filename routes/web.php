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

// Quotation-create
Route::get('/quotation/create','QuotationController@indexQuotation');
// Quotation-display
Route::get('/quotation/display','QuotationController@displayQuotation');

// Availability-display
Route::get('/availability/display','AvailabilityController@display');

//GoodsIssue-create
Route::get('/goodsissue/create','GoodsIssueController@create');
//GoodsIssue-display
Route::get('/goodsissue/display','GoodsIssueController@display');

//PurchaseOrder-create
Route::get('/po/create','PurchaseOrderController@create');

//SaleOrder-create
Route::get('/so/create','SaleOrderController@create');
//SaleOrder-display
Route::get('/so/display','SaleOrderController@display');

//invoice-create
Route::get('/invoice/create','InvoiceController@create');
//invoice-display
Route::get('/invoice/display','InvoiceController@display');

//receipt-create
Route::get('/receipt/create','ReceiptController@create');
//receipt-display
Route::get('/receipt/display','ReceiptController@display');

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

