<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaiLySeeding extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_mucs')->delete();
        // Reset ID Danh mục về lại từ 1 IF có gắn id sẵn thì không cần chuyển id về 1
        // DB::table('danh_mucs')->truncate();
        // Bắt Đầu tạo Dữ Liệu

        DB::table('danh_mucs')->insert([

        ]);
    }
}
