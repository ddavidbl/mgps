<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicelogs')->insert([
            'id_kendaraan' => 2,
            'catatan_servis' => 'oli mesin',
        ]);
        DB::table('servicelogs')->insert([
            'id_kendaraan' => 2,
            'catatan_servis' => 'aki mobil',
        ]);
        DB::table('servicelogs')->insert([
            'id_kendaraan' => 3,
            'catatan_servis' => 'ban mobil',
        ]);
        DB::table('servicelogs')->insert([
            'id_kendaraan' => 3,
            'catatan_servis' => 'ac mobil',
        ]);
    }
}
