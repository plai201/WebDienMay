<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('the', function (Blueprint $table) {
            $table->bigIncrements('MaThe')->comment('Mã thẻ');
            $table->string('TenThe', 191)->comment('Tên thẻ# Tên sản thẻ');

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
        Schema::dropIfExists('the');
    }
}
