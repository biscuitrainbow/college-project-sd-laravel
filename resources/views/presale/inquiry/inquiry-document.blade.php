@extends('default.layout')
@section('document')
    <main style="background-color: #f2f2f2">
        <div class="row">
            <!-- Content -->
            <div class="col s10 offset-s1 margintop50" style="margin-bottom: 75px;">
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
                                <h5 class="bold">Customer Address</h5>
                                <hr>
                                <p class="bold font18">{{$customer->customer->company_name}}</p>
                                <br>
                                <p class="bold">Bill Address</p>
                                <p>{{$customer->customer->address.' '.$customer->customer->region.' '.$customer->customer->postal_code.' '.$customer->customer->country}}</p>
                                <br>
                                <p><i class="material-icons tiny">phone</i> {{$customer->customer->tel}}</p>
                                <p><i class="material-icons tiny">email</i> {{$customer->customer->email}}</p>
                                @if($customer->customer->website)
                                <p><i class="material-icons tiny">language</i> {{$customer->customer->website}}</p>
                                    <p><i class="material-icons tiny">language</i>{{$customer->customer->website}}</p>
                                @endif
                            </div>

                            <div class="col s8" style="min-height: 900px">
                                <h5 class="bold">Inquiry</h5>
                                <hr>
                                <p class="font18">Inquiry Date <b>{{$customer->created_at}}</b></p>
                                <p class="font18">Request Date <b>{{$customer->request_date}}</b></p>
                                <p class="font18" style="margin-top: 5%">To whom it may concern,</p>
                                <p class="font18 margintop50">{{$customer->description}}</p>
                                <h5 class="bold margintop50">Goods Requests</h5>
                                <hr>
                                <table class="striped">
                                    <thead>
                                    <tr>
                                        <th>Quantity</th>
                                        <th>Product Description</th>
                                        <th>Product ID</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($items as $item)
                                        <tr>
                                            <td>{{$item->quantity}}</td>
                                            <td>{{$item->material->name}}</td>
                                            <td>{{$item->material->code}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
                </div>
            </div>
        </div>
    </main>
@endsection