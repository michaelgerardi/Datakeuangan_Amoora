<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sewer;

class sewer_controller extends Controller
{
    public function index_sewer(){
        $data_sewer = sewer::all();
        return view('home',compact('data_sewer'));
        //return $data_sewer;
    }

    public function tambah_sewer(Request $request){
    \App\Models\sewer::create($request->all());
    //return redirect('sewer')->with('Sukses','Data berhasil ditambahkan');
    dd($request);
    }
}

