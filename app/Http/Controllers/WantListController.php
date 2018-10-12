<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WantListController extends Controller
{
    public function index()
    {
        $name;
        $name=$_GET['name'];
  
  
  
    
        //return view('goodspage', ['name'=>$name]);
  
      return view('wantlist', ['name' => $name]);
    }


   
}