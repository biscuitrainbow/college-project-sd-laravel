@extends('default.layout')
@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Sale</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Sale Order</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection
@section('content')

                <div class="row">
                  <div class="col s12">
                    <span class="form-title">General Infomation</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input value="value" id="soldtoparty" type="text" class="validate">
                    <label for="soldtoparty">Customer</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="soldtoparty" type="text" class="validate">
                    <label for="soldtoparty">Sold to Party/Ship to Party</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="requestdate" type="date" class="datepicker">
                    <label for="requestdate">Request Delivery Date</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Material Detail</span>
                  </div>
                </div>
                <div class="row">
                  <!--<div class="input-field col s4">
                    <input value="value" id="productid" type="text" class="validate">
                    <label for="productid">Product ID</label>
                  </div>-->
                  <div class="input-field col s12">
                    <input value="value" id="productname" type="text" class="validate">
                    <label for="productname">Product Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="orderqty" type="text" class="validate">
                    <label for="orderqty">Order Qty</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="price" type="text" class="validate">
                    <label for="price">Price Per Unit</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Billing</span>
                  </div>
                </div>
                <div class="row">
                  <!--<div class="input-field col s6">
                    <input value="value" id="productid" type="text" class="validate">
                    <label for="productid">Billing Method</label>
                  </div>-->
                  <div class="input-field col s6">
                    <input value="value" id="totalprice" type="text" class="validate">
                    <label for="invoicedate">Invoice Date</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Condition</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="totalprice" type="text" class="validate">
                    <label for="totalprice">Total Price</label>
                  </div>
                  <!--<div class="input-field col s4">
                    <input value="value" id="materialdiscount" type="text" class="validate" placeholder="ex.10% to wa0001">
                    <label for="materialdiscount">Material Discount</label>
                  </div>-->
                  <div class="input-field col s6">
                    <input value="value" id="customerdiscount" type="text" class="validate" placeholder="ex. 5% from overall">
                    <label for="customerdiscount">Customer Discount</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="netvalue" type="text" class="validate">
                    <label for="netvalue">Net Value</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Payment</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="paymentdate" type="date" class="datepicker">
                    <label for="paymentdate">Payment Date</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="paymenttype" type="text" class="validate">
                    <label for="paymenttype">Payment Type</label>
                  </div>
                </div>

@endsection