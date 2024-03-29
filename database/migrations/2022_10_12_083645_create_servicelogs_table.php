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
        Schema::create('servicelogs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_kendaraan');
            $table->foreign('id_kendaraan')->references('id')->on('users');
            $table->string('jenis_pemeliharaan');
            $table->string('catatan_pemeliharaan')->nullable();
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
        Schema::dropIfExists('servicelogs');
    }
};
