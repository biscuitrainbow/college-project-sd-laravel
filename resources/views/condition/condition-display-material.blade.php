@extends('default.layout')

@section('title',"Display material discount")
@section('content')

              <form action="">
                <div class="row">
                  <div class="input-field col s12">
                    <input value="{{$condition['conditionname']}}" id="conditionname" type="text" class="validate">
                    <label for="conditionname">Condition Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="{{$condition['discountprice']}}" id="discountprice" type="text" class="validate">
                    <label for="discountprice">Discount (%)</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="{{$condition['minquantity']}}" id="minqty" type="text" class="validate">
                    <label for="minprice">Min Quantity (ex. over 100 EA)</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input value="{{$condition['material_id']}}" id="conditionmaterial" type="text" class="validate">
                    <label for="conditionname">Material ID</label>
                  </div>
                </div>
              </form>


    @endsection