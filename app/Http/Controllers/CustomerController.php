<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use app;

class CustomerController extends Controller {
    public function index() {
        return view('customer.customer-create');
    }

    public function postCustomer(Request $request) {

        $customer = new Customer();
        $customer->company_name = $request->input('company_name');
        $customer->address = $request->input('address');
        $customer->postal_code = $request->input('postal_code');
        $customer->country = $request->input('country');
        $customer->region = $request->input('region');
        $customer->tel = $request->input('tel');
        $customer->postal_code = $request->input('postal');
        $customer->website = $request->input('website');
        $customer->email = $request->input('email');
        $customer->title = $request->input('title');
        $customer->name = $request->input('name');
        $customer->position = $request->input('position');
        $customer->department = $request->input('department');
        $customer->save();

        $status = "Create Successfully";
        return view('material.material-status', compact('status'));
    }

    public function indexChange() {
        $data = Customer::all();
        return view('customer.customer-change', compact('data'));
    }

    public function showChange($id) {
        $data = Customer::where('id', $id)->first();
        return view('customer.customer-change-result', compact('data'));
    }

    public function change(Request $request) {
        $data = $request->all();
        $update = Customer::where('id', $data['id'])->first();
        $update->title = $data['title'];
        $update->name = $data['name'];
        $update->street = $data['street'];
        $update->postal = $data['postal'];
        $update->country = $data['country'];
        $update->region = $data['region'];
        $update->save();

        $status = "Update Successfully";
        return view('material.material-status', compact('status'));
    }

    public function displayCustomers() {
        $customers = Customer::all();
        return view('customer.customer-display', compact('customers'));
    }

    public function displayCustomer($id) {
        $customer = Customer::where('id', $id)->first();
        return view('customer.customer-display-result', compact('customer'));
    }

    public function showDelete() {
        $data = Customer::all();
        return view('customer.customer-delete', compact('data'));
    }

    public function delete(Request $request) {
        $data = $request->all();
        $customer = Customer::find($data['id']);
        $customer->delete();
        $status = "Delete Successfully";
        return view('material.material-status', compact('status'));
    }
}
