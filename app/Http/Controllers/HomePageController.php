<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Testimonial;

class HomePageController extends Controller
{
    public function index()
    {
        // Fetch only active exams (and maybe just the featured ones for the carousel)
        $exams = Exam::where('is_active', true)
            ->with(['examDates', 'levels'])
            ->latest()
            ->get();

        $testimonials = Testimonial::where('is_approved', true)
            ->latest()
            ->get();

        return view('home-page', compact('exams', 'testimonials'));
    }
}

