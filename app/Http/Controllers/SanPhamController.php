<?php

namespace App\Http\Controllers;

use App\Models\DanhMucSanPham;
use App\Models\NhanHang;
use Illuminate\Http\Request;
use App\Components\DanhMucChaCon;

class SanPhamController extends Controller
{
    private $danhmucsanpham;
    private $nhanhang;
    public function __construct(DanhMucSanPham $danhmucsanpham, NhanHang $nhanhang){
        $this->danhmucsanpham = $danhmucsanpham;
        $this->nhanhang = $nhanhang;
    }
    public function trangChu(){
        return view('admin.sanpham.trangChu');
    }

    public function them(){
        $DanhMucChaCon = new DanhMucChaCon($this->danhmucsanpham->all());
        $htmlOption = $DanhMucChaCon->DanhMucSanPhamChaCon($danhMucCha='');
        $NhanHang = new DanhMucChaCon($this->nhanhang->all());
        $htmlOptionNhanHang = $NhanHang->NhanHangChaCon();
        return view('admin.sanpham.them',compact('htmlOption','htmlOptionNhanHang'));
    }
    public  function themSanPham(){

    }

    public function danhSachDaXoa(){

    }
    public function khoiPhuc(){

    }
}
