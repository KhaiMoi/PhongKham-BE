<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class XetNghiem extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_xet_nghiem',
        'loai_xet_nghiem',
        'ngay_xet_nghiem',
    ];
}
