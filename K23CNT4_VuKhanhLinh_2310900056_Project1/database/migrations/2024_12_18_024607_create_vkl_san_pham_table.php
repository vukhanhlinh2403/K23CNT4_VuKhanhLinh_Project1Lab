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
        Schema::create('vkl_san_pham', function (Blueprint $table) {
            $table->id();
            $table->string('vklMaSanPham',255)->unique();
            $table->string('vklTenSanPham',255);
            $table->string('vklHinhAnh',255);
            $table->integer('vklSoLuong');
            $table->float('vklDonGia');
            $table->bigInteger('vklMaLoai')->references('id')->on('vkl_loai_san_pham');
            $table->tinyInteger('vklTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vkl_san_pham');
    }
};
