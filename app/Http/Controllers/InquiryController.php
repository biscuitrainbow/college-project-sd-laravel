<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function showCreate(){
        return view('presale.inquiry.inquiry-create');
    }
}
