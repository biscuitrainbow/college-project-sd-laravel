@extends('default.layout')
@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Sale</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Sale Order</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection
@section('content')


    <div class="card" style="margin-bottom:75px">
        <div class="col s12">
            <h4 style="margin-bottom: 50px">Invoice Transactions</h4>

            <!-- Table -->
            <table class="highlight">
                <thead>
                <tr>
                    <th>Document ID</th>
                    <th>Customer</th>
                    <th>Create Date</th>
                    <th>Invoice Date</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($invoices as $invoice)
                    <tr>
                        <td>{{$invoice->id}}</td>
                        <td>{{$invoice->company_name}}</td>
                        <td>{{$invoice->created_at}}</td>
                        <td>{{$invoice->request_date}}</td>
                        <td><a href="/invoice/display/{{$invoice->id}}" class="waves-effect waves-light btn">Details</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

            <!-- Pagination -->

        </div>
    </div>
@endsection