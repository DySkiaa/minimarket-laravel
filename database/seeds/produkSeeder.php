<?php

use Illuminate\Database\Seeder;

class produkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produks')->insert([
            'nama_barang' => 'Chitato Lite Rumput Laut 68 Gr',
            'harga' => '9000',
            'id_kategori' => '1',
            'gambar' => 'chitato.png'
        ]);
        DB::table('produks')->insert([
            'nama_barang' => 'Coca-Cola Original 1.5 Lt',
            'harga' => '13950',
            'id_kategori' => '2',
            'gambar' => 'cocacola.png'
        ]);
        DB::table('produks')->insert([
            'nama_barang' => 'Sprite 1.5 Lt',
            'harga' => '14500',
            'id_kategori' => '2',
            'gambar' => 'sprite.png'
        ]);
        DB::table('produks')->insert([
            'nama_barang' => 'Laserin 110 Ml',
            'harga' => '23000',
            'id_kategori' => '3',
            'gambar' => 'laserin.png'
        ]);
        DB::table('produks')->insert([
            'nama_barang' => 'Nivea Men Extra White',
            'harga' => '18500',
            'id_kategori' => '4',
            'gambar' => 'nivea.png'
        ]);
        DB::table('produks')->insert([
            'nama_barang' => 'Mixagrip Flu Batuk',
            'harga' => '4000',
            'id_kategori' => '3',
            'gambar' => 'mixagrip.png'
        ]);
    }
}