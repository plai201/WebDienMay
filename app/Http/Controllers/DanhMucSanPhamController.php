<?php

namespace App\Http\Controllers;

use App\Models\DanhMucSanPham;
use Illuminate\Http\Request;

class DanhMucSanPhamController extends Controller
{
    private $htmlSlect;
    public function __construct()
    {
        $this->htmlSlect ='';
    }

    public function them(){
        $htmlOption = $this->DanhMucSanPhamChaCon(0);

        return view('SanPham.them',compact('htmlOption'));
    }
    function DanhMucSanPhamChaCon($ma,$text =''){
        $data = DanhMucSanPham::all();
        foreach ($data as $value) {
            if ($value->DanhMucCha == $ma) {
                $this->htmlSlect .="<option>" .$text. $value->TenDanhMuc . "</option>";
                $this->DanhMucSanPhamChaCon($value->MaDanhMuc, $text . '-');
            }
        }
        return $this->htmlSlect;
    }
    public function trangChu(){
        return view('SanPham.trangChu');
    }
}
