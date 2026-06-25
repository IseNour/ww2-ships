<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('battle_ship', function (Blueprint $table) {
            $table->foreignId('battle_id')->constrained()->onDelete('cascade');
            $table->foreignId('ship_id')->constrained()->onDelete('cascade');
            $table->string('result')->nullable();
            $table->primary(['battle_id', 'ship_id']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('battle_ship');
    }
};