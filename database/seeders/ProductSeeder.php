<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
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
                'nama' => 'Orbit Star Z1'
            ],
            [
                'nama' => 'Orbit Pro H1'
            ],
            [
                'nama' => 'Orbit Max H1'
            ],
            [
                'nama' => 'Orbit Turbo 5G'
            ],
            [
                'nama' => 'Orbit Star A1'
            ],
            [
                'nama' => 'Orbit Star 2'
            ],
            [
                'nama' => 'Orbit Star 3'
            ],
            [
                'nama' => 'Orbit Star Lite Black'
            ],
            [
                'nama' => 'Orbit Pro'
            ],
            [
                'nama' => 'Orbit Pro 2'
            ],
        ];

        foreach ($data as $data) {
            Product::create($data);
        }
    }
}
