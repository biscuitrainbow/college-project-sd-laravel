<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleOrderController extends Controller
{
    public function create(){
        return view('sale.sale_order.saleorder-create');
    }

    public function display(){
        return view('sale.sale_order.saleorder-display');
    }
}
