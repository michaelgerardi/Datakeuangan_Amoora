<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jurnalumum extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnalumum', function (Blueprint $table){
            $table->increments('id_jurnalumum');
            $table->string('tanggal');
            $table->string('keterangan');
            $table->string('debit');
            $table->string('kredit');
            $table->string('total');
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
        Schema::dropIfExists('jurnalumum'); 
    }
}
