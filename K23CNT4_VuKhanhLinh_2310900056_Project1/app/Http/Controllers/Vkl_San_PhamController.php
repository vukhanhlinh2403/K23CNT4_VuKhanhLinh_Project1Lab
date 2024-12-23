<?php

namespace App\Http\Controllers;
use Illuminate\Htpp\RedirectResponde;
use Illuminate\Http\Request;
use App\Http\Controllers\Vkl_San_Pham;
use Illuminate\Support\Facades\DB;

class Vkl_San_PhamController extends Controller
{
    //list
    public function vklList()
    {
        $vklSanPhams = Vkl_San_Pham::all();
        return view('vklAdmins.vklSanPhams.vkl-list',['vklSanPhams'=>$vklSanPhams]);
    }



    public function vklCreate()
    {
        return view('vklAdmins.vklSanPhams.vkl-create');
    }
    public function vklCreateSubmit(Request $request)
    {
        // valication dât
        $valicationdate = $request->validate([
            'vklMaSanPham'=>'required|unique:vkl_san_pham|max:255',
            'vklTenSanPham'=>'required|string|max:255',
            'vklHinhAnh'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vklSoLuong'=>'required|integer|min:0',
            'vklDonGia'=>'required|numeric|min:0',
            'vklMaLoai'=>'required|integer',
        ]);
        //ghi du lieu xuong db
        $vklSanPham = new Vkl_San_Pham;
        $vklSanPham->vklMaLoai = $request->vklMaLoai;
        $vklSanPham->vklTenLoai = $request->vklTenLoai;
        $vklSanPham->vklHinhAnh = $request->vklHinhAnh;
        $vklSanPham->vklSoLuong = $request->vklSoLuong;
        $vklSanPham->vklDonGia = $request->vklDonGia;
        $vklSanPham->vklMaLoai = $request->vklMaLoai;
        $vklSanPham->vklTrangThai = $request->vklTrangThai;

        $vklSanPham->save();
        return redirect()->route('vklAdmins.vklSanPhams');
    }
}
