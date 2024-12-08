<?php

namespace App\Http\Controllers;

use App\Models\BacSi;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BacSiController extends Controller
{
    public function getData(){
        $data = BacSi::all();
        return response()->json([
            'status' => 'success',
            'data' => $data
        ]);
    }   
}
