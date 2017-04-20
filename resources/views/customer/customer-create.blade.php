@extends('default.layout')

@section('title',"Create Customer")
@section('content')
    <form action="/customer/create" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="row">
            <div class="input-field col s4">
                <input name="title" type="text" class="validate">
                <label for="product_id">Title</label>
            </div>
            <div class="input-field col s8">
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

        <!-- Submit Button -->
        <div class="row">
            <div class="col s12" style="text-align: right;">
                <button type="submit" class="waves-effect waves-light btn">Create Customer</button>
            </div>
        </div>
    </form>
@endsection



