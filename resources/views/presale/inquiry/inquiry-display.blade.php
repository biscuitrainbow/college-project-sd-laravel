@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Presale Process</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Inquiry</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <h4 style="margin-bottom: 50px">Display Inquiry</h4>
    <form action="">
        <div class="row">
            <div class="input-field col s12">
                <i class="material-icons prefix">search</i>
                <input id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Search by product name or id</label>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col s12">
            <!-- Table -->
            <table class="highlight">
                <thead>
                <tr>
                    <th>Customer</th>
                    <th>Create Date</th>
                    <th>Request Delivery Date</th>
                </tr>
                </thead>

                <tbody>
                @foreach($inquiry as $inquiries)
                <tr>
                    <td>College of arts media and technology,inc</td>
                    <td>Chiangmai</td>
                    <td>Thailand</td>
                    <td><a href="customer-display-result.php" class="waves-effect waves-light btn">Details</a>
                    </td>
                </tr>
                @endforeach
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
@endsection()