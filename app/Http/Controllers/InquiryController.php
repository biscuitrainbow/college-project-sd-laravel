<?php

namespace App\Http\Controllers;

use App\Inquiry;
use App\Material;
use Illuminate\Http\Request;

class InquiryController extends Controller {
    public function showCreate() {
        $materials = Material::all();
        return view('presale.inquiry.inquiry-create', compact('materials'));
    }

    public function create(Request $request) {
//        $data = $request->all();
//        $inquiry = new Inquiry();
//        $inquiry['create_date'] = $data['create_date'];
//        $inquiry['customer_name'] = $data['customer_name'];
//        $inquiry['address'] = $data['address'];
//        $inquiry['request_date'] = $data['request_date'];
//        $inquiry['material'] = $data['material'];
//        $inquiry['quantity'] = $data['quantity' . $data['material']];
//        $inquiry['bill_method'] = $data['bill_method'];
//        $inquiry['invoice_date'] = $data['invoice_date'];
//        $inquiry->save();
//
//        $status = "Create Successfully";
//        return view('material.material-status', compact('status'));
    }

    public function displayInquiries() {
        return view('presale.inquiry.inquiry-display');
    }
}
