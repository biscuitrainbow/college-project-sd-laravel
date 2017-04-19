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
          <a href="#!" class="breadcrumb">Customer PO</a>
          <a href="#!" class="breadcrumb">Create Customer PO</a>
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
              <h4>Create Customer Purchase Order</h4>
            </div>
            <div class="card-tabs">
              <ul class="tabs tabs-fixed-width">
                <li class="tab"><a href="#withref">Create with Reference</a></li>
                <li class="tab"><a href="#createnew">Create New Sale Order</a></li>
              </ul>
            </div>
            <div class="card-content grey lighten-4">
              <div id="withref">
                <form action="">

                  <!-- Reference from Inquiry -->
                  <div class="card">
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <h5 style="margin-bottom: 50px">Select Quotation</h5>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col s12">
                          <div class="row">
                            <div class="input-field col s12">
                              <i class="material-icons prefix">search</i>
                              <input id="icon_prefix" type="text" class="validate">
                              <label for="icon_prefix">Search by product name or id</label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Table -->
                      <table class="highlight">
                        <thead>
                          <tr>
                            <th>Quotation No.</th>
                            <th>To</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>572110164</td>
                            <td>Thichanont Payachom</td>
                            <td><input type="checkbox" id="check1" /><label for="check1"></label></td>
                          </tr>
                          <tr>
                            <td>572110164</td>
                            <td>Thichanont Payachom</td>
                            <td><input type="checkbox" id="check2" /><label for="check2"></label></td>
                          </tr>
                          <tr>
                            <td>572110164</td>
                            <td>Thichanont Payachom</td>
                            <td><input type="checkbox" id="check3" /><label for="check3"></label></td>
                          </tr>
                          <tr>
                            <td>572110164</td>
                            <td>Thichanont Payachom</td>
                            <td><input type="checkbox" id="check4" /><label for="check4"></label></td>
                          </tr>
                          <tr>
                            <td>572110164</td>
                            <td>Thichanont Payachom</td>
                            <td><input type="checkbox" id="check5" /><label for="check5"></label></td>
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
                </form>
              </div>
              <div id="createnew">
                <form action="">

                  <div class="card">
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <span class="form-title">General Infomation</span>
                        </div>
                      </div>
                      <div class="row" style="margin-top: 50px">
                        <div class="input-field col s12">
                          <input id="soldtoparty" type="text" class="validate">
                          <label for="soldtoparty">Customer</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="soldtoparty" type="text" class="validate">
                          <label for="soldtoparty">Sold to Party/Ship to Party</label>
                        </div>
                        <div class="input-field col s6">
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
                        <!--<div class="input-field col s4">
                          <input id="productid" type="text" class="validate">
                          <label for="productid">Product ID</label>
                        </div>-->
                        <div class="input-field col s12">
                          <input id="productname" type="text" class="validate">
                          <label for="productname">Product Name</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="orderqty" type="text" class="validate">
                          <label for="orderqty">Order Qty</label>
                        </div>
                        <div class="input-field col s6">
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
                        <!--<div class="input-field col s6">
                          <input id="productid" type="text" class="validate">
                          <label for="productid">Billing Method</label>
                        </div>-->
                        <div class="input-field col s6">
                          <input id="totalprice" type="text" class="validate">
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
                          <input id="totalprice" type="text" class="validate">
                          <label for="totalprice">Total Price</label>
                        </div>
                        <!--<div class="input-field col s4">
                          <input id="materialdiscount" type="text" class="validate" placeholder="ex.10% to wa0001">
                          <label for="materialdiscount">Material Discount</label>
                        </div>-->
                        <div class="input-field col s6">
                          <input id="customerdiscount" type="text" class="validate" placeholder="ex. 5% from overall">
                          <label for="customerdiscount">Customer Discount</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6">
                          <input id="netvalue" type="text" class="validate">
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
                          <input id="paymentdate" type="date" class="datepicker">
                          <label for="paymentdate">Payment Date</label>
                        </div>
                        <div class="input-field col s6">
                          <input id="paymenttype" type="text" class="validate">
                          <label for="paymenttype">Payment Type</label>
                        </div>
                      </div>

                      <!-- Submit Button -->
                      <div class="row">
                        <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Create Customer PO Document</a></div>
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
            $( document ).ready(function() {
             $('.datepicker').pickadate({
                format: 'mm/dd/yyyy',
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15 // Creates a dropdown of 15 years to control year
              });
          });


      </script>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.js"></script>
    </body>

    <!-- Footer -->
    <?php include('footer.php'); ?>

  </html>