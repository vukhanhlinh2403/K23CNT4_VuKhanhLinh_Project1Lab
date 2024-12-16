<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
        return "<h1> Account controller; action index, return string";
    }
    public function create()
    {
        return view('account-create');
    }
    public function showData()
    {
        $data = array('2310900056','Devmaster');
        return view('account-show',compact('data'));
    }
    public function list()
    {
        $data = array(
            ["id"=>1,"UserName"=>"ChungTrinh","Password"=>"123456a@","FullName"=>"Trịnh Văn Chung"],
            ["id"=>2,"UserName"=>"Devmaster","Password"=>"123456a@","FullName"=>"Devmaster Academy"]);
        return view('account-list',compact('data'));
    }
    public function getAllAccount()
    {
        $data = DB::table('account')->get();
        return view('account-getall',compact('data'));
    }
}
