<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuotationController extends Controller
{
    public function indexQuotation(){
        return view('presale.quotation.quotation-create');
    }

    public function displayQuotation(){
        return view('presale.quotation.quotation-display');
    }
}
