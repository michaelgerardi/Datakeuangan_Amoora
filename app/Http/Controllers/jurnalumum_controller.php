<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\jurnalumum;

class jurnalumum_controller extends Controller
{
    public function index_jurnalumum(){
        $data_jurnalumum = jurnalumum::all();
        return view('jurnalumum',compact('data_jurnalumum'));
    }

    public function tambah_jurnalumum(Request $request){
        \App\Models\jurnalumumm::create($request->all());
        dd($request);
    }

    public function edit_jurnalumum($id_jurnalumum, Request $request){
        $data_jurnalumum = jurnalumum::find($id_jurnalumum);
        $data_jurnalumum = $request->input('tanggal');
        $data_jurnalumum = $request->input('keterangan');
        $data_jurnalumum = $request->input('debit');
        $data_jurnalumum = $request->input('kredit');
        $data_jurnalumum = $request->input('total');
        return redirect()->route('jurnalumum');
    }

    public function findidjurnalumum($id_jurnalumum){
        $data_jurnalumum = jurnalumum::where('id_jurnalumum',$id_jurnalumum)->first();
        $data = [
            'title' => 'jurnalumum',
            'data_jurnalumum' => $data_jurnalumum
        ];
        return view ('layouts.editjurnalumum', $data);
    }

    public function deletejurnalumum($id_jurnalumum){
        jurnalumum::where('id_jurnalumum',$id_jurnalumum)->delete();
        return redirect()->back();
    }
}
