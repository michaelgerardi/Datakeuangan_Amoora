<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pemasukkan;
use PDF;

class pemasukkan_controller extends Controller
{
    public function index_pemasukkan(){
        $data_pemasukkan = pemasukkan::all();
        return view();
    }

    public function tambah_pemasukkan(){
        \App\Models\pemasukkan::create($request->all());
        dd($request);
    }

    public function edit_pemasukkan($id_pemasukkan, Request $request){
        $data_pemasukkan = pemasukkan::find($id_pemasukkan);
        $data_pemasukkan = $request->input('total_pendapatan');
        $data_pemasukkan = $request->input('avg_perbulan');
        $data_pemasukkan = $request->input('laba_kotor');
        $data_pemasukkan = $request->input('laba_bersih');
        return redirect()->route('pemasukkan');
    }

    public function findidpemasukkan($id_pemasukkan){
        $data_pemasukkan = pemasukkan::find($id_pemasukkan);
        $data = [
            'title' => 'pemasukkan',
            'data_pemasukkan' => $data_pemasukkan
        ];
        return view ('layouts.pemasukkan', $data);
    }

    public function deletepemasukkan($id_pemasukkan){
        $data_pemasukkan = pemasukkan::find($id_pemasukkan);
        $data_pemasukkan->delete();
        return redirect()->back();
    }

    public function download_pemasukkan(){
        $data_pemasukkan = pemasukkan::all();
        $pdf = PDF::loadView('layouts.pdfmasuk',compact('data_pemasukkan'));
        return $pdf->download('Laporan Pemasukkan Amoora.pdf');
    }
}
