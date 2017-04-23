@extends('default.layout')
@section('breadcrumb')
  <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
  <a href="#!" class="breadcrumb">Goods Issue</a>
  <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
  <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="{{route('logout')}}">Logout</a></li>
  </ul>
@endsection
@section('content')
              <form action="">
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="saleorderno" type="text" class="validate">
                    <label for="saleorderno">Sale Order Number</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" type="date" class="datepicker">
                    <label for="goodsissuedate">Goods Issue date</label>
                  </div>
                </div>
              </form>
  @endsection