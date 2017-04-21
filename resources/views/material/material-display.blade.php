@extends('default.layout')
@section('title',"Display Material")
@section('content')
    <div class="card" style="margin-bottom:75px">
        <div class="card-content">
            <h4 style="margin-bottom: 50px">Display Material</h4>
            <form action="">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">search</i>
                        <input id="icon_prefix" type="text" class="validate">
                        <label for="icon_prefix">Search by product name or id</label>
                    </div>
                </div>
            </form>
            @endsection

            @section('list')
                <div class="row">
                    <div class="col s12">
                        <h4 style="margin-bottom: 50px">All Product</h4>

                        <!-- Table -->
                        <table class="highlight">
                            <thead>
                            <tr>
                                <th>Product id</th>
                                <th>Product name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Product type</th>
                                <th>Product Categories</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $datas)
                                <tr>
                                    <td>{{$datas['product_id']}}</td>
                                    <td>{{$datas['product_name']}}</td>
                                    <td>{{$datas['product_price']}}</td>
                                    <td>{{$datas['product_qty']}}</td>
                                    <td>{{$datas['product_type']}}</td>
                                    <td>{{$datas['product_categories']}}</td>
                                    <form method="get" action="/material/display/{{$datas['id']}}">
                                        <td>
                                            <button class="waves-effect waves-light btn" type="submit">Details</button>
                                    </form>
                                </tr>
                            </tbody>
                            @endforeach
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
        </div>
    </div>
@endsection
