<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeteksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deteksi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uniqid');
            $table->string('name');
            $table->enum('jk', ['L', 'P']);
            $table->date('tanggal_lahir');
            $table->integer('umur');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('desa');
            $table->text('jalan');
            $table->integer('jml_ya');
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
        Schema::dropIfExists('deteksi');
    }
}
