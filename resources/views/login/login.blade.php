<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>

<body class="bgblue">
<div class="container">
    <div class="row">
        <div class="col s4 offset-s4">
            <div class="row" style="margin-top: 150px;">
                <div class="col s6 offset-s3">
                    <img src="img/logo.png" alt="" style="width: 100%">
                </div>
            </div>
            <div class="card-panel" style="margin-top: 50px;">
                <form role="form" method="POST" action="/login">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   required autofocus>
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="form-control" name="password" required>
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <!-- Submit Button -->
                    <div class="row">
                        <div class="col s12">
                            <button type="submit" class="waves-effect waves-light btn-large"
                                    style="width: 100%;">Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
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
