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
                <h4 style="margin-bottom: 50px">Delete Condition</h4>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

    <!-- Footer -->
    <?php include('footer.php'); ?>

  </html>