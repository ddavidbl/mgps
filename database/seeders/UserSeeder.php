<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // DB::table('users')->insert([
        //     'name' => 'userD',
        //     'username' => 'userD@gmail.com',
        //     'password' => Hash::make('qwerty321'),
        //     'kategori' => null,
        //     'nomor_registrasi' => 1234,
        //     'nama_pemilik' => 'David',
        //     'alamat' => 'Balikpapan',
        //     'merk' => 'Honda',
        //     'tipe' => 'vario 125',
        //     'jenis' => 'sepeda motor',
        //     'model' => 'spd/motor',
        //     'tahun_pembuatan' => 2005,
        //     'nomor_rangkaian' => '3475KMIJKP245KLOP',
        //     'nomor_mesin' => 'BN657KK',
        //     'warna' => 'biru',
        //     'bahan_bakar' => 'bensin',
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'userA',
        //     'username' => 'userA@gmail.com',
        //     'password' => Hash::make('qwerty321'),
        //     'role' => 2,
        //     'kategori' => 3,
        //     'nomor_registrasi' => 2345,
        //     'nama_pemilik' => 'Bernardo',
        //     'alamat' => 'Balikpapan',
        //     'merk' => 'honda',
        //     'tipe' => 'beat',
        //     'jenis' => 'sepeda motor',
        //     'model' => 'spd/motor',
        //     'tahun_pembuatan' => 2006,
        //     'nomor_rangkaian' => '3475KTU7RTY45KLOP',
        //     'nomor_mesin' => 'AA642II',
        //     'warna' => 'merah',
        //     'bahan_bakar' => 'bensin',
        // ]);
        // DB::table('users')->insert([
        //     'name' => 'userC',
        //     'username' => 'userC@gmail.com',
        //     'password' => Hash::make('qwerty321'),
        //     'role' => 2,
        //     'kategori' => 2,
        //     'nomor_registrasi' => 3456,
        //     'nama_pemilik' => 'Liem',
        //     'alamat' => 'Balikpapan',
        //     'merk' => 'yamaha',
        //     'tipe' => 'mio 125',
        //     'jenis' => 'sepeda motor',
        //     'model' => 'spd/motor',
        //     'tahun_pembuatan' => 2006,
        //     'nomor_rangkaian' => '347KI45JKP245KLOP',
        //     'nomor_mesin' => 'BN6633PP',
        //     'warna' => 'biru',
        //     'bahan_bakar' => 'bensin',
        // ]);
    }
}
