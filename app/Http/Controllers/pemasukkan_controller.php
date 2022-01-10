<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pemasukkan;

class pemasukkan_controller extends Controller
{
    public function index_pemasukkan(){
        $data_pemasukkan = pemasukkan::all();
        return view();
    }
}
