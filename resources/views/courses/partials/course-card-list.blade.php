@forelse ($courses as $course)
    @include('courses.partials.course-card', ['course' => $course])
@empty
    <p class="text-gray-400 py-16 w-full text-center">{{ __('courses.no_courses') }}</p>
@endforelse