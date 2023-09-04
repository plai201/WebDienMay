<?php

namespace App\Http\Controllers;

use App\Models\DanhMucSanPham;
use Illuminate\Http\Request;

class DanhMucSanPhamController extends Controller
{
    private $htmlSlect;
    private $ds;
    public function __construct(DanhMucSanPham $ds)
    {
        $this->htmlSlect ='';
        $this->ds = $ds;
    }

    public function them(){
        $htmlOption = $this->DanhMucSanPhamChaCon($danhMucCha='');

        return view('admin.danhmucsanpham.them',compact('htmlOption'));
    }
    function DanhMucSanPhamChaCon($danhMucCha,$ma = 0,$text =''){
        $data = $this->ds->all();
        foreach ($data as $value) {
            if ($value->DanhMucCha == $ma) {
                    if(!empty($danhMucCha) && $danhMucCha == $value->MaDanhMuc){
                        $this->htmlSlect .="<option selected value='".$value->MaDanhMuc."'>" .$text. $value->TenDanhMuc . "</option>";
                    } else{
                        $this->htmlSlect .="<option value='".$value->MaDanhMuc."'>" .$text. $value->TenDanhMuc . "</option>";
                    }
                $this->DanhMucSanPhamChaCon($danhMucCha,$value->MaDanhMuc, $text . '-');
            }
        }
        return $this->htmlSlect;
    }
    public function trangChu(){
        $danhmucsanpham= $this->ds->latest()->paginate(5);
        return view('admin.danhmucsanpham.trangChu',compact('danhmucsanpham'));
    }

    public function themDanhMuc(Request $request){
        $this->ds->create([
            'TenDanhMuc' => $request->TenDanhMuc,
            'DanhMucCha' => $request->DanhMucCha
        ]);
        return redirect()->route('danh-muc-san-pham.trangChu');
    }

    public function sua($maDanhMuc){
        $danhmucsanpham = $this->ds->find($maDanhMuc);
        $htmlOption = $this->DanhMucSanPhamChaCon($danhmucsanpham->DanhMucCha);
        return view('admin.danhmucsanpham.sua',compact('danhmucsanpham','htmlOption'));
    }
    public function capNhap(Request $request,$maDanhMuc){
        $this->ds->find($maDanhMuc)->update([
            'TenDanhMuc' => $request->TenDanhMuc,
            'DanhMucCha' => $request->DanhMucCha
        ]);
        return redirect()->route('danh-muc-san-pham.trangChu');
    }

    public function xoa($maDanhMuc){
        $this->ds->find($maDanhMuc)->delete();
        return redirect()->route('danh-muc-san-pham.trangChu');

    }

    public function danhSachDaXoa(){
        $danhSachDaXoa = $this->ds->onlyTrashed()->get();
        return view('admin.danhmucsanpham.danhSachDaXoa',compact('danhSachDaXoa'));
    }

    public function khoiPhuc($maDanhMuc){
        $danhMuc = $this->ds::withTrashed()->find($maDanhMuc);
        if ($danhMuc) {
            $danhMuc->restore();
        }
        return redirect()->route('danh-muc-san-pham.danh-sach-da-xoa');
    }
    public function xoaVinhVien($maDanhMuc){
        $danhMuc = $this->ds::withTrashed()->find($maDanhMuc);

        if ($danhMuc) {
            $danhMuc->forceDelete();
        }
        return redirect()->route('danh-muc-san-pham.danh-sach-da-xoa');
    }
}
