<?php

namespace App\Http\Controllers;

use App\Document;

class SaleOrderController extends Controller {
    public function create() {
        $quotations = Document::where('document_type_id', 2)->get();
        return view('sale.sale_order.saleorder-create', compact('quotations'));
    }

    public function display() {
        return view('sale.sale_order.saleorder-display');
    }

    public function createSaleOrderForm($id) {
        //TODO : implement here
        return view('sale.sale_order.saleorder-create-form');
    }
}
