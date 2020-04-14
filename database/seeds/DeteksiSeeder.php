<?php

use Illuminate\Database\Seeder;
use App\Deteksi;

class DeteksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $uniqid = uniqid().date('dm');
        Deteksi::create([
            'uniqid' => $uniqid,
            'name' => 'Muhammad Ramdhani',
            'jk' => 'L',
            'tanggal_lahir' => '2003-10-27',
            'umur' => 16,
            'provinsi' => 'Jawa Barat',
            'kota' => 'Bogor',
            'kecamatan' => 'Ciawi',
            'Desa' => 'Ciawi',
            'jalan' => 'Jl. Mayjen HE Sukma, No.06',
            'jml_ya' => 6,
        ]);
    }
}
