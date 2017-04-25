<?php

namespace App\Http\Controllers;

use App\Document;
use DB;

class SaleOrderController extends Controller {
    public function create() {
        $quotations = Document::where('document_type_id', 2)->get();
        return view('sale.sale_order.saleorder-create', compact('quotations'));
    }


    public function createSaleOrderForm($id) {
        //TODO : implement here
        $quotation = DB::select("
        select customers.company_name,documents.request_date,documents.created_at
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where documents.id = '$id'
        ");

        $materials = DB::select("
        select materials.*
        from document_has_materials
        join materials
        on (document_has_materials.material_id = materials.id)
        join documents
        on (document_has_materials.document_id = documents.id)
        where documents.id = '$id';
        ");

        $conditions = DB::select(
            "select *
             from condition_material
             join conditions
             on(conditions.id = condition_material.condition_id)
             join materials
             on (condition_material.material_id = materials.id)
             join document_has_materials
             on (document_has_materials.material_id = materials.id)
             join documents
             on (document_has_materials.document_id = documents.id)
             where documents.id = '$id'
            ");


//        return $conditions;
//        return $quotation;
        return $materials;
//        return view('sale.sale_order.saleorder-create-form',compact('quotation','materials','conditions'));
    }


    public function display() {
        return view('sale.sale_order.saleorder-display');
    }
}
