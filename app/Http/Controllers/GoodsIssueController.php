<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use DB;
class GoodsIssueController extends Controller
{
    public function create(){
        $sale_orders = DB::select("
        select documents.id,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 4"
        );
        return view('sale.goodsIssue.goodsissue-create',compact('sale_orders'));
    }

    public function display(){
        return view('sale.goodsIssue.goodsissue-display');
    }
}
