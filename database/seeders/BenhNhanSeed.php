<?php

namespace Database\Seeders;

use App\Models\BenhNhan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BenhNhanSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BenhNhan::insert([
            [
                'can_cuoc_cong_dan' => '1234567890',
                'bao_hiem_y_te' => '1234567890',
                'ho_ten' => 'Nguyễn Văn A',
                'ngay_sinh' => '2000-01-01',
                'can_nang' => 70,
                'chieu_cao' => 170,
                'so_dien_thoai' => '0123456789',    
                'dia_chi' => 'Hà Nội',
                'gioi_tinh' => true,
            ],
            [
                'can_cuoc_cong_dan' => '1234567891',
                'bao_hiem_y_te' => '1234567891',
                'ho_ten' => 'Nguyễn Văn B',
                'ngay_sinh' => '2000-01-02',
                'can_nang' => 71,
                'chieu_cao' => 171,
                'so_dien_thoai' => '0123456788',    
                'dia_chi' => 'Hà Nội',
                'gioi_tinh' => false,
            ],
            [
                'can_cuoc_cong_dan' => '1234567892',
                'bao_hiem_y_te' => '1234567892',
                'ho_ten' => 'Nguyễn Văn C',
                'ngay_sinh' => '2000-01-03',
                'can_nang' => 72,
                'chieu_cao' => 172,
                'so_dien_thoai' => '0123456787',    
                'dia_chi' => 'Hà Nội',
                'gioi_tinh' => true,
            ],
            [
                'can_cuoc_cong_dan' => '1234567893',
                'bao_hiem_y_te' => '1234567893',
                'ho_ten' => 'Nguyễn Văn D',
                'ngay_sinh' => '2000-01-04',
                'can_nang' => 73,
                'chieu_cao' => 173,
                'so_dien_thoai' => '0123456786',    
                'dia_chi' => 'Hà Nội',
                'gioi_tinh' => false,
            ]
        ]); 
    }
}
