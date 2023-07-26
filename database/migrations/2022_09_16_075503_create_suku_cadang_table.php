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
        Schema::create('suku_cadang', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jenis_suku_cadang');
            $table->string('merek');
            $table->string('satuan');
            $table->integer('stock')->default(0);
            $table->mediumText('deskripsi')->nullable();
            $table->decimal('harga', $precision = 20, $scale = 0)->default(0);
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
        Schema::dropIfExists('suku_cadang');
    }
};