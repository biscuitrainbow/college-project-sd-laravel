@extends('default.layout')

@section('title',"Delete Condition")
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
                  <h4 style="margin-bottom: 50px">All Condition</h4>

                  <!-- Table -->
                  <table class="highlight">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Postal Code/City</th>
                        <th>Country</th>
                        <th>Region</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a class="waves-effect deep-orange btn" href="#modal1">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a class="waves-effect deep-orange btn" href="#modal1">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a class="waves-effect deep-orange btn" href="#modal1">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a class="waves-effect deep-orange btn" href="#modal1">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a class="waves-effect deep-orange btn" href="#modal1">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a class="waves-effect deep-orange btn" href="#modal1">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a class="waves-effect deep-orange btn" href="#modal1">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a class="waves-effect deep-orange btn" href="#modal1">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a class="waves-effect deep-orange btn" href="#modal1">Delete</a></td>
                      </tr>
                      <tr>
                        <td>College of arts media and technology,inc</td>
                        <td>Chiangmai</td>
                        <td>Thailand</td>
                        <td>CNX00</td>
                        <td><a class="waves-effect deep-orange btn" href="#modal1">Delete</a></td>
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
            </div>
          </div>


        

        <!-- Modal Structure -->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
            </div>
          <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
          </div>
        </div>


      @endsection