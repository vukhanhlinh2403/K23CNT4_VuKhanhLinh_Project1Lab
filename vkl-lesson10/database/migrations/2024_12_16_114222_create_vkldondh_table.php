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
        Schema::create('vkldondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('vklSoDH')->primary();
            $table->date('vklNgayDH');
            $table->string('vklMaNCC');
            $table->foreign('vklMaNCC')->references('vklMaNCC')->on('vklnhacc');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vkldondh');
    }
};
