<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use app;

class CustomerController extends Controller
{
    public function index(){
        return view('customer.customer-create');
    }

    public function create(Request $request){
        $data = $request->all();
        $customer = new Customer();
        $customer->title = $request['title'];
        $customer->name = $request['name'];
        $customer->street = $request['street'];
        $customer->postal = $request['postal'];
        $customer->country = $request['country'];
        $customer->region = $request['region'];
        $customer->save();

        return 'create complete';

    }

    public function indexChange(){
        $data = Customer::all();
        return view('customer.customer-change',compact('data'));
    }

    public function showChange($id){
        $data = Customer::where('id',$id)->first();
        return view('customer.customer-change-result',compact('data'));
    }

    public function change(Request $request){
        $data = $request->all();
        $update = Customer::where('id',$data['id'])->first();
        $update->title = $data['title'];
        $update->name = $data['name'];
        $update->street = $data['street'];
        $update->postal = $data['postal'];
        $update->country = $data['country'];
        $update->region = $data['region'];
        $update->save();

        return 'update complete';
    }
}
