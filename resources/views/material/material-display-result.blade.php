@extends('default.layout')
@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Material</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">{{$material->name}}</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection
@section('content')
    <h4 class="main-title">{{$material->name}}</h4>
    <form action="">
        <div class="row">
            <div class="input-field col s4">
                <input disabled value="{{$material['code']}}" id="product_id" type="text" class="validate">
                <label class="active" for="product_id">Product ID (ex. WA00010)</label>
            </div>
            <div class="input-field col s8">
                <input disabled value="{{$material['name']}}" id="product_name" type="text"
                       class="validate">
                <label class="active" for="product_name">Product Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input disabled value="{{$material['price']}}" id="product_price" type="text"
                       class="validate">
                <label class="active" for="product_price">Product Price</label>
            </div>
            <div class="input-field col s4">
                <input disabled value="{{$material['quantity']}}" id="product_quantity" type="text"
                       class="validate">
                <label class="active" for="product_quantity">Product Quantity</label>
            </div>
            <div class="input-field col s4">
                <input disabled value="{{$material['type']}}" id="product_type" type="text"
                       class="validate">
                <label class="active" for="product_type">Product Type</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input disabled value="{{$material['category']}}" id="product_categories" type="text"
                       class="validate">
                <label class="active" for="product_categories">Product Categories (optional)</label>
            </div>
        </div>
    </form>

@endsection