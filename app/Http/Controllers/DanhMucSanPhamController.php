<?php

namespace App\Http\Controllers;

use App\Models\DanhMucSanPham;
use Illuminate\Http\Request;

class DanhMucSanPhamController extends Controller
{
    public function them(){
        $data = DanhMucSanPham::all();
        foreach ($data as $values)
        {
            if ($values['DanhMucCha'] ==0)
            {
                echo "<option>" .$values['TenDanhMuc'] . "</option>";
            }
        }
//        return view('SanPham.them');
    }
    public function trangChu(){
        return view('SanPham.trangChu');
    }
}
