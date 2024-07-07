<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('folios_notas_venta', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE folios_notas_venta AUTO_INCREMENT = 56806;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folios_notas_venta');
    }
};
