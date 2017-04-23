@extends('default.layout')
@section('title',"Create Quotation")

@section('content')
    <form action="">

        <h4 class="main-title">Create Quotation</h4>
        <!-- Reference from Inquiry -->
        <div class="row">
            <div class="col s12">
                <h5 class="sub-title">Select Inquiry</h5>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">search</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search by product name or id</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <table class="highlight">
            <thead>
            <tr>
                <th>Inquiry No.</th>
                <th>From</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>572110164</td>
                <td>Thichanont Payachom</td>
                <td><a href="" class="waves-effect waves-light btn">Create</a></td>
            </tr>
            <tr>
                <td>572110164</td>
                <td>Thichanont Payachom</td>
                <td><a href="" class="waves-effect waves-light btn">Create</a></td>
            </tr>
            <tr>
                <td>572110164</td>
                <td>Thichanont Payachom</td>
                <td><a href="" class="waves-effect waves-light btn">Create</a></td>
            </tr>
            <tr>
                <td>572110164</td>
                <td>Thichanont Payachom</td>
                <td><a href="" class="waves-effect waves-light btn">Create</a></td>
            </tr>
            <tr>
                <td>572110164</td>
                <td>Thichanont Payachom</td>
                <td><a href="" class="waves-effect waves-light btn">Create</a></td>
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
    </form>
@endsection()