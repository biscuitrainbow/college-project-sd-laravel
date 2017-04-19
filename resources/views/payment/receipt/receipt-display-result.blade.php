@extends('default.layout')
@section('title',"Display-Result Receipt")

@section('content')
    <form action="">
        <div class="row">
            <div class="input-field col s6">
                <input value="value" id="saleorderno" type="text" class="validate">
                <label for="saleorderno">Sale Order Number</label>
            </div>
            <div class="input-field col s6">
                <input value="value" id="saleorderno" type="text" class="validate" placeholder="ex. cash, credit card, check note">
                <label for="saleorderno">Term</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input value="value" type="date" class="datepicker">
                <label for="goodsissuedate">Payment Date</label>
            </div>
        </div>
    </form>
@endsection()