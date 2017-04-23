@extends('default.layout')
@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Customer</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection
@section('content')
    <div id="mainApp">
        <h4 style="margin-bottom: 50px">Display Customer</h4>
        <form action="">
            <div class="row">
                <div class="input-field col s12 search-box">
                    <i class="material-icons prefix">search</i>
                    <input v-model="query" id="icon_prefix" type="text" class="validate autocomplete">
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
                        <th>Name</th>
                        <th>Address</th>
                        <th>Postal Code</th>
                        <th>Country</th>
                        <th>Region</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="customer in search">
                        <td>@{{customer.company_name}}</td>
                        <td>@{{customer.address}}</td>
                        <td>@{{customer.postal_code}}</td>
                        <td>@{{customer.country}}</td>
                        <td>@{{customer.region}}</td>
                        <td><a :href="'{{url('/customer/display')}}/' + customer.id"
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
                customers: {!! $customers->toJson() !!}
            },
            computed: {
                search: function () {
                    var self = this;
                    if (this.query === '') {
                        return this.customers;
                    }
                    return this.customers.filter(function (customer) {
                        return customer.company_name.indexOf(self.query) >= 0
                            || customer.region.indexOf(self.query) >= 0
                            || customer.name.indexOf(self.query) >= 0
                            || customer.postal_code.indexOf(self.query) >= 0;
                    });
                }
            }
        });

    </script>
@endsection

