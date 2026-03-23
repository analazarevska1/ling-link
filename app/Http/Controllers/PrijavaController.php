<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prijava;

class PrijavaController extends Controller
{
    public function store(Request $request, $type)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'message' => 'nullable|string',
        ]);

        Prijava::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'type' => $type,
        ]);

        return back()->with('success', 'Успешно се пријавивте! Ќе ве контактираме наскоро.');
    }
}