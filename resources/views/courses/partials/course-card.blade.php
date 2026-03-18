{{-- resources/views/courses/partials/course-card.blade.php --}}

<div class="course-card flex-shrink-0 bg-white rounded-xl overflow-hidden shadow-sm border border-gray-100
            flex flex-col transition-all duration-300 hover:-translate-y-1 hover:shadow-md"
    style="width: calc(33.333% - 32px);">

    {{-- Image — fixed pixel height so it always shows --}}
<div class="w-full overflow-hidden bg-gray-100" style="height: 190px;">
        <img src="{{ asset($course->image) }}"
             alt="{{ $course->title }}"
             loading="lazy"
             class="w-full h-full object-cover transition-transform duration-500 hover:scale-105"
             onerror="this.src='{{ asset('images/course-placeholder.jpg') }}'">
    </div>

    {{-- Body --}}
    <div class="flex-1 flex flex-col" style="padding: 14px 16px 10px;">
        <h3 class="font-bold text-gray-900 leading-snug mb-0.5" style="font-size: 0.9rem;">
            {{ $course->title }}
        </h3>
        <p class="font-semibold text-gray-700 leading-snug mb-2" style="font-size: 0.82rem;">
            {{ $course->subtitle }}
        </p>
        <p class="text-gray-500 leading-relaxed" style="font-size: 0.78rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
            {{ $course->description }}
        </p>
    </div>

    {{-- Meta Footer --}}
    <div class="flex items-center border-t border-gray-100" style="gap: 14px; padding: 10px 16px;">

        <span class="flex items-center gap-1 text-gray-500 whitespace-nowrap" style="font-size: 0.72rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
            </svg>
            {{ $course->duration }}
        </span>

        <span class="flex items-center gap-1 text-gray-500 whitespace-nowrap" style="font-size: 0.72rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                <circle cx="9" cy="7" r="4"/>
                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
            </svg>
            {{ $course->students_count }}
        </span>

        <span class="flex items-center gap-1 text-gray-500 whitespace-nowrap" style="font-size: 0.72rem;">
            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24"
                 fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/>
                <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/>
            </svg>
            {{ $course->hours }} часа
        </span>

    </div>

</div>