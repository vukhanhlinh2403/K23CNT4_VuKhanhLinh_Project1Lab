<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vkl_San_Pham; 
use App\Models\Vkl_Khach_Hang; 
use App\Models\Vkl_Tin_Tuc; 

class Vkl_Danh_Sach_Quan_TriController extends Controller
{
    public function vklDanhMuc()
        {
            $productCount = Vkl_San_Pham::count();
        
            $userCount = Vkl_Khach_Hang::count();
            $ttCount = Vkl_Tin_Tuc::count();

            return view('vklAdmins.vklDsQuanTris.vklDanhMucs', compact('productCount', 'userCount','ttCount'));
        }

        public function vklNguoiDung()
        {
            $vklNguoiDung = Vkl_Khach_Hang::all();
        
            foreach ($vklNguoiDung as $user) {
                $user->vklNgayDangKy = Carbon::parse($user->vklNgayDangKy);
            }
        
            return view('vklAdmins.vklDsQuanTris.vklDanhMucs.vklNguoiDung', ['vklNguoiDung' => $vklNguoiDung]);
        }
        

        public function vklTinTuc()
        {
            $vklTinTucs = Vkl_Tin_Tuc::all();  

            foreach ($vklTinTucs as $article) {
                $article->image_url = asset('storage/' . $article->vklHinhAnh);
            }
        
            return view('vklAdmins.vklDsQuanTris.vklDanhMucs.vklTinTuc', [
                'vklTinTucs' => $vklTinTucs, 
            ]);
        }
        
    
    public function vklSanPham()
    {
        $vklSanPhams = Vkl_San_Pham::all(); 
        return view('vklAdmins.vklDsQuanTris.vklDanhMucs.vklSanPham', ['vklSanPhams' => $vklSanPhams]);
    }


    public function vklMoTa($id)
    {
        $vklproduct = Vkl_San_Pham::find($id);
        
        if (!$vklproduct) {
            return redirect()->route('vklAdmins.vklDsQuanTris.vklDanhMucs.vklSanPham')
                             ->with('error', 'Sản phẩm không tồn tại.');
        }

        return view('vklAdmins.vklDsQuanTris.vklDanhMucs.vklMoTa', ['vklproduct' => $vklproduct]);
    }
}
