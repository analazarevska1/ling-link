<?php

namespace App\Http\Controllers;

use App\Mail\ExamRegistrationMail;
use App\Models\Exam;
use App\Models\ExamRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ExamRegistrationController extends Controller
{
    public function store(Request $request, Exam $exam)
{
    $validated = $request->validate([
        'full_name'    => 'required|string|max:255',
        'email'        => 'required|email|max:255',
        'phone'        => 'required|string|max:50',
        'message'      => 'nullable|string|max:1000',
        'exam_date_id' => 'nullable|exists:exam_dates,id',
    ]);

    $registration = $exam->registrations()->create($validated);

    try {
        Mail::to('ana.lazarevska19@gmail.com')->send(new ExamRegistrationMail($registration));
    } catch (\Exception $e) {
        Log::error('Exam registration mail failed: ' . $e->getMessage());
    }

    return response()->json(['success' => true]);
}
}