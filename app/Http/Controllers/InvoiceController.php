<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function create(){
        return view('payment.invoice.invoice-create');
    }

    public function display(){
        return view('payment.invoice.invoice-display');
    }
}
