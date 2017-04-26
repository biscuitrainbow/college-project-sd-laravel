@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Dashboard</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Overall</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <h4 style="margin-bottom: 50px">Dashboard</h4>

    <div class="row">
        <div class="col s4">
            <div class="card-panel ">
                <h6 class="red-text">Monthly Inquiry</h6>
                <h3 class="red-text">{{$number_of_inq}}</h3>
            </div>
        </div>
        <div class="col s4">
            <div class="card-panel">
                <h6 class="blue-text">Monthly Quotation</h6>
                <h3 class="blue-text">{{$number_of_quo}}</h3>
            </div>
        </div>
        <div class="col s4">
            <div class="card-panel ">
                <h6 class="green-text">Monthly Sales Order</h6>
                <h3 class="green-text">{{$number_of_quo}}</h3>
            </div>
        </div>
        <div class="col s12">
            <div class="card-panel ">
                <h6 class="green-text">Total Profit</h6>
                <h3 class="green-text">{{$profit}}</h3>
            </div>
        </div>
    </div>
@endsection





