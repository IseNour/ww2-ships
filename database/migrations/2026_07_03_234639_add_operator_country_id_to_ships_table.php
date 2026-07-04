<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('ships', function (Blueprint $table) {
            $table->foreignId('operator_country_id')
                  ->nullable()
                  ->after('class_id')
                  ->constrained('countries')
                  ->nullOnDelete();
        });
    }

    public function down()
    {
        Schema::table('ships', function (Blueprint $table) {
            $table->dropForeign(['operator_country_id']);
            $table->dropColumn('operator_country_id');
        });
    }
};