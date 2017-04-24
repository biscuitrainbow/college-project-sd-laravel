<?php

namespace App\Http\Controllers;

use App\Document;
use App\DocumentHasMaterial;
use Illuminate\Http\Request;


class QuotationController extends Controller
{
    public function indexQuotation()
    {
        $inquiries = Document::with('customer')->where('document_type_id', '1')->get();
        return view('presale.quotation.quotation-create', compact('inquiries'));
    }

    public function createQuotationForm($id)
    {
        $items = DocumentHasMaterial::with('material')->where('document_id',$id)->get();
        $inquiry = Document::with('customer')->where('id',$id)->where('document_type_id', '1')->first();

//        return $items;
        return view('presale.quotation.quotation-create-form', compact('inquiry'),compact('items'));
    }

    public function displayQuotation()
    {
        return view('presale.quotation.quotation-display');
    }
}
