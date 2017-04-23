@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Material</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

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
                        <th>Action</th>
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
                        <td><a :href="'{{url('/material/display')}}/' + material.product_id"
                               class="waves-effect waves-light btn">View</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
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
