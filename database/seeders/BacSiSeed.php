<?php

namespace Database\Seeders;

use App\Models\BacSi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BacSiSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BacSi::insert([
            [
                'id_bac_si' => '2',
                'ten_bac_si' => 'Bác sĩ 2',
                'ngay_sinh' => '2024-01-01',
                'gioi_tinh' => true,
                'so_dien_thoai' => '0123456789',
            ],
            [
                'id_bac_si' => '3',
                'ten_bac_si' => 'Bác sĩ 3',
                'ngay_sinh' => '2024-01-02',
                'gioi_tinh' => false,
                'so_dien_thoai' => '0123456788',
            ]    
        ]);
    }
}
