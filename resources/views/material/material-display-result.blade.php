@extends('default.layout')
@section('title',"Display Material")
@section('content')
    <form action="">
        <div class="row">
            <div class="input-field col s4">
                <input disabled value="Hello World" id="product_id" type="text" class="validate">
                <label class="active" for="product_id">Product ID (ex. WA00010)</label>
            </div>
            <div class="input-field col s8">
                <input disabled value="{{$data['product_name']}}" id="product_name" type="text" class="validate">
                <label class="active" for="product_name">Product Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input disabled value="{{$data['product_price']}}" id="product_price" type="text" class="validate">
                <label class="active" for="product_price">Product Price</label>
            </div>
            <div class="input-field col s4">
                <input disabled value="{{$data['product_qty']}}" id="product_quantity" type="text" class="validate">
                <label class="active" for="product_quantity">Product Quantity</label>
            </div>
            <div class="input-field col s4">
                <input disabled value="{{$data['product_type']}}" id="product_type" type="text" class="validate">
                <label class="active" for="product_type">Product Type</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input disabled value="{{$data['product_categories']}}" id="product_categories" type="text" class="validate">
                <label class="active" for="product_categories">Product Categories (optional)</label>
            </div>
        </div>
    </form>
@endsection