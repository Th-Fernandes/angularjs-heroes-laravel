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
  
        Schema::create('opportunities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('hero_id')->index();
            $table->timestamps();

            $table->string('title');
            $table->string('description');

            $table->foreign('hero_id')->references('id')->on('heroes')->cascadeOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('opportunities');
    }
};
