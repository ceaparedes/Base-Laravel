<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartJsController extends Controller
{
    public function index(){

        
        return view('chart.index', ['current' => 4]);
    }
}
