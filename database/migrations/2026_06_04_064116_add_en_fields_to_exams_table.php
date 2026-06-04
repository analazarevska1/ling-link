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
        $table->string('where_recognized_en')->nullable()->after('where_recognized');
        $table->string('what_for_en')->nullable()->after('what_for');
    });
}

public function down(): void
{
    Schema::table('exams', function (Blueprint $table) {
        $table->dropColumn(['where_recognized_en', 'what_for_en']);
    });
}
};
