<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGurusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gurus', function (Blueprint $table) {
            $table->id();
            $table->integer('nuptk');
            $table->integer('nik');
            $table->string('nama_lengkap');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->longtext('ttl');
            $table->string('statuspegawai');
            $table->date('tmt');
            $table->integer('nohp');
            $table->text('usernametelegram');
            $table->string('gambar');
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
        Schema::dropIfExists('gurus');
    }
}
