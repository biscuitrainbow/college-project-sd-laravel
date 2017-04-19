@extends('default.layout')

@section('title',"Customer Result")
@section('content')

              <form action="">
                <div class="row">
                  <div class="input-field col s4">
                    <input value="value" id="product_id" type="text" class="validate">
                    <label for="product_id">Title</label>
                  </div>
                  <div class="input-field col s8">
                    <input value="value" id="name" type="text" class="validate">
                    <label for="name">Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input value="value" id="street" type="text" class="validate">
                    <label for="street">Street/House Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input value="value" id="postal" type="text" class="validate">
                    <label for="postal">Postal Code/City</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="value" id="country" type="text" class="validate">
                    <label for="country">Country</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="value" id="region" type="text" class="validate">
                    <label for="region">Region</label>
                  </div>
                </div>
              </form>
  @endsection