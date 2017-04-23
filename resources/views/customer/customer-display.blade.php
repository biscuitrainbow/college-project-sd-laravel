@extends('default.layout')
@section('content')
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
                @foreach($data as $datas)
                    <tr>
                        <td>{{$datas['title']}}</td>
                        <td>{{$datas['name']}}</td>
                        <td>{{$datas['street']}}</td>
                        <td>{{$datas['postal']}}</td>
                        <td>{{$datas['country']}}</td>
                        <td>{{$datas['region']}}</td>

                        <td><a href="{{url('/customer/display/'.$datas['id'])}}')}}"
                               class="waves-effect waves-light btn">Details</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

