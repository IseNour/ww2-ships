<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ship_aircraft', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ship_id')->constrained()->onDelete('cascade');
            $table->foreignId('aircraft_model_id')->constrained('aircraft_models')->onDelete('cascade');
            $table->integer('quantity')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            
            $table->unique(['ship_id', 'aircraft_model_id', 'start_date'], 'unique_ship_aircraft');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ship_aircraft');
    }
};