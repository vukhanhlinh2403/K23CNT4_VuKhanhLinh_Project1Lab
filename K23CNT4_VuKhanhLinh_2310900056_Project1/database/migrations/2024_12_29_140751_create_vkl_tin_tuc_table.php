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
        Schema::create('vkl_tin_tuc', function (Blueprint $table) {
            $table->id();
            $table->string('vklMaTT')->unique(); // Assuming 'vtdMaTT' is unique, add unique constraint if needed
            $table->string('vklTieuDe');
            $table->text('vklMoTa'); // 'text' type is better for longer descriptions
            $table->longText('vklNoiDung'); // 'longText' for potentially larger content
            $table->dateTime('vklNgayDangTin'); // Store as datetime
            $table->dateTime('vklNgayCapNhap'); // Store as datetime
            $table->string('vklHinhAnh');
            $table->tinyInteger('vklTrangThai'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vkl_tin_tuc');
    }
};
