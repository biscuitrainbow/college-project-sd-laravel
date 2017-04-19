@extends('default.layout')
@section('title',"Check Availability")
@section('content')
              <form action="">
                <div class="row">

                  <table class="highlight">
                    <thead>
                      <tr>
                        <th>Requirement</th>
                        <th>Condition</th>
                        <th>Available</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>wa00010</td>
                        <td>150 each</td>
                        <td>200 each</td>
                        <td><span class="pass-badge">PASS</span></td>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>15/3/2017</td>
                        <td>16/3/2017</td>
                        <td><span class="fail-badge">FAIL</span></td>
                      </tr>
                      <tr>
                        <td>wa00010</td>
                        <td>150 each</td>
                        <td>200 each</td>
                        <td><span class="pass-badge">PASS</span></td>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>15/3/2017</td>
                        <td>16/3/2017</td>
                        <td><span class="fail-badge">FAIL</span></td>
                      </tr>
                      <tr>
                        <td>wa00010</td>
                        <td>150 each</td>
                        <td>200 each</td>
                        <td><span class="pass-badge">PASS</span></td>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>15/3/2017</td>
                        <td>16/3/2017</td>
                        <td><span class="fail-badge">FAIL</span></td>
                      </tr>
                      <tr>
                        <td>wa00010</td>
                        <td>150 each</td>
                        <td>200 each</td>
                        <td><span class="pass-badge">PASS</span></td>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>15/3/2017</td>
                        <td>16/3/2017</td>
                        <td><span class="fail-badge">FAIL</span></td>
                      </tr>
                      <tr>
                        <td>wa00010</td>
                        <td>150 each</td>
                        <td>200 each</td>
                        <td><span class="pass-badge">PASS</span></td>
                      </tr>
                      <tr>
                        <td>Delivery</td>
                        <td>15/3/2017</td>
                        <td>16/3/2017</td>
                        <td><span class="fail-badge">FAIL</span></td>
                      </tr>

                    </tbody>
                  </table>

                  <div class="row">
                    <div class="col s12">
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
              </form>

    @endsection