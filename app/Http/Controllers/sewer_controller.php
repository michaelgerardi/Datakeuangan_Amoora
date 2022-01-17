<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sewer;
use PDF;

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

    public function edit_sewer($id_sewer, Request $request){
        $data_sewer = sewer::find($id_sewer);
        $data_sewer = $request->input('nip');
        $data_sewer = $request->input('nama');
        $data_sewer = $request->input('tgl_lahir');
        $data_sewer = $request->input('alamat');
        $data_sewer = $request->input('no_hp');
        $data_sewer = $request->input('jenis_kelamin');
        $data_sewer = $request->input('gaji');
        $data_sewer = $request->input('posisi');
        return redirect()->route('sewer');
    }

    public function findidsewer($id_sewer){
        $data_sewer = sewer::find($id_sewer);
        $data = [
            'title' => 'sewer',
            'data_sewer' => $data_sewer
        ];
        return view ('layouts.editsewer', $data);
    }

    public function deletesewer($id_sewer){
        $data_sewer = sewer::find($id_sewer);
        $data_sewer->delete();
        return redirect()->back();
    }

    public function download_sewer(){
        $data_sewer = sewer::all();
        $pdf = PDF::loadView('layouts.pdf',compact('data_sewer'));
        return $pdf->download('Laporan Penggajian Sewer.pdf');
    }

}

