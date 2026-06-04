<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ExamLevel extends Model
{
    protected $fillable = [
        'exam_id', 'level', 'name', 'description', 'can_do', 'order',
        'name_en', 'description_en','can_do_en'
    ];

 protected $casts = [
    'can_do'    => 'array',
    'can_do_en' => 'array',
];

    public function exam() {
        return $this->belongsTo(Exam::class);
    }

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