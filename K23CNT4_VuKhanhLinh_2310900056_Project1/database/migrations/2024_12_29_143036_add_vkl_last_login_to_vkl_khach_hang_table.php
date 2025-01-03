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
        Schema::table('vkl_khach_hang', function (Blueprint $table) {
            $table->timestamp('vklLastLogin')->nullable(); // Thêm cột vtdLastLogin để lưu thời gian đăng nhập gần nhất
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vkl_khach_hang', function (Blueprint $table) {
            $table->dropColumn('vklLastLogin'); // Xóa cột vtdLastLogin nếu cần
        });
    }
};
