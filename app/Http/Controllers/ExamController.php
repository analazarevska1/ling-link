<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\ExamPrep; // Don't forget to import your new model!
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        // 1. Get all active exams, maybe put the featured ones first
        $exams = Exam::where('is_active', true)
                     ->orderByDesc('is_featured')
                     ->get();

        // 2. Get all exam preps and double-group them for the accordion UI
        $groupedExamPreps = ExamPrep::all()->groupBy(['category', 'exam_group']);

        // 3. Send both variables to the exact same view
        return view('exams.index', compact('exams', 'groupedExamPreps'));
    }

    public function show(Exam $exam)
    {
        // Security check: if it's not active, return a 404
        if (!$exam->is_active) {
            abort(404);
        }

        // Eager load the relationships so the database doesn't cry later
        $exam->load(['levels', 'structureParts', 'examDates' => function($query) {
            $query->where('is_active', true)->where('exam_date', '>=', now());
        }]);

        return view('exams.show', compact('exam'));
    }
}