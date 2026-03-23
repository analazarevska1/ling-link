<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ExamDate extends Model
{
    protected $fillable = [
        'exam_id', 'type', 'exam_date', 'registration_deadline',
        'location', 'max_participants', 'is_active','registration_start'
    ];

    protected $casts = [
        'exam_date' => 'date',
        'registration_deadline' => 'date',
        'registration_start' => 'date'
    ];

    public function exam() {
        return $this->belongsTo(Exam::class);
    }
}