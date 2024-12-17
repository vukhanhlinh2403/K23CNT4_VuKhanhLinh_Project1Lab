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
        Schema::create('vkltonkho', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('vklNamThang');
            $table->string('vklMaVTu');
            $table->integer('vklSLDau');
            $table->integer('vklTongSLN');
            $table->integer('vklTongSLX');
            $table->integer('vklTongSLCuoi');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vkltonkho');
    }
};
