@extends('default.layout')
@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Customer</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">{{$customer->company_name}}</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <h4 class="main-title">{{$customer->company_name}}</h4>
    <h5 class="sub-title">Company Overview</h5>
    <div class="row">
        <div class="input-field col s4">
            <input disabled value="{{$customer['company_code']}}" name="company_code" type="text" class="validate">
            <label for="company_code">Company Code</label>
        </div>
        <div class="input-field col s8">
            <input disabled value="{{$customer['company_name']}}" name="company_name" type="text" class="validate">
            <label for="name">Company Name</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <input disabled value="{{$customer['address']}}" name="address" type="text" class="validate">
            <label for="address">Address</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s4">
            <input disabled value="{{$customer['postal_code']}}" name="postal" type="text" class="validate">
            <label for="postal">Postal Code</label>
        </div>
        <div class="input-field col s4">
            <input disabled value="{{$customer['country']}}" name="country" type="text" class="validate">
            <label for="country">Country</label>
        </div>
        <div class="input-field col s4">
            <input disabled value="{{$customer['region']}}" name="region" type="text" class="validate">
            <label for="region">Region</label>
        </div>
    </div>
    <h5 class="sub-title">Contact Person</h5>
    <div class="row">
        <div class="input-field col s4">
            <input disabled value="{{$customer['title']}}" name="title" type="text" class="validate">
            <label for="title">Title</label>
        </div>
        <div class="input-field col s8">
            <input disabled id="name" name="name" value="{{$customer['name']}}" type="text" class="validate">
            <label for="name">Name</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s6">
            <input disabled id="position" value="{{$customer['position']}}" name="position" type="text" class="validate">
            <label for="position">Position</label>
        </div>
        <div class="input-field col s6">
            <input disabled id="department" value="{{$customer['department']}}" name="department" type="text" class="validate">
            <label for="department">Department</label>
        </div>
    </div>
@endsection