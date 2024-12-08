<?php

namespace Database\Seeders;

use App\Models\TaiKhoan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaiKhoanSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TaiKhoan::insert([
           [     'id_bac_si' => '2',
                'email' => 'trangtrqss@gmail.com',
                'password' => bcrypt('123123'),
            ],
            [
                'id_bac_si' => '3',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('123123'),
            ]
        ]);
    }
}
