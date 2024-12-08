<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucThuoc extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_thuoc',
        'ten_thuoc',
        'chi_dinh',
        'ngay_het_han',
        'loai',
        'so_luong',
        'gia_tien',
    ];
}
