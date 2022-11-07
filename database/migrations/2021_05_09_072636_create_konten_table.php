<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKontenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kontens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Instansi');
            $table->string('pj');
            $table->date('tanggal_ttd');
            $table->date('tanggal_selesai');
            $table->boolean('status');
            $table->string('file');
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
        Schema::dropIfExists('kontens');
    }
}
