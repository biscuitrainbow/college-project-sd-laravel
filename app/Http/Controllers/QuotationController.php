<?php

namespace App\Http\Controllers;

use App\Condition;
use App\Document;
use App\DocumentHasMaterial;
use DB;
use Illuminate\Http\Request;


class QuotationController extends Controller {
    public function indexQuotation() {
        $inquiries = Document::with('customer')->where('document_type_id', '1')->get();
        return view('presale.quotation.quotation-create', compact('inquiries'));
    }

    public function createQuotationForm($id) {
        $items = DocumentHasMaterial::with('material')->where('document_id', $id)->get();
        $inquiry = Document::with('customer')->where('id', $id)->where('document_type_id', '1')->first();
        $generalCondition = Condition::where('condition_type_id', 1)->get();

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
            "
        );

        return view('presale.quotation.quotation-create-form', compact('conditions', 'inquiry', 'items', 'generalCondition'));

    }

    public function create(Request $request) {

        $quotation = new Document();
        $quotation->document_type_id = 2;
        $quotation->condition_id = $request->input('condition_id');
        $quotation->document_id = $request->input('inquiry_id');
        $quotation->customer_id = $request->input('customer_id');
        $quotation->request_date = $request->input('request_date');
        $quotation->description = $request->input('description');
        $quotation->save();
        $quotation->id;

        for ($i = 0; $i < sizeof($request->input('material_id')); $i++) {
            $document_has_material = new DocumentHasMaterial();
            $document_has_material->document_id = $quotation->id;
            $document_has_material->material_id = $request->input('material_id')[$i];
            $document_has_material->quantity = $request->input('quantity')[$i];
            $document_has_material->save();
        }

      return redirect(url('/quotation/display/' . $quotation->id));

    }

    public function displayQuotation() {

        $quotations = DB::select("
        select documents.id,customers.company_name,documents.created_at,documents.request_date
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where document_type_id = 2;"
        );

        return view('presale.quotation.quotation-display', compact('quotations'));
    }

    public function displayQuotationDocument($id) {

        $customer = DB::select("
        select *
        from documents
        join customers
        on (documents.customer_id = customers.id)
        where documents.id = '$id'
        ");

        $quotation = DB::select("
         select document_has_materials.* ,materials.code,materials.name,materials.price,documents.request_date,documents.created_at
        from document_has_materials
         join materials
         on (document_has_materials.material_id = materials.id)
         join documents
         on (document_has_materials.document_id = documents.id)
        where document_has_materials.document_id = '$id'
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




        return view('presale.quotation.quotationdocument', [
            'customer' => $customer,
            'quotation' => $quotation,
            'total' => $total,
            'generaldiscount' => $generalDiscount,
            'discount' => $discount,
            'netprice' => $netPrice
        ]);



//            return $generalCondition;
    }
}
