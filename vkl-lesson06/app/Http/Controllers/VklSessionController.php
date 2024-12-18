<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VklSessionController extends Controller
{
    public function getSessionData(Request $request)
    {
        if($request->session()->has('name'))
        {
            echo $request->session()->get('name');
        }
        else
        {
            echo "<h2> Không có dữ liệu trong session </h2>";
        }
    }
    public function storeSessionData(Request $request)
    {
        $request->session()->put('name','Devmaster Academy');
        echo "<h2> Dữ liệu đã được lưu và session </h2>";
    }
    public function deleteSessionData(Request $request)
    {
        $request->session()->forget('name');
        echo "<h2> Dữ liệu đã được xóa khỏi session </h2>";
    }
}
