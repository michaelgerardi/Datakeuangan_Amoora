<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sewer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewer', function (Blueprint $table){
        $table->increments('id_sewer');
        $table->string('id_admin');
        $table->string('nama_sewer');
        $table->string('position');
        $table->string('gaji_sewer');
        $table->date('tgl_gaji');
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
        Schema::dropIfExists('sewer');
    }
}
