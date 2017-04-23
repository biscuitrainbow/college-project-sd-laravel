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
                    <input id="icon_prefix" type="text" class="validate autocomplete">
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
                        <th>Title</th>
                        <th>Name</th>
                        <th>Street</th>
                        <th>Postal Code/City</th>
                        <th>Country</th>
                        <th>Region</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{$customer['title']}}</td>
                            <td>{{$customer['name']}}</td>
                            <td>{{$customer['street']}}</td>
                            <td>{{$customer['postal']}}</td>
                            <td>{{$customer['country']}}</td>
                            <td>{{$customer['region']}}</td>

                            <td><a href="{{url('/customer/display/'.$customer['id'])}}')}}"
                                   class="waves-effect waves-light btn">Details</a>
                            </td>
                        </tr>
                    @endforeach
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
                materials: {!! $customers->toJson() !!}
            },
            computed: {
                search: function () {
                    var self = this;
                    if (this.query === '') {
                        return this.materials;
                    }
                    return this.materials.filter(function (customer) {
                        return customer.product_name.indexOf(self.query) >= 0
                            || customer.product_id.indexOf(self.query) >= 0
                            || customer.product_type.indexOf(self.query) >= 0;
                    });
                }
            }
        });

    </script>
@endsection

