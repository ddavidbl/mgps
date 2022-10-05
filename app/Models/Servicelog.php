<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicelog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kendaraan',
        'jenis_pemeliharaan',
        'catatan_pemeliharaan',
    ];

    public function idKendaraan()
    {
        $this->hasMany(User::class);
    }
}
