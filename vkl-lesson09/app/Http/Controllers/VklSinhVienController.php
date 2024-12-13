<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VklSinhvien;

class VklSinhVienController extends Controller
{
    // CURD
    public function vklList()
    {
        // lấy toàn bộ dữ liệu trong bảng sinh viên
        $vklSinhViens = VklSinhvien::all();
        return view('VklSinhVien.vkl-list',['vklSinhVien'=>$vklSinhViens]);
    }


    // creat (insert)
    public function vklCreat()
    {
        return view('VklSinhVien.vkl-create');
    }


    public function vklCreatSubmit(Request $request)
    {
        $vklSinhVien = new VklSinhvien();
        $vklSinhVien->vklmasv = $request->vklmasv;
        $vklSinhVien->vklhosv = $request->vklhosv;
        $vklSinhVien->vkltensv = $request->vkltensv;
        $vklSinhVien->vklphai = $request->vklphai;
        $vklSinhVien->vklngaysinh = $request->vklngaysinh;
        $vklSinhVien->vklnoisinh = $request->vklnoisinh;
        $vklSinhVien->vklmakh = $request->vklmakh;
        $vklSinhVien->save();
        return back()->with('vklSinhVien_created','Da them moi mot sinh vien thanh cong!');
    }

    public function vkldelete($vklmasv)
    {
        VklSinhvien::delete('DELETE FROM vklsinhvien WHERE vklmasv=?',[$vklmasv]);
        // chuyen sang trang danh sach
        return redirect('/vkl-sinhviens');
    }
}
