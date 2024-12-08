<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BenhNhan extends Model
{
    use HasFactory;

    protected $fillable = [
        'can_cuoc_cong_dan',
        'ho_ten',
        'ngay_sinh',
        'so_dien_thoai',
        'dia_chi',
        'can_nang',
        'chieu_cao',
        'gioi_tinh',
        'bao_hiem_y_te',
    ];
}
