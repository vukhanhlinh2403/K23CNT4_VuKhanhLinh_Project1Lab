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
        return view('vklAdmins.vklLoaiSanPhams.vkl-list',['vklLoaiSanPhams'=>$vklLoaiSanPhams]);
    }

    //create
    public function vklCreate()
    {
        return view('vklAdmins.vklLoaiSanPhams.vkl-create');
    }
    public function vklCreateSubmit(Request $request)
    {
        //ghi du lieu xuong db
        $vklLoaiSanPham = new Vkl_Loai_San_Pham;
        $vklLoaiSanPham->vklMaLoai = $request->vklMaLoai;
        $vklLoaiSanPham->vklTenLoai = $request->vklTenLoai;
        $vklLoaiSanPham->vklTrangThai = $request->vklTrangThai;

        $vklLoaiSanPham->save();
        return redirect()->route('vklAdmins.vklLoaiSanPhams');
    }


    //edit
    public function vklEdit($id)
    {
        $vklLoaiSanPham = Vkl_Loai_San_Pham::find($id);
        return view('vklAdmins.vklLoaiSanPhams.vkl-edit',['vklLoaiSanPham'=>$vklLoaiSanPham]);
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
        return redirect()->route('vklAdmins.vklLoaiSanPhams');
    }


    public function vklDelete($id)
    {
        $vklLoaiSanPham =  Vkl_Loai_San_Pham::find($id);
        $vklLoaiSanPham->delete();
        return view()->route('vklAdmins.vklLoaiSanPhams');
    }


    public function vklInsert()
    {
        return view('vklAdmins.vklLoaiSanPhams.vkl-insert');
    }
    public function vklInsertSubmit()
    {
        // kiem tra du lieu nhap
        $validate = $request->validate([
            'vklMaLoai'=>'required|max:255',
            'vklTenLoai'=>'required|max:255'
        ],
        [
            'vklMaLoai.required'=> 'vui long nhap ma loai ',
            'vklMaLoai.max'=> 'ma loai toi da 255 ki tu',
            'vklTenLoai.required'=> 'vui long nhap ten loai',
            'vklTenLoai.max'=>'ten loai toi da 255 ki tu'
        ]
    );
        $vklMaLoai = $request->input('vklMaLoai');
        $vklTenLoai = $request->input('vklTenLoai');
        // ghi du lieu xuong database
        DB::insert("INSERT INTO vkl_loai_san_pham(vklMaLoai, vklTenLoai) VALUES (?,?)",[$vklMaLoai,$vklTenLoai]);
        // chuyen sang trang danh sach
        return view()->route('vklAdmins.vklLoaiSanPhams');
    }
}
