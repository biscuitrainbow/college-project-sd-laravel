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
            <a href="#" class="brand-logo">
              <span>Sale and Distribution</span>
            </a>
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

          <div class="col s9 m9 l9 xl9" style="margin-top: 15px;">
            <div class="card">
              <div class="card-content">
                <h4 style="margin-bottom: 50px">Overall</h4>
                
                <div class="row">
                  <div class="col s4">
                    <div class="card-panel red lighten-1">
                      <h6 class="white-text">Monthly Inquiry</h6>
                      <h3 class="white-text">30</h3>
                    </div>
                  </div>
                  <div class="col s4">
                    <div class="card-panel blue lighten-1">
                      <h6 class="white-text">Monthly Quotation</h6>
                      <h3 class="white-text">12</h3>
                    </div>
                  </div>
                  <div class="col s4">
                    <div class="card-panel green lighten-1">
                      <h6 class="white-text">Monthly Sales Order</h6>
                      <h3 class="white-text">24</h3>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col s6">
                    <div class="card-panel amber lighten-1">
                      <h6 class="white-text">Monthly Profits</h6>
                      <h3 class="white-text">12,000,000 THB</h3>
                    </div>
                  </div>
                </div>



              </div>
            </div>
          </div>

        </div>
      </div>


    <!-- For Script -->
    <?php include('script.php'); ?>
    
    </body>

    <!-- Footer -->
    <?php include('footer.php'); ?>

  </html>