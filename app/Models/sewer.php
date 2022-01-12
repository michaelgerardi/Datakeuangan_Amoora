<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class sewer extends Model
{
    protected $table='sewer';
    protected $fillable=['nama_sewer','gaji_sewer','tgl_gaji'];
    protected $primaryKey = 'id_sewer';
   
}
