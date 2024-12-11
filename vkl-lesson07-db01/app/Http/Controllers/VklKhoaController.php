<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VklKhoaController extends Controller
{
    //# đọc dữ liệu từ bảng khoa 
    public function vklGetAllKhoa()
    {
        // truy vấn đọc dữ liệu từ bảng khoa
        $vklKhoas = DB::select("Select * from vklkhoa");
        // chuyển dữ liệu lên view để hiển thị 
        return view('vklkhoa.vklList',['vklKhoas' => $vklKhoas]);
    }
    // chi tiết khoa
    public function vklGetKhoa($makh)
    {
        $khoa = DB::select("Select * from vklkhoa where vklmakh=?",[$makh])[0];
        return view('vklKhoa.vklDetail',['khoa'=>$khoa]);
    }

    #Edit - get
    public function vklEdit($makh)
    {
        $khoa = DB::select("Select * from vklkhoa where vklmakh=?",[$makh])[0];
        return view('vklKhoa.vklEdit',['khoa'=>$khoa]);
    }

    #Edit - submit
    public function vklEditSubmit(Request $request)
    {
        // lấy dữ liệu mới trên form sửa
        $makh = $request->input('vklmakh');
        $tenkh = $request->input('vkltenkh');
        DB::update("UPDATE vklkhoa SET vkltenkh = ? where vklmakh = ?", [$tenkh,$makh]);
        return redirect('/khoas');
    } 
    // #insert  - get
    public function vklInsert()
    {
        return view('vklKhoa.vklInsert');
    }



    // #insert - post
    public function vklInsertSubmit()
    {
        // kiem tra du lieu nhap
        $validate = $request->validate([
            'vklmakh'=>'required|max:2',
            'vkltenkh'=>'required|max:50'
        ],
        [
            'vklmakh.required'=> 'vui long nhap ma khoa ',
            'vklmakh.max'=> 'ma khoa toi da 2 ki tu',
            'vkltenkh.required'=> 'vui long nhap ten khoa',
            'vkltenkhoa.max'=>'ten khoa toi da 50 ki tu'
        ]
    );



        // lay du lieu tren form 
        $makh = $request->input('vklmakh');
        $tenkh = $request->input('vkltenkh');
        // ghi du lieu xuong database
        DB::insert("INSERT INTO vklkhoa(vklmakh, vkltenkh) VALUES (?,?)",[$makh,$tenkh]);
        // chuyen sang trang danh sach
        return redirect('/khoas');
    }
    //# delete
    public function vklDelete()
    {
        DB::delete('DELETE FROM vklkhoa WHERE vklmakh=?',[$makh]);
        // chuyen sang trang danh sach
        return redirect('/khoas');
    }
}
