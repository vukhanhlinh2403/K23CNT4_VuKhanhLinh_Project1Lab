<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Htpp\RedirectResponde;
use Illuminate\Support\Facades\DB;
use App\Models\Vkl_Ct_Hoa_Don;
use App\Models\Vkl_Hoa_Don;
use App\Models\Vkl_San_Pham;

class Vkl_Ct_Hoa_DonController extends Controller
{
    public function vklList()
    {
        $vklCtHoaDons = Vkl_Ct_Hoa_Don::all();
        return view('vklAdmins.vklCtHoaDons.vkl-list',['vklCtHoaDons'=>$vklCtHoaDons]);
    }



    public function vklCreate()
     {
         $vklHoaDon = Vkl_Hoa_Don::all();
         $vklSanPham = Vkl_San_Pham::all();
         return view('vklAdmins.vklCtHoaDons.vkl-create',['vklHoaDon'=>$vklHoaDon,'vklSanPham'=>$vklSanPham]);
     }



     public function vklCreateSubmit(Request $request)
     {
        $validate = $request->validate([
             'vklHoaDonID' => 'required|exists:vkl_hoa_don,id',
             'vklSanPhamID' => 'required|exists:vkl_san_pham,id',
             'vklSoLuongMua' => 'required|numeric',  
             'vklDonGiaMua' => 'required|numeric',
             'vklThanhTien' => 'required|numeric',  
             'vklTrangThai' => 'required|in:0,1,2',
        ]);
     
        $vklCtHoaDon = new Vkl_Ct_Hoa_Don;

        $vklCtHoaDon->vklHoaDonID = $request->vklHoaDonID;
        $vklCtHoaDon->vklSanPhamID = $request->vklSanPhamID;  
        $vklCtHoaDon->vklSoLuongMua = $request->vklSoLuongMua;
        $vklCtHoaDon->vklDonGiaMua = $request->vklDonGiaMua;
        $vklCtHoaDon->vklThanhTien = $request->vklThanhTien;
        $vklCtHoaDon->vklTrangThai = $request->vklTrangThai;
     
        $vklCtHoaDon->save();
     
        return redirect()->route('vklAdmins.vklCtHoaDons');
    }



    public function vklEdit($id)
    {
        $vklHoaDon = Vkl_Hoa_Don::all(); 
        $vklSanPham = Vkl_San_Pham::all(); 
        $vklCtHoaDon = Vkl_Ct_Hoa_Don::where('id', $id)->first();
        return view('vklAdmins.vklCtHoaDons.vkl-edit', ['vklHoaDon' => $vklHoaDon,'vklSanPham' => $vklSanPham,'vklCtHoaDon' => $vklCtHoaDon]);
    }

    public function vklEditSubmit(Request $request,$id)
    {
        $validate = $request->validate([
            'vklHoaDonID' => 'required|exists:vkl_hoa_don,id',
            'vklSanPhamID' => 'required|exists:vkl_san_pham,id',
            'vklSoLuongMua' => 'required|numeric',  
            'vklDonGiaMua' => 'required|numeric',
            'vklThanhTien' => 'required|numeric',  
            'vklTrangThai' => 'required|in:0,1,2',
        ]);
       
    
        $vklCtHoaDon = Vkl_Ct_Hoa_Don::where('id', $id)->first();
    
        $vklCtHoaDon->vklHoaDonID = $request->vklHoaDonID;
        $vklCtHoaDon->vklSanPhamID = $request->vklSanPhamID;  
        $vklCtHoaDon->vklSoLuongMua = $request->vklSoLuongMua;
        $vklCtHoaDon->vklDonGiaMua = $request->vklDonGiaMua;
        $vklCtHoaDon->vklThanhTien = $request->vklThanhTien;
        $vklCtHoaDon->vklTrangThai = $request->vklTrangThai;
    
       
        $vklCtHoaDon->save();
    
        return redirect()->route('vklAdmins.vklCtHoaDons');
    }


    public function vklDetail($id)
    {
        $vklCtHoaDon = Vkl_Ct_Hoa_Don::find($id);
        return view('vklAdmins.vklCtHoaDons.vkl-detail',['vklCtHoaDon'=>$vklCtHoaDon]);
    }


    public function vklDelete($id)
    {
        $vklCtHoaDon =  Vkl_Ct_Hoa_Don::find($id);
        $vklCtHoaDon->delete();
        return redirect()->route('vklAdmins.vklCtHoaDons.vkllist');
    }
}
