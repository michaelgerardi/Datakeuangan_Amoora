<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detail;

class detail_controller extends Controller
{
    public function index_detail(){
       $data_detail = detail::all();
       return view();
    }
}
