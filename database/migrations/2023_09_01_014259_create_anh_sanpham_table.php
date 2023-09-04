<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnhSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anh_sanpham', function (Blueprint $table) {
            $table->bigIncrements('MaAnh')->comment('Mã sản phẩm');
            $table->integer('MaSanPham')->comment('Mã sản phẩm # Mã sản phẩm');
            $table->string('Anh', 200)->comment('Ảnh sản phẩm # Hình đại diện của sản phẩm');
            $table->timestamp('ThoiGianTao')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo ảnh sản phẩm');
            $table->timestamp('ThoiGianCapNhap')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật ảnh sản phẩm gần nhất');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anh_sanpham');
    }
}
