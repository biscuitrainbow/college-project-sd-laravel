<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background-color: #fcfbfc">
    
    <!-- Nav Bar -->
    <nav>
      <div class="container">
        <div class="nav-wrapper">
          <a href="dashboard-overall.php" class="breadcrumb">Sale and Distribution</a>
          <a href="#!" class="breadcrumb">Condition</a>
          <a href="#!" class="breadcrumb">Display Condition</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="collapsible.html">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <!-- Content -->
    <div class="container">
      <div class="row">



        <!-- Side Bar -->
        <?php include('sidebar.php'); ?>

        <!-- Content -->
        <div class="col s9 m9 l9 xl9" style="margin-top: 15px; margin-bottom: 75px;">
          <div class="card">
            <div class="card-content">
              <h4>Display Condition</h4>
            </div>
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
                                <th style=" width: 20%"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Discount for order more than $100,000</td>
                                <td>5</td>
                                <td>100,000</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>Discount for order more than $100,000</td>
                                <td>5</td>
                                <td>100,000</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>Discount for order more than $100,000</td>
                                <td>5</td>
                                <td>100,000</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>Discount for order more than $100,000</td>
                                <td>5</td>
                                <td>100,000</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>Discount for order more than $100,000</td>
                                <td>5</td>
                                <td>100,000</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>Discount for order more than $100,000</td>
                                <td>5</td>
                                <td>100,000</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>Discount for order more than $100,000</td>
                                <td>5</td>
                                <td>100,000</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>Discount for order more than $100,000</td>
                                <td>5</td>
                                <td>100,000</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>Discount for order more than $100,000</td>
                                <td>5</td>
                                <td>100,000</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>Discount for order more than $100,000</td>
                                <td>5</td>
                                <td>100,000</td>
                                <td class="right"><a href="condition-display-general.php" class="waves-effect waves-light btn">Details</a></td>
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
                                <th style=" width: 20%">Discount Price</th>
                                <th style=" width: 20%">Min Quantity</th>
                                <th style=" width: 20%"></th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>WA00010</td>
                                <td>50,0000</td>
                                <td>2,000</td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>WA00010</td>
                                <td>50,0000</td>
                                <td>2,000</td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>WA00010</td>
                                <td>50,0000</td>
                                <td>2,000</td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>WA00010</td>
                                <td>50,0000</td>
                                <td>2,000</td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>WA00010</td>
                                <td>50,0000</td>
                                <td>2,000</td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>WA00010</td>
                                <td>50,0000</td>
                                <td>2,000</td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>WA00010</td>
                                <td>50,0000</td>
                                <td>2,000</td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>WA00010</td>
                                <td>50,0000</td>
                                <td>2,000</td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>WA00010</td>
                                <td>50,0000</td>
                                <td>2,000</td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td>
                              </tr>
                              <tr>
                                <td>WA00010</td>
                                <td>50,0000</td>
                                <td>2,000</td>
                                <td class="right"><a href="condition-display-material.php" class="waves-effect waves-light btn">Details</a></td> 
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
                </form>
              </div>
            </div>
          </div>





      </div>
    </div>


      <script>
        $(document).ready(function() {
        $('select').material_select();
        });
      </script>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

    <!-- Footer -->
    <?php include('footer.php'); ?>

  </html>