{{-- resources/views/courses/index.blade.php --}}
@extends('parts.main')

@section('title', 'Курсеви - LinguaLink')

@section('content')

     {{-- ═══════════════════ HERO BANNER ═══════════════════ --}}
    <div class="relative w-full h-32 overflow-hidden px-4 md:px-20">
        <img src="{{ asset('images/courses/courses1.jpg') }}" alt="Курсеви"
            class="w-full h-full object-cover brightness-75 rounded-3xl">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-3xl md:text-5xl font-extrabold tracking-widest uppercase">Курсеви</h1>
        </div>
    </div>

    {{-- COURSES SECTION --}}
    <section class="mx-auto px-16 py-8 " style="max-width: 90%;">

        {{-- Heading --}}
        <h2 class="text-center font-extrabold tracking-[3px] text-gray-800 mb-8 " style="font-size: 25px; padding-top: 3rem;">
            ЛИСТА НА КУРСЕВИ
        </h2>

        {{-- Filter Buttons --}}
       <div class="flex flex-wrap justify-center gap-12 mb-6">

    <a href="{{ route('courses.index', ['category' => 'children']) }}"
       class="filter-btn rounded-2xl border-2 font-medium transition-all duration-200 flex items-center justify-center text-center"
       style="font-size: 0.78rem; width: 200px; height: 60px; padding: 10px 16px; box-sizing: border-box;
              background-color: {{ $activeCategory === 'children' ? '#194077' : '#ffffff' }};
              color: {{ $activeCategory === 'children' ? '#ffffff' : '#374151' }};
              border-color: {{ $activeCategory === 'children' ? '#1a5678' : '#d1d5db' }};">
        Курсеви за деца и средношколци
    </a>

    <a href="{{ route('courses.index', ['category' => 'adults']) }}"
       class="filter-btn rounded-2xl border-2 font-medium transition-all duration-200 flex items-center justify-center text-center"
       style="font-size: 0.78rem; width: 200px; height: 60px; padding: 10px 16px; box-sizing: border-box;
              background-color: {{ $activeCategory === 'adults' ? '#194077' : '#ffffff' }};
              color: {{ $activeCategory === 'adults' ? '#ffffff' : '#374151' }};
              border-color: {{ $activeCategory === 'adults' ? '#1a5678' : '#d1d5db' }};">
        Курсеви за возрасни
    </a>

    <a href="{{ route('courses.index', ['category' => 'specialized']) }}"
       class="filter-btn rounded-2xl border-2 font-medium transition-all duration-200 flex items-center justify-center text-center"
       style="font-size: 0.78rem; width: 200px; height: 60px; padding: 10px 16px; box-sizing: border-box;
              background-color: {{ $activeCategory === 'specialized' ? '#194077' : '#ffffff' }};
              color: {{ $activeCategory === 'specialized' ? '#ffffff' : '#374151' }};
              border-color: {{ $activeCategory === 'specialized' ? '#1a5678' : '#d1d5db' }};">
        Специјализирани курсеви
    </a>

</div>
        {{-- Result Count --}}
        <p style="font-size: 0.82rem;" class="text-gray-500 mb-4">
            Покажување {{ $totalResults }} {{ $totalResults === 1 ? 'резултат' : 'резултати' }}
        </p>

        {{-- Carousel --}}
<div class="flex items-center gap-2" style="padding-right: 10px;">

            <button id="prevBtn" aria-label="Претходно"
            
                    class="flex-shrink-0 bg-transparent border-none cursor-pointer text-gray-400
                           hover:text-gray-800 disabled:opacity-20 disabled:cursor-not-allowed transition-colors"
style="font-size: 6rem; line-height: 1; color: black;">
                &#8249;
            </button>

<div class="flex-1" style="overflow: hidden; padding-right: 2px;">
<div id="carouselTrack" class="flex transition-transform duration-500 ease-out" style="gap: 48px;">
                    @forelse ($courses as $course)
                        @include('courses.partials.course-card', ['course' => $course])
                    @empty
                        <p class="text-gray-400 py-16 w-full text-center">Нема курсеви во оваа категорија.</p>
                    @endforelse
                </div>
            </div>

            <button id="nextBtn" aria-label="Следно"
                    class="flex-shrink-0 bg-transparent border-none cursor-pointer text-gray-400
                           hover:text-gray-800 disabled:opacity-20 disabled:cursor-not-allowed transition-colors"
style="font-size: 6rem; line-height: 1; color: black;">
                &#8250;
            </button>

        </div>

    </section>

@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const track   = document.getElementById('carouselTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const cards   = track.querySelectorAll('.course-card');

        console.log('Cards found:', cards.length);
        console.log('Card width:', cards[0]?.offsetWidth);
        console.log('Max index:', Math.max(0, cards.length - 3));

        if (!cards.length) return;

        const GAP     = 48;
        const VISIBLE = 3.1;
        let   index   = 0;
        const max     = Math.max(0, cards.length - VISIBLE);

        function cardW() {
            return cards[0].offsetWidth + GAP;
        }

        function update() {
            console.log('Updating index:', index, 'translateX:', -(index * cardW()));
            track.style.transform = `translateX(-${index * cardW()}px)`;
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index >= max;
        }

        prevBtn.addEventListener('click', () => { if (index > 0)   { index--; update(); } });
        nextBtn.addEventListener('click', () => { if (index < max) { index++; update(); } });

        window.addEventListener('resize', update);
        update();
    });
</script>
@endpush

@push('styles')
<style>
    .filter-btn:hover {
        background-color: #194077 !important;
        color: white !important;
        border-color: #1a5678 !important;
    }
</style>
@endpush
