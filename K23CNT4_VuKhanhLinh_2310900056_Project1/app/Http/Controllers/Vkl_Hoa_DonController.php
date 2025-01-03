<?php

namespace App\Http\Controllers;

use Illuminate\Htpp\RedirectResponde;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Vkl_Hoa_Don;
use App\Models\Vkl_Khach_Hang;
use App\Models\Vkl_San_Pham;

class Vkl_Hoa_DonController extends Controller
{
    public function show($HoaDonId,$SanPhamId)
    {
        // Lấy hóa đơn từ ID
        $HoaDon = Vkl_Hoa_Don::findOrFail($HoaDonId);
        $SanPham = Vkl_San_Pham::findOrFail($SanPhamId);

        // Trả về view để hiển thị thông tin hóa đơn
        return view('vkluser.vklhoadonshow', compact('HoaDon','SanPham'));
    }



    public function vklList()
    {
        $vklHoaDons = Vkl_Hoa_Don::all();
        return view('vklAdmins.vklHoaDons.vkl-list',['vklHoaDons'=>$vklHoaDons]);
    }


    //create
    public function vklCreate()
    {
        $vklKhachHang = Vkl_Khach_Hang::all();
        return view('vklAdmins.vklHoaDons.vkl-create');
    }
    public function vklCreateSubmit(Request $request)
    {
        $validate = $request->validate([
            'vklMaHoaDon' => 'required|unique:vkl_hoa_don,vklMaHoaDon',
            'vklMaKhachHang' => 'required|exists:vkl_khach_hang,id',
            'vklNgayHoaDon' => 'required|date',  
            'vklNgayNhan' => 'required|date',
            'vklHoTenKhachHang' => 'required|string',  
            'vklEmail' => 'required|email',
            'vklDienThoai' => 'required|numeric',  
            'vklDiaChi' => 'required|string',  
            'vklTongGiaTri' => 'required|numeric',  
            'vklTrangThai' => 'required|in:0,1,2',
        ]);
    
    
        $vklHoaDon = new Vkl_Hoa_Don;

        $vklHoaDon->vklMaHoaDon = $request->vklMaHoaDon;
        $vklHoaDon->vklMaKhachHang = $request->vklMaKhachHang;  
        $vklHoaDon->vklHoTenKhachHang = $request->vklHoTenKhachHang;
        $vklHoaDon->vklEmail = $request->vklEmail;
        $vklHoaDon->vklDienThoai = $request->vklDienThoai;
        $vklHoaDon->vklDiaChi = $request->vklDiaChi;
        
        
        $vklHoaDon->vklTongGiaTri = (double) $request->vklTongGiaTri; 
        
        $vklHoaDon->vklTrangThai = $request->vklTrangThai;
        $vklHoaDon->vklNgayHoaDon = $request->vklNgayHoaDon;
        $vklHoaDon->vklNgayNhan = $request->vklNgayNhan;
    
       
        $vklHoaDon->save();
    
        return redirect()->route('vklAdmins.vklHoaDons');
    }



    public function vklEdit($id)
    {
        $vklHoaDon = Vkl_Hoa_Don::where('id', $id)->first();
        $vklKhachHang = Vkl_Khach_Hang::all();
        return view('vklAdmins.vklHoaDons.vkl-edit',['vklKhachHang'=>$vklKhachHang,'vklHoaDon'=>$vklHoaDon]);
    }
    public function vklEditSubmit(Request $request,$id)
    {
        $validate = $request->validate([
            'vklMaHoaDon' => 'required|unique:vkl_hoa_don,vklMaHoaDon,'. $id,
            'vklMaKhachHang' => 'required|exists:vkl_khach_hang,id'.$id,
            'vklNgayHoaDon' => 'required|date',  
            'vklNgayNhan' => 'required|date',
            'vklHoTenKhachHang' => 'required|string',  
            'vklEmail' => 'required|email',
            'vklDienThoai' => 'required|numeric',  
            'vklDiaChi' => 'required|string',  
            'vklTongGiaTri' => 'required|numeric', 
            'vklTrangThai' => 'required|in:0,1,2',
        ]);
    
        $vklHoaDon = Vkl_Hoa_Don::where('id', $id)->first();
        
        $vklHoaDon->vklMaHoaDon = $request->vklMaHoaDon;
        $vklHoaDon->vklMaKhachHang = $request->vklMaKhachHang;  
        $vklHoaDon->vklHoTenKhachHang = $request->vklHoTenKhachHang;
        $vklHoaDon->vklEmail = $request->vklEmail;
        $vklHoaDon->vklDienThoai = $request->vklDienThoai;
        $vklHoaDon->vklDiaChi = $request->vklDiaChi;
        
        
        $vklHoaDon->vklTongGiaTri = (double) $request->vklTongGiaTri; 
        $vklHoaDon->vklTrangThai = $request->vklTrangThai;
        $vklHoaDon->vklNgayHoaDon = $request->vklNgayHoaDon;
        $vklHoaDon->vklNgayNhan = $request->vklNgayNhan;

        $vklHoaDon->save();
    
        
        return redirect()->route('vklAdmins.vklHoaDons');
    }


    public function vklDetail($id)
    {
        $vklHoaDon = Vkl_Hoa_Don::find($id);
        return view('vklAdmins.vklHoaDons.vkl-detail',['vklHoaDon'=>$vklHoaDon]);
    }


    public function vklDelete($id)
    {
        $vklHoaDon =  Vkl_Hoa_Don::find($id);
        $vklHoaDon->delete();
        return redirect()->route('vklAdmins.vklHoaDons.vkllist');
    }
}
