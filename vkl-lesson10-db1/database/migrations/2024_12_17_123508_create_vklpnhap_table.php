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
        Schema::create('vklpnhap', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('vklSoPN')->primary();
            $table->date('vklNgayNhap');
            $table->string('vklSoDH');
            $table->foreign('vklSoDH')->references('vklSoDH')->on('vkldondh');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vklpnhap');
    }
};
