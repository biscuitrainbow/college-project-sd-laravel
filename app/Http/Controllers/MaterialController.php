<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use app;

class MaterialController extends Controller {
    public function index() {
        return view('material.material-create');
    }

    public function create(Request $request) {
        $material = new Material();
        $material['code'] = $request['product_id'];
        $material['name'] = $request['product_name'];
        $material['price'] = $request['product_price'];
        $material['quantity'] = $request['product_qty'];
        $material['type'] = $request['product_type'];
        $material['category'] = $request['product_categories'];

        echo $material->toJson();
        $material->save();

        $status = "Create Successfully";
        return view('material.material-status', compact('status'));
    }

    public function displayMaterials() {
        $materials = Material::get();
        return view('material.material-display', compact('materials'));
    }

    public function displayMaterial($id) {
        $data = Material::where('id', $id)->first();
        return view('material.material-display-result', compact('data'));
    }

    public function showDelete() {
        $data = Material::all();
        return view('material.material-delete', compact('data'));
    }

    public function delete(Request $request) {
        $data = $request->all();
        $material = Material::find($data['id']);
        $material->delete();
        $status = "Delete Successfully";
        return view('material.material-status', compact('status'));
    }
}
