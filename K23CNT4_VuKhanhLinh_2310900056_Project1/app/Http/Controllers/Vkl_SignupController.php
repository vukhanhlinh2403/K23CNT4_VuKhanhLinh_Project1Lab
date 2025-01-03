<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vkl_Khach_Hang;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Vkl_SignupController extends Controller
{
    public function vklsignup()
    {
        return view('vkluser.signup');
    }

    public function vklsignupSubmit(Request $request)
    {
        $request->validate([
            'vklHoTenKhachHang' => 'required|string|max:255',
            'vklEmail' => 'required|email|unique:vkl_khach_hang,vklEmail',
            'vklMatKhau' => 'required|min:6',
            'vklDienThoai' => 'required|numeric|unique:vkl_khach_hang,vklDienThoai',
            'vklDiaChi' => 'required|string|max:255',
        ]);


        $vkllastCustomer = Vkl_Khach_Hang::latest('vklMaKhachHang')->first(); 
    
        if ($vkllastCustomer) {
            $vklnewCustomerID = 'KH' . str_pad((substr($vkllastCustomer->vklMaKhachHang, 2) + 1), 3, '0', STR_PAD_LEFT);  
        } else {
            $vklnewCustomerID = 'KH001';
        }
    

        $vklKhachHang = new Vkl_Khach_Hang;
        $vklKhachHang->vklMaKhachHang = $newCustomerID; 
        $vklKhachHang->vklHoTenKhachHang = $request->vklHoTenKhachHang;
        $vklKhachHang->vklEmail = $request->vklEmail;
        $vklKhachHang->vklMatKhau = $request->vklMatKhau; 
        $vklKhachHang->vklDienThoai = $request->vklDienThoai;
        $vklKhachHang->vklDiaChi = $request->vklDiaChi;
        $vklKhachHang->vklNgayDangKy = now(); 
        $vklKhachHang->vklTrangThai = 0; 
    
        try {
            $vklKhachHang->save();
            return redirect()->route('vkluser.login')->with('success', 'Đăng ký thành công, vui lòng đăng nhập!');
        } catch (Exception $e) {
            return back()->with('error', 'Có lỗi xảy ra, vui lòng thử lại!');
        }
    }
}
