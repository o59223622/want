<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsPageController extends Controller
{
    public function index()
    {
      $name;
      $name=$_GET['name'];



  
      return view('goodspage', ['name'=>$name]);
    }


   
}