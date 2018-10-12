<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
      // 配列の初期化
      $data = array();
  
      // データ格納
      $data['name'] = 'rito';
      $data['message'] = 'こんにちは';
      $data['aaa']='123';
  
      // 現在日時
      $today = date('Y年m月d日 H:i:s');
  
      return view('login', ['data' => $data, 'today' => $today]);
    }


   
}