<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sewer;

class sewer_controller extends Controller
{
    public function index_sewer(){
        $data_sewer = sewer::all();
        return view();
    }
}
