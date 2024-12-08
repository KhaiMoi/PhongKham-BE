<?php

namespace Database\Seeders;

use App\Models\DanhMucThuoc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DanhMucThuocSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DanhMucThuoc::insert([
            [   
                'id_thuoc' => '1',
                'ten_thuoc' => 'Thuốc A',
                'loai' => 'Thuốc kháng sinh',
                'so_luong' => 100,
                'gia_tien' => 100000,
                'ngay_het_han' => '2025-12-31',
            ],
            [
                'id_thuoc' => '2',
                'ten_thuoc' => 'Thuốc B',
                'loai' => 'Thuốc kháng sinh',
                'so_luong' => 200,
                'gia_tien' => 200000,
                'ngay_het_han' => '2025-02-27',
            ],
            [
                'id_thuoc' => '3',
                'ten_thuoc' => 'Thuốc C',
                'loai' => 'Thuốc kháng sinh',
                'so_luong' => 300,
                'gia_tien' => 300000,
                'ngay_het_han' => '2025-05-31',
            ],
            [
                'id_thuoc' => '4',
                'ten_thuoc' => 'Thuốc D',
                'loai' => 'Thuốc kháng sinh',
                'so_luong' => 50,
                'gia_tien' => 400000,
                'ngay_het_han' => '2024-12-31',
            ],
            [
                'id_thuoc' => '5',
                'ten_thuoc' => 'Thuốc E',
                'loai' => 'Thuốc kháng sinh',
                'so_luong' => 10,
                'gia_tien' => 500000,
                'ngay_het_han' => '2024-12-15',
            ],
            [
                'id_thuoc' => '6',
                'ten_thuoc' => 'Thuốc F',
                'loai' => 'Thuốc kháng sinh',
                'so_luong' => 28,
                'gia_tien' => 500000,
                'ngay_het_han' => '2024-12-15',
            ]
        ]);
    }
}
