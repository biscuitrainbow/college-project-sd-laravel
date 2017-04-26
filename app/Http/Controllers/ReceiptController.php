<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function create(){
        $invoices = DB::select("
        select documents.id,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 6");
        return view('payment.receipt.receipt-create',compact('invoices'));
    }

    public function CreateForm($id){
        $invoice = DB::select("
        select documents.id,customers.id as customer_id,documents.description,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 6 and documents.id ='$id'");

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

        return view('payment.receipt.receipt-create-form',compact('invoice','materials'));
    }

    public function store(Request $request){
        $receipt = new Document();
        $receipt->document_type_id = 7;
        $receipt->condition_id = $request->input('condition_id');
        $receipt->document_id = $request->input('quotation_id');
        $receipt->customer_id = $request->input('customer_id');
        $receipt->request_date = $request->input('request_date');
        $receipt->description = $request->input('description');
        $receipt->save();
        $receipt->id;

        for ($i = 0; $i < sizeof($request->input('material_id')); $i++) {
            $document_has_material = new DocumentHasMaterial();
            $document_has_material->document_id = $receipt->id;
            $document_has_material->material_id = $receipt->input('material_id')[$i];
            $document_has_material->quantity = $request->input('quantity')[$i];
            $document_has_material->save();
        }
        return $request->all();
    }
    public function display(){
        $receipts = DB::select("
        select documents.id,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 7;"
        );
        return view('payment.receipt.receipt-display',compact('receipts'));
    }

    public function displayReceiptDocument($id){
        $customer = DB::select("
        select *
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where documents.id = '$id'
        ");

        // print_r($customer);
        $quotation = DB::select("
         select document_has_materials.* ,materials.code,materials.name,materials.price,documents.request_date,documents.created_at,conditions.discount,conditions.min
        from document_has_materials
         join materials
         on (document_has_materials.material_id = materials.id)
         join documents
         on (document_has_materials.document_id = documents.id)
         join condition_material
         on (materials.id = condition_material.material_id)
         join conditions
         on (condition_material.condition_id = conditions.id)
        where document_has_materials.document_id = '$id'
        ");

        // print_r($quotation);
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

        return view('payment.receipt.receipt-document');
    }
}
