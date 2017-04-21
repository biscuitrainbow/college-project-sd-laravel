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
          <a href="#!" class="breadcrumb">Create Inquiry</a>
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
              <h4>Create Inquiry</h4>
              <form action="">
                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">General Infomation</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s4">
                    <input type="date" class="datepicker">
                    <label for="date">Create Date</label>
                  </div>
                  <div class="input-field col s8">
                    <input id="customer" type="text" class="validate">
                    <label for="customer">Customer</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s8">
                    <input id="soldparty" type="text" class="validate">
                    <label for="soldparty">Sold to party/Ship to party</label>
                  </div>
                  <div class="input-field col s4">
                    <input type="date" class="datepicker">
                    <label for="requestdelivery">request delivery date</label>
                  </div>
                </div>
                
                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Material Detail</span>
                  </div>
                </div>
                <div class="row">
                  <div class="col s12">
                    
                  <!-- Table -->
                  <table class="highlight">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Select</th>
                        <th>Quantity</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>WA00010</td>
                        <td>T-Shirt</td>
                        <td>1200</td>
                        <td>1</td>
                        <td><input type="checkbox" id="material1" /><label for="material1"></label></td>
                        <td><input type="text" style="width: 50px" class="center"></td>
                      </tr>
                      <tr>
                        <td>WA00010</td>
                        <td>T-Shirt</td>
                        <td>1200</td>
                        <td>1</td>
                        <td><input type="checkbox" id="material2" /><label for="material2"></label></td>
                        <td><input type="text" style="width: 50px" class="center"></td>
                      </tr>
                      <tr>
                        <td>WA00010</td>
                        <td>T-Shirt</td>
                        <td>1200</td>
                        <td>1</td>
                        <td><input type="checkbox" id="material3" /><label for="material3"></label></td>
                        <td><input type="text" style="width: 50px" class="center"></td>
                      </tr>
                      <tr>
                        <td>WA00010</td>
                        <td>T-Shirt</td>
                        <td>1200</td>
                        <td>1</td>
                        <td><input type="checkbox" id="material4" /><label for="material4"></label></td>
                        <td><input type="text" style="width: 50px" class="center"></td>
                      </tr>
                      <tr>
                        <td>WA00010</td>
                        <td>T-Shirt</td>
                        <td>1200</td>
                        <td>1</td>
                        <td><input type="checkbox" id="material5" /><label for="material5"></label></td>
                        <td><input type="text" style="width: 50px" class="center"></td>
                      </tr>
                      <tr>
                        <td>WA00010</td>
                        <td>T-Shirt</td>
                        <td>1200</td>
                        <td>1</td>
                        <td><input type="checkbox" id="material6" /><label for="material6"></label></td>
                        <td><input type="text" style="width: 50px" class="center"></td>
                      </tr>
                      <tr>
                        <td>WA00010</td>
                        <td>T-Shirt</td>
                        <td>1200</td>
                        <td>1</td>
                        <td><input type="checkbox" id="material7" /><label for="material7"></label></td>
                        <td><input type="text" style="width: 50px" class="center"></td>
                      </tr>
                      <tr>
                        <td>WA00010</td>
                        <td>T-Shirt</td>
                        <td>1200</td>
                        <td>1</td>
                        <td><input type="checkbox" id="material8" /><label for="material8"></label></td>
                        <td><input type="text" style="width: 50px" class="center"></td>
                      </tr>
                      <tr>
                        <td>WA00010</td>
                        <td>T-Shirt</td>
                        <td>1200</td>
                        <td>1</td>
                        <td><input type="checkbox" id="material9" /><label for="material9"></label></td>
                        <td><input type="text" style="width: 50px" class="center"></td>
                      </tr>
                      <tr>
                        <td>WA00010</td>
                        <td>T-Shirt</td>
                        <td>1200</td>
                        <td>1</td>
                        <td><input type="checkbox" id="material10" /><label for="material10"></label></td>
                        <td><input type="text" style="width: 50px" class="center"></td>
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

                
                <div class="row">
                  <div class="col s12 margin-top-50">
                    <span class="form-title">Billing</span>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field col s6">
                    <select>
                      <option value="" disabled selected> </option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Billing Method</label>
                  </div>
                  <div class="input-field col s6">
                    <input type="date" class="datepicker">
                    <label for="invoicedate">Invoice Date</label>
                  </div>
                </div>

                <!-- Submit Button -->
                <div class="row">
                  <div class="col s12" style="text-align: right;"><a class="waves-effect waves-light btn">Create Inquiry Document</a></div>
                </div>
              </form>
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