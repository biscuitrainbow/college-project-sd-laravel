@extends('default.layout')
@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Sale</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Sale Order</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Create</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection
@section('content')
    <div id="mainApp">
        <form action="">
            <!-- Reference from Inquiry -->
            <div class="row">
                <div class="col s12">
                    <h5 style="margin-bottom: 50px">Select Quotation</h5>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="material-icons prefix">search</i>
                            <input v-model="query" id="icon_prefix" type="text" class="validate">
                            <label for="icon_prefix">Search by product name or id</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <table class="highlight">
                <thead>
                <tr>
                    <th>Document No.</th>
                    <th>Inquiry Ref.</th>
                    <th>Description</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <tr v-for="item in search">
                    <td>@{{item.id}}</td>
                    <td>@{{item.document_id}}</td>
                    <td>@{{item.description}}</td>
                    <td>
                        <a class="waves-effect waves-light btn" :href="'{{url('/so/create/form/')}}/' + item.id">
                            Select
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>

    <script src="{{asset('js/vue.js')}}"></script>
    <script>
        var mainApp = new Vue({
            el: '#mainApp',
            data: {
                query: '',
                items: {!! $quotations->toJson() !!},
                selected: {}
            },
            computed: {
                search: function () {
                    var self = this;
                    if (this.query === '') {
                        return this.items;
                    }
                    return this.items.filter(function (item) {
                        console.log(item.description.toUpperCase());
                        return item.id.toString().toUpperCase().indexOf(self.query.toUpperCase()) >= 0
                            || item.description.toUpperCase().indexOf(self.query.toUpperCase()) >= 0;
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