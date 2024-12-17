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
            $table->string('vklSoDH');
            $table->string('vklMaVTu');
            $table->integer('vklSlDat');
            $table->primary(['vklSoDH','vklMaVTu']);
            $table->foreign('vklSoDH')->references('vklSoDH')->on('vkldondh');
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
