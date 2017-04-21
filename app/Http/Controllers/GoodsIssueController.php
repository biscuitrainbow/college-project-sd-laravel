<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsIssueController extends Controller
{
    public function create(){
        return view('sale.goodsIssue.goodsissue-create');
    }

    public function display(){
        return view('sale.goodsIssue.goodsissue-display');
    }
}
