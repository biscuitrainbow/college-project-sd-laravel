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
          <a href="material-display.php" class="breadcrumb">Display Material</a>
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
              <h4 style="margin-bottom: 50px">Display Material</h4>
              <form action="">
                <div class="row">
                  <div class="input-field col s4">
                    <input value="value" id="product_id" type="text" class="validate">
                    <label for="product_id">Product ID (ex. WA00010)</label>
                  </div>
                  <div class="input-field col s8">
                    <input value="value" id="product_name" type="text" class="validate">
                    <label for="product_name">Product Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input value="value" id="product_price" type="text" class="validate">
                    <label for="product_price">Product Price</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="value" id="product_quantity" type="text" class="validate">
                    <label for="product_quantity">Product Quantity</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="value" id="product_type" type="text" class="validate">
                    <label for="product_type">Product Type</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="condition" type="text" class="validate">
                    <label for="condition">Condition</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="product_categories" type="text" class="validate">
                    <label for="product_categories">Product Categories (optional)</label>
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