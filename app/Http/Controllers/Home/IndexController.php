<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public function index()
    {
        // 测试
        return view('home/index/index', ['name' => 'huangduan']);
    }
    
    
}
