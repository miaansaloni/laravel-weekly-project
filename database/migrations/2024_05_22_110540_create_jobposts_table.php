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
        Schema::create('jobposts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 100);
            $table->string('description', 10000)->nullable();
            $table->string('img', 300)->nullable();
            $table->integer('experience')->nullable();
            $table->string('location', 30)->nullable();
            $table->string('requirements', 500)->nullable();
            $table->string('category', 20)->nullable();
            $table->integer('salary')->nullable();
            $table->string('field', 40)->nullable();
            $table->bigInteger('user_id')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobposts');
    }
};
