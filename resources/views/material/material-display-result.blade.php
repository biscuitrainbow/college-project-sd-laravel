@extends('default.layout')
@section('title',"Display Material")
@section('content')
              <form action="">
                <div class="row">
                  <div class="input-field col s4">
                    <input value="value" id="product_id" type="text" class="validate">
                    <label for="product_id">Product ID (ex. WA00010)</label>
                  </div>
                  <div class="input-field col s8">
                    <input value="value" id="product_name" type="text" class="validate">
                    <label for="product_name">Product Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input value="value" id="product_price" type="text" class="validate">
                    <label for="product_price">Product Price</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="value" id="product_quantity" type="text" class="validate">
                    <label for="product_quantity">Product Quantity</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="value" id="product_type" type="text" class="validate">
                    <label for="product_type">Product Type</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="condition" type="text" class="validate">
                    <label for="condition">Condition</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="product_categories" type="text" class="validate">
                    <label for="product_categories">Product Categories (optional)</label>
                  </div>
                </div>
              </form>
  @endsection