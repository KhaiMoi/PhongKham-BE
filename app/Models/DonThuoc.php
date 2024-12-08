<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonThuoc extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_don_thuoc',
        'toa_thuoc',
        'ngay_ke_toa_thuoc',
        'tong_chi_phi',
        'id_thuoc',
    ];
}
