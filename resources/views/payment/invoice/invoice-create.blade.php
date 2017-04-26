@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Presale Process</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Quotation</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <h4 style="margin-bottom: 50px">Create Invoice</h4>
    <form action="">
    </form>
    <div class="row">
        <div class="col s12">

            <!-- Table -->
            <table class="highlight">
                <thead>
                <tr>
                    <th>Sale Order ID</th>
                    <th>Customer</th>
                    <th>Create Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($good_issues as $good_issue)
                    <tr>
                        <td>{{$good_issue->id}}</td>
                        <td>{{$good_issue->company_name}}</td>
                        <td>{{$good_issue->created_at}}</td>
                        <td><a href="/invoice/create/{{$good_issue->id}}"
                               class="waves-effect waves-light btn">Select</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection()