<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class TaiKhoan extends Controller
{
    public function data()
    {
        return response()->json([
            'status'    => true,
            'message'   => "Đã lấy dữ liệu thành công!",
        ]);
    }

    public function dangNhap(Request $request)
    {
            $check = Auth::guard('TaiKhoan')->attempt([
            'email'     => $request->email,
            'password'  => $request->password
        ]);

        if ($check) {
            // Get the authenticated user
            $users = Auth::guard('TaiKhoan')->user();

            return response()->json([
                'status'    => true,
                'message'   => "Đã đăng nhập thành công!",
                'token'     => $users->createToken('token_user')->plainTextToken, // Optional if you want to return a token
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => "Tài khoản hoặc mật khẩu không đúng!",
            ]);
        }
    }
}
