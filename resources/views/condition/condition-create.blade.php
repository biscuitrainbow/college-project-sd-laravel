@extends('default.layout')

@section('title',"Create Condition")
@section('content')

            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a href="#generalcondition">General Condition</a></li>
                <li class="tab"><a href="#materialdiscount">Material Discount</a></li>
              </ul>
            </div>
            <div class="card-content grey lighten-4">

              <div id="generalcondition">
                <form method="POST" action="/condition/create/general">
                  <div class="card">
                    <div class="card-content">
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
                          <button type="submit" class="waves-effect waves-light btn">Create Condition</button></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>


              <div id="materialdiscount">
                <form method="POST" action="/condition/create/material">
                  <div class="card">
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <h5 style="margin-bottom: 50px">Select Inquiry</h5>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">search</i>
                              <input id="icon_prefix" type="text" class="validate">
                              <label for="icon_prefix">Search by product name or id</label>
                            </div>
                          </div>
                        </div>
                      </div>

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
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $datas)
                          <tr>
                            <td>{{$datas['product_id']}}</td>
                            <td>{{$datas['product_name']}}</td>
                            <td>{{$datas['product_price']}}</td>
                            <td>{{$datas['product_qty']}}</td>
                            <td>{{$datas['product_type']}}</td>
                            <td>{{$datas['product_categories']}}</td>
                            <td><input name="id" value="{{$datas['id']}}" type="radio" class="with-gap" id="check2" />
                              <label for="check2">
                              </label></td>
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

                  <div class="card">
                    <div class="card-content">
                      <div class="row">
                        <div class="input-field col s12" style="margin-top: 50px">
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
                          <input name="minquantity" type="text" class="validate">
                          <label for="minquantity">Min Quantity</label>
                        </div>
                      </div>
                      <!-- Submit Button -->
                      <div class="row">
                        <div class="col s12" style="text-align: right;">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <button type="submit" class="waves-effect waves-light btn">Create Condition</button></div>
                      </div>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
@endsection