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
        Schema::create('vklpxuat', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('vklSoPX')->primary();
            $table->date('vklNgayXuat');
            $table->string('vklTenKH',100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vklpxuat');
    }
};
