@extends('default.layout')
@section('document')
    <main>
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
                                <h5 class="bold">WHAT TO WARE CO., LTD.</h5>
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
                                <p class="bold">Bill Address</p>
                                <p>239 Suthep Rd, A.Muang, Chiang Mai 50200 Thailand</p>
                                <br>
                                <p><i class="material-icons tiny">phone</i> 088-8888888</p>
                                <p><i class="material-icons tiny">email</i> customer@email.com</p>
                                <p><i class="material-icons tiny">language</i> customer.com</p>
                            </div>
                            <div class="col s8" style="min-height: 900px">
                                <h5 class="bold">Inquiry</h5>
                                <hr>
                                <p class="font18">Inquiry Date 2 March, 2017</p>
                                <p class="font18">To whom it may concern,</p>

                                <p class="font18 margintop50">(Description Text) Lorem Ipsum is simply dummy text of the
                                    printing and typesetting industry. Lorem Ipsum has been the industry's standard
                                    dummy text ever since the 1500s, when an unknown printer</p>

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
                                    <tr>
                                        <td>100</td>
                                        <td>Metallic Hogh Heel Shoes</td>
                                        <td>WA00010</td>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>Metallic Hogh Heel Shoes</td>
                                        <td>WA00010</td>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>Metallic Hogh Heel Shoes</td>
                                        <td>WA00010</td>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>Metallic Hogh Heel Shoes</td>
                                        <td>WA00010</td>
                                    </tr>
                                    <tr>
                                        <td>100</td>
                                        <td>Metallic Hogh Heel Shoes</td>
                                        <td>WA00010</td>
                                    </tr>
                                    <tr>
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