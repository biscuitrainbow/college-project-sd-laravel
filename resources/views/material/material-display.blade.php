@extends('default.layout')
@section('content')
    <div id="mainApp">
        <h4 style="margin-bottom: 50px">Display Material</h4>
        <form action="">
            <div class="input-field col s12 search-box">
                <i class="material-icons prefix">search</i>
                <input v-model="query" id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Search by product name or id</label>
            </div>
        </form>

        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
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

                            <tr v-for="material in search">
                                <td>@{{material.product_id}}</td>
                                <td>@{{material.product_name}}</td>
                                <td>@{{material.product_price}}</td>
                                <td>@{{material.product_qty}}</td>
                                <td>@{{material.product_type}}</td>
                                <td>@{{material.product_categories}}</td>

                            </tr>

                            {{--@foreach($data as $datas)--}}
                            {{--<tr>--}}
                            {{--<td>{{$datas['product_id']}}</td>--}}
                            {{--<td>{{$datas['product_name']}}</td>--}}
                            {{--<td>{{$datas['product_price']}}</td>--}}
                            {{--<td>{{$datas['product_qty']}}</td>--}}
                            {{--<td>{{$datas['product_type']}}</td>--}}
                            {{--<td>{{$datas['product_categories']}}</td>--}}
                            {{--<form method="get" action="/material/display/{{$datas['id']}}">--}}
                            {{--<td>--}}
                            {{--<button class="waves-effect waves-light btn" type="submit">Details</button>--}}
                            {{--</form>--}}
                            {{--</tr>--}}
                            </tbody>
                            {{--@endforeach--}}
                        </table>


                        {{--<!-- Pagination -->--}}
                        {{--<ul class="pagination">--}}
                        {{--<li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>--}}
                        {{--<li class="active"><a href="#!">1</a></li>--}}
                        {{--<li class="waves-effect"><a href="#!">2</a></li>--}}
                        {{--<li class="waves-effect"><a href="#!">3</a></li>--}}
                        {{--<li class="waves-effect"><a href="#!">4</a></li>--}}
                        {{--<li class="waves-effect"><a href="#!">5</a></li>--}}
                        {{--<li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/vue.js')}}"></script>
    <script>
        var mainApp = new Vue({
            el: '#mainApp',
            data: {
                query: '',
                materials: {!! $data->toJson() !!}
            },
            computed: {
                search: function () {
                    var self = this;
                    if (this.query === '') {
                        return this.materials;
                    }
                    return this.materials.filter(function (material) {
                        return material.product_name.indexOf(self.query) >= 0
                            || material.product_id.indexOf(self.query) >= 0
                            || material.product_type.indexOf(self.query) >= 0;
                    });
                }
            }
        });

    </script>
@endsection
