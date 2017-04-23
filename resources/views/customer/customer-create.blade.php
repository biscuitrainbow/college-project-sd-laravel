@extends('default.layout')
@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Customer</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection
@section('content')
    <h4 class="main-title">Create Customer</h4>
    <form action="{{route('postCustomer')}}" method="post">
        <h5 class="sub-title">Company Data</h5>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="row">
            <div class="input-field col s12">
                <input id="company_name" name="company_name" type="text" class="validate">
                <label for="company_name">Company Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="address" name="address" type="text" class="validate">
                <label for="address">Address</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="postal" name="postal" type="text" class="validate">
                <label for="postal">Postal Code/City</label>
            </div>
            <div class="input-field col s4">
                <input id="country" name="country" type="text" class="validate">
                <label for="country">Country</label>
            </div>
            <div class="input-field col s4">
                <input id="region" name="region" type="text" class="validate">
                <label for="region">Region</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="tel" name="tel" type="text" class="validate">
                <label for="tel">Tel.</label>
            </div>
            <div class="input-field col s4">
                <input id="website" name="website" type="text" class="validate">
                <label for="website">Website</label>
            </div>
            <div class="input-field col s4">
                <input id="email" name="email" type="text" class="validate">
                <label for="email">Email</label>
            </div>
        </div>

        <h5 class="sub-title">Contact Person</h5>
        <div class="row">
            <div class="input-field col s4">
                <select id="title" name="title">
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                </select>
                <label for="product_id">Title</label>
            </div>
            <div class="input-field col s8">
                <input id="name" name="name" type="text" class="validate">
                <label for="name">Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input id="position" name="position" type="text" class="validate">
                <label for="position">Position</label>
            </div>
            <div class="input-field col s6">
                <input id="department" name="department" type="text" class="validate">
                <label for="department">Department</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="row">
            <div class="col s12" style="text-align: right;">
                <button type="submit" class="waves-effect waves-light btn">Create Customer</button>
            </div>
        </div>
    </form>
@endsection



