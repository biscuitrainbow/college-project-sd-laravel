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
        header, main, footer {
          padding-left: 300px;
        }

        @media only screen and (max-width : 992px) {
          header, main, footer {
            padding-left: 0;
          }
        }



        .side-nav .collapsible-body > ul:not(.collapsible) > li.active,
        .side-nav.fixed .collapsible-body > ul:not(.collapsible) > li.active {
          background-color: #337ab7;
        }

        .btn, .btn-large {
          text-decoration: none;
          color: #fff;
          background-color: #337ab7;
          text-align: center;
          letter-spacing: .5px;
          transition: .2s ease-out;
          cursor: pointer;
        }


        .btn:hover, .btn-large:hover {
          background-color: #2a6698;
        }

        .waves-effect.waves-teal .waves-ripple {
          background-color: rgba(51, 122, 183, 0.7);
        }
      </style>




    </head>

    <body style="background-color: #f2f2f2">

      <header>
        <!-- Top Bar -->
        <nav>
          <div class="row">
            <div class="col s10 offset-s1">
              <div class="nav-wrapper">



          <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
          <a href="#!" class="breadcrumb">Presale Process</a>
          <a href="" class="breadcrumb">Inquiry</a>
          <a href="#!" class="breadcrumb">Display Inquiry</a>
          <a href="#!" class="breadcrumb">Inquiry Document</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="collapsible.html">Logout</a></li>
          </ul>


              </div>
            </div>
          </div>
        </nav>
        <ul id="slide-out" class="side-nav fixed">
          <li class="logo subheader" style="margin: 25px 0px 100px">
            <a id="logo-container" href="" class="brand-logo center">
              <img src="img/logo-blue.png" style="width: 30%;" alt="">
            </a>
          </li>
          <li class="no-padding action">
            <ul class="collapsible collapsible-accordion">
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">assessment</i>Dashboard</a>
                <div class="collapsible-body" style="display: block;" >
                  <ul>
                    <li class="active"><a href="">Overall</a></li>
                    <li><a href="">Material</a></li>
                  </ul>
                </div>
              </li>
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">view_agenda</i>Material</a>
                <div class="collapsible-body" >
                  <ul>
                    <li><a href="">Create Material</a></li>
                    <li><a href="">Display Material</a></li>
                    <li><a href="">Change Material</a></li>
                    <li><a href="">Delete Material</a></li>
                  </ul>
                </div>
              </li>
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">supervisor_account</i>Customer</a>
                <div class="collapsible-body" >
                  <ul>
                    <li><a href="">Create Customer</a></li>
                    <li><a href="">Display Customer</a></li>
                    <li><a href="">Change Customer</a></li>
                    <li><a href="">Delete Customer</a></li>
                  </ul>
                </div>
              </li>
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">info_outline</i>Condition</a>
                <div class="collapsible-body" >
                  <ul>
                    <li><a href="">Create Condition</a></li>
                    <li><a href="">Display Condition</a></li>
                    <li><a href="">Change Condition</a></li>
                    <li><a href="">Delete Condition</a></li>
                  </ul>
                </div>
              </li>
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">swap_horiz</i>Presale Process</a>
                <div class="collapsible-body" >
                  <ul>
                    <li>
                      <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Inquiry</a>
                          <div class="collapsible-body" >
                            <ul>
                              <li><a href="">Create Inquiry</a></li>
                              <li><a href="">Display Inquiry</a></li>
                              <li><a href="">Change Inquiry</a></li>
                              <li><a href="">Delete Inquiry</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Quotation</a>
                          <div class="collapsible-body" >
                            <ul>
                              <li><a href="">Create Quotation</a></li>
                              <li><a href="">Display Quotation</a></li>
                              <li><a href="">Change Quotation</a></li>
                              <li><a href="">Delete Quotation</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">shopping_cart</i>Sale</a>
                <div class="collapsible-body" >
                  <ul>
                    <li>
                      <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Customer PO</a>
                          <div class="collapsible-body" >
                            <ul>
                              <li><a href="">Create Customer PO</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Sale Order</a>
                          <div class="collapsible-body" >
                            <ul>
                              <li><a href="">Create Sale Order</a></li>
                              <li><a href="">Display Sale Order</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">today</i>Check Availability</a>
                <div class="collapsible-body" >
                  <ul>
                    <li><a href="">Display</a></li>
                  </ul>
                </div>
              </li>
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">room</i>Goods Issue</a>
                <div class="collapsible-body" >
                  <ul>
                    <li><a href="">Create Goods Issue</a></li>
                    <li><a href="">Display Goods Issue</a></li>
                  </ul>
                </div>
              </li>
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">credit_card</i>Payment</a>
                <div class="collapsible-body" >
                  <ul>
                    <li>
                      <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Invoice</a>
                          <div class="collapsible-body" >
                            <ul>
                              <li><a href="">Create Invoice</a></li>
                              <li><a href="">Display Invoice</a></li>
                            </ul>
                          </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Receipt</a>
                          <div class="collapsible-body" >
                            <ul>
                              <li><a href="">Create Receipt</a></li>
                              <li><a href="">Display Receipt</a></li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">work</i>Company Profile</a>
                <div class="collapsible-body" >
                  <ul>
                    <li><a href="">Edit</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </header>

      <main>
          <div class="row">
            <!-- Content -->
            <div class="col s10 offset-s1 margintop50" style="margin-bottom: 75px;">
              <div class="card">
                <div class="card-content">
                  <div class="row valign-wrapper margintop50">
                    <div class="col s1 offset-s4 valign-wrapper">
                      <img src="img/logo-teal.png" alt="" style="width: 80%;">
                    </div>
                    <div class="col s7">
                      <h5 class="bold">WHAT TO WARE CO., LTD.</h5>
                      <p class="bold">239 Suthep Rd, A.Muang, Chiang Mai 50200 Thailand</p>
                        <p class="bold">
                        <i class="material-icons tiny">phone</i> 099-9999999 - 
                        <i class="material-icons tiny">email</i> sale@whattowhere.com - 
                        <i class="material-icons tiny">language</i> whattowear.com</p>
                    </div>
                  </div>
                  <div class="row margintop50">
                    <div class="col s4">
                      <h5 class="bold">Customer Address</h5>
                      <hr>
                      <p class="bold">Bill Address</p>
                      <p>239 Suthep Rd, A.Muang, Chiang Mai 50200 Thailand</p>
                      <br>
                      <p><i class="material-icons tiny">phone</i> 088-8888888</p>
                      <p><i class="material-icons tiny">email</i> customer@email.com</p>
                      <p><i class="material-icons tiny">language</i> customer.com</p>
                    </div>
                    <div class="col s8" style="min-height: 900px">
                      <h5 class="bold">Inquiry</h5>
                      <hr>
                      <p class="font18">Inquiry Date 2 March, 2017</p>
                      <p class="font18">To whom it may concern,</p>

                      <p class="font18 margintop50">(Description Text) Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>

                      <h5 class="bold margintop50">Goods Requests</h5>
                      <hr>
                      <table class="striped">
                        <thead>
                          <tr>
                            <th>Quantity</th>
                            <th>Product Description</th>
                            <th>Product ID</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>100</td>
                            <td>Metallic Hogh Heel Shoes</td>
                            <td>WA00010</td>
                          </tr>
                          <tr>
                            <td>100</td>
                            <td>Metallic Hogh Heel Shoes</td>
                            <td>WA00010</td>
                          </tr>
                          <tr>
                            <td>100</td>
                            <td>Metallic Hogh Heel Shoes</td>
                            <td>WA00010</td>
                          </tr>
                          <tr>
                            <td>100</td>
                            <td>Metallic Hogh Heel Shoes</td>
                            <td>WA00010</td>
                          </tr>
                          <tr>
                            <td>100</td>
                            <td>Metallic Hogh Heel Shoes</td>
                            <td>WA00010</td>
                          </tr>
                          <tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="row">
                    <hr style="margin-bottom: 25px">
                    <div class="col s4 center">
                        <i class="material-icons small">phone</i>
                        <br>
                        <strong> 099-9999999</strong>
                    </div>
                    <div class="col s4 center">
                        <i class="material-icons small">email</i>
                        <br>
                        <strong> sale@whattowear.com</strong>
                    </div>
                    <div class="col s4 center">
                        <i class="material-icons small">language</i>
                        <br>
                        <strong> whattowear.com</strong>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </main>

      <style>
        .bold{
          font-weight: bold;
        }
        .font18{
          font-size: 18px;
        }
        .margintop50{
          margin-top: 50px;
        }
      </style>


      




    <!-- For Script -->
    <?php include('script.php'); ?>
    
    </body>

    <!-- Footer -->
    <?php include('footer.php'); ?>

  </html>