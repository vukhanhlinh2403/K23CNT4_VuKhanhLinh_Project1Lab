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
        Schema::create('vkl_khach_hang', function (Blueprint $table) {
            $table->id();
            $table->string('vklMaKhachHang',255)->unique();
            $table->string('vklHoTenKhachHang',255);
            $table->string('vklEmail',255);
            $table->string('vklMatKhau',255);
            $table->string('vklDienThoai',255);
            $table->string('vklDiaChi',255);
            $table->date('vklNgayDangKy');
            $table->tinyInteger('vklTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vkl_khach_hang');
    }
};
