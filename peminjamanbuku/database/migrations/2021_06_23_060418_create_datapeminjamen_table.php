<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapeminjamenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapeminjamen', function (Blueprint $table) {
            $table->id();
            $table->string('nama_peminjam');
            $table->string('email');
            $table->foreignId('databukus_id')->constrained('databukus')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('stok');
            $table->date('tanggalpinjam');
            $table->date('tanggalkembali');
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
        Schema::dropIfExists('datapeminjamen');
    }
}
