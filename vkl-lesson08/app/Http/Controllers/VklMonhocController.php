<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VklMonhocController extends Controller
{
    //#1. list mon hoc
    public function vklList()
    {
        $vklmonhocs = DB::table('vklmonhoc')->get();
        return view('vklMonhoc.vklList',['vklMonhocs'=>$vklmonhocs]);
    }


    //doc chi tiet thong tin mon hoc theo ma mon 
    public function vklgetMonhoc($mamh)
    {
        $monhoc = DB::table("Table * from vklmonhoc where vklmamh=?",[$mamh])[0];
        return view('vklMonhoc.vklDetail',['monhoc'=>$monhoc]);
    }


    #Edit - get
    public function vklEdit($makh)
    {
        $monhoc = DB::table("Table * from vklmonhoc where vklmamh=?",[$mamh])[0];
        return view('vklMonhoc.vklEdit',['monhoc'=>$monhoc]);
    }

    #Edit - submit
    public function vklEditSubmit(Request $request)
    {
        // lấy dữ liệu mới trên form sửa
        $mamh = $request->input('vklmamh');
        $tenmh = $request->input('vkltenmh');
        $sotiet = $request->input('vklsotiet');
        DB::update("UPDATE vklmonhoc SET vklsotiet = ? where vkltenmh = ? where vklmamh = ? ", [$sotiet,$tenmh,$makh]);
        return redirect('/monhocs');
    } 
    // #insert  - get
    public function vklInsert()
    {
        return view('vklMonhoc.vklInsert');
    }

    // #insert - post
    public function vklInsertSubmit()
    {
        // kiem tra du lieu nhap
        $validate = $request->validate([
            'vklmamh'=>'required|max:3',
            'vkltenmh'=>'required|max:50',
            'vklsotiet'=>'required|max:11'
        ],
        [
            'vklmamh.required'=> 'vui long nhap ma khoa ',
            'vklmamh.max'=> 'ma khoa toi da 2 ki tu',
            'vkltenmh.required'=> 'vui long nhap ten khoa',
            'vkltenmh.max'=>'ten khoa toi da 50 ki tu',
            'vklsotiet.required'=> 'vui long nhap so tiet',
            'vklsotiet.max'=> 'so tiet toi da 2 ki tu'
        ]
    );



        // lay du lieu tren form 
        $mamh = $request->input('vklmamh');
        $tenmh = $request->input('vkltenmh');
        $sotiet = $request->input('vklsotiet');
        // ghi du lieu xuong database
        DB::insert("INSERT INTO vklmonhoc(vklmamh, vkltenmh, vklsotiet) VALUES (?,?,?)",[$makh,$tenkh,$sotiet]);
        // chuyen sang trang danh sach
        return redirect('/monhocs');
    }
    //# delete
    public function vklDelete()
    {
        DB::delete('DELETE FROM vklmonhoc WHERE vklmamh=?',[$mamh]);
        // chuyen sang trang danh sach
        return redirect('/monhocs');
    }
}
