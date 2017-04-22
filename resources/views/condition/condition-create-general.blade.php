@extends('default.layout')
@section('title',"Create Material")
@section('content')
    <div class="card" style="margin-bottom:75px">
        <div class="card-content">
            <h4 style="margin-bottom: 50px">Create General Condition</h4>
            <form method="POST" action="/condition/create/general">
                <div class="row">
                    <div class="input-field col s12">
                        <input name="conditionname" type="text" class="validate">
                        <label for="conditionname">Condition Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="discountprice" type="text" class="validate">
                        <label for="discountprice">Discount (%)</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="minprice" type="text" class="validate">
                        <label for="minprice">Min Price (ex. over 200,000 THB)</label>
                    </div>
                </div>
                <!-- Submit Button -->
                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                <div class="row">
                    <div class="col s12" style="text-align: right;">
                        <button type="submit" class="waves-effect waves-light btn">Create Condition
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection