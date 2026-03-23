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
        Schema::table('exams', function (Blueprint $table) {
            // Adding the boolean toggle for the "Fast Registration" feature
            $table->boolean('has_fast_registration')->default(false)->after('results_time');
        });
    }
    
    public function down(): void
    {
        Schema::table('exams', function (Blueprint $table) {
            $table->dropColumn('has_fast_registration');
        });
    }
};
