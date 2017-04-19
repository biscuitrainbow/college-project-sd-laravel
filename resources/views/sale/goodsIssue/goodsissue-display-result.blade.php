@extends('default.layout')
@section('title',"Display Goods Issue")
@section('content')
              <form action="">
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="saleorderno" type="text" class="validate">
                    <label for="saleorderno">Sale Order Number</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" type="date" class="datepicker">
                    <label for="goodsissuedate">Goods Issue date</label>
                  </div>
                </div>
              </form>
  @endsection