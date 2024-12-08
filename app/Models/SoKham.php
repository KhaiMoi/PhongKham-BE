<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SoKham extends Model
{
    use HasFactory;

    protected $fillable = [
        'can_cuoc_cong_dan',
        'bao_hiem_y_te',
        'ngay_kham_benh',
        'trieu_chung_benh',
        'chuan_doan',
        'ngay_tai_kham',
        'id_xet_nghiem',
        'id_don_thuoc',
        'id_bac_si',
    ];
}
