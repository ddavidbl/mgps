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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('password')->hash();
            $table->unsignedBigInteger('kategori');
            $table->foreign('kategori')->references('id')->on('categories');
            $table->string('path');
            $table->string('nomor_registrasi');
            $table->string('nama_pemilik');
            $table->string('alamat');
            $table->string('merk');
            $table->string('tipe');
            $table->string('jenis');
            $table->string('model');
            $table->year('tahun_pembuatan');
            $table->string('nomor_rangkaian');
            $table->string('nomor_mesin');
            $table->string('warna');
            $table->string('warna_tnkb');
            $table->string('bahan_bakar');
            $table->string('jumlah_bahan_bakar')->nullable();
            $table->string('kecepatan')->nullable();
            $table->decimal('lat', 10, 8)->nullable()->useCurrentOnUpdate();
            $table->decimal('lng', 11, 8)->nullable()->useCurrentOnUpdate();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
