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
        Schema::create('vkl_ct_hoa_don', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('vklHoaDonID')->references('id')->on('vkl_Hoa_Don');
            $table->bigInteger('vklSanPhamID')->references('id')->on('vkl_san_pham');
            $table->integer('vklSoLuongMua');
            $table->float('vklDonGiaMua');
            $table->float('vklThanhTien');
            $table->tinyInteger('vklTrangThai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vkl_ct_hoa_don');
    }
};
