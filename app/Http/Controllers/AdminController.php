<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gaji;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        return view('homeadmin');
    }

    public function filterdata(){
        $data_harian = gaji::where('jenis_gaji','Harian')->get();
        $data_borongan = gaji::where('jenis_gaji','Borongan')->get();
        return view();
    }
}
