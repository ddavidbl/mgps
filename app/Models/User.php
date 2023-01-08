<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [

        'username',
        'password',
        'kategori',
        'nomor_registrasi',
        'nama_pemilik',
        'alamat',
        'merk',
        'tipe',
        'jenis',
        'model',
        'tahun_pembuatan',
        'nomor_rangkaian',
        'nomor_mesin',
        'warna',
        'bahan_bakar',
        'jumlah_bahan_bakar',
        'kecepatan',
        'status',
        'lat',
        'lng',
        'path',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
