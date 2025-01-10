<?php

namespace App\Http\Controllers;

use App\Models\Vkl_San_Pham;
use App\Models\Vkl_Hoa_Don;
use App\Models\Vkl_Ct_Hoa_Don;
use Illuminate\Http\Request;

class vklHomeController extends Controller
{
    public function vklindex()
    {
        $vklSanPhams = Vkl_San_Pham::paginate(6);  
        return view('vkluser.vklhome', compact('vklSanPhams'));
    }
    
    public function vklindex1()
    {
        $vklSanPhams = Vkl_San_Pham::paginate(6); 
        return view('vkluser.vklhome1', compact('vklSanPhams'));
    }
    
    public function vklshow($id)
    {

        $vklSanPham = Vkl_San_Pham::findOrFail($id); 
        
        return view('vkluser.show', compact('vklSanPham')); 
    }
}
