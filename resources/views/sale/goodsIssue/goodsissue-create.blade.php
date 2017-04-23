@extends('default.layout')

@section('breadcrumb')
  <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
  <a href="#!" class="breadcrumb">Goods Issue</a>
  <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="{{route('logout')}}">Logout</a></li>
  </ul>
@endsection

@section('content')
              <form action="">
                <div class="row">
                  <div class="input-field col s6">
                    <input id="saleorderno" type="text" class="validate">
                    <label for="saleorderno">Sale Order Number</label>
                  </div>
                  <div class="input-field col s6">
                    <input type="date" class="datepicker">
                    <label for="goodsissuedate">Goods Issue date</label>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                  <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Create Goods Receipt Document</a></div>
                </div>
              </form>
  @endsection