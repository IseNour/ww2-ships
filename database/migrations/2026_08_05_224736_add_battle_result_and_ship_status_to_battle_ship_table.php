<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('battle_ship', function (Blueprint $table) {
            $table->string('battle_result')->nullable()->after('result');
            $table->string('ship_status')->nullable()->after('battle_result');
        });
    }

    public function down(): void
    {
        Schema::table('battle_ship', function (Blueprint $table) {
            $table->dropColumn(['battle_result', 'ship_status']);
        });
    }
};