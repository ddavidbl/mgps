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
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password')->hash();
            $table->unsignedBigInteger('role');
            $table->foreign('role')->references('id')->on('roles');
            $table->unsignedBigInteger('kategori')->nullable();
            $table->foreign('kategori')->references('id')->on('categories');
            $table->string('nomor_registrasi')->nullable();
            $table->string('nama_pemilik')->nullable();
            $table->string('alamat')->nullable();
            $table->string('merk')->nullable();
            $table->string('tipe')->nullable();
            $table->string('jenis')->nullable();
            $table->string('model')->nullable();
            $table->year('tahun_pembuatan')->nullable();
            $table->string('nomor_rangkaian')->nullable();
            $table->string('nomor_mesin')->nullable();
            $table->string('warna')->nullable();
            $table->string('warna_tnkb')->nullable();
            $table->string('bahan_bakar')->nullable();
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
