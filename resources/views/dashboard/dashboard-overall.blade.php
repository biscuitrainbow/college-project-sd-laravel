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
                    <h4 style="margin-bottom: 50px">Overall</h4>

                    <div class="row">
                        <div class="col s4">
                            <div class="card-panel red lighten-1">
                                <h6 class="white-text">Monthly Inquiry</h6>
                                <h3 class="white-text">{{$number_of_inq}}</h3>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="card-panel blue lighten-1">
                                <h6 class="white-text">Monthly Quotation</h6>
                                <h3 class="white-text">{{$number_of_quo}}</h3>
                            </div>
                        </div>
                        <div class="col s4">
                            <div class="card-panel green lighten-1">
                                <h6 class="white-text">Monthly Sales Order</h6>
                                <h3 class="white-text">{{$number_of_quo}}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col s6">
                            <div class="card-panel amber lighten-1">
                                <h6 class="white-text">Monthly Profits</h6>
                                <h3 class="white-text">12,000,000 THB</h3>
                            </div>
                        </div>
                    </div>
@endsection





