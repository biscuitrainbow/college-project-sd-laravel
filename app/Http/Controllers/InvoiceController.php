<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function create(){
        $good_issues = DB::select("
        select documents.id,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 5"
        );

        return view('payment.invoice.invoice-create',compact('good_issues'));
    }

    public function CreateForm($id){
        $goods_issue = DB::select("
        select documents.id,customers.id as customer_id,documents.description,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 5 and documents.id ='$id'");

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

        return view('payment.invoice.invoice-create-form',compact('goods_issue','materials'));
    }

    public function store(Request $request){
        $invoice = new Document();
        $invoice->document_type_id = 6;
        $invoice->condition_id = $request->input('condition_id');
        $invoice->document_id = $request->input('quotation_id');
        $invoice->customer_id = $request->input('customer_id');
        $invoice->request_date = $request->input('request_date');
        $invoice->description = $request->input('description');
        $invoice->save();
        $invoice->id;

        for ($i = 0; $i < sizeof($request->input('material_id')); $i++) {
            $document_has_material = new DocumentHasMaterial();
            $document_has_material->document_id = $invoice->id;
            $document_has_material->material_id = $request->input('material_id')[$i];
            $document_has_material->quantity = $request->input('quantity')[$i];
            $document_has_material->save();
        }
        return $request->all();
    }

    public function display(){
        $invoices = DB::select("
        select documents.id,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 6;"
        );
        return view('payment.invoice.invoice-display',compact('invoices'));
    }

    public function displayInvoiceDocument($id){
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

        return view('payment.invoice.invoice-document');
    }
}
