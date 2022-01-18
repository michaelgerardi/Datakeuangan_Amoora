<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengeluaran;
use PDF;

class pengeluaran_controller extends Controller
{
    public function index_pengeluaran(){
        $data_pengeluaran = pengeluaran::all();
        return view('pengeluaran',compact('data_pengeluaran'));
    }

    public function tambah_pengeluaran(Request $request){
        \App\Models\pengeluaran::create($request->all());
        dd($request);
    }

    public function edit_pengeluaran($id_pengeluaran, Request $request){
        $data_pengeluaran = pengeluaran::find($id_pengeluaran);
        $data_pengeluaran = $request->input('ket_pengeluaran');
        $data_pengeluaran = $request->input('jml_pengeluaran');
        $data_pengeluaran = $request->input('tgl_pengeluaran');
        return redirect()->route('pengeluaran');
    }

    public function findidpengeluaran($id_pengeluaran){
        $data_pengeluaran = pengeluaran::where('id_pengeluaran',$id_pengeluaran)->first();
        $data = [
            'title' => 'pengeluaran',
            'data_pengeluaran' => $data_pengeluaran
        ];
        return view ('layouts.editpengeluaran', $data);
    }

    public function deletepengeluaran($id_pengeluaran){
        pengeluaran::where('id_pengeluaran',$id_pengeluaran)->delete();
        return redirect()->back();
    }

    public function download_pengeluaran(){
        $data_pengeluaran = pengeluaran::all();
        $pdf = PDF::loadview('layouts.pdfpengeluaran',compact('data_pengeluaran'));
        return $pdf->download('Laporan Pengeluaran Amoora.pdf');
    }
}
