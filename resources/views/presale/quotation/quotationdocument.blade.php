@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Presale Process</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Quotation</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <div class="card">
        <div class="card-content">
            <div class="row valign-wrapper margintop50">
                <div class="col s1 offset-s4 valign-wrapper">
                    <img src="{{asset('img/logo-teal.png')}}" alt="" style="width: 80%;">
                </div>
                <div class="col s7">
                    <h5 class="bold">WHAT TO WEAR CO., LTD.</h5>
                    <p class="bold">239 Suthep Rd, A.Muang, Chiang Mai 50200 Thailand</p>
                    <p class="bold">
                        <i class="material-icons tiny">phone</i> 099-9999999 -
                        <i class="material-icons tiny">email</i> sale@whattowhere.com -
                        <i class="material-icons tiny">language</i> whattowear.com</p>
                </div>
            </div>
            <div class="row margintop50">
                <div class="col s4">
                    <div class="row">
                        <div class="col s12">
                            <h5 class="bold">Customer Address</h5>
                            <hr>
                            <p class="bold font18">{{ $customer[0]->company_name  }}</p>
                            <br>
                            <p class="bold">Bill Address</p>
                            <p>{{ $customer[0]->address  }} {{ $customer[0]->region  }} {{ $customer[0]->postal_code  }} {{ $customer[0]->country }}</p>
                            <br>
                            <p><i class="material-icons tiny">phone</i> {{ $customer[0]->tel }}</p>
                            <p><i class="material-icons tiny">email</i> {{ $customer[0]->email}}</p>
                            <p><i class="material-icons tiny">language</i> {{ $customer[0]->website  }}</p>
                        </div>
                    </div>
                </div>
                <div class="col s8" style="min-height: 900px">
                    <div class="row">
                        <div class="col s12">
                            <h5 class="bold">Quotation</h5>
                            <hr>
                            <p class="font18">Quotation Date {{$quotation[0]->created_at}}</p>
                            <p class="font18">To whom it may concern,</p>
                        </div>
                    </div>
                    <div class="row margintop50">
                        <div class="col s12">
                            <h5 class="bold">Goods Requests</h5>
                            <hr>
                            <table class="striped">
                                <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Description</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $quotation as $quo)
                                    <tr>
                                        <td>{{ $quo->material_id  }}</td>
                                        <td>{{ $quo->name  }}</td>
                                        <td>{{ $quo->quantity }}</td>
                                        <td>{{ $quo->price }}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row margintop50">
                                <div class="col s10 right-bold">Subtotal</div>
                                <div class="col s2">{{ $total }}</div>
                            </div>
                            <div class="row">
                                <div class="col s10 right-bold">Materail Discount (Baht)</div>
                                <div class="col s2">{{ $discount }}</div>
                            </div>
                            <div class="row">
                                <div class="col s10 right-bold">Discount (Baht)</div>
                                <div class="col s2">{{ $generaldiscount}}</div>
                            </div>
                            <div class="row">
                                <div class="col s10 right-bold">Order Total</div>
                                <div class="col s2"> {{ $netprice }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <hr style="margin-bottom: 25px">
                <div class="col s4 center">
                    <i class="material-icons small">phone</i>
                    <br>
                    <strong> 099-9999999</strong>
                </div>
                <div class="col s4 center">
                    <i class="material-icons small">email</i>
                    <br>
                    <strong> sale@whattowear.com</strong>
                </div>
                <div class="col s4 center">
                    <i class="material-icons small">language</i>
                    <br>
                    <strong> whattowear.com</strong>
                </div>
            </div>
        </div>






@endsection