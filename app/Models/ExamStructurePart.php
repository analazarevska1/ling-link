<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ExamStructurePart extends Model
{
    protected $fillable = [
        'exam_id', 'title', 'duration', 'description', 'icon', 'order',
        'title_en', 'duration_en', 'description_en',
    ];

    public function exam() {
        return $this->belongsTo(Exam::class);
    }

    public function getLocalizedTitle(): string
    {
        if (app()->getLocale() === 'en' && $this->title_en) {
            return $this->title_en;
        }
        return $this->title;
    }

    public function getLocalizedDuration(): ?string
    {
        if (app()->getLocale() === 'en' && $this->duration_en) {
            return $this->duration_en;
        }
        return $this->duration;
    }

    public function getLocalizedDescription(): ?string
    {
        if (app()->getLocale() === 'en' && $this->description_en) {
            return $this->description_en;
        }
        return $this->description;
    }
}