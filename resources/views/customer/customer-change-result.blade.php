@extends('default.layout')

@section('title',"Change result")
@section('content')


              <form action="/customer/change" method="post">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="id" type="hidden" value="{{ $customer['id'] }}"/>
                <div class="row">
                  <div class="input-field col s4">
                    <input value="{{$customer['title']}}" name="title" type="text" class="validate">
                    <label for="product_id">Title</label>
                  </div>
                  <div class="input-field col s8">
                    <input value="{{$customer['name']}}" name="name" type="text" class="validate">
                    <label for="name">Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input value="{{$customer['street']}}" name="street" type="text" class="validate">
                    <label for="street">Street/House Number</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input value="{{$customer['postal']}}" name="postal" type="text" class="validate">
                    <label for="postal">Postal Code/City</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="{{$customer['country']}}" name="country" type="text" class="validate">
                    <label for="country">Country</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="{{$customer['region']}}" name="region" type="text" class="validate">
                    <label for="region">Region</label>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                  <div class="col s12" style="text-align: right;"><button type="submit" class="waves-effect waves-light btn">update</button></div>
                </div>
              </form>

    @endsection