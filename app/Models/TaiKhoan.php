<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class TaiKhoan extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $table = 'tai_khoan';

    protected $fillable = [
        'email',
        'password',
    ];

    public function bacSi()
    {
        return $this->belongsTo(BacSi::class, 'id_bac_si', 'id');
    }
}
