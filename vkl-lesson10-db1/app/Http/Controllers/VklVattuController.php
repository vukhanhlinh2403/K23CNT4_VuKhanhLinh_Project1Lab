<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VklVattuController extends Controller
{
    public function list()
    {
        $vklVattus = VklVattu::paginate(10);
        return view('VklVattus.List',['vklVattus'=>$vklVattus]);
    }
}
