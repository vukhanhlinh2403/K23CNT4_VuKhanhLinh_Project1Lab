<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $fruits = array("Apple","Orange","Mango","Banana","Pineapple");
        return view('test',['fruits'=>$fruits]);
    }
}
