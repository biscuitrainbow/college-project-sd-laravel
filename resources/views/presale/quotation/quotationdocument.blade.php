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
                                <img src="img/logo-teal.png" alt="" style="width: 80%;">
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
                                        <p class="bold font18">Customer Name</p>
                                        <br>
                                        <p class="bold">Bill Address</p>
                                        <p>239 Suthep Rd, A.Muang, Chiang Mai 50200 Thailand</p>
                                        <br>
                                        <p><i class="material-icons tiny">phone</i> 088-8888888</p>
                                        <p><i class="material-icons tiny">email</i> customer@email.com</p>
                                        <p><i class="material-icons tiny">language</i> customer.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s8" style="min-height: 900px">
                                <div class="row">
                                    <div class="col s12">
                                        <h5 class="bold">Quotation</h5>
                                        <hr>
                                        <p class="font18">Inquiry Date 2 March, 2017</p>
                                        <p class="font18">To whom it may concern,</p>
                                    </div>
                                </div>
                                <div class="row margintop50">
                                    <div class="col s12">
                                        <h5 class="bold">Goods Requests</h5>
                                        <hr>
                                        <div class="row">
                                            <div class="col s2"><strong>Product ID</strong></div>
                                            <div class="col s6"><strong>Product Description</strong></div>
                                            <div class="col s2"><strong>Quantity</strong></div>
                                            <div class="col s2"><strong>Price</strong></div>
                                            <hr>
                                        </div>
                                        <div class="row">
                                            <div class="col s2">WA00010</div>
                                            <div class="col s6">High Heels</div>
                                            <div class="col s2">100</div>
                                            <div class="col s2">1,000.00</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s2">WA00010</div>
                                            <div class="col s6">High Heels</div>
                                            <div class="col s2">100</div>
                                            <div class="col s2">1,000.00</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s2">WA00010</div>
                                            <div class="col s6">High Heels</div>
                                            <div class="col s2">100</div>
                                            <div class="col s2">1,000.00</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s2">WA00010</div>
                                            <div class="col s6">High Heels</div>
                                            <div class="col s2">100</div>
                                            <div class="col s2">1,000.00</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s2">WA00010</div>
                                            <div class="col s6">High Heels</div>
                                            <div class="col s2">100</div>
                                            <div class="col s2">1,000.00</div>
                                        </div>
                                        <hr>
                                        <hr>
                                        <br>
                                        <div class="row">
                                            <div class="col s10 right-bold">Subtotal</div>
                                            <div class="col s2">5,000.00</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s10 right-bold">Discount (10%)</div>
                                            <div class="col s2">500.00</div>
                                        </div>
                                        <div class="row">
                                            <div class="col s10 right-bold">Order Total</div>
                                            <div class="col s2">4,500.00</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row margintop100 marginbottom100">
                                    <div class="col">
                                        <p class="font18"><strong>Note : </strong>Lorem Ipsum is simply dummy text of
                                            the
                                            printing and typesetting industry. Lorem Ipsum has been the industry's
                                            standard
                                            dummy text ever since the 1500s, when an unknown printer</p>
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