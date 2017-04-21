<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function display(){
        return view('sale.availability.checkavailability-display');
    }
}
