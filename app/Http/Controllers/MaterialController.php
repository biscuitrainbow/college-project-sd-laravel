<?php

namespace App\Http\Controllers;

use App\Material;
use Illuminate\Http\Request;
use app;

class MaterialController extends Controller
{
    public function index()
    {
        return view('material.material-create');
    }

    public function create(Request $request)
    {
        $material = new Material();
        $material['product_id'] = $request['product_id'];
        $material['product_name'] = $request['product_name'];
        $material['product_price'] = $request['product_price'];
        $material['product_qty'] = $request['product_qty'];
        $material['product_type'] = $request['product_type'];
        $material['product_categories'] = $request['product_categories'];
        $material->save();

        return 'create complete';
    }

    public function indexChange()
    {
        $data = Material::all();
        // return $data;
        return view('material.material-change', compact('data'));
    }

    public function showChange($id)
    {
        $datas = Material::where('id', $id)->first();
        return view('material.material-change-result', compact('datas'));
    }

    public function change(Request $request)
    {
        $data = $request->all();
        $update = Material::where("id", $data['id'])->first();
        $update->product_id = $data['product_id'];
        $update->product_name = $data['product_name'];
        $update->product_price = $data['product_price'];
        $update->product_qty = $data['product_qty'];
        $update->product_type = $data['product_type'];
        $update->product_categories = $data['product_categories'];
        $update->save();
        return "update successfully";
    }
}
