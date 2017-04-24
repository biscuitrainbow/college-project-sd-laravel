<?php

namespace App\Http\Controllers;

use App\Document;
use App\Inquiry;
use App\Material;
use Illuminate\Http\Request;

class InquiryController extends Controller {
    public function showCreate() {
        $materials = Material::all();
        return view('presale.inquiry.inquiry-create', compact('materials'));
    }

    public function create(Request $request) {

        foreach ($request->input('materials') as $material) {
            $inquiry = new Document();
            $inquiry->create_date = $request->input('create_date');
            $inquiry->customer_name = $request->input('customer_name');
            $inquiry->address = $request->input('address');
            $inquiry->request_date = $request->input('request_date');
        }


//        $inquiry->save();
//
//        $status = "Create Successfully";
//        return view('material . material - status', compact('status'));
    }

    public function displayInquiries() {
        return view('presale . inquiry . inquiry - display');
    }
}
