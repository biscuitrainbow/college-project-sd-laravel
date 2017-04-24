<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Document;
use App\DocumentHasMaterial;
use App\Inquiry;
use App\Material;
use Illuminate\Http\Request;

class InquiryController extends Controller {
    public function showCreate() {
        $customers = Customer::all();
        $materials = Material::all();
        return view('presale.inquiry.inquiry-create', compact('materials', 'customers'));
    }

    public function create(Request $request) {

        $inquiry = new Document();
        $inquiry->document_type_id = 1;
        $inquiry->customer_id = $request->input('customer_id');
        $inquiry->save();
        $inquiry->id;

        for ($i = 0; $i < sizeof($request->input('materials')); $i++) {
            $document_has_material = new DocumentHasMaterial();
            $document_has_material->document_id = $inquiry->id;
            $document_has_material->material_id = $request->input('materials')[$i];
            $document_has_material->quantity = $request->input('quantity')[$i];
            $document_has_material->save();
        }


//        $inquiry->save();
//
//        $status = "Create Successfully";
//        return view('material . material - status', compact('status'));
    }

    public function displayInquiries() {
        $inquiries = Document::with('customer')->get();
        return view('presale.inquiry.inquiry-display', compact('inquiries'));
    }

    public function displayInquiry($id) {
        $items = DocumentHasMaterial::with('material')->where('document_id', $id)->get();
        $customer = Document::with('customer')->where('id', $id)->first();
        //return $customer;
        return view('presale.inquiry.inquiry-document', compact('items'), compact('customer'));
    }
}
