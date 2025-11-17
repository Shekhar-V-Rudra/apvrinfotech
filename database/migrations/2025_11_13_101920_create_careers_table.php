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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->integer('vacancy')->default(1);
            $table->string('experience')->nullable(); // e.g., "0-2 Years", "1-3 Years"
            $table->string('location')->nullable();
            $table->string('job_type')->default('Full time'); // Full time, Part time, Contract
            $table->boolean('is_active')->default(true); // Enable/Disable flag
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
