{{-- resources/views/courses/language.blade.php --}}
@extends('parts.main')

@section('title', $heroTitle . ' - LinguaLink')

@section('content')

    {{-- ═══════════════════ HERO BANNER ═══════════════════ --}}
    <div class="relative w-full h-32 overflow-hidden px-4 md:px-20">
        <img src="{{ asset('images/courses/courses1.jpg') }}" alt="Курсеви"
            class="w-full h-full object-cover brightness-75 rounded-3xl">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-3xl md:text-4xl font-extrabold tracking-widest uppercase text-center px-4">
                {{ $heroTitle }}
            </h1>
        </div>
    </div>

    {{-- ═══════════════════ COURSE LIST ═══════════════════ --}}
    <section class="mx-auto px-16 py-8" style="max-width: 90%;">

        {{-- Heading --}}
        <h2 class="text-center font-extrabold tracking-[3px] text-gray-800 mb-8"
            style="font-size: 25px; padding-top: 3rem;">
            ЛИСТА НА КУРСЕВИ
        </h2>

        {{-- Filter Buttons --}}
        <div class="flex flex-wrap justify-center gap-8 mb-6">
            @foreach($categories as $key => $label)
            <button onclick="filterCourses('{{ $key }}')"
                    id="btn-{{ $key }}"
                    class="filter-btn rounded-2xl border-2 font-medium transition-all duration-200 flex items-center justify-center text-center"
                    style="font-size: 0.78rem; width: 200px; height: 60px; padding: 10px 16px; box-sizing: border-box;
                           background-color: {{ $activeCategory === $key ? '#194077' : '#ffffff' }};
                           color: {{ $activeCategory === $key ? '#ffffff' : '#374151' }};
                           border-color: {{ $activeCategory === $key ? '#194077' : '#d1d5db' }};">
                {{ $label }}
            </button>
            @endforeach
        </div>

        {{-- Result Count --}}
        <p id="resultCount" style="font-size: 0.82rem;" class="text-gray-500 mb-4 pl-12">
            Покажување {{ $totalResults }} {{ $totalResults === 1 ? 'резултат' : 'резултати' }}
        </p>

        {{-- Carousel --}}
        <div class="flex items-center gap-2">

            <button id="prevBtn" aria-label="Претходно"
                    class="flex-shrink-0 bg-transparent border-none cursor-pointer text-gray-400
                           hover:text-gray-800 disabled:opacity-20 disabled:cursor-not-allowed transition-colors"
                    style="font-size: 6rem; line-height: 1; color: black;">
                &#8249;
            </button>

            <div class="flex-1" style="overflow: hidden;">
                <div id="carouselTrack" class="flex transition-transform duration-500 ease-out" style="gap: 24px;">
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

    {{-- ═══════════════════ STATIC SECTIONS ═══════════════════ --}}
    @include('courses.partials.courses-includes')
    @include('courses.partials.courses-benefits')
    @include('parts.faq')

@endsection

<style>
    .filter-btn:hover {
        background-color: #194077 !important;
        color: white !important;
        border-color: #194077 !important;
    }
</style>

<script>
    const language = "{{ $language }}";
    const categories = @json($categories);

    // ── Carousel ──
    document.addEventListener('DOMContentLoaded', () => {
        initCarousel();
    });

    function initCarousel() {
        const track   = document.getElementById('carouselTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const cards   = track.querySelectorAll('.course-card');

        if (!cards.length) {
            prevBtn.disabled = true;
            nextBtn.disabled = true;
            return;
        }

        const GAP     = 24;
        const VISIBLE = 3;
        let   index   = 0;
        const max     = Math.max(0, cards.length - VISIBLE);

        function cardW() { return cards[0].offsetWidth + GAP; }

        function update() {
            track.style.transform = `translateX(-${index * cardW()}px)`;
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index >= max;
        }

        prevBtn.onclick = () => { if (index > 0)   { index--; update(); } };
        nextBtn.onclick = () => { if (index < max) { index++; update(); } };

        window.addEventListener('resize', update);
        update();
    }

    // ── AJAX Filter ──
    function filterCourses(category) {

        // Update button styles
        Object.keys(categories).forEach(key => {
            const btn = document.getElementById('btn-' + key);
            if (key === category) {
                btn.style.backgroundColor = '#194077';
                btn.style.color = '#ffffff';
                btn.style.borderColor = '#194077';
            } else {
                btn.style.backgroundColor = '#ffffff';
                btn.style.color = '#374151';
                btn.style.borderColor = '#d1d5db';
            }
        });

        // Fetch filtered cards
        fetch(`/courses/${language}/filter?category=${category}`)
            .then(res => res.json())
            .then(data => {
                document.getElementById('carouselTrack').innerHTML = data.html;
                document.getElementById('resultCount').innerText =
                    `Покажување ${data.total} ${data.total === 1 ? 'резултат' : 'резултати'}`;
                initCarousel();
            });
    }
</script>