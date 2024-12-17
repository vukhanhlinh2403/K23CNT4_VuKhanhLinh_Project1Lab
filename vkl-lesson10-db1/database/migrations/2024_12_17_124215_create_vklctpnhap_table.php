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
        Schema::create('vklctpnhap', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('vklSoPN');
            $table->string('vklMaVTu');
            $table->integer('vklSlNhap');
            $table->float('vklDgNhap');
            $table->primary(['vklSoPN','vklMaVTu']);
            $table->foreign('vklSoPN')->references('vklSoPN')->on('vklpnhap');
            $table->foreign('vklMaVTu')->references('vklMaVTu')->on('vklvattu'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vklctpnhap');
    }
};
