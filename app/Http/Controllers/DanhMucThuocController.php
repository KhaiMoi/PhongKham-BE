<?php

namespace App\Http\Controllers;

use App\Models\DanhMucThuoc;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DanhMucThuocController extends Controller
{
   public function getData(){
    $data = DanhMucThuoc::all();
    return response()->json([
        'status' => 'success',
        'data' => $data
    ]);
   }
   public function createData(Request $request){
    $validated = $request->validate([
        'ten_thuoc' => 'required',
        'loai' => 'required',
        'so_luong' => 'required|numeric',
        'gia_tien' => 'required|numeric',
        'ngay_het_han' => 'required|date',
    ]);

    $lastId = DanhMucThuoc::max('id_thuoc') ?? 0;
    $newId = $lastId + 1;

    $data = DanhMucThuoc::create(array_merge(
        $validated,
        ['id_thuoc' => $newId]
    ));

    return response()->json([
        'status' => 'success',
        'data' => $data
    ]);
   }
}
