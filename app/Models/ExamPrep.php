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
        'name_en', 'description_en',
    ];

    public function getLocalizedName(): ?string
    {
        if (app()->getLocale() === 'en' && $this->name_en) {
            return $this->name_en;
        }
        return $this->name;
    }

    public function getLocalizedDescription(): ?string
    {
        if (app()->getLocale() === 'en' && $this->description_en) {
            return $this->description_en;
        }
        return $this->description;
    }
}
