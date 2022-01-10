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

    public function tambah_sewer(){
        \App\sewer::create($request->all());
        return redirect('sewer')->with('sukses','silahkan melakukan pengecekan data anda!');
    }
}
