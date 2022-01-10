<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;

class transaksi_controller extends Controller
{
    public function index_transaksi(){
        $data_transaksi = transaksi::all();
        return view();
    }
}
