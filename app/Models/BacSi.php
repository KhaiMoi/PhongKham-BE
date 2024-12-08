<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BacSi extends Model
{
    use HasFactory;
    protected $table = 'bac_sis';
    protected $fillable = ['id_bac_si', 'ten_bac_si', 'ngay_sinh', 'gioi_tinh', 'so_dien_thoai', 'hash_reset'];
}
