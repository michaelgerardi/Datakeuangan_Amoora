<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\transaksi;

class transaksi_controller extends Controller
{
    public function index_transaksi(){
        $data_transaksi = transaksi::all();
        return view('transaksi',compact('data_transaksi'));
    }

    public function tambah_transaksi(Request $request){
        App\Models\transaksi::create($request->all());
        dd($request);
    }

    public function edit_transaksi($id_transaksi, Request $request ){
        $data_transaksi = transaksi::find($id_transaksi);
        $data_transaksi = $request->input('total_transaksi');
        $data_transaksi = $request->input('avg_transaksi');
        $data_transaksi = $request->input('jumlah_transaksi');
        return redirect()->route('transaksi');
    }

    public function findidtransaksi(){
        $data_transaksi = transaksi::find($id_transaksi);
        $data = [
            'title' => 'transaksi',
            'data_transaksi' => $data_transaksi
        ];
        return view ('layouts.transaksi', $data);
    }

    public function deletetransaksi($id_transaksi){
        $data_transaksi = sewer::find($id_transaksi);
        $data_transaksi->delete();
        return redirect()->back();
    }

}
