@extends('default.layout')

@section('title',"Delete Customer")
@section('content')

              <form action="">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Search by product name or id</label>
                  </div>
                </div>
              </form>


          <div class="card" style="margin-bottom:75px">
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <h4 style="margin-bottom: 50px">All Customer</h4>

                  <!-- Table -->
                  <table class="highlight">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>Name</th>
                        <th>Street</th>
                        <th>Postal Code/City</th>
                        <th>Country</th>
                        <th>Region</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($material as $datas)
                      <tr>
                        <td>{{$datas['title']}}</td>
                        <td>{{$datas['name']}}</td>
                        <td>{{$datas['street']}}</td>
                        <td>{{$datas['postal']}}</td>
                        <td>{{$datas['country']}}</td>
                        <td>{{$datas['region']}}</td>
                        <form method="POST" action="/customer/delete">
                          <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                          <input type="hidden" name="id" value="{{$datas['id']}}">
                          <td><button class="waves-effect waves-light btn" type="submit">Delete</button>
                        </form>

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

  @endsection
