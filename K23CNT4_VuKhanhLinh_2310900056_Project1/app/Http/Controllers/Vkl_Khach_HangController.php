<?php

namespace App\Http\Controllers;

use Illuminate\Htpp\RedirectResponde;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vkl_Khach_Hang;
class Vkl_Khach_HangController extends Controller
{
    public function vklList()
    {
        $vklKhachHangs = Vkl_Khach_Hang::all();
        return view('vklAdmins.vklKhachHangs.vkl-list',['vklKhachHangs'=>$vklKhachHangs]);
    }


    //create
    public function vklCreate()
    {
        return view('vklAdmins.vklKhachHangs.vkl-create');
    }
    public function vklCreateSubmit(Request $request)
    {
        // valication dât
        $valicationdate = $request->validate([
            'vklMaKhachHang'=>'required|unique:vkl_khach_hang,vklMaKhachHang',
            'vklHoTenKhachHang'=>'required|string',
            'vklEmail' => 'required|email|unique:vkl_khach_hang,vklEmail',  
            'vklMatKhau' => 'required|min:6',
            'vklDienThoai' => 'required|numeric|unique:vkl_khach_hang,vklDienThoai',  
            'vklDiaChi' => 'required|string',
            'vklNgayDangKy' => 'required|date',  
            'vklTrangThai' => 'required|in:0,1,2',
        ]);
        //ghi du lieu xuong db
        $vklKhachHang = new Vkl_Khach_Hang;
        $vklKhachHang->vklMaKhachHang = $request->vklMaKhachHang;
        $vklKhachHang->vklHoTenKhachHang = $request->vklHoTenKhachHang;
        $vklKhachHang->vklEmail = $request->vklEmail;
        $vklKhachHang->vklMatKhau = $request->vklMatKhau;
        $vklKhachHang->vklDienThoai = $request->vklDienThoai;
        $vklKhachHang->vklDiaChi = $request->vklDiaChi;
        $vklKhachHang->vklNgayDangKy = $request->vklNgayDangKy ;
        $vklKhachHang->vklTrangThai = $request->vklTrangThai;

        $vklKhachHang->save();
        return redirect()->route('vklAdmins.vklKhachHangs.vkllist');
    }


    // edit
    public function vklEdit($id)
    {
        $vklKhachHang = Vkl_Khach_Hang::find($id);
        return view('vklAdmins.vklKhachHangs.vkl-edit',['vklKhachHang'=>$vklKhachHang]);
    }
    #Edit - submit
    public function vklEditSubmit(Request $request)
    {

         // valication dât
         $valicationdate = $request->validate([
            'vklMaKhachHang' => 'required|unique:vkl_khach_hang,vklMaKhachHang,' . $id, 
            'vklHoTenKhachHang' => 'required|string',
            'vklEmail' => 'required|email|unique:vkl_khach_hang,vklEmail,' . $id, 
            'vklMatKhau' => 'nullable|min:6', 
            'vklDienThoai' => 'required|numeric|unique:vkl_khach_hang,vklDienThoai,' . $id,  
            'vklDiaChi' => 'required|string',
            'vklNgayDangKy' => 'required|date',
            'vklTrangThai' => 'required|in:0,1,2',
        ]);
        //ghi du lieu xuong db
        $vklKhachHang =  Vkl_Khach_Hang::find($request->id);

        $vklKhachHang->vklMaKhachHang = $request->vklMaKhachHang;
        $vklKhachHang->vklHoTenKhachHang = $request->vklHoTenKhachHang;
        $vklKhachHang->vklEmail = $request->vklEmail;
        $vklKhachHang->vklMatKhau = $request->vklMatKhau;
        $vklKhachHang->vklDienThoai = $request->vklDienThoai;
        $vklKhachHang->vklDiaChi = $request->vklDiaChi;
        $vklKhachHang->vklNgayDangKy = $request->vklNgayDangKy ;
        $vklKhachHang->vklTrangThai = $request->vklTrangThai;

        $vklKhachHang->save();
        return redirect()->route('vklAdmins.vklKhachHangs.vkllist');
    }




    public function vklDelete($id)
    {
        $vklKhachHang =  Vkl_Khach_Hang::find($id);
        $vklKhachHang->delete();
        return redirect()->route('vklAdmins.vklKhachHangs.vkllist');
    }



    public function vklDetail($id)
    {
        $vklKhachHang = Vkl_Khach_Hang::find($id);
        return view('vklAdmins.vklKhachHangs.vkl-detail',['vklKhachHang'=>$vklKhachHang]);
    }
}
