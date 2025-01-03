<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Htpp\RedirectResponde;
use Illuminate\Support\Facades\DB;
use App\Models\Vkl_Tin_Tuc;
use Illuminate\Support\Facades\Storage;

class Vkl_Tin_TucController extends Controller
{
    public function vklList()
    {
        $vklTinTucs = Vkl_Tin_Tuc::all();
        return view('vklAdmins.vklTinTucs.vkl-list',['vklTinTucs'=>$vklTinTucs]);
    }


    public function vklCreate()
    {
        return view('vklAdmins.vklTinTucs.vkl-create');
    }

    public function vklCreateSubmit(Request $request)
    {
        $validatedData = $request->validate([
            'vklMaTT' => 'required|unique:vkl_tin_tuc,vklMaTT',
            'vklTieuDe' => 'required|string|max:255',
            'vklMoTa' => 'required|string',
            'vklNoiDung' => 'required|string',
            'vklNgayDangTin' => 'required|date',
            'vklNgayCapNhap' => 'required|date',
            'vklHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', 
            'vklTrangThai' => 'required|in:0,1',  
        ]);

        $vklTinTuc = new Vkl_Tin_Tuc();
        $vklTinTuc->vklMaTT = $request->vklMaTT;
        $vklTinTuc->vklTieuDe = $request->vklTieuDe;
        $vklTinTuc->vklMoTa = $request->vklMoTa;
        $vklTinTuc->vklNoiDung = $request->vklNoiDung;
        $vklTinTuc->vklNgayDangTin = $request->vklNgayDangTin;
        $vklTinTuc->vklNgayCapNhap = $request->vklNgayCapNhap;

        if ($request->hasFile('vklHinhAnh')) {
            $imagePath = $request->file('vklHinhAnh')->store('public/img/tin_tuc');
            $vklTinTuc->vklHinhAnh = 'img/tin_tuc/' . basename($imagePath);
        }

        $vklTinTuc->vklTrangThai = $request->vklTrangThai;
        $vklTinTuc->save();

        return redirect()->route('vklAdmins.vklTinTucs')->with('success', 'Tin tức đã được tạo thành công.');
    }



    public function vklEdit($id)
    {
        $vklTinTuc = Vkl_Tin_Tuc::findOrFail($id);
        return view('vklAdmins.vklTinTucs.vkl-edit', ['vklTinTuc' => $vklTinTuc]);
    }

    public function vklEditSubmit(Request $request, $id)
    {
        $validated = $request->validate([
            'vklTieuDe' => 'required|string|max:255',
            'vklMoTa' => 'required|string|max:500',
            'vklNoiDung' => 'required|string',
            'vklHinhAnh' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vklNgayDangTin' => 'required|date',
            'vklNgayCapNhap' => 'nullable|date',
            'vklTrangThai' => 'required|in:0,1',
        ]);

        $vklTinTuc = Vkl_Tin_Tuc::findOrFail($id);

        if ($request->hasFile('vklHinhAnh')) {
            if ($vklTinTuc->vklHinhAnh) {
                Storage::delete('public/' . $vklTinTuc->vklHinhAnh);
            }

            $imagePath = $request->file('vklHinhAnh')->store('vklTinTuc', 'public');
            $vklTinTuc->vtdHinhAnh = $imagePath;
        }

        $vklTinTuc->vklTieuDe = $request->vklTieuDe;
        $vklTinTuc->vklMoTa = $request->vklMoTa;
        $vklTinTuc->vklNoiDung = $request->vklNoiDung;
        $vklTinTuc->vklNgayDangTin = $request->vklNgayDangTin;
        $vklTinTuc->vklNgayCapNhap = $request->vklNgayCapNhap ?? now();
        $vklTinTuc->vklTrangThai = $request->vklTrangThai;
        $vklTinTuc->save();

        return redirect()->route('vklAdmins.vklTinTucs')->with('success', 'Tin tức đã được cập nhật!');
    }


    public function vklDetail($id)
    {
        $vklTinTuc = Vkl_Tin_Tuc::find($id);
        return view('vklAdmins.vklTinTucs.vkl-detail',['vklTinTuc'=>$vklTinTuc]);
    }


    public function vklDelete($id)
    {
        $vklTinTuc =  Vkl_Tin_Tuc::find($id);
        $vklTinTuc->delete();
        return redirect()->route('vklAdmins.vklTinTucs.vkllist');
    }
}
