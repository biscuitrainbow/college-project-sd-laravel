@extends('default.layout')
@section('title',"Change Material")
@section('content')



              <form action="/material/change" method="POST">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <input name="id" type="hidden" value="{{$datas['id']}}"/>
                <div class="row">
                  <div class="input-field col s4">
                    <input  value="{{$datas['product_id']}}" placeholder="{{$datas['product_id']}}" name="product_id" type="text" class="validate">
                    <label class="active"  for="product_id">Product ID (ex. WA00010)</label>
                  </div>
                  <div class="input-field col s8">
                    <input value="{{$datas['product_name']}}" name="product_name" type="text" class="validate">
                    <label class="active" for="product_name">Product Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input value="{{$datas['product_price']}}" name="product_price" type="text" class="validate">
                    <label class="active" for="product_price">Product Price</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="{{$datas['product_qty']}}" name="product_qty" type="text" class="validate">
                    <label class="active" for="product_quantity">Product Quantity</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="{{$datas['product_type']}}" name="product_type" type="text" class="validate">
                    <label class="active" for="product_type">Product Type</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input value="{{$datas['product_categories']}}" name="product_categories" type="text" class="validate">
                    <label class="active" for="product_categories">Product Categories (optional)</label>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                  <div class="col s12" style="text-align: right;">
                    <button class="waves-effect waves-light btn">Update</button>
                  </div>
                </div>
              </form>

         @endsection