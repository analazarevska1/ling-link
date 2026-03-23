<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam; // Don't forget to import your model!

class HomePageController extends Controller
{
    public function index()
    {
        // Fetch only active exams (and maybe just the featured ones for the carousel)
        $exams = Exam::where('is_active', true)
            // ->where('is_featured', true) // Un-comment this if you only want featured exams!
            ->latest()
            ->get();

        return view('home-page', compact('exams'));
    }
}
