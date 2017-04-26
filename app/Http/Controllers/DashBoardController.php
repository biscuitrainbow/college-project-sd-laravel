<?php

namespace App\Http\Controllers;

use App\Document;
use App\Profit;

class DashBoardController extends Controller {
    public function overall() {
        $number_of_inq = Document::where('document_type_id', 1)->count();
        $number_of_quo = Document::where('document_type_id', 2)->count();
        $number_of_so = Document::where('document_type_id', 4)->count();
        $profit = Profit::all()->sum('price');
        return view('dashboard.dashboard-overall',compact('number_of_inq','number_of_quo','number_of_so','profit'));
    }
}
