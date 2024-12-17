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
        Schema::create('vklvattu', function (Blueprint $table) {
            //$table->id();
            $table->string('vklMaVTu')->primary();
            $table->string('vklTenVTu')->unique();
            $table->string('vklDvTinh');
            $table->float('vklPhanTram');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vklvattu');
    }
};
