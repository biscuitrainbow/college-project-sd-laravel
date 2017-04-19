<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style>
        .pass-badge{
          padding: 5px 15px;
          background-color: #8bc34a;
          color: #ffffff;
          border-radius: 5px;
        }

        .fail-badge{
          padding: 5px 15px;
          background-color: #ff5722;
          color: #ffffff;
          border-radius: 5px;
        }
      </style>
    </head>

    <body style="background-color: #fcfbfc">
    
    <!-- Nav Bar -->
    <nav>
      <div class="container">
        <div class="nav-wrapper">
          <a href="dashboard-overall.php" class="breadcrumb">Sale and Distribution</a>
          <a href="#!" class="breadcrumb">Check Availability</a>
          <a href="#!" class="breadcrumb">Result</a>
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
              <h4 style="margin-bottom: 50px">Check Availability</h4>
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