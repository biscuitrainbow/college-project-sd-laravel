<?php

namespace App\Http\Controllers;

use App\Document;
use App\DocumentHasMaterial;
use DB;
use Illuminate\Http\Request;


class QuotationController extends Controller
{
    public function indexQuotation()
    {
        $inquiries = Document::with('customer')->where('document_type_id', '1')->get();
        return view('presale.quotation.quotation-create', compact('inquiries'));
    }

    public function createQuotationForm($id)
    {
        $items = DocumentHasMaterial::with('material')->where('document_id', $id)->get();
        $inquiry = Document::with('customer')->where('id', $id)->where('document_type_id', '1')->first();


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


        return view('presale.quotation.quotation-create-form',
            compact('conditions','inquiry','items'));

    }

    public function displayQuotation()
    {
        return view('presale.quotation.quotation-display');
    }
}
