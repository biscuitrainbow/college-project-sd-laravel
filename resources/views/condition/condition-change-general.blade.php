@extends('default.layout')

@section('title',"Change general discount")
@section('content')

              <form action="">
                <div class="row">
                  <div class="input-field col s12">
                    <input value="value" id="conditionname" type="text" class="validate">
                    <label for="conditionname">Condition Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="discountprice" type="text" class="validate">
                    <label for="discountprice">Discount (%)</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="minprice" type="text" class="validate">
                    <label for="minprice">Min Price (ex. over 200,000 THB)</label>
                  </div>
                </div>
              </form>


    @endsection