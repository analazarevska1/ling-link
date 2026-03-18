<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->enum('category', ['children', 'adults', 'specialized']);
            $table->string('duration')->nullable();   // e.g. "32 недели"
            $table->string('students_count')->nullable(); // e.g. "2394" or "1000+"
            $table->integer('hours')->nullable();     // e.g. 128
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};