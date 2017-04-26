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
                    @section('breadcrumb')
                    @show
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
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('overallDashboard')}}">Overall</a></li>
                            <li><a href="">Material</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">view_agenda</i>Material</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('createMaterial')}}">Create Material</a></li>
                            <li><a href="{{route('displayMaterials')}}">Display Material</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">supervisor_account</i>Customer</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('createCustomer')}}">Create Customer</a></li>
                            <li><a href="{{route('displayCustomers')}}">Display Customer</a></li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i class="material-icons">info_outline</i>Condition</a>
                    <div class="collapsible-body">
                        <ul>
                            <li>
                                <ul class="collapsible collapsible-accordion">
                                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Material
                                            Condition</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="{{route('showCreateMaterial')}}">Create Material
                                                        Condition</a>
                                                </li>
                                                <li><a href="{{route('displayConditionMaterial')}}">Display Material
                                                        Condition</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal">General
                                            Condition</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="{{route('showCreateGeneral')}}">Create General
                                                        Condition</a>
                                                </li>
                                                <li><a href="{{route('displayConditionGeneral')}}">Display General
                                                        Condition</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
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
                                                <li><a href="{{route('createInquiry')}}">Create Inquiry</a></li>
                                                <li><a href="{{route('displayInquiries')}}">Display Inquiry</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="bold"><a
                                                class="collapsible-header  waves-effect waves-teal">Quotation</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="{{route('createQuotation')}}">Create Quotation</a></li>
                                                <li><a href="{{route('displayQuotation')}}">Display Quotation</a></li>
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
                                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Sale
                                            Order</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="{{route('createSaleOrder')}}">Create Sale Order</a></li>
                                                <li><a href="{{route('displaySaleOrder')}}">Display Sale Order</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-teal"><i
                                class="material-icons">room</i>Goods Issue</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="{{route('createGoodsIssue')}}">Create Goods Issue</a></li>
                            {{--<li><a href="{{route('displayGoodsIssue')}}">Display Goods Issue</a></li>--}}
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
                                                <li><a href="{{route('createInvoice')}}">Create Invoice</a></li>
                                                <li><a href="{{route('displayInvoice')}}">Display Invoice</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Receipt</a>
                                        <div class="collapsible-body">
                                            <ul>
                                                <li><a href="{{route('createReceipt')}}">Create Receipt</a></li>
                                                <li><a href="{{route('displayReceipt')}}">Display Receipt</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </li>
    </ul>
</header>

@section('document')
@show

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
<script src="{{asset('js/vue.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('.datepicker').pickadate({
            format: 'mm/dd/yyyy',
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });


    $('input.autocomplete').autocomplete({
        data: {
            "Apple": null,
            "Microsoft": null,
            "Google": 'http://placehold.it/250x250'
        },
        limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
        onAutocomplete: function (val) {
            // Callback function when value is autcompleted.
        },
        minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
    });
</script>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>


</body>

<!-- Footer -->
@include('include.footer')

</html>