@extends('default.layout')

@section('title',"Change Material Discount")
@section('content')

              <form action="">
                <div class="row">
                  <div class="input-field col s12">
                    <input value="value" id="conditionname" type="text" class="validate">
                    <label for="conditionname">Inquiry No.</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="discountprice" type="text" class="validate">
                    <label for="discountprice">Discount Price</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="minprice" type="text" class="validate">
                    <label for="minprice">Min quantity</label>
                  </div>
                </div>
                <!-- Submit Button -->
                <div class="row">
                  <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Update</a></div>
                </div>
              </form>
@endsection