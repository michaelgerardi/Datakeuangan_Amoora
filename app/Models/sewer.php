<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class sewer extends Model
{
    protected $table='sewer';
    protected $fillable=['nip','nama','tgl_lahir','alamat','no_hp','jenis_kelamin',
    'gaji','posisi'];
    protected $primaryKey = 'id_sewer';
   
}
