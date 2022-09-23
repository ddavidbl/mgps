<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('categories')->insert([
            'kategori' => 'Ambulance',
            'name' => '',
            ''
        ]);

        DB::table('categories')->insert([
            'kategori' => 'Pemadam Kebakaran',
            'icon' => '',
        ]);

        DB::table('categories')->insert([
            'kategori' => 'Truk Sampah',
            'icon' => '',
        ]);

        DB::table('categories')->insert([
            'kategori' => 'Polisi',
            'icon' => 'police',
        ]);
    }
}
