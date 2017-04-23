@extends('default.layout')
@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Presale Process</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Inquiry</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection
@section('content')
    <div id="mainApp">
        <h4 class="main-title">Create Inquiry</h4>
        <form action="{{route('postInquiry')}}" method="post">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="row">
                <div class="col s12 ">
                    <span class="form-title">General Infomation</span>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s4">
                    <input name="create_date" type="date" class="datepicker">
                    <label for="date">Create Date</label>
                </div>
                <div class="input-field col s8">
                    <input name="customer_name" id="customer" type="text" class="validate">
                    <label for="customer">Customer</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <input name="address" id="soldparty" type="text" class="validate">
                    <label for="soldparty">Sold to party/Ship to party</label>
                </div>
                <div class="input-field col s4">
                    <input name="request_date" type="date" class="datepicker">
                    <label for="requestdelivery">Request delivery date</label>
                </div>
            </div>

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
                        <tr v-for="material in inqMaterial">
                            <td>@{{material.code}}</td>
                            <td>@{{material.name}}</td>
                            <td>@{{material.price}}</td>
                            <td>@{{material.qunatity}}</td>
                            <td>@{{material.type}}</td>
                            <td>@{{material.categories}}</td>
                            <input type="hidden" name="materials[]" :value="material.code ">
                            <td>
                                <button @click.stop.prevent="remove(material)" class="waves-effect waves-light btn">
                                    Remove
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col s12 margin-top-50">
                    <span class="form-title">Materials</span>
                </div>
            </div>
            <div class="input-field col s12 search-box">
                <i class="material-icons prefix">search</i>
                <input v-model="query" id="icon_prefix" type="text" class="validate">
                <label for="icon_prefix">Search by product name or id</label>
            </div>
            <div class="row">
                <div class="col s12 my-table">
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
                            <td>@{{material.qunatity}}</td>
                            <td>@{{material.type}}</td>
                            <td>@{{material.categories}}</td>
                            <td>
                                <button @click.stop.prevent="add(material)" class="waves-effect waves-light btn">Add
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Submit Button -->
            <div class="row">
                <div class="col s12" style="text-align: right;">
                    <button type="submit" class="waves-effect waves-light btn">Create Inquiry Document</button>
                </div>
            </div>
        </form>
    </div>
    <script src="{{asset('js/vue.js')}}"></script>
    <script>
        var mainApp = new Vue({
            el: '#mainApp',
            data: {
                query: '',
                customers: {!! $materials->toJson() !!},
                inqMaterial: []
            },
            computed: {
                search: function () {
                    var self = this;
                    if (this.query === '') {
                        return this.customers;
                    }
                    return this.customers.filter(function (material) {
                        return material.name.indexOf(self.query) >= 0
                            || material.code.indexOf(self.query) >= 0
                            || material.type.indexOf(self.query) >= 0;
                    });
                }
            },
            methods: {
                add: function (material) {
                    if ((this.inqMaterial.indexOf(material) < 0)) {
                        this.inqMaterial.push(material);
                    }
                },
                remove: function (material) {
                    if ((this.inqMaterial.indexOf(material) >= 0)) {
                        var index = this.inqMaterial.indexOf(material);
                        console.log(index);
                        this.inqMaterial.splice(index, 1);
                    }
                }
            }
        });

    </script>
@endsection()

