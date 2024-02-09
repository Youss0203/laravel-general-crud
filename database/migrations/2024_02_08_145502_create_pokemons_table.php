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
        Schema::create('pokemons', function (Blueprint $table) {
            $table->id();  
            $table->string('name',40);
            $table->string('species',30);
            $table->string('height',100);
            $table->string('weight',100);
            $table->string('abilities',40);
            $table->string('img_url',300);
            $table->integer('hp');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('speed_attack');
            $table->integer('speed_defence');
            $table->integer('speed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokemons');
    }
};
