<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Course;
 
class CourseController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category', 'children'); // default to children
 
        $validCategories = ['children', 'adults', 'specialized'];
 
        // Fallback to default if invalid category is passed
        if (!in_array($category, $validCategories)) {
            $category = 'children';
        }
 
        $courses = Course::where('category', $category)
                         ->orderBy('created_at', 'asc')
                         ->get();
 
        return view('courses.index', [
            'courses'          => $courses,
            'activeCategory'   => $category,
            'totalResults'     => $courses->count(),
        ]);
    }
}