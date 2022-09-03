<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicelog extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_kendaraan',
        'catatan_servis',
    ];

    public function idKendaraan()
    {
        $this->hasMany(User::class);
    }
}
