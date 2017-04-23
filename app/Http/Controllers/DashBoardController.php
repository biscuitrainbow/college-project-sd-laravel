<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    public function overall(){
        return view('dashboard.dashboard-overall');
    }
}
