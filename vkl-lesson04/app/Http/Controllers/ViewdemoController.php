<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewdemoController extends Controller
{
    public function view4()
    {
        return view('view4')
        ->with('name', 'Chung Trịnh')
        ->with('company', 'Devmaster Academy');;

    }
    public function view5()
    {
        // dữ liệu
        $info = "VIỆN CÔNG NGHỆ VÀ ĐÀO TẠO DEVMASTER";
        $emp = array(
                        "Name"=>"Trịnh Văn Chung",
                        "Email"=>"chungtrinhj@gmail.com",
                        "Phone"=>"0978611889",
                    );
        if(View::exists('view5')){
        return view('view5',compact('info','emp'));
        }else{
                return "Không tồn tại view5";
            }
    }
}
