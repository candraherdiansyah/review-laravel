<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHobisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobis', function (Blueprint $table) {
            $table->id();
            $table->string('hobi');
            $table->timestamps();
        });
        #membuat table pivot/bantuan bernama mahasiswa_hobi
        Schema::create('mahasiswa_hobi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_mahasiswa')->unsigned();
            $table->foreign('id_mahasiswa')->references('id')->on('mahasiswas');
            $table->bigInteger('id_hobi')->unsigned();
            $table->foreign('id_hobi')->references('id')->on('hobis');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hobis');
        Schema::dropIfExists('mahasiswa_hobi');

    }
}
