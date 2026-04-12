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
    // Drop the old enum columns and recreate with short keys
    Schema::table('user_profiles', function (Blueprint $table) {
        $table->string('language_new')->nullable();
        $table->string('age_group_new')->nullable();
        $table->string('motivation_new')->nullable();
        $table->string('level_new')->nullable();
    });

    // Migrate existing data
    DB::table('user_profiles')->get()->each(function ($profile) {
        DB::table('user_profiles')->where('id', $profile->id)->update([
            'language_new' => match($profile->language) {
                'Англиски јазик'    => 'english',
                'Германски јазик'   => 'german',
                'Македонски јазик'  => 'macedonian',
                'Француски јазик'   => 'french',
                'Италијански јазик' => 'italian',
                default             => null,
            },
            'age_group_new' => match($profile->age_group) {
                'До 12 години'   => 'до 12',
                '13-17 години'   => '13-17',
                '18-25 години'   => '18-25',
                '26-35 години'   => '26-35',
                '40+ години'     => '40+',
                default          => null,
            },
            'motivation_new' => match($profile->motivation) {
                'За училиште / факултет'        => 'school',
                'За работа / професионални цели' => 'work',
                'За подготовка за испит'         => 'exam',
                'За патување'                    => 'travel',
                'За хоби / личен интерес'        => 'hobby',
                default                          => null,
            },
            'level_new' => match($profile->level) {
                'Почетно ниво (А1-А2)'   => 'A1-A2',
                'Средно ниво (Б1-Б2)'    => 'B1-B2',
                'Напредно ниво (Ц1-Ц2)'  => 'C1-C2',
                'Не сум сигурен/на'      => 'unsure',
                default                  => null,
            },
        ]);
    });

    Schema::table('user_profiles', function (Blueprint $table) {
        $table->dropColumn(['language', 'age_group', 'motivation', 'level']);
    });

    Schema::table('user_profiles', function (Blueprint $table) {
        $table->renameColumn('language_new', 'language');
        $table->renameColumn('age_group_new', 'age_group');
        $table->renameColumn('motivation_new', 'motivation');
        $table->renameColumn('level_new', 'level');
    });
}
};
