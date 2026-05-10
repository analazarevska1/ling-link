<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExamRegistration extends Model
{
    protected $fillable = [
        'exam_id',
        'exam_date_id',
        'full_name',
        'email',
        'phone',
        'message',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function examDate()
    {
        return $this->belongsTo(ExamDate::class);
    }
}