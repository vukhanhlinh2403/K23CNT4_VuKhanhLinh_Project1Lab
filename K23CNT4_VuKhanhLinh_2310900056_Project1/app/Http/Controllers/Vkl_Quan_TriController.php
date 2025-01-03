<?php

namespace App\Http\Controllers;

use Illuminate\Htpp\RedirectResponde;
use Illuminate\Http\Request;
use App\Models\Vkl_Quan_Tri;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


class Vkl_Quan_TriController extends Controller
{
    public function vklLogin()
    {
        return view('VklLogin.vkl-login');
    }
    public function vklLoginSubmit(Request $request)
    {
        $request->validate([
            'vklTaiKhoan' => 'required|string',
            'vklMatKhau' => 'required|string',
        ]);
        $user = Vkl_Quan_Tri::where('vklTaiKhoan', $request->vklTaiKhoan)->first();

        // Kiểm tra nếu người dùng tồn tại và mật khẩu đúng
        if ($user && Hash::check($request->vklMatKhau, $user->vklMatKhau)) {
            // Đăng nhập thành công
            Auth::loginUsingId($user->id);

            // Lưu tên tài khoản vào session
            Session::put('username', $user->vklTaiKhoan);

            // Chuyển hướng về trang admin với thông báo thành công
            return redirect('/vkl-admins')->with('message', 'Đăng Nhập Thành Công');
        } else {
            // Thông báo lỗi nếu tài khoản hoặc mật khẩu sai
            return redirect()->back()->withErrors(['vklMatKhau' => 'Tài khoản hoặc mật khẩu không đúng']);
        }
    }

    public function vklList()
    {
        $vklQuanTris = Vkl_Quan_Tri::all();
        return view('vklAdmins.vklQuanTris.vkl-list',['vklQuanTris'=>$vklQuanTris]);
    }


    public function vklCreate()
    {
        return view('vklAdmins.vklQuanTris.vkl-create');
    }
    public function vklCreateSubmit(Request $request)
    {
        // valication data
        $valicationdate = $request->validate([
            'vklTaiKhoan'=>'required|unique:vkl_quan_tri',
            'vklMatKhau'=>'required',
        ]);
        //ghi du lieu xuong db
        $vklQuanTri = new Vkl_Quan_Tri;
        $vklQuanTri->vklTaiKhoan = $request->vklTaiKhoan;
        $vklQuanTri->vklMatKhau = $request->vklMatKhau;
        $vklQuanTri->vklTrangThai = $request->vklTrangThai;

        $vklQuanTri->save();
        return redirect()->route('vklAdmins.vklQuanTris.vkllist');
    }
    

    public function vklEdit($id)
    {
        $vklQuanTri = Vkl_Quan_Tri::find($id);
        return view('vklAdmins.vklQuanTris.vkl-edit',['vklQuanTri'=>$vklQuanTri]);
    }
    #Edit - submit
    public function vklEditSubmit(Request $request)
    {

         // valication dât
         $valicationdate = $request->validate([
            'vklTaiKhoan'=>'required',
            'vklMatKhau'=>'required',
        ]);
        //ghi du lieu xuong db
        $vklQuanTri =  Vkl_Quan_Tri::find($request->id);

        $vklQuanTri->vklTaiKhoan = $request->vklTaiKhoan;
        $vklQuanTri->vklMatKhau = $request->vklMatKhau;
        $vklQuanTri->vklTrangThai = $request->vklTrangThai;

        $vklQuanTri->save();
        return redirect()->route('vklAdmins.vklQuanTris.vkllist');
    }



    public function vklDelete($id)
    {
        $vklQuanTri =  Vkl_Quan_Tri::find($id);
        $vklQuanTri->delete();
        return redirect()->route('vklAdmins.vklQuanTris.vkllist');
    }


    public function vklDetail($id)
    {
        $vklQuanTri = Vkl_Quan_Tri::where('id', $id)->first();
        return view('vklAdmins.vklQuanTris.vkl-detail',['vklQuanTri'=>$vklQuanTri]);
    }
}
