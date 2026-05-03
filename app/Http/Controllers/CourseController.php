<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    /**
     * Language selection page
     */
    public function index()
    {
        $recommendedCourses = null;
        $userProfile        = null;

        if (Auth::check()) {
            $userProfile = UserProfile::where('user_id', Auth::id())->first();
        }

        return view('courses.index', [
            'recommendedCourses' => $recommendedCourses,
            'userProfile'        => $userProfile,
        ]);
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

        // ── Recommended courses ──
        $recommendedCourses = null;
        $userProfile        = null;



        if (Auth::check()) {
            $userProfile = UserProfile::where('user_id', Auth::id())->first();

            if ($userProfile && $userProfile->language === $language) {

                $category = $this->mapAgeGroupToCategory(
                    $userProfile->age_group,
                    $language
                );

                $recommendedCourses = Course::where('language', $language)
                    ->when(
                        $userProfile->level,
                        fn($q) =>
                        $q->where(function ($q2) use ($userProfile) {
                            $q2->where('level', $userProfile->level)
                                ->orWhereNull('level');
                        })
                    )
                    ->when(
                        $category,
                        fn($q) =>
                        $q->where('category', $category)
                    )
                    ->limit(5)
                    ->get();
            }
        }


        return view('courses.language', [
            'language'           => $language,
            'heroTitle'          => $lang['title'],
            'categories'         => $categories,
            'activeCategory'     => $activeCategory,
            'courses'            => $courses,
            'totalResults'       => $courses->count(),
            'recommendedCourses' => $recommendedCourses,
            'userProfile'        => $userProfile,
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
            'title'      => app()->getLocale() === 'en' ? 'ENGLISH COURSES' : 'КУРСЕВИ ПО АНГЛИСКИ ЈАЗИК',
            'categories' => [
                'children'    => app()->getLocale() === 'en' ? 'Courses for children and teens' : 'Курсеви за деца и средношколци',
                'adults'      => app()->getLocale() === 'en' ? 'Courses for adults'              : 'Курсеви за возрасни',
                'specialized' => app()->getLocale() === 'en' ? 'Specialized courses'             : 'Специјализирани курсеви',
            ],
        ],
        'german' => [
            'title'      => app()->getLocale() === 'en' ? 'GERMAN COURSES' : 'КУРСЕВИ ПО ГЕРМАНСКИ ЈАЗИК',
            'categories' => [
                'children'    => app()->getLocale() === 'en' ? 'Courses for children and teens'      : 'Курсеви за деца и средношколци',
                'regular'     => app()->getLocale() === 'en' ? 'Regular courses for adults'          : 'Редовни курсеви за возрасни',
                'intensive'   => app()->getLocale() === 'en' ? 'Super intensive courses for adults'  : 'Суперинтензивни курсеви за возрасни',
                'specialized' => app()->getLocale() === 'en' ? 'Specialized courses'                 : 'Специјализирани курсеви',
            ],
        ],
        'macedonian' => [
            'title'      => app()->getLocale() === 'en' ? 'MACEDONIAN COURSES FOR FOREIGNERS' : 'КУРСЕВИ ПО МАКЕДОНСКИ ЈАЗИК ЗА СТРАНЦИ',
            'categories' => [
                'children'   => app()->getLocale() === 'en' ? 'Courses for children and adults' : 'Курсеви за деца и возрасни',
                'individual' => app()->getLocale() === 'en' ? 'Individual courses'              : 'Индивидуални курсеви',
            ],
        ],
    ];
}

    /**
     * Maps quiz age_group answer to a course category slug
     */
    private function mapAgeGroupToCategory(string $ageGroup, string $language): ?string
    {
        $map = [
            'До 12 години'  => 'children',
            '13-17 години'  => 'children',
            '18-25 години'  => 'adults',
            '26-35 години'  => 'adults',
            '40+ години'    => 'adults',
        ];

        return $map[$ageGroup] ?? null;
    }
}
