<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            // $table->string('merek');
            // $table->string('model');
            $table->string('nama');
            // $table->string('bahan_bakar');
            $table->unsignedBigInteger('merek');
            $table->unsignedBigInteger('model');
            $table->unsignedBigInteger('bahan_bakar');
            $table->foreign('merek')->references('id')->on('merek_kendaraan')->onDelete('cascade');;
            $table->foreign('model')->references('id')->on('jenis_kendaraan')->onDelete('cascade');;
            $table->foreign('bahan_bakar')->references('id')->on('bahan_bakar_kendaraan')->onDelete('cascade');;
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
        Schema::dropIfExists('kendaraan');
    }
};