<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function create(){
        return view('payment.receipt.receipt-create');
    }

    public function display(){
        return view('payment.receipt.receipt-display');
    }
}
