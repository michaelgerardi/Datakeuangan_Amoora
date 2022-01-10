<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pemasukkan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemasukkan', function (Blueprint $table) {
            $table->increments('id_pemasukkan');
            $table->increments('id_penjualan');
            $table->string('total_pendapatan');
            $table->string('avg_perbulan');
            $table->string('laba_kotor');
            $table->string('laba_bersih');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemasukkan');
    }
}
