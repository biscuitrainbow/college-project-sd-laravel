@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Condition</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Material</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <h4 style="margin-bottom: 50px">Create Material Condition</h4>
    <h5 class="sub-title">Step 1 : Search and choose material </h5>
    <form  action="">
        <div class="input-field col s12 search-box">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Search by product name or id</label>
        </div>
    </form>

    <!-- Table -->
    <table style="margin-bottom: 50px" class="highlight">
        <thead>
        <tr>
            <th>Product id</th>
            <th>Product name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Product type</th>
            <th>Product Categories</th>
        </tr>
        </thead>
        <tbody>
        @foreach($material as $datas)
            <tr>
                <td>{{$datas['product_id']}}</td>
                <td>{{$datas['product_name']}}</td>
                <td>{{$datas['product_price']}}</td>
                <td>{{$datas['product_qty']}}</td>
                <td>{{$datas['product_type']}}</td>
                <td>{{$datas['product_categories']}}</td>
                <td><input name="id" value="{{$datas['id']}}" type="radio" class="with-gap"
                           id="check2"/>
                    <label for="check2">
                    </label></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h5 class="sub-title">Step 2 : Add detail</h5>
    <div class="row">
        <div class="input-field col s12" style="">
            <input name="conditionname" type="text" class="validate">
            <label for="conditionname">Condition Name</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input name="discountprice" type="text" class="validate">
            <label for="discountprice">Discount (%)</label>
        </div>
        <div class="input-field col s6">
            <input name="minquantity" type="text" class="validate">
            <label for="minquantity">Min Quantity</label>
        </div>
    </div>
    <!-- Submit Button -->
    <div class="row">
        <div class="col s12" style="text-align: right;">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <button type="submit" class="waves-effect waves-light btn">Create Condition
            </button>
        </div>
    </div>

@endsection