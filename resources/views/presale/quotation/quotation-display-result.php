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
          <a href="#!" class="breadcrumb">Quotation</a>
          <a href="quotation-display.php" class="breadcrumb">Display Quotation</a>
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
              <h4>Display Quotation</h4>
              <form action="">
                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">General Infomation</span>
                  </div>
                </div>
                <div class="row" style="margin-top: 50px">
                  <div class="input-field col s4">
                    <input type="date" class="datepicker">
                    <label for="discountprice">Create Date</label>
                  </div>
                  <div class="input-field col s8">
                    <input id="minquantity" type="text" class="validate">
                    <label for="minquantity">Customer</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s8">
                    <input id="soldtoparty" type="text" class="validate">
                    <label for="soldtoparty">Sold to Party/Ship to Party</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="requestdate" type="date" class="datepicker">
                    <label for="requestdate">Request Delivery Date</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Material Detail</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="productid" type="text" class="validate">
                    <label for="productid">Product ID</label>
                  </div>
                  <div class="input-field col s8">
                    <input id="productname" type="text" class="validate">
                    <label for="productname">Product Name</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="orderqty" type="text" class="validate">
                    <label for="orderqty">Order Qty</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="price" type="text" class="validate">
                    <label for="price">Price Per Unit</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Billing</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <input id="productid" type="text" class="validate">
                    <label for="productid">Billing Method</label>
                  </div>
                  <div class="input-field col s6">
                    <input id="invoicedate" type="date" class="datepicker">
                    <label for="invoicedate">Invoice Date</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Condition</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="totalprice" type="text" class="validate">
                    <label for="totalprice">Total Price</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="materialdiscount" type="text" class="validate" placeholder="ex.10% to wa0001">
                    <label for="materialdiscount">Material Discount</label>
                  </div>
                  <div class="input-field col s4">
                    <input id="customerdiscount" type="text" class="validate" placeholder="ex. 5% from overall">
                    <label for="customerdiscount">Customer Discount</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input id="netvalue" type="text" class="validate">
                    <label for="netvalue">Net Value</label>
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