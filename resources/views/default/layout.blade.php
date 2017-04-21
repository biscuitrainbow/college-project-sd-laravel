<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body style="background-color: #fcfbfc">

<!-- Nav Bar -->
<nav>
    <div class="container">
        <div class="nav-wrapper">
            <a href="#" class="brand-logo">
                <span>Sale and Distribution</span>
            </a>
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
        @include('include.sidebar')

        <div class="col s9 m9 l9 xl9" style="margin-top: 15px;">
            <div class="card">
                <div class="card-content">
                    <h4 style="margin-bottom: 50px">@yield('title')</h4>
                    @section('content')
                    @show
                </div>
            </div>
            <div class="card" style="margin-bottom:75px">
                <div class="card-content">
                    @section('list')
                    @show
                </div>
            </div>
        </div>


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