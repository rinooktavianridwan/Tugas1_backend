<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Toko;
use App\Models\Produk;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Toko::create([
            'nama_toko' => 'Toko Jaya Makmur',
            'pemilik' =>  'Budi',
            'alamat' =>  'Jl. Superman No. 45, Jakarta',
            'email' =>  'warungmaju@gmail.com',
            'no_telepon' =>  '082345678901'
        ]);

        Toko::create([
            'nama_toko' => 'Toko Sumber Murah',
            'pemilik' =>  'Suryono Jaya',
            'alamat' =>  'Jl. Merdeka No. 10, Jakarta Pusat',
            'email' =>  'suryonojaya@gmail.com',
            'no_telepon' =>  '082345671234'
        ]);

        Produk::create([
            'toko_id' => 1,
            'nama_produk' => 'Gula Aren',
            'harga' => 5000,
            'stok' => 50
        ]);

        Produk::create([
            'toko_id' => 1,
            'nama_produk' => 'Beras',
            'harga' => 75000,
            'stok' => 5
        ]);

        Produk::create([
            'toko_id' => 2,
            'nama_produk' => 'Kopi Hitam',
            'harga' => 10000,
            'stok' => 30
        ]);

        Produk::create([
            'toko_id' => 2,
            'nama_produk' => 'Teh Hijau',
            'harga' => 8000,
            'stok' => 40
        ]);

        Produk::create([
            'toko_id' => 2,
            'nama_produk' => 'Jahe Merah',
            'harga' => 12000,
            'stok' => 20
        ]);
    }
}
