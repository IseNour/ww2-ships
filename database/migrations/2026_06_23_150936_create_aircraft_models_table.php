<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('aircraft_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('type_id')->constrained('aircraft_types')->onDelete('cascade');
            $table->foreignId('country_id')->constrained()->onDelete('cascade');
            $table->decimal('max_speed', 6, 2)->nullable();
            $table->decimal('range', 8, 2)->nullable();
            $table->text('armament')->nullable();
            $table->integer('crew')->nullable();
            $table->date('first_flight')->nullable();
            $table->date('introduced')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aircraft_models');
    }
};