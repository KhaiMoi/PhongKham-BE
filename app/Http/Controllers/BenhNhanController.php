<?php

namespace App\Http\Controllers;

use App\Models\BenhNhan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BenhNhanController extends Controller
{
    public function getData(){
        $data = BenhNhan::all();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }
}
