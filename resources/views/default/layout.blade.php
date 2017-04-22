<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}" media="screen,projection"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body style="background-color:">
<header>
    <nav class="top-nav">
        <div class="row">
            <div class="col s10 offset-s1">
                <div class="nav-wrapper">
                    <a class="page-title">Sale and Distribution</a>
                </div>
            </div>
        </div>
    </nav>
    <ul id="slide-out" class="side-nav fixed">
        <li class="logo" style="margin: 25px 0px 100px">
            <a id="logo-container" href="http://materializecss.com/" class="brand-logo center">
                <img src="{{asset('img/logo-teal.png')}}" style="width: 30%;" alt="">
            </a>
        </li>
        <li class="no-padding action">
            <ul class="collapsible collapsible-accordion">
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i
                                class="material-icons">assessment</i>Dashboard</a>
                    <div class="collapsible-body" style="display: block;">
                        <ul>
                            <li class="active"><a href="">Overall</a></li>
                            <li><a href="">Material</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">view_agenda</i>Material</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('createMaterial')}}">Create Material</a></li>
                            <li><a href="{{route('displayMaterial')}}">Display Material</a></li>
                            <li><a href="">Change Material</a></li>
                            <li><a href="">Delete Material</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">supervisor_account</i>Customer</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Create Customer</a></li>
                            <li><a href="">Display Customer</a></li>
                            <li><a href="">Change Customer</a></li>
                            <li><a href="">Delete Customer</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">info_outline</i>Condition</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Create Condition</a></li>
                            <li><a href="">Display Condition</a></li>
                            <li><a href="">Change Condition</a></li>
                            <li><a href="">Delete Condition</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i
                                class="material-icons">swap_horiz</i>Presale
                        Process</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Inquiry</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="">Create Inquiry</a></li>
                                                <li><a href="">Display Inquiry</a></li>
                                                <li><a href="">Change Inquiry</a></li>
                                                <li><a href="">Delete Inquiry</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="bold"><a
                                                class="collapsible-header  waves-effect waves-teal">Quotation</a>
                                        <div class="collapsible-body">
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
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Customer
                                            PO</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="">Create Customer PO</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Sale
                                            Order</a>
                                        <div class="collapsible-body">
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
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i
                                class="material-icons">today</i>Check Availability</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Display</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i
                                class="material-icons">room</i>Goods Issue</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="">Create Goods Issue</a></li>
                            <li><a href="">Display Goods Issue</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">credit_card</i>Payment</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Invoice</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="">Create Invoice</a></li>
                                                <li><a href="">Display Invoice</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Receipt</a>
                                        <div class="collapsible-body">
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
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i
                                class="material-icons">work</i>Company Profile</a>
                    <div class="collapsible-body">
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
        <div class="col s10 offset-s1" style="margin-top: 50px; margin-bottom: 75px;">
            @section('content')
            @show
        </div>
    </div>
</main>


<!-- Nav Bar -->


<!-- ย้ายอันนี้แล้ว Datepicker ใช้งานไม่ได้ -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('.datepicker').pickadate({
            format: 'mm/dd/yyyy',
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });


</script>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>


</body>

<!-- Footer -->
@include('include.footer')

</html>