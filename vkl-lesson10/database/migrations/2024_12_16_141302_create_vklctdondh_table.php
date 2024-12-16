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
        Schema::create('vklctdondh', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            // $table->id();
            // $table->timestamps();
            $table->string('vklSoDH');
            $table->string('vklMaVTu');
            $table->integer('vklSlDat');
            // Tạo khóa chính trên 2 cột (vklSoDH, vklMaVTu)
            $table->primary(['vklSoDH','vklMaVTu']);
            // Khóa ngoại
            $table->foreign('vklSoDH')->references('vklSoDH')->on('tvctdondh');
            $table->foreign('vklMaVTu')->references('vklMaVTu')->on('vklvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vklctdondh');
    }
};
