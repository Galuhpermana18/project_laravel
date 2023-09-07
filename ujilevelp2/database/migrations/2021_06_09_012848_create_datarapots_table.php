<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatarapotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datarapots', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswas_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->bigInteger('datamapels_id');
            $table->bigInteger('kelas_id')->nullable();
            $table->bigInteger('pengetahuans_id')->nullable();
            $table->bigInteger('datanilais_id')->nulllable();
            $table->bigInteger('keterampilans_id')->nullable();
            $table->string('nilaiakhir');
            $table->string('deskripsi');
            $table->string('predikat');
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
        Schema::dropIfExists('datarapots');
    }
}
