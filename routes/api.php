<?php

use App\Http\Controllers\BacSiController;
use App\Http\Controllers\BenhNhanController;
use App\Http\Controllers\DanhMucThuocController;
use App\Http\Controllers\DonThuocController;
use App\Http\Controllers\GiaoDienController;
use App\Http\Controllers\SoKhamController;
use App\Http\Controllers\TaiKhoan;
use App\Http\Controllers\XetNghiemController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [TaiKhoan::class, 'dangNhap']);
Route::get('/bac-si', [BacSiController::class, 'getData']);
Route::get('/benh-nhan', [BenhNhanController::class, 'getData']);
Route::get('/danh-muc-thuoc', [DanhMucThuocController::class, 'getData']);
Route::get('/so-kham', [SoKhamController::class, 'getData']);
Route::get('/xet-nghiem', [XetNghiemController::class, 'getData']);
Route::get('/don-thuoc', [DonThuocController::class, 'getData']);
Route::post('/danh-muc-thuoc/create', [DanhMucThuocController::class, 'createData']);
