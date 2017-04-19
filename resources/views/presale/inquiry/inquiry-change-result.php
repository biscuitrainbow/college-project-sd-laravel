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
          <a href="#!" class="breadcrumb">Presale Process</a>
          <a href="#!" class="breadcrumb">Inquiry</a>
          <a href="inquiry-change.php" class="breadcrumb">Change Inquiry</a>
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
              <h4>Change Inquiry</h4>
              <form action="">
                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">General Infomation</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input value="value" type="date" class="datepicker">
                    <label for="date">Create Date</label>
                  </div>
                  <div class="input-field col s8">
                    <input value="value" id="customer" type="text" class="validate">
                    <label for="customer">Customer</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s8">
                    <input value="value" id="soldparty" type="text" class="validate">
                    <label for="soldparty">Sold to party/Ship to party</label>
                  </div>
                  <div class="input-field col s4">
                    <input value="value" type="date" class="datepicker">
                    <label for="requestdelivery">request delivery date</label>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Material Detail</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input value="value" id="productid" type="text" class="validate">
                    <label for="productid">Product ID</label>
                  </div>
                  <div class="input-field col s8">
                    <input value="value" id="productname" type="text" class="validate">
                    <label for="productname">Product Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input value="value" id="orderqty" type="text" class="validate">
                    <label for="orderqty">Order Qty</label>
                  </div>
                </div>

                
                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Billing</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="productid" type="text" class="validate">
                    <label for="productid">Billing Method</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" type="date" class="datepicker">
                    <label for="invoicedate">Invoice Date</label>
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

        $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
        });
      </script>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>

    <!-- Footer -->
    <?php include('footer.php'); ?>

  </html>