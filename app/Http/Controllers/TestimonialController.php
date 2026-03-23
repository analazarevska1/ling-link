<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        Testimonial::create([
            'name' => $request->name,
            'role' => $request->role,
            'message' => $request->message,
            'rating' => $request->rating,
        ]);

        return back()->with('testimonial_success', 'Благодариме! Вашиот тестимониал е поднесен и чека одобрување.');
    }
}