<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ExamLevel extends Model
{
    protected $fillable = [
        'exam_id', 'level', 'name', 'description', 'can_do', 'order'
    ];

    protected $casts = [
        'can_do' => 'array'
    ];

    public function exam() {
        return $this->belongsTo(Exam::class);
    }
}