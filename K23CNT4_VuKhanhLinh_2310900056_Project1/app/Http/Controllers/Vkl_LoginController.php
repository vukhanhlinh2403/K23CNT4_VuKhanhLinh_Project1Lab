<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vkl_Khach_Hang;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\md5;
use Illuminate\Support\Facades\Session;

class Vkl_LoginController extends Controller
{
    // Show login form
    public function vklLogin()
    {
        return view('vkluser.vkllogin');
    }

    // Xử lý việc gửi biểu mẫu đăng nhập
   public function vklLoginSubmit(Request $request)
    {
    $request->validate([
        'vklEmail' => 'required|email',
        'vklMatKhau' => 'required|string',
    ]);

    $vkluser = Vkl_Khach_Hang::where('vklEmail', $request->vklEmail)->first();

    Session::forget('cart');

    if ($vkluser && md5($request->vklMatKhau, $vkluser->vklMatKhau)) {
        if ($vkluser->vklTrangThai == 2) {
            return redirect()->back()->withErrors(['vklEmail' => 'Tài khoản của bạn đã bị khóa.']);
        } elseif ($vkluser->vklTrangThai == 1) {
            return redirect()->back()->withErrors(['vklEmail' => 'Tài khoản của bạn đã bị tạm khóa.']);
        }
        Auth::login($vkluser);
        Session::put('user_id', $vkluser->id);
        Session::put('username1', $vkluser->vklHoTenKhachHang);  
        Session::put('vklEmail', $vkluser->vklEmail);  
        Session::put('vklDienThoai', $vkluser->vklDienThoai);  
        Session::put('vklDiaChi', $vkluser->vklDiaChi);  
        Session::put('vklMaKhachHang', $vkluser->vklMaKhachHang);  

        return redirect()->route('vkluser.vklhome1')->with('message', 'Đăng Nhập Thành Công');
    } else {
        return redirect()->back()->withErrors(['vklEmail' => 'Email hoặc Mật khẩu không đúng']);
    }
    }


    public function logout()
    {
        Session::forget('cart');
        
        Auth::logout();
        return redirect()->route('vkluser.vkllogin')->with('message', 'Bạn đã đăng xuất thành công.');
    }

}
