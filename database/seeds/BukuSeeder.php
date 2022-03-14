<?php

use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            [
                'nama_buku' => 'Kambing Jantan Seri 2',
                'author' => 'Raditya Dika',
                'penerbit' => 'Gramedia Jaya',
                'tahun_terbit' => '2016',
                'desc' => 'Sebuah komik tentang perjuangan hidup seorang mahasiswa yang bernama Raditya Dika di Melbourne, Australia'
            ],
            [
                'nama_buku' => 'Kambing Jantan Seri 3',
                'author' => 'Raditya Dika',
                'penerbit' => 'Gramedia Jaya',
                'tahun_terbit' => '2018',
                'desc' => 'Sebuah komik tentang perjuangan hidup seorang mahasiswa yang bernama Raditya Dika di Melbourne, Australia'
            ]
        ]);
    }
}
