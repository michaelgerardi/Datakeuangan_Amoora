<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\keuntungan;
use PDF;
class keuntungan_controller extends Controller
{
    public function index_keuntungan(){
        $data_keuntungan = keuntungan::all();
        return view('keuntungan',compact('data_keuntungan'));
    }

    public function tambah_keuntungan(Request $request){
        \App\Models\keuntungan::create($request->all());
        dd($request);
    }

    public function edit_keuntungan($id_keuntungan, Request $request){
        $data_keuntungan = keuntungan::find($id_keuntungan);
        $data_keuntungan = $request->input('tanggal');
        $data_keuntungan = $request->input('ket_pemasukkan');
        $data_keuntungan = $request->input('nominal');
        return redirect()->route('keuntungan');
    }

    public function findidkeuntunganI($id_keuntungan){
        $data_keuntungan = keuntungan::where('id_keuntungan',$id_keuntungan)->first();
        $data = [
            'title' => 'keuntungan',
            'data_keuntungan' => $data_keuntungan
        ];
        return view('layouts.editkeuntungan',$data);
    }

    public function deletekeuntungan($id_keuntungan){
        keuntungan::where('id_keuntungan',$id_keuntungan)->delete();
        return redirect()->back();
    }

    public function download_keuntungan(){
        $data_keuntungan = keuntungan::all();
        $pdf = PDF::loadview('layouts.pdfkeuntungan',compact('data_keuntungan'));
        return $pdf->download('Laporan Pemasukkan Amoora.pdf');
    }
}
