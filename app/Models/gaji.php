<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    protected $table='penggajian';
    protected $fillable=['gaji','jenis_gaji','tgl_gaji'];
    protected $primaryKey = 'id_gaji';
}
