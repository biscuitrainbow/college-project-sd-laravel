@extends('default.layout')
@section('title',"Change-Result Quotation")

@section('content')
    <form action="">
        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">General Infomation</span>
            </div>
        </div>
        <div class="row" style="margin-top: 50px">
            <div class="input-field col s4">
                <input type="date" class="datepicker">
                <label for="discountprice">Create Date</label>
            </div>
            <div class="input-field col s8">
                <input id="minquantity" type="text" class="validate">
                <label for="minquantity">Customer</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <input id="soldtoparty" type="text" class="validate">
                <label for="soldtoparty">Sold to Party/Ship to Party</label>
            </div>
            <div class="input-field col s4">
                <input id="requestdate" type="date" class="datepicker">
                <label for="requestdate">Request Delivery Date</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">Material Detail</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="productid" type="text" class="validate">
                <label for="productid">Product ID</label>
            </div>
            <div class="input-field col s8">
                <input id="productname" type="text" class="validate">
                <label for="productname">Product Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="orderqty" type="text" class="validate">
                <label for="orderqty">Order Qty</label>
            </div>
            <div class="input-field col s4">
                <input id="price" type="text" class="validate">
                <label for="price">Price Per Unit</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">Billing</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="productid" type="text" class="validate">
                <label for="productid">Billing Method</label>
            </div>
            <div class="input-field col s6">
                <input id="invoicedate" type="date" class="datepicker">
                <label for="invoicedate">Invoice Date</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">Condition</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="totalprice" type="text" class="validate">
                <label for="totalprice">Total Price</label>
            </div>
            <div class="input-field col s4">
                <input id="materialdiscount" type="text" class="validate" placeholder="ex.10% to wa0001">
                <label for="materialdiscount">Material Discount</label>
            </div>
            <div class="input-field col s4">
                <input id="customerdiscount" type="text" class="validate" placeholder="ex. 5% from overall">
                <label for="customerdiscount">Customer Discount</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="netvalue" type="text" class="validate">
                <label for="netvalue">Net Value</label>
            </div>
        </div>


        <!-- Submit Button -->
        <div class="row">
            <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Update</a></div>
        </div>
    </form>
@endsection()