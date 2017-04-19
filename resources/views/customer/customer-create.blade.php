@extends('default.layout')

@section('title',"Create Customer")
@section('content')
    <form action="">
        <div class="row">
            <div class="input-field col s4">
                <input id="product_id" type="text" class="validate">
                <label for="product_id">Title</label>
            </div>
            <div class="input-field col s8">
                <input id="name" type="text" class="validate">
                <label for="name">Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="street" type="text" class="validate">
                <label for="street">Street/House Number</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="postal" type="text" class="validate">
                <label for="postal">Postal Code/City</label>
            </div>
            <div class="input-field col s4">
                <input id="country" type="text" class="validate">
                <label for="country">Country</label>
            </div>
            <div class="input-field col s4">
                <input id="region" type="text" class="validate">
                <label for="region">Region</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="row">
            <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Create Customer</a>
            </div>
        </div>
    </form>
@endsection



