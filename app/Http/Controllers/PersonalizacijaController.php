<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;

class PersonalizacijaController extends Controller
{
    public function step1(Request $request)


    {

   
        if (auth()->user()->profile) {
            $language = auth()->user()->profile->language;
            return redirect('/courses/' . $language . '?preporachani=1');
        }
        return view('personalizacija.step1');
    }

    public function step2()
    {
        if (!session('personalizacija.language')) {
            return redirect()->route('personalizacija.1');
        }
        return view('personalizacija.step2');
    }

    public function step3()
    {
        if (!session('personalizacija.age_group')) {
            return redirect()->route('personalizacija.2');
        }
        return view('personalizacija.step3', [
            'language' => session('personalizacija.language')
        ]);
    }

    public function step4()
    {
        if (!session('personalizacija.motivation')) {
            return redirect()->route('personalizacija.3');
        }
        return view('personalizacija.step4', [
            'language' => session('personalizacija.language')
        ]);
    }

    public function saveStep1(Request $request)
    {
        $request->validate(['language' => 'required|in:english,german,macedonian,italian,french']);
        session(['personalizacija.language' => $request->language]);
        return redirect()->route('personalizacija.2');
    }

    public function saveStep2(Request $request)
    {
        $request->validate(['age_group' => 'required|in:до 12,13-17,18-25,26-35,40+']);
        session(['personalizacija.age_group' => $request->age_group]);
        return redirect()->route('personalizacija.3');
    }

    public function saveStep3(Request $request)
    {
        $request->validate(['motivation' => 'required|in:school,work,exam,travel,hobby']);
        session(['personalizacija.motivation' => $request->motivation]);
        return redirect()->route('personalizacija.4');
    }

public function store(Request $request)
{
    $request->validate(['level' => 'required|in:A1-A2,B1-B2,C1-C2,unsure']);

    UserProfile::updateOrCreate(
        ['user_id' => auth()->id()],
        [
            'language'   => session('personalizacija.language'),
            'age_group'  => session('personalizacija.age_group'),
            'motivation' => session('personalizacija.motivation'),
            'level'      => $request->level,
        ]
    );

    $slug = session('personalizacija.language');
    session()->forget('personalizacija');

    return redirect('/courses/' . $slug . '?preporachani=1');
}
}