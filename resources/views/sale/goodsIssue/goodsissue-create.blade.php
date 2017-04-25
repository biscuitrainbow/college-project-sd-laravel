@extends('default.layout')

@section('breadcrumb')
  <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
  <a href="#!" class="breadcrumb">Presale Process</a>
  <a href="{{route('displayMaterials')}}" class=" breadcrumb">Quotation</a>
  <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
    <li><a href="{{route('logout')}}">Logout</a></li>
  </ul>
@endsection

@section('content')
  <h4 style="margin-bottom: 50px">Goods Issue</h4>
  <form action="">
    <div class="row">
      <div class="input-field col s12">
        <i class="material-icons prefix">search</i>
        <input id="icon_prefix" type="text" class="validate">
        <label for="icon_prefix">Search by product name or id</label>
      </div>
    </div>
  </form>
  <div class="card" style="margin-bottom:75px">
    <div class="card-content">
      <div class="row">
        <div class="col s12">

          <!-- Table -->
          <table class="highlight">
            <thead>
            <tr>
              <th>Sale Order ID</th>
              <th>Customer</th>
              <th>Create Date</th>
              <th>Request Delivery Date</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($sale_orders as $sale_order)
              <tr>
                <td>{{$sale_order->id}}</td>
                <td>{{$sale_order->company_name}}</td>
                <td>{{$sale_order->created_at}}</td>
                <td>{{$sale_order->request_date}}</td>
                <td><a href="/goodsissue/display/{{$sale_order->id}}" class="waves-effect waves-light btn">Select</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>
@endsection()