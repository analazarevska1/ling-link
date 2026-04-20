<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['user_id', 'language', 'age_group', 'motivation', 'level'];

    // These translate short keys → Macedonian for display in the UI
    public const LANGUAGE_LABELS = [
        'english'    => 'Англиски јазик',
        'german'     => 'Германски јазик',
        'macedonian' => 'Македонски јазик',
        'french'     => 'Француски јазик',
        'italian'    => 'Италијански јазик',
    ];

    public const AGE_GROUP_LABELS = [
        'до 12' => 'До 12 години',
        '13-17'  => '13-17 години',
        '18-25'  => '18-25 години',
        '26-35'  => '26-35 години',
        '40+'    => '40+ години',
    ];

    public const MOTIVATION_LABELS = [
        'school' => 'За училиште / факултет',
        'work'   => 'За работа / професионални цели',
        'exam'   => 'За подготовка за испит',
        'travel' => 'За патување',
        'hobby'  => 'За хоби / личен интерес',
    ];

    public const LEVEL_LABELS = [
        'A1-A2'  => 'Почетно ниво (А1-А2)',
        'B1-B2'  => 'Средно ниво (Б1-Б2)',
        'C1-C2'  => 'Напредно ниво (Ц1-Ц2)',
        'unsure' => 'Не сум сигурен/на',
    ];
}