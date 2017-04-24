@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Presale Process</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Inquiry</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <div id="mainApp">
        <h4 style="margin-bottom: 50px">Display Inquiry</h4>
        <form action="">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input v-model="query" id="icon_prefix" type="text" class="validate">
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
                        <th>Customer</th>
                        <th>Create Date</th>
                        <th>Request Delivery Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    <tr v-for="inquiry in search">
                        <td>@{{ inquiry.customer.company_name }}</td>
                        <td>@{{ inquiry.created_at }}</td>
                        <td>Request Date 10/04/2017</td>
                        <td><a :href="'{{url('/inquiry/display/')}}/' + inquiry.id"
                               class="waves-effect waves-light btn">Details</a></td>
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
                inquiries: {!! $inquiries->toJson() !!}
            },
            computed: {
                search: function () {
                    var self = this;
                    if (this.query === '') {
                        return this.inquiries;
                    }
                    return this.inquiries.filter(function (item) {
                        return item.customer.company_name.toUpperCase().indexOf(self.query.toUpperCase()) >= 0;
                    });
                }
            }
        });

    </script>
@endsection()