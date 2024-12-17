<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VklNhaCCController extends Controller
{
    public function list()
    {
        $vklNhaCCs = VklNhaCC::all();
        return view('VklNhaCCs.List',['vklNhaCCs'=>$vklNhaCCs]);
    }
}
