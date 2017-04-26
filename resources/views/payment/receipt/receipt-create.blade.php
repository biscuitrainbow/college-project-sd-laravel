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
    <h4 style="margin-bottom: 50px">Create Receipt</h4>
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
                @foreach($invoices as $invoice)
                    <tr>
                        <td>{{$invoice->id}}</td>
                        <td>{{$invoice->company_name}}</td>
                        <td>{{$invoice->created_at}}</td>
                        <td><a href="/receipt/create/{{$invoice->id}}"
                               class="waves-effect waves-light btn">Select</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection()