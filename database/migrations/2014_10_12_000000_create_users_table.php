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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique()->nullable();
            $table->string('password');
            $table->string('avatar')->nullable();
            $table->string('signature')->nullable();
            $table->unsignedBigInteger('user_type');
            $table->rememberToken();
            $table->timestamps();

            // $table->foreign('user_type')->references('id')->on('user_type');
        });

        DB::table('users')->insert([
            'name' => 'Ciampi Website',
            'email' => 'sales@glasse.com.mx',
            'phone' => '5555555555',
            'password' => bcrypt('12345678'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Gabriel Coronado',
            'email' => 'gabriel@glasse.com.mx',
            'phone' => '7294447086',
            'password' => bcrypt('Gabo0191$!$'),
            'user_type' => 7,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Roberto',
            'email' => 'roberto@glasse.com.mx',
            'phone' => '5542873295',
            'password' => bcrypt('GlasseRoberto2022'),
            'user_type' => 7,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Luis Enrique Espinosa',
            'email' => 'luis@ciampi.com.mx',
            'phone' => '5539355290',
            'password' => bcrypt('Tata1535!'),
            'user_type' => 5,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Jose Miguel Espinosa',
            'email' => 'direccion@freddo.com.mx',
            'phone' => '5540706946',
            'password' => bcrypt('CiampiMickey2023'),
            'user_type' => 4,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Blanca Castañeda',
            'email' => 'blanca@glasse.com.mx',
            'phone' => '5520719520',
            'password' => bcrypt('CiampiBlanca2023'),
            'user_type' => 3,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Ana Silvia Romero',
            'email' => 'gerencia@glasse.com.mx',
            'phone' => '+5525638989',
            'password' => bcrypt('Roniem1011'),
            'user_type' => 2,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Marily Lopez',
            'email' => 'marily@glasse.com.mx',
            'phone' => '5545759700',
            'password' => bcrypt('GlasseMarily2022'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Daniel Olivera Vazquez',
            'email' => 'daniel@glasse.com.mx',
            'phone' => '5520451513',
            'password' => bcrypt('GlasseDaniel2023'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);

        DB::table('users')->insert([
            'name' => 'Laura Ivett Esquivel Fernandez',
            'email' => 'lauraesquivel@glasse.com.mx',
            'phone' => '5610369646',
            'password' => bcrypt('GlasseLaura2022'),
            'user_type' => 1,
            'avatar' => 'default.png',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
