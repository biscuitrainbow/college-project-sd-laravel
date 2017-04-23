@extends('default.layout')

@section('title',"Create Customer")
@section('content')
    <h4 class="main-title">Create Customer</h4>
    <form action="/customer/create" method="post">
        <h5 class="sub-title">Company Data</h5>
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="row">
            <div class="input-field col s12">
                <input name="name" type="text" class="validate">
                <label for="name">Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input name="street" type="text" class="validate">
                <label for="street">Street/House Number</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input name="postal" type="text" class="validate">
                <label for="postal">Postal Code/City</label>
            </div>
            <div class="input-field col s4">
                <input name="country" type="text" class="validate">
                <label for="country">Country</label>
            </div>
            <div class="input-field col s4">
                <input name="region" type="text" class="validate">
                <label for="region">Region</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input name="tel" type="text" class="validate">
                <label for="tel">Tel.</label>
            </div>
            <div class="input-field col s4">
                <input name="website" type="text" class="validate">
                <label for="website">Website</label>
            </div>
            <div class="input-field col s4">
                <input name="email" type="text" class="validate">
                <label for="email">Email</label>
            </div>
        </div>

        <h5 class="sub-title">Contact Person</h5>
        <div class="row">
            <div class="input-field col s4">
                <select name="title">
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                </select>
                <label for="product_id">Title</label>
            </div>
            <div class="input-field col s8">
                <input name="name" type="text" class="validate">
                <label for="name">Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input name="position" type="text" class="validate">
                <label for="position">Position</label>
            </div>
            <div class="input-field col s6">
                <input name="department" type="text" class="validate">
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



