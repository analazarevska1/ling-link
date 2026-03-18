<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'category',
        'duration',
        'students_count',
        'hours',
        'image',
        "language"
    ];
}