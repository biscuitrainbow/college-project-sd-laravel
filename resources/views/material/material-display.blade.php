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
                        <td>@{{material.code}}</td>
                        <td>@{{material.name}}</td>
                        <td>@{{material.price}}</td>
                        <td>@{{material.quantity}}</td>
                        <td>@{{material.type}}</td>
                        <td>@{{material.category}}</td>
                        <td><a :href="'{{url('/material/display')}}/' + material.id"
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
                customers: {!! $materials->toJson() !!}
            },
            computed: {
                search: function () {
                    var self = this;
                    if (this.query === '') {
                        return this.customers;
                    }
                    return this.customers.filter(function (material) {
                        return material.name.toUpperCase().indexOf(self.query.toUpperCase()) >= 0
                            || material.code.toUpperCase().indexOf(self.query.toUpperCase()) >= 0
                            || material.type.toUpperCase().indexOf(self.query.toUpperCase()) >= 0;
                    });
                }
            }
        });

    </script>
@endsection
