@extends('default.layout')
@section('title',"Create Inquiry")

@section('content')
    <form action="/inquiry/create" method="POST">
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">General Infomation</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s4">
                <input name="create_date" type="date" class="datepicker">
                <label for="date">Create Date</label>
            </div>
            <div class="input-field col s8">
                <input name="customer_name" id="customer" type="text" class="validate">
                <label for="customer">Customer</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s8">
                <input name="address" id="soldparty" type="text" class="validate">
                <label for="soldparty">Sold to party/Ship to party</label>
            </div>
            <div class="input-field col s4">
                <input name="request_date" type="date" class="datepicker">
                <label for="requestdelivery">request delivery date</label>
            </div>
        </div>

        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">Material Detail</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">

                <!-- Table -->
                <table class="highlight">
                    <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Select</th>
                        <th>Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{$i = 0}}
                    @foreach($material as $materials)
                        {{$i++}}
                        <tr>
                            <td>{{$materials['product_id']}}</td>
                            <td>{{$materials['product_name']}}</td>
                            <td>{{$materials['product_price']}}</td>
                            <td>{{$materials['product_qty']}}</td>
                            <td><input type="checkbox" id="{{$i}}" name="{{'material'.$materials['id']}}"
                                       value="{{$materials['id']}}"/>
                                <label for="{{$i}}"></label></td>
                            <td><input type="text" name="{{'quantity'.$materials['id']}}" style="width: 50px" class="center"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <!-- Pagination -->
                <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                </ul>

            </div>
        </div>



        <!-- Submit Button -->
        <div class="row">
            <div class="col s12" style="text-align: right;">
                <button type="submit" class="waves-effect waves-light btn">Create Inquiry Document</button>
            </div>
        </div>
    </form>
@endsection()