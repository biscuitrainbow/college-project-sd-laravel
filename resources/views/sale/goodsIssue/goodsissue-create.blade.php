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
    <div id="mainApp">
        <form method="post" action="{{route('UpdateGoodsIssue')}}">
            <h4 style="margin-bottom: 50px">Goods Issue</h4>
            <div v-if="!isEmpty(selected)" class="row">
                <div class="col s12 margin-top-50">
                    <span class="form-title">Sale Order Collection</span>
                </div>
            </div>
            <div v-if="!isEmpty(selected)" class="row">
                <div class="col s12">
                    <table class="highlight">
                        <thead>
                        <tr>
                            <th>Sale Order ID</th>
                            <th>Customer</th>
                            <th>Create Date</th>
                            <th>Request Delivery Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="item in selected">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <input type="hidden" name="sale_order_id[]" :value="item.id">
                            <td>@{{item.id}}</td>
                            <td>@{{item.company_name}}</td>
                            <td>@{{item.created_at}}</td>
                            <td>@{{item.request_date}}</td>
                            <td>
                                <button @click="remove(item)" class="waves-effect waves-light btn">Remove</button>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button type="submit" class="waves-effect waves-light btn margin-top-50">View Status
                                </button>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </form>


        <div class="row">
            <div class="col s12 margin-top-50">
                <span class="form-title">Sale Orders</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <table class="highlight">
                    <thead>
                    <tr>
                        <th>Sale Order ID</th>
                        <th>Customer</th>
                        <th>Create Date</th>
                        <th>Request Delivery Date</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    {{--@foreach($sale_orders as $sale_order)--}}
                    <tr v-for="item in search">
                        <td>@{{item.id}}</td>
                        <td>@{{item.company_name}}</td>
                        <td>@{{item.created_at}}</td>
                        <td>@{{item.request_date}}</td>
                        <td>
                            <button @click="add(item)" class="waves-effect waves-light btn">Add</button>
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
                items: {!! json_encode($sale_orders)!!},
                selected: []
            },
            computed: {
                search: function () {
                    var self = this;
                    if (this.query === '') {
                        return this.items;
                    }
                    return this.items.filter(function (item) {
                        return item.company_name.toUpperCase().indexOf(self.query.toUpperCase()) >= 0;
                    });
                }
            },
            methods: {
                add: function (item) {
                    if ((this.selected.indexOf(item) < 0)) {
                        this.selected.push(item);

                        /* remove from materials list */
                        var index = this.items.indexOf(item);
                        this.items.splice(index, 1);
                    }
                }, remove: function (item) {
                    if ((this.selected.indexOf(item) >= 0)) {
                        /* remove from inquiry list */
                        var index = this.selected.indexOf(item);
                        this.selected.splice(index, 1);

                        /* add to material list */
                        this.items.push(item);
                    }
                },
                isEmpty: function (myObject) {
                    for (var key in myObject) {
                        if (myObject.hasOwnProperty(key)) {
                            return false;
                        }
                    }
                    return true;
                }
            }
        });

    </script>
@endsection()