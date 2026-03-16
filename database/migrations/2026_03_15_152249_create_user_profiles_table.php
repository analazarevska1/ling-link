<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->enum('language', ['Англиски', 'Германски', 'Македонски', 'Француски', 'Италијански']);
            $table->enum('age_group', ['До 12 години', '13-17 години', '18-25 години', '26-35 години', '40+ години']);
            $table->enum('motivation', ['За училиште / факултет', 'За работа / професионални цели', 'За подготовка за испит', 'За патување', 'За хоби / личен интерес']);
            $table->enum('level', ['Почетно ниво (А1-А2)', 'Средно ниво (Б1-Б2)', 'Напредно ниво (Ц1-Ц2)', 'Не сум сигурен/на']);
            $table->timestamps();
        });
    }
    
    public function down(): void {
        Schema::dropIfExists('user_profiles');
    }
};
