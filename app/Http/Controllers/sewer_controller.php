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

    public function edit_sewer(){
        $data_sewer = sewer::find($id);
        $data_sewer = $request->input('nama_sewer');
        $data_sewer = $request->input('gaji_sewer');
        $data_sewer = $request->input('tgl_gaji');
        return redirect()->route('home');
    }

    public function findidsewer(){
        $data_sewer = sewer::find($id);
        $data = [
            'title' => 'sewer',
            'data_sewer' => $data_sewer
        ];
        return view ('layouts.home', $data);
    }

    public function deletesewer(){
        $data_sewer = sewer::find($id);
        $data_sewer->delete();
        return redirect()->back();
    }

}
