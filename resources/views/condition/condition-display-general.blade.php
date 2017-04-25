@extends('default.layout')

@section('breadcrumb')
    <a href="dashboard-overall.phpp" class="breadcrumb">Sale and Distribution</a>
    <a href="#!" class="breadcrumb">Condition</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Material</a>
    <a href="{{route('displayMaterials')}}" class=" breadcrumb">Display</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="{{route('logout')}}">Logout</a></li>
    </ul>
@endsection

@section('content')
    <div id="mainApp">
        <h4 style="margin-bottom: 50px">Display General Condition</h4>
        <form action="">
            <div v-model="query" class="input-field col s12 search-box">
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
                        <th>Discount Name</th>
                        <th>Discount Value</th>
                        <th>Min Quantity</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- <tr v-for="condition in search">  ยังเซิตไม่ได้
                        <td>@{{condition.name}}</td>
                        <td>@{{condition.discount}}</td>
                        <td>@{{condition.min}}</td>
                        <td><a :href="'{{url('/material/display')}}/' + condition.id"
                               class="waves-effect waves-light btn">View</a>
                        </td>
                    </tr>-->
                    @foreach($general as $gen)
                        <tr>
                            <td> {{ $gen->name }}</td>
                            <td> {{  $gen->discount }}</td>
                            <td> {{  $gen->min }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="{{asset('js/vue.js')}}"></script>
    <!-- <script>
         var mainApp = new Vue({
             el: '#mainApp',
             data: {
                 query: '' ,
                 conditions: {//!! $conditions->toJson() !!}
             },
             computed: {
                 search: function () {
                     var self = this;
                     if (this.query === '') {
                         return this.conditions;
                     }
                     return this.conditions.filter(function (item) {
                         return item.name.toUpperCase().indexOf(self.query.toUpperCase()) >= 0
                     });
                 }
             }
         });

     </script> -->
@endsection