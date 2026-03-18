<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Language selection page
     */
    public function index()
    {
        return view('courses.index');
    }

    /**
     * Course list page per language
     */
    public function showLanguage(Request $request, $language)
    {
        $config = $this->languageConfig();

        if (!array_key_exists($language, $config)) {
            abort(404);
        }

        $lang         = $config[$language];
        $categories   = $lang['categories'];
        $defaultCat   = array_key_first($categories);
        $activeCategory = $request->query('category', $defaultCat);

        if (!array_key_exists($activeCategory, $categories)) {
            $activeCategory = $defaultCat;
        }

        $courses = Course::where('language', $language)
                         ->where('category', $activeCategory)
                         ->orderBy('created_at', 'asc')
                         ->get();

        return view('courses.language', [
            'language'       => $language,
            'heroTitle'      => $lang['title'],
            'categories'     => $categories,
            'activeCategory' => $activeCategory,
            'courses'        => $courses,
            'totalResults'   => $courses->count(),
        ]);
    }

    /**
     * AJAX filter — returns only the cards partial
     */
  public function filter(Request $request, $language)
{
    $config = $this->languageConfig();

    if (!array_key_exists($language, $config)) {
        abort(404);
    }

    $lang           = $config[$language];
    $categories     = $lang['categories'];
    $defaultCat     = array_key_first($categories);
    $activeCategory = $request->query('category', $defaultCat);

    if (!array_key_exists($activeCategory, $categories)) {
        $activeCategory = $defaultCat;
    }

    $courses = Course::where('language', $language)
                     ->where('category', $activeCategory)
                     ->orderBy('created_at', 'asc')
                     ->get();

    $html = view('courses.partials.course-card-list', [
        'courses' => $courses,
    ])->render();

    return response()->json([
        'html'  => $html,
        'total' => $courses->count(),
    ]);
}

    /**
     * Language configuration
     */
    private function languageConfig(): array
    {
        return [
            'english' => [
                'title'      => 'КУРСЕВИ ПО АНГЛИСКИ ЈАЗИК',
                'categories' => [
                    'children'    => 'Курсеви за деца и средношколци',
                    'adults'      => 'Курсеви за возрасни',
                    'specialized' => 'Специјализирани курсеви',
                ],
            ],
            'german' => [
                'title'      => 'КУРСЕВИ ПО ГЕРМАНСКИ ЈАЗИК',
                'categories' => [
                    'children'    => 'Курсеви за деца и средношколци',
                    'regular'     => 'Редовни курсеви за возрасни',
                    'intensive'   => 'Суперинтензивни курсеви за возрасни',
                    'specialized' => 'Специјализирани курсеви',
                ],
            ],
            'macedonian' => [
                'title'      => 'КУРСЕВИ ПО МАКЕДОНСКИ ЈАЗИК ЗА СТРАНЦИ',
                'categories' => [
                    'children'   => 'Курсеви за деца и возрасни',
                    'individual' => 'Индивидуални курсеви',
                ],
            ],
        ];
    }
}