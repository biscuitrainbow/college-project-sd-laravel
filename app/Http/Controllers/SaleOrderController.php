<?php

namespace App\Http\Controllers;

use App\Document;
use App\DocumentHasMaterial;
use DB;
use Illuminate\Http\Request;

class SaleOrderController extends Controller {
    public function create() {
        $quotations = Document::where('document_type_id', 2)->get();
        return view('sale.sale_order.saleorder-create', compact('quotations'));
    }


    public function createSaleOrderForm($id) {
        //TODO : implement here
        $quotation = DB::select("
        select documents.id as quotation_id,documents.request_date,documents.description,customers.*
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where documents.id = '$id'
        ");

        $materials = DB::select("
        select document_has_materials.quantity as qty,materials.*
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
//        return $id;
//        return $quotation;
//        return $materials;
        return view('sale.sale_order.saleorder-create-form',compact('quotation','materials','conditions'));
    }

    public function store(Request $request){

        $so = new Document();
        $so->document_type_id = 4;
        $so->condition_id = $request->input('condition_id');
        $so->document_id = $request->input('quotation_id');
        $so->customer_id = $request->input('customer_id');
        $so->request_date = $request->input('request_date');
        $so->description = $request->input('description');
        $so->save();
        $so->id;

        for ($i = 0; $i < sizeof($request->input('material_id')); $i++) {
            $document_has_material = new DocumentHasMaterial();
            $document_has_material->document_id = $so->id;
            $document_has_material->material_id = $request->input('material_id')[$i];
            $document_has_material->quantity = $request->input('quantity')[$i];
            $document_has_material->save();
        }
        return $request->all();
    }

    public function display() {
        $sale_orders = DB::select("
        select documents.id,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 4;"
        );
//        return $sale_orders;
        return view('sale.sale_order.saleorder-display',compact('sale_orders'));
    }

    public function displaySaleOrderDocument($id){
        $customer = DB::select("
        select *
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where documents.id = '$id'
        ");

        print_r($customer);
        $quotation = DB::select("
        select * 
        from document_has_materials
         join materials
         on (document_has_materials.material_id = materials.id)
        where document_has_materials.document_id = '$id'
        ");

        print_r($quotation);
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
        print_r($conditions);
    }
}
