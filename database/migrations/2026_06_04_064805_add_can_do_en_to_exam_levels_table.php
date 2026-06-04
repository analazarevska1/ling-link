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
        Schema::table('exam_levels', function (Blueprint $table) {
            $table->json('can_do_en')->nullable()->after('can_do');
        });
    }

    public function down(): void
    {
        Schema::table('exam_levels', function (Blueprint $table) {
            $table->dropColumn('can_do_en');
        });
    }
};
