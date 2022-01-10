<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table='transaksi';
    protected $fillable=['total_transaksi','avg_transaksi','jumlah_transaksi'];
}
