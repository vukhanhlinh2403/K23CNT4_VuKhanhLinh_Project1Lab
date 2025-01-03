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
        Schema::table('vkl_San_Pham', function (Blueprint $table) {
            $table->text('vklMoTa')->nullable()->after('vklMaLoai');  // Thêm cột vtdMoTa sau cột vtdMaLoai
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vkl_San_Pham', function (Blueprint $table) {
            $table->dropColumn('vklMoTa');  // Xóa cột vtdMoTa nếu cần
        });
    }
};
