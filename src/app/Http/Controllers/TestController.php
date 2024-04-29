<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;     //モデルのデータを持ってくる
use Illuminate\Support\Facades\DB;//クエリビルダ

class TestController extends Controller
{
    public function index()
       {
          return view('index');
        }
}
