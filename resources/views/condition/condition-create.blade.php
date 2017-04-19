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
                <form action="">
                  <div class="card">
                    <div class="card-content">
                      <div class="row">
                        <div class="input-field col s12">
                          <input id="conditionname" type="text" class="validate">
                          <label for="conditionname">Condition Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="discountprice" type="text" class="validate">
                          <label for="discountprice">Discount (%)</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="minprice" type="text" class="validate">
                          <label for="minprice">Min Price (ex. over 200,000 THB)</label>
                        </div>
                      </div>
                      <!-- Submit Button -->
                      <div class="row">
                        <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Create Condition</a></div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <div id="materialdiscount">
                <form action="">
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
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>572110164</td>
                            <td>Thichanont Payachom</td>
                            <td>123456789</td>
                            <td><input name="select" type="radio" class="with-gap" id="check1" /><label for="check1"></label></td>
                          </tr>
                          <tr>
                            <td>572110164</td>
                            <td>Thichanont Payachom</td>
                            <td>123456789</td>
                            <td><input name="select" type="radio" class="with-gap" id="check2" /><label for="check2"></label></td>
                          </tr>
                          <tr>
                            <td>572110164</td>
                            <td>Thichanont Payachom</td>
                            <td>123456789</td>
                            <td><input name="select" type="radio" class="with-gap" id="check3" /><label for="check3"></label></td>
                          </tr>
                          <tr>
                            <td>572110164</td>
                            <td>Thichanont Payachom</td>
                            <td>123456789</td>
                            <td><input name="select" type="radio" class="with-gap" id="check4" /><label for="check4"></label></td>
                          </tr>
                          <tr>
                            <td>572110164</td>
                            <td>Thichanont Payachom</td>
                            <td>123456789</td>
                            <td><input name="select" type="radio" class="with-gap" id="check5" /><label for="check5"></label></td>
                          </tr>
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
                      <div class="row" style="margin-top: 50px">
                        <div class="input-field col s6">
                          <input id="discountprice" type="text" class="validate">
                          <label for="discountprice">Discount Price</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="minquantity" type="text" class="validate">
                          <label for="minquantity">Min Quantity</label>
                        </div>
                      </div>
                      <!-- Submit Button -->
                      <div class="row">
                        <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Create Condition</a></div>
                      </div>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
@endsection