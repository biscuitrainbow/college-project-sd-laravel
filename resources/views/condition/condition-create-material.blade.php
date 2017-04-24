@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Condition</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Material</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <div id="mainApp">
        <h4 style="margin-bottom: 50px">Create Material Condition</h4>
        <h5 class="sub-title">Step 1 : Search and choose material </h5>
        <div class="input-field col s12 search-box">
            <i class="material-icons prefix">search</i>
            <input v-model="query" id="icon_prefix" type="text" class="validate">
            <label for="icon_prefix">Search by product name or id</label>
        </div>

        <!-- Table -->
        <table style="margin-bottom: 50px" class="highlight">
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
                <td>@{{material.code}}</td>
                <td>@{{material.name}}</td>
                <td>@{{material.price}}</td>
                <td>@{{material.quantity}}</td>
                <td>@{{material.type}}</td>
                <td>@{{material.category}}</td>
                <td>
                    <button @click="add(material)" class="waves-effect waves-light btn">Select</button>
                </td>
            </tr>
            </tbody>
        </table>

        <div v-if="!isEmpty(selected)">
            <h5 class="sub-title">Step 2 : Add detail</h5>
            <form action="{{route('postConditionMaterial')}}" method="post">
                <input type="hidden" name="material_id" :value="selected.id">
                <input type="hidden" name="type_id" :value="1">

                <div class="row">
                    <div class="input-field col s6" style="">
                        <input disabled type="text" class="validate" :value="selected.name">
                        <label class="active" for="material_code">Material Code</label>
                    </div>
                    <div class="input-field col s6" style="">
                        <input disabled type="text" class="validate" :value="selected.name">
                        <label class="active" for="material_name">Material Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12" style="">
                        <input name="condition_name" type="text" class="validate">
                        <label for="condition_name">Condition Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <input name="discount_price" type="text" class="validate">
                        <label for="discount_price">Discount (%)</label>
                    </div>
                    <div class="input-field col s6">
                        <input name="min_quantity" type="text" class="validate">
                        <label for="min_quantity">Min Quantity</label>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="row">
                    <div class="col s12" style="text-align: right;">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <button type="submit" class="waves-effect waves-light btn">Create Condition
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="{{asset('js/vue.js')}}"></script>
    <script>
        var mainApp = new Vue({
            el: '#mainApp',
            data: {
                query: '',
                materials: {!! $materials->toJson() !!},
                selected: {}
            },
            computed: {
                search: function () {
                    var self = this;
                    if (this.query === '') {
                        return this.materials;
                    }
                    return this.materials.filter(function (material) {
                        return material.name.toUpperCase().indexOf(self.query.toUpperCase()) >= 0
                            || material.code.toUpperCase().indexOf(self.query.toUpperCase()) >= 0
                            || material.type.toUpperCase().indexOf(self.query.toUpperCase()) >= 0;
                    });
                }
            },
            methods: {
                add: function (material) {
                    this.selected = material;
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

@endsection