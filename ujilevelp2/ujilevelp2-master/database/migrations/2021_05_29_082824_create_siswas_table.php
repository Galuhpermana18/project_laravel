<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->integer('nipd');
            $table->enum('jenis_kelamin',['laki-laki','perempuan']);
            $table->text('kelas');
            $table->string('nisn',20);
            $table->longtext('ttl');
            // $table->integer('nik');
            $table->string('agama');
            $table->text('alamat');
            // $table->string('jenistinggal');
            // $table->string('transportasi');
            // $table->integer('nohp');
            // $table->string('email');
            $table->string('gambar');
            // $table->integer('beratbadan');
            // $table->integer('tinggibadan');
            // $table->integer('jarakrumah');
            // $table->integer('anakke');
            // $table->integer('jumlahsaudara');
            // $table->string('kebutuhankhusus');
            // $table->integer('noakte');
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
        Schema::dropIfExists('siswas');
    }
}
