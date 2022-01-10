<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
    protected $table='detail';
    protected $fillable=['nama_pakaian','kategori','ukuran','total_pesanan','jumlah_terjual',
    'total_penjualan'];
}
