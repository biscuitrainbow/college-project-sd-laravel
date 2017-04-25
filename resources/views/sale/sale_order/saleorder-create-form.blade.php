@extends('default.layout')
@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Presale Process</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Inquiry</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection
@section('content')
    <h4 class="main-title">Create Sale Order</h4>
    <form action="{{route('storeSaleOrder')}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input type="hidden" name="quotation_id" value="{{$quotation[0]->quotation_id}}">
        <input type="hidden" name="customer_id" value="{{$quotation[0]->id}}">
        <input type="hidden" name="request_date" value="{{$quotation[0]->request_date}}">
        <input type="hidden" name="description" value="{{$quotation[0]->description}}">


        <div class="row">
            <div class="col s12 ">
                <span class="form-title">General Infomation</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="compy_name" type="text" value="{{$quotation[0]->company_name}}">
                <label>Customer</label>
            </div>
            <div class="input-field col s4">
                <input type="text" disabled value="{{\Carbon\Carbon::today()->toDateString()}}">
                <label>Create Date</label>
            </div>
            <div class="input-field col s4">
                <input id="request_date" type="text" value="{{\Carbon\Carbon::parse($quotation[0]->request_date)->toDateString()}}"  disabled>
                <label for="requestdelivery">Request delivery date</label>
            </div>
        </div>


        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">Materials</span>
            </div>
        </div>
        <div class="col s12">
            <!-- Table -->
            <table class="highlight">
                <thead>
                <tr>
                    <th>Product id</th>
                    <th>Product name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Product type</th>
                    <th>Product Categories</th>
                    <th>Order Quantity</th>
                </tr>
                </thead>
                <tbody>
                @foreach($materials as $material)
                    <tr>
                        <input type="hidden" name="material_id[]" value="{{$material->id}}">
                        <input type="hidden" name="quantity[]" value="{{$material->qty}}">
                        <td>{{$material->code}}</td>
                        <td>{{$material->name}}</td>
                        <td>{{$material->price}}</td>
                        <td>{{$material->quantity}}</td>
                        <td>{{$material->type}}</td>
                        <td>{{$material->category}}</td>
                        <td>{{$material->qty}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">Material Condition</span>
            </div>
        </div>
        <div class="col s12">
            <!-- Table -->
            <table class="highlight">
                <thead>
                <tr>
                    <th>Condition name</th>
                    <th>Discount (%)</th>
                    <th>Min Quantity</th>
                </tr>
                </thead>
                <tbody>
                @foreach($conditions as $condition)
                    <tr>
                        <td>{{$condition->name}}</td>
                        <td>{{$condition->discount}}</td>
                        <td>{{$condition->min}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



        <!-- Submit Button -->
        <div class="row">
            <div class="col s12 margin-top-50" style="text-align: right;">
                <button type="submit" class="waves-effect waves-light btn">Create Quotation Document</button>
            </div>
        </div>
    </form>
@endsection()

