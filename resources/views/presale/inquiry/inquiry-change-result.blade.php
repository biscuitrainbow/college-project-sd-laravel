@extends('default.layout')
@section('title',"Change-Result Inquiry")

@section('content')
    <form action="">
        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">General Infomation</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input value="value" type="date" class="datepicker">
                <label for="date">Create Date</label>
            </div>
            <div class="input-field col s8">
                <input value="value" id="customer" type="text" class="validate">
                <label for="customer">Customer</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <input value="value" id="soldparty" type="text" class="validate">
                <label for="soldparty">Sold to party/Ship to party</label>
            </div>
            <div class="input-field col s4">
                <input value="value" type="date" class="datepicker">
                <label for="requestdelivery">request delivery date</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">Material Detail</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input value="value" id="productid" type="text" class="validate">
                <label for="productid">Product ID</label>
            </div>
            <div class="input-field col s8">
                <input value="value" id="productname" type="text" class="validate">
                <label for="productname">Product Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input value="value" id="orderqty" type="text" class="validate">
                <label for="orderqty">Order Qty</label>
            </div>
        </div>


        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">Billing</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input value="value" id="productid" type="text" class="validate">
                <label for="productid">Billing Method</label>
            </div>
            <div class="input-field col s6">
                <input value="value" type="date" class="datepicker">
                <label for="invoicedate">Invoice Date</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="row">
            <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Update</a></div>
        </div>
    </form>
@endsection()