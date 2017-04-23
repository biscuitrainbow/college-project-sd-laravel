@extends('default.layout')
@section('title',"Create Customer Purchase Order")
@section('content')

    <form action="">

        <!-- Reference from Inquiry -->
        <h4 class="main-title">Create Purchase Order</h4>
        <div class="row">
            <div class="col s12">
                <h5 class="sub-title">Select Quotation</h5>
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

        <div class="card">
            <div class="card-content">
                <!-- Table -->
                <table class="highlight">
                    <thead>
                    <tr>
                        <th>Quotation No.</th>
                        <th>To</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td><a href="" class="waves-effect waves-light btn">Select</a></td>
                    </tr>
                    <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td><a href="" class="waves-effect waves-light btn">Select</a></td>
                    </tr>
                    <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td><a href="" class="waves-effect waves-light btn">Select</a></td>
                    </tr>
                    <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td><a href="" class="waves-effect waves-light btn">Select</a></td>
                    </tr>
                    <tr>
                        <td>572110164</td>
                        <td>Thichanont Payachom</td>
                        <td><a href="" class="waves-effect waves-light btn">Select</a></td>
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

            </div>
        </div>
    </form>

@endsection