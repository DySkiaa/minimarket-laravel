<?php

use Illuminate\Database\Seeder;

class kategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'jenis' => 'Makanan',
            'gambark' => 'kmakanan.png'
        ]);
        DB::table('kategoris')->insert([
            'jenis' => 'Minuman',
            'gambark' => 'kminuma.png'
        ]);
        DB::table('kategoris')->insert([
            'jenis' => 'Obat',
            'gambark' => 'kp3k.png'
        ]);
        DB::table('kategoris')->insert([
            'jenis' => 'Kesehatan',
            'gambark' => 'kkesehatan.png'
        ]);
    }
}