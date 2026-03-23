<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ExamStructurePart extends Model
{
    protected $fillable = [
        'exam_id', 'title', 'duration', 'description', 'icon', 'order'
    ];

    public function exam() {
        return $this->belongsTo(Exam::class);
    }
}