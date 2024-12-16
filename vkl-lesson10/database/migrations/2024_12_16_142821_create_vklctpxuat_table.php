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
        Schema::create('vklctpxuat', function (Blueprint $table) {
            //$table->id();
            //$table->timestamps();
            $table->string('vklSoPX');
            $table->string('vklMaVTu');
            $table->interger('vklSlXuat');
            $table->float('vklDgXuat');
            $table->primary(['vklSoPX','vklMaVTu']);
            $table->foreign('vklSoPX')->references('vklSoPX')->on('vklctpxuat');
            $table->foreign('vklMaVTu')->references('vklMaVTu')->on('vklvattu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vklctpxuat');
    }
};
