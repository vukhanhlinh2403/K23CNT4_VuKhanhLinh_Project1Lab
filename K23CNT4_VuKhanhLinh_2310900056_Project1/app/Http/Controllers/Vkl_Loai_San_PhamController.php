<?php

namespace App\Http\Controllers;
use Illuminate\Htpp\RedirectResponde;
use Illuminate\Http\Request;
use App\Http\Controllers\Vkl_Loai_San_Pham;
use Illuminate\Support\Facades\DB;


class Vkl_Loai_San_PhamController extends Controller
{
    //admin: CRUD

    //list 
    public function vklList()
    {
        $vklLoaiSanPhams = Vkl_Loai_San_Pham::all();
        return view('vkladmins.vklLoaiSanPhams.vkl-list',['vklLoaiSanPhams'=>$vklLoaiSanPhams]);
    }

    //create
    public function vklCreate()
    {
        return view('vkladmins.vklLoaiSanPhams.vkl-create');
    }
    public function vklCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $vklLoaiSanPham = new Vkl_Loai_San_Pham;
        $vklLoaiSanPham->vklMaLoai = $request->vklMaLoai;
        $vklLoaiSanPham->vklTenLoai = $request->vklTenLoai;
        $vklLoaiSanPham->vklTrangThai = $request->vklTrangThai;

        $vklLoaiSanPham->save();
        return redirect()->route('vkladmis.vklLoaiSanPhams');
    }


    //edit
    public function vklEdit($id)
    {
        $vklLoaiSanPham = Vkl_Loai_San_Pham::find($id);
        return view('vkladmins.vklLoaiSanPhams.vkl-edit',['vklLoaiSanPham'=>$vklLoaiSanPham]);
    }
    #Edit - submit
    public function vklEditSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $vklLoaiSanPham =  Vkl_Loai_San_Pham::find($request->id);

        $vklLoaiSanPham->vklMaLoai = $request->vklMaLoai;
        $vklLoaiSanPham->vklTenLoai = $request->vklTenLoai;
        $vklLoaiSanPham->vklTrangThai = $request->vklTrangThai;

        $vklLoaiSanPham->save();
        return redirect()->route('vkladmis.vklLoaiSanPhams');
    }


    public function vklDelete($id)
    {
        $vklLoaiSanPham =  Vkl_Loai_San_Pham::find($id);
        $vklLoaiSanPham->delete();
        return view()->route('vkladmins.vklLoaiSanPhams');
    }
}
