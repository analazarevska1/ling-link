<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // 1. Add the missing details to the EXAMS table
        Schema::table('exams', function (Blueprint $table) {
            $table->string('duration')->nullable()->after('title'); 
            $table->string('results_time')->nullable()->after('duration'); 
            $table->boolean('is_on_demand')->default(false)->after('results_time'); 
        });

        // 2. Only add the registration start date to EXAM_DATES
        Schema::table('exam_dates', function (Blueprint $table) {
            $table->date('registration_start')->nullable()->after('exam_date');
        });
    }

    public function down(): void
    {
        Schema::table('exams', function (Blueprint $table) {
            $table->dropColumn(['duration', 'results_time', 'is_on_demand']);
        });

        Schema::table('exam_dates', function (Blueprint $table) {
            $table->dropColumn('registration_start');
        });
    }
};