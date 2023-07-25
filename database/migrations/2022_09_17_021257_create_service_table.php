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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->string('pelanggan_id');
            $table->string('jenis_service');
            $table->string('keluhan');
            $table->date('mulai');
            $table->date('selesai');
            $table->tinyInteger('status')->default(0);
            $table->decimal('biaya_service');
            $table->decimal('biaya_suku_cadang');
            $table->decimal('total_biaya');
            $table->mediumText('detail');
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
        Schema::dropIfExists('service');
    }
};
