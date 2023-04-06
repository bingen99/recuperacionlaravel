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
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumno_id')->unique();
            $table->string('street', 64);
            $table->string('city', 64);
            $table->string('country', 64);
            $table->string('postal_code', 64);
            $table->timestamps();

            $table->foreign('alumno_id')->references('id')->on('alumno')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('direcciones');
    }
};
