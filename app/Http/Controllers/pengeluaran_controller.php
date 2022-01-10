<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengeluaran;

class pengeluaran_controller extends Controller
{
    public function index_pengeluaran(){
        $data_pengeluaran = pengeluaran::all();
        return view();
    }
}
