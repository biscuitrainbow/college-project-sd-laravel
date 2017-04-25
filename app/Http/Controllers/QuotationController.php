<?php

namespace App\Http\Controllers;

use App\Condition;
use App\Document;
use App\DocumentHasMaterial;


class QuotationController extends Controller {
    public function indexQuotation() {
        $inquiries = Document::with('customer')->where('document_type_id', '1')->get();
        return view('presale.quotation.quotation-create', compact('inquiries'));
    }

    public function createQuotationForm($id) {
        $items = DocumentHasMaterial::with('material')->where('document_id', $id)->get();
        $inquiry = Document::with('customer')->where('id', $id)->where('document_type_id', '1')->first();
        $conditions = Condition::all();

        return view('presale.quotation.quotation-create-form', compact('inquiry'), compact('items','conditions'));
    }

    public function displayQuotation() {
        return view('presale.quotation.quotation-display');
    }
}
