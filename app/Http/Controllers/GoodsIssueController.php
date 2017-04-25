<?php

namespace App\Http\Controllers;

use App\Document;
use App\Material;
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

    public function CreateForm($id){
        $sale_order = DB::select("
        select documents.id,customers.id as customer_id,documents.description,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 4 and documents.id ='$id'");

        $materials = DB::select("
        select document_has_materials.* ,materials.code,materials.name,materials.price,materials.type,
        documents.request_date,documents.created_at,materials.quantity as stock
        from document_has_materials
         join materials
         on (document_has_materials.material_id = materials.id)
         join documents
         on (document_has_materials.document_id = documents.id)
        where document_has_materials.document_id = '$id'
        ");


//    return $sale_order;
//        return $materials;
        return view('sale.goodsIssue.goodsissue-create-form',compact('sale_order','materials'));
    }

    public function update(Request $request){
        $materials = $request->input('material_id');
        //TODO::Update stock && Create document
    }

    public function display(){
        return view('sale.goodsIssue.goodsissue-display');
    }
}
