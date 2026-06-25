<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('class_id')->constrained('classes')->onDelete('cascade');
            $table->date('launch_date')->nullable();
            $table->date('commission_date')->nullable();
            $table->decimal('displacement', 10, 2)->nullable();
            $table->decimal('length', 8, 2)->nullable();
            $table->decimal('beam', 8, 2)->nullable();
            $table->decimal('draft', 8, 2)->nullable();
            $table->decimal('max_speed', 5, 2)->nullable();
            $table->integer('crew')->nullable();
            $table->text('fate')->nullable();
            $table->text('description')->nullable();
            $table->boolean('is_aircraft_carrier')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ships');
    }
};