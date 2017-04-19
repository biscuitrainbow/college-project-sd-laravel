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
          <a href="#!" class="breadcrumb">Sale</a>
          <a href="#!" class="breadcrumb">Sale Order</a>
          <a href="saleorder-display.php" class="breadcrumb">Display Sale Order</a>
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
          <form action="">
            <div class="card">
              <div class="card-content">
                <div class="row">
                  <div class="col s12">
                    <h4 style="margin-bottom: 50px">Display Sale Order</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    <span class="form-title">General Infomation</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s12">
                    <input value="value" id="soldtoparty" type="text" class="validate">
                    <label for="soldtoparty">Customer</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="soldtoparty" type="text" class="validate">
                    <label for="soldtoparty">Sold to Party/Ship to Party</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="requestdate" type="date" class="datepicker">
                    <label for="requestdate">Request Delivery Date</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Material Detail</span>
                  </div>
                </div>
                <div class="row">
                  <!--<div class="input-field col s4">
                    <input value="value" id="productid" type="text" class="validate">
                    <label for="productid">Product ID</label>
                  </div>-->
                  <div class="input-field col s12">
                    <input value="value" id="productname" type="text" class="validate">
                    <label for="productname">Product Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="orderqty" type="text" class="validate">
                    <label for="orderqty">Order Qty</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="price" type="text" class="validate">
                    <label for="price">Price Per Unit</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Billing</span>
                  </div>
                </div>
                <div class="row">
                  <!--<div class="input-field col s6">
                    <input value="value" id="productid" type="text" class="validate">
                    <label for="productid">Billing Method</label>
                  </div>-->
                  <div class="input-field col s6">
                    <input value="value" id="totalprice" type="text" class="validate">
                    <label for="invoicedate">Invoice Date</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Condition</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="totalprice" type="text" class="validate">
                    <label for="totalprice">Total Price</label>
                  </div>
                  <!--<div class="input-field col s4">
                    <input value="value" id="materialdiscount" type="text" class="validate" placeholder="ex.10% to wa0001">
                    <label for="materialdiscount">Material Discount</label>
                  </div>-->
                  <div class="input-field col s6">
                    <input value="value" id="customerdiscount" type="text" class="validate" placeholder="ex. 5% from overall">
                    <label for="customerdiscount">Customer Discount</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="netvalue" type="text" class="validate">
                    <label for="netvalue">Net Value</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Payment</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input value="value" id="paymentdate" type="date" class="datepicker">
                    <label for="paymentdate">Payment Date</label>
                  </div>
                  <div class="input-field col s6">
                    <input value="value" id="paymenttype" type="text" class="validate">
                    <label for="paymenttype">Payment Type</label>
                  </div>
                </div>


              </div>
            </div>
          </form>
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