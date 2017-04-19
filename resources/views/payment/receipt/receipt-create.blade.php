@extends('default.layout')
@section('title',"Create Receipt")

@section('content')
    <form action="">
        <div class="row">
            <div class="input-field col s6">
                <input id="saleorderno" type="text" class="validate">
                <label for="saleorderno">Sale Order Number</label>
            </div>
            <div class="input-field col s6">
                <input id="saleorderno" type="text" class="validate" placeholder="ex. cash, credit card, check note">
                <label for="saleorderno">Term</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s6">
                <input type="date" class="datepicker">
                <label for="goodsissuedate">Payment Date</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="row">
            <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Create Receipt Document</a></div>
        </div>
    </form>
@endsection()