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
        Schema::create('egginfo', function (Blueprint $table) {
            $table->string('eggType')->primary();
            $table->string('name');
            $table->string('imgPath');
            $table->integer('boilMiliSec');
            $table->integer('numCounter')->default(0);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('egginfo');
    }
};
