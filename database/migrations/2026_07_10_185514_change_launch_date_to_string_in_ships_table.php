<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('ships', function (Blueprint $table) {
            $table->string('launch_date')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('ships', function (Blueprint $table) {
            $table->date('launch_date')->nullable()->change();
        });
    }
};