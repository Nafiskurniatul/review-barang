<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([[
            'Kode_jenis_barang' => '1',
            'nama' => 'New Balance',
            'deskripsi_detail' => ' Seri paling legendaris dari New Balance,574 telah dilengkapi sol berjenis ENCAP. ENCAP adalah sol buatan New Balance yang terdiri atas busa EVA dibungkus dengan cangkang plastik poliuteran',
            'stock' => '4',
            'foto' => 'img.jpg',
            'harga' => 'Rp. 1.800.000'
        ],
        [
            'Kode_jenis_barang' => '2',
            'nama' => 'New Balance',
            'deskripsi_detail' => 'Sol sepatu ini lebih tebal dengan teknologi ROLLBAR khas New Balance. Salah satu best-seller New Balance sepanjang masa.',
            'stock' => '6',
            'foto' => 'img1.jpg',
            'harga' => 'Rp.1.500.000'
        ],
        [
            'Kode_jenis_barang' => '3',
            'nama' => 'New Balence',
            'deskripsi_detail' => 'Seri eksklusif Flimby, Inggris.Struktur sol ENCAP-nya meredam berat serta cangkang di bagian tumit membantu pemakainya untuk lebih seimbang.',
            'stock' => '8',
            'foto' => 'img2.jpg',
            'harga' => 'Rp. 1.650.000'
        ]     
        ]); 
    }
}
