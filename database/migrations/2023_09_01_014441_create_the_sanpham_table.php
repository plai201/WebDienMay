<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheSanphamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the_sanpham', function (Blueprint $table) {
            $table->bigIncrements('MaTheSanPham')->comment('Mã thẻ sản phẩm');
            $table->integer('MaSanPham')->comment('Mã sản phẩm');
            $table->integer('MaThe')->comment('Mã thẻ');

            $table->timestamp('ThoiGianTao')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm tạo # Thời điểm đầu tiên tạo thẻ');
            $table->timestamp('ThoiGianCapNhap')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('Thời điểm cập nhật # Thời điểm cập nhật thẻ gần nhất');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('the_sanpham');
    }
}
