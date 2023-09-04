<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SanPhamController extends Controller
{
    public function trangChu(){
        return view('admin.sanpham.trangChu');
    }
}
