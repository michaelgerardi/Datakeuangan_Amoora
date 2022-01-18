<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class pemasukkan extends Model
{
   protected $table='pemasukkan';
   protected $fillable=['total_pendapatan','avg_perbulan','laba_kotor','laba_bersih'];
   
}
