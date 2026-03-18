{{-- resources/views/courses/partials/course-card-list.blade.php --}}
{{-- This is returned as JSON by the filter() AJAX endpoint --}}
@forelse ($courses as $course)
    @include('courses.partials.course-card', ['course' => $course])
@empty
    <p class="text-gray-400 py-16 w-full text-center">Нема курсеви во оваа категорија.</p>
@endforelse