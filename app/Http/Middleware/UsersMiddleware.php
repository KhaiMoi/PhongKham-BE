<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class UsersMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Lấy tài khoản đang đăng nhập
        $tai_khoan_dang_dang_nhap = Auth::guard('sanctum')->user();

        // Kiểm tra xem tài khoản có phải là Admin không
        if ($tai_khoan_dang_dang_nhap && $tai_khoan_dang_dang_nhap instanceof \App\Models\TaiKhoan) {
            return $next($request);
        } else {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'Bạn không có quyền truy cập!'
                ]
            );
        }
    }
}
