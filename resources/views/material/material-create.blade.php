@extends('default.layout')
@section('title',"Create Material")
@section('content')
              <form method="POST" action="/material/create">
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="product_id" name="product_id" type="text" class="validate">
                    <label for="product_id">Product ID (ex. WA00010)</label>
                  </div>
                  <div class="input-field col s8">
                    <input id="product_name" name="product_name" type="text" class="validate">
                    <label for="product_name">Product Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="product_price" name="product_price"type="text" class="validate">
                    <label for="product_price">Product Price</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="product_quantity" name="product_qty" type="text" class="validate">
                    <label for="product_quantity">Product Quantity</label>
                  </div>
                  <div class="input-field col s4">
                    <select name="product_type">
                      <option value="Finish Goods">Finish Goods</option>
                      <option value="Raw Material">Raw Material</option>
                      <option value="Service">Service</option>
                    </select>
                    <label for="product_type">Product Type</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input name="product_categories" type="text" class="validate">
                    <label for="product_categories">Product Categories (optional)</label>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                  <div class="col s12" style="text-align: right;">
                    <button type="submit" class="waves-effect waves-light btn">Create Material Document</button>
                </div>
                </div>
              </form>

@endsection