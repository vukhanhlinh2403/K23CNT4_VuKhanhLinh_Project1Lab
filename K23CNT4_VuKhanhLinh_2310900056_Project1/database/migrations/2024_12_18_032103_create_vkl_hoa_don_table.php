<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vkl_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->string('vklMaHoaDon',255)->unique();
            $table->bigInteger('vklMaKhachHang')->references('id')->on('vkl_khach_hang');
            $table->date('vklNgayHoaDon');
            $table->string('vklHoTenKhachHang',255);
            $table->string('vklEmail',255);
            $table->string('vklDienThoai',255);
            $table->string('vklDiaChi',255);
            $table->float('vklTongTriGia',255);
            $table->tinyInteger('vklTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vkl_hoa_don');
    }
};
