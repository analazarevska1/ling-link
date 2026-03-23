<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'title', 
        'subtitle', 
        'description', 
        'image',
        'where_recognized', 
        'what_for', 
        'first_exam_date',
        'official_site_url', 
        'is_active', 
        'is_featured',
        'duration',       
        'results_time',   
        'is_on_demand',
        'has_fast_registration',
        'layout_type',    
        'info_cards'     
    ];

    protected $casts = [
        'has_fast_registration' => 'boolean',
        'info_cards' => 'array',    
        'is_on_demand' => 'boolean',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
        'first_exam_date' => 'date',
    ];

    public function structureParts() {
        return $this->hasMany(ExamStructurePart::class)->orderBy('order');
    }

    public function levels() {
        return $this->hasMany(ExamLevel::class)->orderBy('order');
    }

    public function examDates()
    {
        return $this->hasMany(ExamDate::class); // Make sure your model name matches!
    }



}