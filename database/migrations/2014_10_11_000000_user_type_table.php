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
        Schema::create('user_type', function (Blueprint $table) {
            $table->id();
            $table->string('type');
        });

        DB::table('user_type')->insert([
            ['type' => 'vendedor'],
            ['type' => 'manager_pdv'],
            ['type' => 'head_assistant'],
            ['type' => 'CFO'],
            ['type' => 'CEO'],
            ['type' => 'accounting'],
            ['type' => 'MASTER']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_type');
    }
};
