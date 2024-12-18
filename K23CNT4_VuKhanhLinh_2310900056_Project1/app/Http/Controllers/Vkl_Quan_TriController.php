<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vkl_Quan_TriController extends Controller
{
    public function vklLogin()
    {
        return view('VklLogin.vkl-login');
    }
    public function vklLoginSubmit(Request $request)
    {
        return view('VklLogin.vkl-login');
    }
}
