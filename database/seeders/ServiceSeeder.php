<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'service' => 'Pengisian BBM',
        ]);

        DB::table('services')->insert([
            'service' => 'Service Rutin',
        ]);

        DB::table('services')->insert([
            'service' => 'Bayar Pajak',
        ]);

        DB::table('services')->insert([
            'service' => 'Perbaikan',
        ]);
    }
}
