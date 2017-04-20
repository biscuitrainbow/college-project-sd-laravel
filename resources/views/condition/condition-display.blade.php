@extends('default.layout')
@section('title',"Display Condition")
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
                        <div class="col s12">
                          <h5>Search</h5>
                        </div>
                        <div class="input-field col s12" style="margin-bottom: 50px">
                          <i class="material-icons prefix">search</i>
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix">Search by product name or id</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                          <h5 style="margin-bottom: 50px">All General Condition</h5>

                          <!-- Table -->
                          <table class="highlight">
                            <thead>
                              <tr>
                                <th style=" width: 40%">Name</th>
                                <th style=" width: 20%">Discount (%)</th>
                                <th style=" width: 20%">Min Price</th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($general as $generals)
                              <tr>
                                <td>{{$generals['conditionname']}}</td>
                                <td>{{$generals['discountprice']}}</td>
                                <td>{{$generals['minprice']}}</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
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
                          <h5>Search</h5>
                        </div>
                        <div class="input-field col s12" style="margin-bottom: 50px">
                          <i class="material-icons prefix">search</i>
                          <input id="icon_prefix" type="text" class="validate">
                          <label for="icon_prefix">Search by product name or id</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                          <h5 style="margin-bottom: 50px">All Material Discount</h5>

                          <!-- Table -->
                          <table class="highlight">
                            <thead>
                            <tr>
                              <th style=" width: 40%">Name</th>
                              <th style=" width: 20%">Discount (%)</th>
                              <th style=" width: 20%">Min Quantity</th>
                              <th style=" width: 20%">Material</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($material as $materials)
                              <tr>
                                <td>{{$materials['conditionname']}}</td>
                                <td>{{$materials['discountprice']}}</td>
                                <td>{{$materials['minquantity']}}</td>
                                <td>{{$materials['material_id']}}</td>
                                <td></td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td>
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
                    </div>
                  </div>
                </form>
              </div>
            </div>

@endsection