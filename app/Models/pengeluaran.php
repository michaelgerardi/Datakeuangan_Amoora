<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class pengeluaran extends Model
{
    protected $table='pengeluaran';
    protected $fillable=['ket_pengeluaran','jml_pengeluaran','tgl_pengeluaran'];
}
