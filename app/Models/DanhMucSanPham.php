<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhMucSanPham extends Model
{
    use HasFactory;
    protected $table = 'danh_muc_san_pham'; // Đổi tên bảng mới tại đây

    protected $primaryKey = 'MaDanhMuc'; // Khóa chính của bảng

    public $timestamps = true; // Sử dụng cột thời gian tạo và cập nhật

    // Các cột khác trong bảng
    protected $fillable = [
        'TenDanhMuc',
        'DanhMucCha',
        'Anh'
    ];
}
