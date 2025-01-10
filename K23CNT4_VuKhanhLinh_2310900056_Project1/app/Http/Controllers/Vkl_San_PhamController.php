<?php

namespace App\Http\Controllers;
use Illuminate\Htpp\RedirectResponde;
use Illuminate\Http\Request;
use App\Models\Vkl_San_Pham;
use App\Models\Vkl_Loai_San_Pham;
use Illuminate\Support\Facades\DB;

class Vkl_San_PhamController extends Controller
{
    //list
    public function vklList()
    {
        $vklSanPhams = Vkl_San_Pham::where('vklTrangThai',0)->get();
        return view('vklAdmins.vklSanPhams.vkl-list',['vklSanPhams'=>$vklSanPhams]);
    }



    public function vklCreate()
    {
        $vklLoaiSanPhams = Vkl_Loai_San_Pham::all();
        $vklLoaiSanPhams = Vkl_Loai_San_Pham::all();
        $vklLoaiSanPhams = Vkl_Loai_San_Pham::all();
        $vklLoaiSanPhams = Vkl_Loai_San_Pham::all();
        return view('vklAdmins.vklSanPhams.vkl-create',['vklLoaiSanPhams'=> $vklLoaiSanPhams]);
    }
    public function vklCreateSubmit(Request $request)
    {
        // valication data
        $valicationdate = $request->validate([
            'vklMaSanPham' => 'required|unique:vkl_san_pham,vklMaSanPham',
            'vklTenSanPham' => 'required|string|max:255',
            'vklHinhAnh' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240', 
            'vklSoLuong' => 'required|numeric|min:1',
            'vklDonGia' => 'required|numeric',
            'vklMaLoai' => 'required|exists:vkl_loai_san_pham,id',
            'vklTrangThai' => 'required|in:0,1'
        ]);
        //ghi du lieu xuong db
        $vklSanPham = new NHT_SAN_PHAM;
        $vklSanPham->vklMaSanPham = $request->vklMaSanPham;
        $vklSanPham->vklTenSanPham = $request->vklTenSanPham;
    if ($request->hasFile('vklHinhAnh')) {
        $file = $request->file('vklHinhAnh');
        if ($file->isValid()) {
            $fileName = $request->vklMaSanPham . '.' . $file->extension();
            $file->storeAs('public/img/san_pham', $fileName); // Lưu tệp vào thư mục storage/app/public/img/san_pham
            $vklSanPham->vklHinhAnh = 'img/san_pham/' . $fileName; 
        }
    }

    // Lưu các thông tin còn lại vào cơ sở dữ liệu
    $vklSanPham->vklSoLuong = $request->vklSoLuong;
    $vklSanPham->vklDonGia = $request->vklDonGia;
    $vklSanPham->vklMaLoai = $request->vklMaLoai;
    $vklSanPham->vklTrangThai = $request->vklTrangThai;

        $vklSanPham->save();
        return redirect()->route('vklAdmins.vklSanPhams.vkllist');
    }


    //edit
    public function vklEdit($id)
    {
        $vklSanPham = Vkl_San_Pham::find($id);
        $vklLoaiSanPhams = Vkl_Loai_San_Pham::all();
        return view('vklAdmins.vklSanPhams.vkl-edit',['vklSanPham'=>$vklSanPham]);
    }
    #Edit - submit
    public function vklEditSubmit(Request $request)
    {

        // valication data
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
        $fileName = $request->title. '.' . $request->file('image')->extension();
        $imageUrl='images/';
        $request->file('image')->move(public_path('images\\'),$fileName);
        $news->image=$imageUrl.$fileName;
        $vklSanPham->vklSoLuong = $request->vklSoLuong;
        $vklSanPham->vklDonGia = $request->vklDonGia;
        $vklSanPham->vklMaLoai = $request->vklMaLoai;
        $vklSanPham->vklTrangThai = $request->vklTrangThai;

        $vklSanPham->save();
        return redirect()->route('vklAdmins.vklSanPhams.vkllist');
    }

    public function vklDelete($id)
    {
        $vklSanPham =  Vkl_San_Pham::find($id);
        $vklSanPham->delete();
        return redirect()->route('vklAdmins.vklSanPhams.vkllist');
    }



    public function vklDetail($id)
    {
        $vklSanPham = Vkl_San_Pham::find($id);
        return view('vklAdmins.vklSanPhams.vkl-detail',['vklSanPham'=>$vklSanPham]);
    }
}   
