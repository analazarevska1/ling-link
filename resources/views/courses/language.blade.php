@extends('parts.main')

@section('title', $heroTitle . ' - LinguaLink')

@section('content')

    {{-- HERO BANNER — hidden on mobile only --}}
    <div class="relative w-full h-32 overflow-hidden px-4 md:px-20 hidden md:block">
        <img src="{{ asset('images/courses/courses1.jpg') }}" alt="{{ __('courses.hero_title') }}"
            class="w-full h-full object-cover brightness-75 rounded-3xl">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-3xl md:text-4xl font-extrabold tracking-widest uppercase text-center px-4">
                {{ $heroTitle }}
            </h1>
        </div>
    </div>

    {{-- COURSE LIST --}}
    <section class="mx-auto px-4 md:px-16 py-8" style="max-width: 90%;">

        @if ($recommendedCourses && $recommendedCourses->count() > 0)

            {{-- ── TABS ── --}}
            <div class="flex justify-center gap-12 mb-8" style="padding-top: 3rem;">
                <button onclick="showTab('recommended')" id="tab-recommended"
                    class="font-extrabold tracking-[3px] pb-1 border-b-4"
                    style="font-size: 18px; font-family: 'Jost', sans-serif; color: #1f2937; border-color: #194077;">
                    {{ __('courses.recommended_tab') }}
                </button>
                <button onclick="showTab('all')" id="tab-all" class="font-extrabold tracking-[3px] pb-1 border-b-4"
                    style="font-size: 18px; font-family: 'Jost', sans-serif; color: #9ca3af; border-color: transparent;">
                    {{ __('courses.all_tab') }}
                </button>
            </div>

            {{-- ── RECOMMENDED PANEL ── --}}
            <div id="panel-recommended">
                <div class="flex items-center gap-2">

                    <button id="prevBtnRec"
                        style="font-size: 3rem; line-height: 1; color: black; background: transparent;
                               border: none; cursor: pointer; opacity: 0.2; flex-shrink: 0; width: 44px;
                               font-weight: 300; user-select: none;">
                        &#8249;
                    </button>

                    <div class="flex-1" style="overflow: hidden; min-width: 0;">
                        <div id="carouselTrackRec"
                             class="flex transition-transform duration-500 ease-out"
                             style="gap: 24px; flex-wrap: nowrap;">
                            @foreach ($recommendedCourses as $course)
                                @include('courses.partials.course-card', ['course' => $course])
                            @endforeach
                        </div>
                    </div>

                    <button id="nextBtnRec"
                        style="font-size: 3rem; line-height: 1; color: black; background: transparent;
                               border: none; cursor: pointer; opacity: 0.2; flex-shrink: 0; width: 44px;
                               font-weight: 300; user-select: none;">
                        &#8250;
                    </button>

                </div>
                <a href="{{ route('personalizacija.1') }}"
                   class="block text-center mt-6 text-sm text-[#194077] underline"
                   style="font-family: 'Montserrat', sans-serif;">
                    {{ __('courses.change_params') }}
                </a>
            </div>

            {{-- ── ALL COURSES PANEL ── --}}
            <div id="panel-all" class="hidden">

                {{-- Desktop filter buttons --}}
                <div class="hidden md:flex flex-wrap justify-center gap-8 mb-6">
                    @foreach ($categories as $key => $label)
                        <button onclick="filterCourses('{{ $key }}')" id="btn-{{ $key }}"
                            class="filter-btn rounded-2xl border-2 font-medium transition-all duration-200
                                   flex items-center justify-center text-center"
                            style="font-size: 0.78rem; width: 200px; height: 60px; padding: 10px 16px;
                                   box-sizing: border-box;
                                   background-color: {{ $activeCategory === $key ? '#194077' : '#ffffff' }};
                                   color: {{ $activeCategory === $key ? '#ffffff' : '#374151' }};
                                   border-color: {{ $activeCategory === $key ? '#194077' : '#d1d5db' }};">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>

                {{-- Mobile filter buttons --}}
                <div class="flex md:hidden overflow-x-auto gap-3 px-1 pb-2 mb-6"
                     style="scrollbar-width: none; -ms-overflow-style: none;">
                    @foreach ($categories as $key => $label)
                        <button onclick="filterCourses('{{ $key }}')" id="btn-mob-{{ $key }}"
                            class="filter-btn flex-shrink-0 rounded-2xl border-2 font-medium transition-all duration-200
                                   flex items-center justify-center text-center"
                            style="font-size: 0.72rem; min-width: 120px; height: 40px; padding: 6px 12px;
                                   box-sizing: border-box;
                                   background-color: {{ $activeCategory === $key ? '#194077' : '#ffffff' }};
                                   color: {{ $activeCategory === $key ? '#ffffff' : '#374151' }};
                                   border-color: {{ $activeCategory === $key ? '#194077' : '#d1d5db' }};">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>

                <p id="resultCountRec" style="font-size: 0.82rem;" class="text-gray-500 mb-4 pl-2 md:pl-12">
                    {{ __('courses.showing') }} {{ $totalResults }}
                    {{ $totalResults === 1 ? __('courses.result') : __('courses.results') }}
                </p>

                <div class="flex items-center gap-2">

                    <button id="prevBtn"
                        style="font-size: 3rem; line-height: 1; color: black; background: transparent;
                               border: none; cursor: pointer; opacity: 0.2; flex-shrink: 0; width: 44px;
                               font-weight: 300; user-select: none;">
                        &#8249;
                    </button>

                    <div class="flex-1" style="overflow: hidden; min-width: 0;">
                        <div id="carouselTrack"
                             class="flex transition-transform duration-500 ease-out"
                             style="gap: 24px; flex-wrap: nowrap;">
                            @forelse ($courses as $course)
                                @include('courses.partials.course-card', ['course' => $course])
                            @empty
                                <p class="text-gray-400 py-16 w-full text-center">{{ __('courses.no_courses') }}</p>
                            @endforelse
                        </div>
                    </div>

                    <button id="nextBtn"
                        style="font-size: 3rem; line-height: 1; color: black; background: transparent;
                               border: none; cursor: pointer; opacity: 0.2; flex-shrink: 0; width: 44px;
                               font-weight: 300; user-select: none;">
                        &#8250;
                    </button>

                </div>
            </div>

        @else

            {{-- ── NO RECOMMENDATIONS: plain list ── --}}
            <h2 class="text-center font-extrabold tracking-[3px] text-gray-800 mb-8"
                style="font-size: 18px; padding-top: 3rem;">
                {{ __('courses.all_tab') }}
            </h2>

            {{-- Desktop filter buttons --}}
            <div class="hidden md:flex flex-wrap justify-center gap-8 mb-6">
                @foreach ($categories as $key => $label)
                    <button onclick="filterCourses('{{ $key }}')" id="btn-{{ $key }}"
                        class="filter-btn rounded-2xl border-2 font-medium transition-all duration-200
                               flex items-center justify-center text-center"
                        style="font-size: 0.78rem; width: 200px; height: 60px; padding: 10px 16px;
                               box-sizing: border-box;
                               background-color: {{ $activeCategory === $key ? '#194077' : '#ffffff' }};
                               color: {{ $activeCategory === $key ? '#ffffff' : '#374151' }};
                               border-color: {{ $activeCategory === $key ? '#194077' : '#d1d5db' }};">
                        {{ $label }}
                    </button>
                @endforeach
            </div>

            {{-- Mobile filter buttons --}}
            <div class="flex md:hidden overflow-x-auto gap-3 px-1 pb-2 mb-6"
                 style="scrollbar-width: none; -ms-overflow-style: none;">
                @foreach ($categories as $key => $label)
                    <button onclick="filterCourses('{{ $key }}')" id="btn-mob-{{ $key }}"
                        class="filter-btn flex-shrink-0 rounded-2xl border-2 font-medium transition-all duration-200
                               flex items-center justify-center text-center"
                        style="font-size: 0.72rem; min-width: 120px; height: 40px; padding: 6px 12px;
                               box-sizing: border-box;
                               background-color: {{ $activeCategory === $key ? '#194077' : '#ffffff' }};
                               color: {{ $activeCategory === $key ? '#ffffff' : '#374151' }};
                               border-color: {{ $activeCategory === $key ? '#194077' : '#d1d5db' }};">
                        {{ $label }}
                    </button>
                @endforeach
            </div>

            <p id="resultCount" style="font-size: 0.82rem;" class="text-gray-500 mb-4 pl-2 md:pl-12">
                {{ __('courses.showing') }} {{ $totalResults }}
                {{ $totalResults === 1 ? __('courses.result') : __('courses.results') }}
            </p>

            <div class="flex items-center gap-2">

                <button id="prevBtn"
                    style="font-size: 3rem; line-height: 1; color: black; background: transparent;
                           border: none; cursor: pointer; opacity: 0.2; flex-shrink: 0; width: 44px;
                           font-weight: 300; user-select: none;">
                    &#8249;
                </button>

                <div class="flex-1" style="overflow: hidden; min-width: 0;">
                    <div id="carouselTrack"
                         class="flex transition-transform duration-500 ease-out"
                         style="gap: 24px; flex-wrap: nowrap;">
                        @forelse ($courses as $course)
                            @include('courses.partials.course-card', ['course' => $course])
                        @empty
                            <p class="text-gray-400 py-16 w-full text-center">{{ __('courses.no_courses') }}</p>
                        @endforelse
                    </div>
                </div>

                <button id="nextBtn"
                    style="font-size: 3rem; line-height: 1; color: black; background: transparent;
                           border: none; cursor: pointer; opacity: 0.2; flex-shrink: 0; width: 44px;
                           font-weight: 300; user-select: none;">
                    &#8250;
                </button>

            </div>

        @endif

        {{-- ── ENROLLMENT MODAL ── --}}
        <div id="prijavaModal" class="fixed inset-0 z-50 hidden items-center justify-center"
            style="background: rgba(0,0,0,0.5);">
            <div class="bg-white rounded-2xl shadow-2xl relative flex overflow-hidden"
                style="width: 760px; max-width: 95vw; max-height: 90vh;">

                <div id="modalCourseInfo" class="hidden md:flex flex-col justify-start text-white"
                    style="background: #194077; width: 45%; padding: 40px 32px; min-height: 480px;">
                    <h2 id="modalTitle" class="font-extrabold uppercase leading-tight mb-2"
                        style="font-size: 1.1rem; font-family: 'Jost', sans-serif; letter-spacing: 1px;"></h2>
                    <h3 id="modalSubtitle" class="font-extrabold uppercase leading-tight mb-6"
                        style="font-size: 1.1rem; font-family: 'Jost', sans-serif; letter-spacing: 1px;"></h3>
                    <div id="modalMeta" class="text-sm mb-6"
                        style="font-family: 'Montserrat', sans-serif; line-height: 1.8;"></div>
                    <p id="modalDescription" class="text-white text-sm leading-relaxed"
                        style="font-family: 'Montserrat', sans-serif; opacity: 0.9;"></p>
                </div>

                <div class="flex flex-col justify-start w-full md:w-[55%]" style="padding: 40px 36px;">
                    <button onclick="closePrijavaModal()"
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 font-bold text-2xl"
                        style="background: none; border: none; cursor: pointer; line-height: 1;">&times;</button>

                    <h2 class="font-extrabold tracking-widest text-[#194077] mb-6"
                        style="font-size: 1rem; font-family: 'Jost', sans-serif;">
                        {{ __('courses.form_title') }}
                    </h2>

                    <form id="prijavaForm" method="POST" action="">
                        @csrf
                        <div class="flex gap-3 mb-4">
                            <div class="flex-1">
                                <label class="block text-xs text-gray-500 mb-1" style="font-family: 'Montserrat', sans-serif;">
                                    {{ __('courses.name') }}
                                </label>
                                <input type="text" name="name" required
                                    placeholder="{{ __('courses.name_placeholder') }}"
                                    class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none"
                                    style="font-family: 'Montserrat', sans-serif;">
                            </div>
                            <div class="flex-1">
                                <label class="block text-xs text-gray-500 mb-1" style="font-family: 'Montserrat', sans-serif;">
                                    {{ __('courses.phone') }}
                                </label>
                                <input type="text" name="phone" required
                                    placeholder="{{ __('courses.phone_placeholder') }}"
                                    class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none"
                                    style="font-family: 'Montserrat', sans-serif;">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-xs text-gray-500 mb-1" style="font-family: 'Montserrat', sans-serif;">
                                {{ __('courses.email') }}
                            </label>
                            <input type="email" name="email" required
                                placeholder="{{ __('courses.email_placeholder') }}"
                                class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none"
                                style="font-family: 'Montserrat', sans-serif;">
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs text-gray-500 mb-1" style="font-family: 'Montserrat', sans-serif;">
                                {{ __('courses.message') }}
                            </label>
                            <textarea name="message" rows="4" placeholder="{{ __('courses.message_placeholder') }}"
                                class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none resize-none"
                                style="font-family: 'Montserrat', sans-serif;"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full text-white font-bold py-3 rounded-xl transition-all duration-200 hover:opacity-90"
                            style="background: #194077; font-family: 'Montserrat', sans-serif;">
                            {{ __('courses.submit') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </section>

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
    @media (max-width: 767px) {
        .course-card {
            flex: 0 0 100% !important;
            width: 100% !important;
            min-width: unset !important;
        }
    }
</style>

<script>
    var language       = "{{ $language }}";
    var categories     = @json($categories);
    var showingText    = "{{ __('courses.showing') }}";
    var resultText     = "{{ __('courses.result') }}";
    var resultsText    = "{{ __('courses.results') }}";
    var metaDuration   = "{{ __('courses.meta_duration') }}";
    var metaHours      = "{{ __('courses.meta_hours') }}";
    var metaHoursLabel = "{{ __('courses.meta_hours_label') }}";
    var metaClasses    = "{{ __('courses.meta_classes') }}";

    function makeCarousel(trackId, prevId, nextId) {
        var track   = document.getElementById(trackId);
        var prevBtn = document.getElementById(prevId);
        var nextBtn = document.getElementById(nextId);
        if (!track || !prevBtn || !nextBtn) return;

        var GAP   = 24;
        var index = 0;

        function getCards()  { return Array.from(track.querySelectorAll('.course-card')); }
        function visible()   { return window.innerWidth < 768 ? 1 : 3; }
        function maxIndex()  { return Math.max(0, getCards().length - visible()); }

        function update() {
            var cards = getCards();
            if (!cards.length) {
                prevBtn.style.opacity = '0.2';
                nextBtn.style.opacity = '0.2';
                return;
            }

            /* Measure actual rendered card width from the wrapper, not the track */
            var wrapperW = track.parentElement ? track.parentElement.getBoundingClientRect().width : 0;
            var vis      = visible();
            var cardW    = (wrapperW - (vis - 1) * GAP) / vis;

            /* Snap each card to the calculated width */
            cards.forEach(function(c) {
                c.style.flex     = '0 0 ' + cardW + 'px';
                c.style.width    = cardW + 'px';
                c.style.minWidth = cardW + 'px';
            });

            /* Force track into single unwrapped row */
            track.style.flexWrap       = 'nowrap';
            track.style.display        = 'flex';
            track.style.justifyContent = 'flex-start';
            track.style.width          = (cards.length * cardW + (cards.length - 1) * GAP) + 'px';

            if (index > maxIndex()) index = maxIndex();

            if (maxIndex() == 0) {
                track.style.transform      = '';
                track.style.justifyContent = 'center';
                track.style.width          = 'auto';
            } else {
                track.style.transform = 'translateX(-' + (index * (cardW + GAP)) + 'px)';
            }

            prevBtn.style.opacity = index == 0          ? '0.2' : '1';
            nextBtn.style.opacity = index >= maxIndex() ? '0.2' : '1';
        }

        prevBtn.addEventListener('click', function() { if (index > 0)          { index--; update(); } });
        nextBtn.addEventListener('click', function() { if (index < maxIndex()) { index++; update(); } });
        window.addEventListener('resize', function() { index = 0; update(); });

        requestAnimationFrame(function() { requestAnimationFrame(update); });

        return function() { index = 0; update(); };
    }

    var resetAll, resetRec;

    document.addEventListener('DOMContentLoaded', function() {
        resetAll = makeCarousel('carouselTrack',    'prevBtn',    'nextBtn');
        resetRec = makeCarousel('carouselTrackRec', 'prevBtnRec', 'nextBtnRec');
    });

    function filterCourses(category) {
        Object.keys(categories).forEach(function(key) {
            ['btn-' + key, 'btn-mob-' + key].forEach(function(id) {
                var btn = document.getElementById(id);
                if (!btn) return;
                btn.style.backgroundColor = key == category ? '#194077' : '#ffffff';
                btn.style.color           = key == category ? '#ffffff' : '#374151';
                btn.style.borderColor     = key == category ? '#194077' : '#d1d5db';
            });
        });

        fetch('/courses/' + language + '/filter?category=' + category)
            .then(function(res) { return res.json(); })
            .then(function(data) {
                var track = document.getElementById('carouselTrack');
                track.style.transform = '';
                track.style.width     = '';
                track.innerHTML       = data.html;

                var el = document.getElementById('resultCountRec');
                if (el) el.innerText = showingText + ' ' + data.total + ' ' +
                    (data.total == 1 ? resultText : resultsText);

                requestAnimationFrame(function() {
                    requestAnimationFrame(function() {
                        resetAll = makeCarousel('carouselTrack', 'prevBtn', 'nextBtn');
                    });
                });
            });
    }

    function showTab(tab) {
        var rec    = document.getElementById('panel-recommended');
        var all    = document.getElementById('panel-all');
        var tabRec = document.getElementById('tab-recommended');
        var tabAll = document.getElementById('tab-all');
        if (!rec || !all) return;

        if (tab == 'recommended') {
            rec.classList.remove('hidden'); all.classList.add('hidden');
            tabRec.style.borderColor = '#194077';     tabRec.style.color = '#1f2937';
            tabAll.style.borderColor = 'transparent'; tabAll.style.color = '#9ca3af';
        } else {
            all.classList.remove('hidden'); rec.classList.add('hidden');
            tabAll.style.borderColor = '#194077';     tabAll.style.color = '#1f2937';
            tabRec.style.borderColor = 'transparent'; tabRec.style.color = '#9ca3af';
            requestAnimationFrame(function() {
                requestAnimationFrame(function() {
                    if (resetAll) resetAll();
                    else resetAll = makeCarousel('carouselTrack', 'prevBtn', 'nextBtn');
                });
            });
        }
    }

    function openPrijavaModal(title, subtitle, description, duration, hours, courseId) {
        document.getElementById('modalTitle').textContent       = title;
        document.getElementById('modalSubtitle').textContent    = subtitle;
        document.getElementById('modalDescription').textContent = description;
        document.getElementById('modalMeta').innerHTML =
            '<p>' + metaDuration + '<br>' +
            metaHours + ' <strong>' + hours + ' ' + metaHoursLabel + '</strong><br>' +
            metaClasses + '</p>';
        document.getElementById('prijavaForm').action = '/prijavi-se/' + courseId;
        var modal = document.getElementById('prijavaModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closePrijavaModal() {
        var modal = document.getElementById('prijavaModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    document.getElementById('prijavaModal').addEventListener('click', function(e) {
        if (e.target == this) closePrijavaModal();
    });
</script>