<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ship_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ship_id')->constrained()->onDelete('cascade');
            $table->string('image_url');
            $table->string('caption')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ship_images');
    }
};