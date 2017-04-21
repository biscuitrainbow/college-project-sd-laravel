<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseOrderController extends Controller
{
    public function create(){
        return view('sale.po.customerpurchaseorder-create');
    }

}
