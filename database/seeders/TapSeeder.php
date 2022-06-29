<?php

namespace Database\Seeders;

use App\Models\Tap;
use Illuminate\Database\Seeder;

class TapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Helvetia',
                'alamat' => 'JL. KAPTEN MUSLIM',
                'cluster' => 'medan',
                'mitra_ad_cluster' => 'CV. Sinar Telkom',
                'region_channel' => 'SUMBAGUT',
                'provinsi' => 'sumatera utara',
                'kabupaten' => 'kota medan',
                'kode_pos' => '20123',
                'call_center' => '81263901556',
                'email' => 'taphelvetia@gmail.com',
                'longitude' => 98.645105,
                'latitude' => 3.5965501
            ],
            [
                'nama' => 'Johor',
                'alamat' => 'JL. A.H NASUTION , Kel Gedung Johor, Kec Medan Johor, 20146',
                'cluster' => 'medan',
                'mitra_ad_cluster' => 'CV. Sinar Telkom',
                'region_channel' => 'SUMBAGUT',
                'provinsi' => 'sumatera utara',
                'kabupaten' => 'kota medan',
                'kode_pos' => '20123',
                'call_center' => '81269863028',
                'email' => 'tapjohor@gmail.com',
                'longitude' =>
                98.66374283,
                'latitude' =>
                3.5388885
            ]
        ];

        foreach ($data as $key => $data) {
            Tap::create($data);
        }
    }
}
