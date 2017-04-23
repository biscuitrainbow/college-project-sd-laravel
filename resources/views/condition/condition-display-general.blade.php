@extends('default.layout')

@section('title',"Display general discount")
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
                <input value="{{$condition['minprice']}}" id="minprice" type="text" class="validate">
                <label for="minprice">Min Price (ex. over 200,000 THB)</label>
            </div>
        </div>
    </form>


@endsection