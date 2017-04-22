<?php

namespace App\Http\Controllers;

use App\Condition;
use App\Material;
use Illuminate\Http\Request;
use app;

class ConditionController extends Controller {
    public function showCreateGeneral() {
        return view('condition.condition-create-general', compact('data'));
    }


    public function showCreateMaterial() {
        $data = Material::all();
        return view('condition.condition-create-material', compact('data'));
    }

    public function createGeneral(Request $request) {
        $condition = new Condition();
        $condition['conditionname'] = $request['conditionname'];
        $condition['discountprice'] = $request['discountprice'];
        $condition['minprice'] = $request['minprice'];
        $condition['material_id'] = 0;
        $condition['minquantity'] = 0;
        $condition['condition_type'] = 'general';
        $condition->save();

        $status = "Create Successfully";
        return view('material.material-status', compact('status'));
    }

    public function createMaterial(Request $request) {
        $condition = new Condition();
        $condition['conditionname'] = $request['conditionname'];
        $condition['discountprice'] = $request['discountprice'];
        $condition['minprice'] = 0;
        $condition['minquantity'] = $request['minquantity'];
        $condition['material_id'] = $request['id'];
        $condition['condition_type'] = 'material';
        $condition->save();

        $status = "Create Successfully";
        return view('material.material-status', compact('status'));
    }

    public function indexDisplay() {
        $general = Condition::where('condition_type', 'general')->get();
        $material = Condition::where('condition_type', 'material')->get();

        return view('condition.condition-display', compact('general'), compact('material'));
    }

    public function displayGeneral($id) {
        $condition = Condition::where('id', $id)->first();
        return view('condition.condition-display-general', compact('condition'));
    }

    public function displayMaterial($id) {
        $condition = Condition::where('id', $id)->first();
        return view('condition.condition-display-material', compact('condition'));
    }
}
