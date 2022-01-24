<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keuntungan extends Model
{
    protected $table='keuntungan';
    protected $fillable=['tanggal','ket_pemasukkan','nominal'];
}
