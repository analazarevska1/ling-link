<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'language', 'category', 'title', 'subtitle', 'description',
        'duration', 'students_count', 'hours', 'image',
        'level', 'age_group',
        'title_en', 'subtitle_en', 'description_en', // 👈 English columns
    ];

    public function getLocalizedTitle(): string
    {
        if (app()->getLocale() === 'en' && $this->title_en) {
            return $this->title_en;
        }
        return $this->title;
    }

    public function getLocalizedSubtitle(): ?string
    {
        if (app()->getLocale() === 'en' && $this->subtitle_en) {
            return $this->subtitle_en;
        }
        return $this->subtitle;
    }

    public function getLocalizedDescription(): ?string
    {
        if (app()->getLocale() === 'en' && $this->description_en) {
            return $this->description_en;
        }
        return $this->description;
    }

    public function getLocalizedDuration(): ?string 
    {
        if (app()->getLocale() === 'en' && $this->duration_en) {
            return $this->duration_en;
        }
        return $this->duration;
    }
}