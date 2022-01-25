<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jurnalumum extends Model
{
    protected $table='jurnalumum';
    protected $fillable=['tanggal','keterangan','debit',
    'kredit','total'];
}
