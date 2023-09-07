<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUasandutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uasanduts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('siswas_id')->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->bigInteger('datamapels_id');
            $table->integer('nilaiuts_satu');
            $table->integer('nilaiuts_dua');
            $table->integer('jumlahuts');
            $table->integer('nilaiuas_satu');
            $table->integer('nilaiuas_dua');
            $table->integer('jumlahuas');
            $table->integer('totalsemua');
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
        Schema::dropIfExists('uasanduts');
    }
}
