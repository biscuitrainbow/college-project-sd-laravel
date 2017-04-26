<?php

namespace App\Http\Controllers;

use App\Document;
use App\DocumentHasMaterial;
use DB;
use Illuminate\Http\Request;

class ReceiptController extends Controller {
    public function create() {
        $invoices = DB::select("
        select documents.id,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 6");
        return view('payment.receipt.receipt-create', compact('invoices'));
    }

    public function CreateForm($id) {
        $invoice = DB::select("
        select documents.id,customers.id as customer_id,documents.condition_id,documents.description,customers.company_name,documents.created_at,documents.request_date
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

//        return $materials;
        return view('payment.receipt.receipt-create-form', compact('invoice', 'materials'));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function store(Request $request) {
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
            $document_has_material->material_id = $request->input('material_id')[$i];
            $document_has_material->quantity = $request->input('quantity')[$i];
            $document_has_material->save();
        }
//        return $request->all();
        return redirect('/receipt/display/' . $receipt->id);
    }

    public function display() {
        $receipts = DB::select("
        select documents.id,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 7;"
        );

//        return $receipts;
        return view('payment.receipt.receipt-display', compact('receipts'));
    }

    public function displayReceiptDocument($id) {
        $customer = DB::select("
        select *
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where documents.id = '$id'
        ");

        // print_r($customer);
        $quotation = DB::select(" 
        select document_has_materials.* ,materials.code,materials.name,materials.price,documents.request_date,documents.created_at
        from document_has_materials
         join materials
         on (document_has_materials.material_id = materials.id)
         join documents
         on (document_has_materials.document_id = documents.id)
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

        $generalCondition = DB::select(
            "select conditions.*
            from documents
            join conditions
            on (documents.condition_id = conditions.id)
            where documents.id = '$id'"
        );

        $total = 0;
        foreach ($quotation as $product) { // find total
            $unitPrice = $product->quantity * $product->price;
            $total += $unitPrice;
        }// end total

        $discount = 0;
        $unitDiscount = [];

        foreach ($conditions as $condition) { // find unit discount
            if ($condition->quantity >= $condition->min) {
                $unitDiscount[] = ($condition->quantity * $condition->price) * ($condition->discount / 100);
            }
        }// end find unit discount


        for ($i = 0; $i < sizeof($unitDiscount); $i++) { // find discount
            $discount += $unitDiscount[$i];
        }

        $cal = $total - $discount;
        if (isset($generalCondition[0])) {
            $generalDiscount = ($generalCondition[0]->discount / 100) * $cal;
            $netPrice = $total - ($discount + $generalDiscount);
        } else {
            $generalDiscount = 0;
            $netPrice = $total - ($discount + $generalDiscount);
        }




        return view('payment.receipt.receipt-document', [
            'customer' => $customer,
            'quotation' => $quotation,
            'total' => $total,
            'generaldiscount' => $generalDiscount,
            'discount' => $discount,
            'netprice' => $netPrice
        ]);

    }
}
