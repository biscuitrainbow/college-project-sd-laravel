@extends('default.layout')
@section('title',"Change Inquiry")

@section('content')
    <form action="">
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">search</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Search by product name or id</label>
            </div>
        </div>
    </form>
@endsection()