<?php

namespace App\Http\Controllers;

use app;
use App\Condition;
use App\ConditionMaterial;
use App\Material;
use Illuminate\Http\Request;

class ConditionController extends Controller {
    public function showCreateGeneral() {
        return view('condition.condition-create-general', compact('data'));
    }


    public function showCreateMaterial() {
        $materials = Material::all();
        return view('condition.condition-create-material', compact('materials'));
    }

    public function createGeneral(Request $request) {
        $condition = new Condition();
        $condition->name = $request->input('condition_name');
        $condition->discount = $request->input('discount_price');
        $condition->min = $request->input('min_price');
        $condition->condition_type_id = 1;
        $condition->save();
        
//        $status = "Create Successfully";
//        return view('material.material-status', compact('status'));
    }

    public function createMaterial(Request $request) {
        $condition = new Condition();
        $condition->name = $request->input('condition_name');
        $condition->discount = $request->input('discount_price');
        $condition->min = $request->input('min_quantity');
        $condition->condition_type_id = 2;
        $condition->save();

        $conditionMaterial = new ConditionMaterial();
        $conditionMaterial->condition_id = $condition->id;
        $conditionMaterial->material_id = $request->input('material_id');
        $conditionMaterial->save();

//        $status = "Create Successfully";
//        return view('material.material-status', compact('status'));
    }

    public function indexDisplay() {
        $general = Condition::where('condition_type', 'general')->get();
        $material = Condition::where('condition_type', 'material')->get();

        return view('condition.condition-display', compact('general'), compact('material'));
    }

    public function displayGenerals() {
        return view('condition.condition-display-general', compact('condition'));
    }

    public function displayGeneral($id) {
        $condition = Condition::where('id', $id)->first();
    }


    public function displayMaterials() {
        $conditions = Condition::where('condition_type_id', 2)->get();
        return view('condition.condition-display-material', compact('conditions'));
    }

    public function displayMaterial($id) {
        $condition = Condition::where('id', $id)->first();
        return view('condition.condition-display-material', compact('condition'));
    }
}
