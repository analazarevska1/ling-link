<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPrep extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'exam_group',
        'name',
        'description',
    ];
}
