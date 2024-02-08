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
        Schema::dropIfExists('opportunities');

        Schema::create('opportunities', function (Blueprint $table) {
            $table->uuid('id')->primary();
            // $table->unsignedBigInteger('hero_id')->index();
            $table->timestamps();

            $table->string('title');
            $table->string('description');

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
