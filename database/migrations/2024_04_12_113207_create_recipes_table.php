<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->foreignId('kat_id')->references('id')->on('categories');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();
        });

        DB::table('recipes')->insert([
            ['nev' => 'Marhapörkűtt', 'kat_id' => 1, 'kep_eleresi_ut' => 'porkutt.jpg', 'leiras' => 'Ez egy recept a pörkűttről'], //0
            ['nev' => 'Madártej', 'kat_id' => 3, 'kep_eleresi_ut' => 'madartej.jpg', 'leiras' => 'Ez egy recept a leghíresebb emlősőkről a világon: a madarak tejéről...'], //0
        ]);
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
