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
    <h4 class="main-title">Create Quotation</h4>
    <form action="{{route('postQuotation')}}" method="post">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <input type="hidden" name="customer_id" value="{{$inquiry->customer_id}}">
        <input type="hidden" name="request_date" value="{{$inquiry->request_date}}">
        <input type="hidden" name="description" value="{{$inquiry->description}}">




        <div class="row">
            <div class="col s12 ">
                <span class="form-title">General Infomation</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input id="compy_name" type="text" value="{{$inquiry->customer->company_name}}">
                <label>Customer</label>
            </div>
            <div class="input-field col s4">
                <input type="text"  value="{{$inquiry->customer->created_at}}">
                <label>Create Date</label>
            </div>
            <div class="input-field col s4">
                <input id="request_date" type="date" class="datepicker">
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
                @foreach($items as $item)
                    <tr>
                        <input type="hidden" name="material_id[]" value="{{$item->material->id}}">
                        <td>{{$item->material->code}}</td>
                        <td>{{$item->material->name}}</td>
                        <td>{{$item->material->price}}</td>
                        <td>{{$item->material->quantity}}</td>
                        <td>{{$item->material->type}}</td>
                        <td>{{$item->material->category}}</td>
                        <td>{{$item->quantity}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>



        <div class="col s12 margin-top-50">
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

