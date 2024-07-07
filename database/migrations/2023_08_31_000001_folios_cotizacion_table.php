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
        Schema::create('folios_cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE folios_cotizaciones AUTO_INCREMENT = 4425;');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folios_cotizaciones');
    }
};
