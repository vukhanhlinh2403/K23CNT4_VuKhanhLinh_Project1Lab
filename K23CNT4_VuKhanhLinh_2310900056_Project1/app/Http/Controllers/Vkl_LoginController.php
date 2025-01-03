<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vkl_Khach_Hang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Vkl_LoginController extends Controller
{
    public function vklLogin()
    {
        return view('vkluser.login');
    }

        public function vklLoginSubmit(Request $request)
    {
        $request->validate([
            'vklEmail' => 'required|email',
            'vklMatKhau' => 'required|string',
        ]);

        $user = Vkl_Khach_Hang::where('vklEmail', $request->vklEmail)->first();

        if ($user && Hash::check($request->vklMatKhau, $user->vklMatKhau)) {
            Auth::login($user);

            Session::put('username1', $user->vklHoTenKhachHang); 
            Session::put('vklEmail', $user->vklEmail); 
            Session::put('vklDienThoai', $user->vklDienThoai);  
            Session::put('vklDiaChi', $user->vklDiaChi);  
            Session::put('vklMaKhachHang', $user->vklMaKhachHang);  

            return redirect()->route('vkluser.home1')->with('message', 'Đăng Nhập Thành Công');
        } else {
            return redirect()->back()->withErrors(['vklEmail' => 'Email hoặc Mật khẩu không đúng']);
        }
    }

}
