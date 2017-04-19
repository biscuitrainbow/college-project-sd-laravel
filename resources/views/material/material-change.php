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
          <a href="#!" class="breadcrumb">Material</a>
          <a href="#!" class="breadcrumb">Change Material</a>
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
        <div class="col s9 m9 l9 xl9" style="margin-top: 15px;">
          <div class="card">
            <div class="card-content">
              <h4 style="margin-bottom: 50px">Change Material</h4>
              <form action="">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix">Search by product name or id</label>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="card" style="margin-bottom:75px">
            <div class="card-content">
              <div class="row">
                <div class="col s12">
                  <h4 style="margin-bottom: 50px">All Product</h4>

                  <!-- Table -->
                  <table class="highlight">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td>123456789</td>
                        <td>1</td>
                        <td><a href="material-change-result.php" class="waves-effect waves-light btn">Details</a></td>
                      </tr>
                      <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td>123456789</td>
                        <td>1</td>
                        <td><a href="material-change-result.php" class="waves-effect waves-light btn">Details</a></td>
                      </tr>
                      <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td>123456789</td>
                        <td>1</td>
                        <td><a href="material-change-result.php" class="waves-effect waves-light btn">Details</a></td>
                      </tr>
                      <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td>123456789</td>
                        <td>1</td>
                        <td><a href="material-change-result.php" class="waves-effect waves-light btn">Details</a></td>
                      </tr>
                      <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td>123456789</td>
                        <td>1</td>
                        <td><a href="material-change-result.php" class="waves-effect waves-light btn">Details</a></td>
                      </tr>
                      <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td>123456789</td>
                        <td>1</td>
                        <td><a href="material-change-result.php" class="waves-effect waves-light btn">Details</a></td>
                      </tr>
                      <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td>123456789</td>
                        <td>1</td>
                        <td><a href="material-change-result.php" class="waves-effect waves-light btn">Details</a></td>
                      </tr>
                      <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td>123456789</td>
                        <td>1</td>
                        <td><a href="material-change-result.php" class="waves-effect waves-light btn">Details</a></td>
                      </tr>
                      <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td>123456789</td>
                        <td>1</td>
                        <td><a href="material-change-result.php" class="waves-effect waves-light btn">Details</a></td>
                      </tr>
                      <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td>123456789</td>
                        <td>1</td>
                        <td><a href="material-change-result.php" class="waves-effect waves-light btn">Details</a></td>
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