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
          <a href="condition-change.php" class="breadcrumb">Change General Condition</a>
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
              <h4 style="margin-bottom: 50px">Change Material Discount</h4>
              <form action="">
                <div class="row">
                  <div class="input-field col s12">
                    <input value="value" id="conditionname" type="text" class="validate">
                    <label for="conditionname">Inquiry No.</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="discountprice" type="text" class="validate">
                    <label for="discountprice">Discount Price</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="minprice" type="text" class="validate">
                    <label for="minprice">Min quantity</label>
                  </div>
                </div>
                <!-- Submit Button -->
                <div class="row">
                  <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Update</a></div>
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