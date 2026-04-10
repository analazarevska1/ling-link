{{-- resources/views/courses/language.blade.php --}}
@extends('parts.main')

@section('title', $heroTitle . ' - LinguaLink')

@section('content')

    {{-- HERO BANNER --}}
    <div class="relative w-full h-32 overflow-hidden px-4 md:px-20">
        <img src="{{ asset('images/courses/courses1.jpg') }}" alt="Курсеви"
            class="w-full h-full object-cover brightness-75 rounded-3xl">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-3xl md:text-4xl font-extrabold tracking-widest uppercase text-center px-4">
                {{ $heroTitle }}
            </h1>
        </div>
    </div>

    {{-- COURSE LIST --}}
    <section class="mx-auto px-16 py-8" style="max-width: 90%;">

        @if ($recommendedCourses && $recommendedCourses->count() > 0)

            {{-- ── TABS ── --}}
            <div class="flex justify-center gap-12 mb-8" style="padding-top: 3rem;">
                <button onclick="showTab('recommended')" id="tab-recommended"
                    class="font-extrabold tracking-[3px] pb-1 border-b-4"
                    style="font-size: 18px; font-family: 'Jost', sans-serif; color: #1f2937; border-color: #194077;">
                    КУРС ПРЕПОРАЧАН ЗА ТЕБЕ
                </button>
                <button onclick="showTab('all')" id="tab-all" class="font-extrabold tracking-[3px] pb-1 border-b-4"
                    style="font-size: 18px; font-family: 'Jost', sans-serif; color: #9ca3af; border-color: transparent;">
                    ЛИСТА НА КУРСЕВИ
                </button>
            </div>

            {{-- ── RECOMMENDED PANEL ── --}}
            <div id="panel-recommended">
                <div class="flex items-center gap-2">
                    <button id="prevBtnRec"
                        style="font-size: 6rem; line-height: 1; color: black; background: transparent; border: none; cursor: pointer;">
                        &#8249;
                    </button>
                    <div class="flex-1" style="overflow: hidden;">
                        <div id="carouselTrackRec" class="flex transition-transform duration-500 ease-out"
                            style="gap: 24px;">
                            @foreach ($recommendedCourses as $course)
                                @include('courses.partials.course-card', ['course' => $course])
                            @endforeach
                        </div>
                    </div>
                    <button id="nextBtnRec"
                        style="font-size: 6rem; line-height: 1; color: black; background: transparent; border: none; cursor: pointer;">
                        &#8250;
                    </button>
                </div>
                <a href="{{ route('personalizacija.1') }}" class="block text-center mt-6 text-sm text-[#194077] underline"
                    style="font-family: 'Montserrat', sans-serif;">
                    Промени ги параметрите
                </a>
            </div>

            {{-- ── ALL COURSES PANEL (hidden by default) ── --}}
            <div id="panel-all" class="hidden">
                <div class="flex flex-wrap justify-center gap-8 mb-6">
                    @foreach ($categories as $key => $label)
                        <button onclick="filterCourses('{{ $key }}')" id="btn-{{ $key }}"
                            class="filter-btn rounded-2xl border-2 font-medium transition-all duration-200 flex items-center justify-center text-center"
                            style="font-size: 0.78rem; width: 200px; height: 60px; padding: 10px 16px; box-sizing: border-box;
                                   background-color: {{ $activeCategory === $key ? '#194077' : '#ffffff' }};
                                   color: {{ $activeCategory === $key ? '#ffffff' : '#374151' }};
                                   border-color: {{ $activeCategory === $key ? '#194077' : '#d1d5db' }};">
                            {{ $label }}
                        </button>
                    @endforeach
                </div>

                <p id="resultCount" style="font-size: 0.82rem;" class="text-gray-500 mb-4 pl-12">
                    Покажување {{ $totalResults }} {{ $totalResults === 1 ? 'резултат' : 'резултати' }}
                </p>

                <div class="flex items-center gap-2">
                    <button id="prevBtn"
                        style="font-size: 6rem; line-height: 1; color: black; background: transparent; border: none; cursor: pointer;">
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
                    <button id="nextBtn"
                        style="font-size: 6rem; line-height: 1; color: black; background: transparent; border: none; cursor: pointer;">
                        &#8250;
                    </button>
                </div>
            </div>{{-- end panel-all --}}
        @else
            {{-- ── NO RECOMMENDATIONS: plain list ── --}}
            <h2 class="text-center font-extrabold tracking-[3px] text-gray-800 mb-8"
                style="font-size: 18px; padding-top: 3rem;">
                ЛИСТА НА КУРСЕВИ
            </h2>

            <div class="flex flex-wrap justify-center gap-8 mb-6">
                @foreach ($categories as $key => $label)
                    <button onclick="filterCourses('{{ $key }}')" id="btn-{{ $key }}"
                        class="filter-btn rounded-2xl border-2 font-medium transition-all duration-200 flex items-center justify-center text-center"
                        style="font-size: 0.78rem; width: 200px; height: 60px; padding: 10px 16px; box-sizing: border-box;
                               background-color: {{ $activeCategory === $key ? '#194077' : '#ffffff' }};
                               color: {{ $activeCategory === $key ? '#ffffff' : '#374151' }};
                               border-color: {{ $activeCategory === $key ? '#194077' : '#d1d5db' }};">
                        {{ $label }}
                    </button>
                @endforeach
            </div>

            <p id="resultCount" style="font-size: 0.82rem;" class="text-gray-500 mb-4 pl-12">
                Покажување {{ $totalResults }} {{ $totalResults === 1 ? 'резултат' : 'резултати' }}
            </p>

            <div class="flex items-center gap-2">
                <button id="prevBtn" aria-label="Претходно"
                    style="font-size: 6rem; line-height: 1; color: black; background: transparent; border: none; cursor: pointer;">
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
                    style="font-size: 6rem; line-height: 1; color: black; background: transparent; border: none; cursor: pointer;">
                    &#8250;
                </button>
            </div>

        @endif

        {{-- ── PRIJAVA MODAL ── --}}
        <div id="prijavaModal" class="fixed inset-0 z-50 hidden items-center justify-center"
            style="background: rgba(0,0,0,0.5);">

            <div class="bg-white rounded-2xl shadow-2xl relative flex overflow-hidden"
                style="width: 760px; max-width: 95vw; max-height: 90vh;">

                {{-- LEFT: Course info (dark blue) --}}
                <div id="modalCourseInfo" class="flex flex-col justify-start text-white"
                    style="background: #194077; width: 45%; padding: 40px 32px; min-height: 480px;">

                    <h2 id="modalTitle" class="font-extrabold uppercase leading-tight mb-2"
                        style="font-size: 1.1rem; font-family: 'Jost', sans-serif; letter-spacing: 1px;">
                    </h2>
                    <h3 id="modalSubtitle" class="font-extrabold uppercase leading-tight mb-6"
                        style="font-size: 1.1rem; font-family: 'Jost', sans-serif; letter-spacing: 1px;">
                    </h3>

                    <div id="modalMeta" class="text-sm mb-6"
                        style="font-family: 'Montserrat', sans-serif; line-height: 1.8;">
                    </div>

                    <p id="modalDescription" class="text-white text-sm leading-relaxed"
                        style="font-family: 'Montserrat', sans-serif; opacity: 0.9;">
                    </p>
                </div>

                {{-- RIGHT: Form --}}
                <div class="flex flex-col justify-start" style="width: 55%; padding: 40px 36px;">

                    {{-- Close --}}
                    <button onclick="closePrijavaModal()"
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 font-bold text-2xl"
                        style="background: none; border: none; cursor: pointer; line-height: 1;">
                        &times;
                    </button>

                    <h2 class="font-extrabold tracking-widest text-[#194077] mb-6"
                        style="font-size: 1rem; font-family: 'Jost', sans-serif;">
                        ФОРМА ЗА ПРИЈАВУВАЊЕ
                    </h2>

                    <form id="prijavaForm" method="POST" action="">
                        @csrf

                        <div class="flex gap-3 mb-4">
                            <div class="flex-1">
                                <label class="block text-xs text-gray-500 mb-1"
                                    style="font-family: 'Montserrat', sans-serif;">
                                    Вашето име и презиме
                                </label>
                                <input type="text" name="name" required placeholder="пр. Маја Иванова"
                                    class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none"
                                    style="font-family: 'Montserrat', sans-serif;">
                            </div>
                            <div class="flex-1">
                                <label class="block text-xs text-gray-500 mb-1"
                                    style="font-family: 'Montserrat', sans-serif;">
                                    Вашиот телефонски број
                                </label>
                                <input type="text" name="phone" required placeholder="пр. 07* *** ***"
                                    class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none"
                                    style="font-family: 'Montserrat', sans-serif;">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="block text-xs text-gray-500 mb-1"
                                style="font-family: 'Montserrat', sans-serif;">
                                Вашата е-меил адреса
                            </label>
                            <input type="email" name="email" required placeholder="пр. majaivanova@gmail.com"
                                class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none"
                                style="font-family: 'Montserrat', sans-serif;">
                        </div>

                        <div class="mb-6">
                            <label class="block text-xs text-gray-500 mb-1"
                                style="font-family: 'Montserrat', sans-serif;">
                                Порака
                            </label>
                            <textarea name="message" rows="4" placeholder='пр. "Сакам да се пријавам за активно и пасивно."'
                                class="w-full border border-gray-200 rounded-lg px-3 py-2 text-sm outline-none resize-none"
                                style="font-family: 'Montserrat', sans-serif;"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full text-white font-bold py-3 rounded-xl transition-all duration-200 hover:opacity-90"
                            style="background: #194077; font-family: 'Montserrat', sans-serif;">
                            Пријави се
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
</style>

<script>
    const language = "{{ $language }}";
    const categories = @json($categories);

    document.addEventListener('DOMContentLoaded', () => {
        initCarousel();
        initCarouselRec();
    });

    function initCarousel() {
        const track = document.getElementById('carouselTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        if (!track || !prevBtn || !nextBtn) return;

        const cards = track.querySelectorAll('.course-card');
        if (!cards.length) {
            prevBtn.disabled = true;
            nextBtn.disabled = true;
            return;
        }

        const GAP = 24,
            VISIBLE = 3;
        let index = 0;
        const max = Math.max(0, cards.length - VISIBLE);

        function cardW() {
            return cards[0].offsetWidth + GAP;
        }

        function update() {
            track.style.transform = `translateX(-${index * cardW()}px)`;
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index >= max;
        }

        prevBtn.onclick = () => {
            if (index > 0) {
                index--;
                update();
            }
        };
        nextBtn.onclick = () => {
            if (index < max) {
                index++;
                update();
            }
        };
        window.addEventListener('resize', update);
        update();
    }

    function initCarouselRec() {
        const track = document.getElementById('carouselTrackRec');
        const prevBtn = document.getElementById('prevBtnRec');
        const nextBtn = document.getElementById('nextBtnRec');
        if (!track || !prevBtn || !nextBtn) return;

        const cards = track.querySelectorAll('.course-card');
        if (!cards.length) {
            prevBtn.disabled = true;
            nextBtn.disabled = true;
            return;
        }

        const GAP = 24,
            VISIBLE = 3;
        let index = 0;
        const max = Math.max(0, cards.length - VISIBLE);

        function cardW() {
            return cards[0].offsetWidth + GAP;
        }

        function update() {
            track.style.transform = `translateX(-${index * cardW()}px)`;
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index >= max;
        }

        prevBtn.onclick = () => {
            if (index > 0) {
                index--;
                update();
            }
        };
        nextBtn.onclick = () => {
            if (index < max) {
                index++;
                update();
            }
        };
        window.addEventListener('resize', update);
        update();
    }

    function filterCourses(category) {
        Object.keys(categories).forEach(key => {
            const btn = document.getElementById('btn-' + key);
            if (!btn) return;
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

        fetch(`/courses/${language}/filter?category=${category}`)
            .then(res => res.json())
            .then(data => {
                document.getElementById('carouselTrack').innerHTML = data.html;
                document.getElementById('resultCount').innerText =
                    `Покажување ${data.total} ${data.total === 1 ? 'резултат' : 'резултати'}`;
                initCarousel();
            });
    }

    function openPrijavaModal(title, subtitle, description, duration, hours, courseId) {
        document.getElementById('modalTitle').textContent = title;
        document.getElementById('modalSubtitle').textContent = subtitle;
        document.getElementById('modalDescription').textContent = description;
        document.getElementById('modalMeta').innerHTML = `
        <p>Траат една учебна година<br>
        Вклучуваат вкупно <strong>${hours} часа.</strong><br>
        Наставата се одвива два пати неделно.</p>
    `;
        document.getElementById('prijavaForm').action = `/prijavi-se/${courseId}`;
        const modal = document.getElementById('prijavaModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closePrijavaModal() {
        const modal = document.getElementById('prijavaModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        document.body.style.overflow = '';
    }

    function showTab(tab) {
    const rec    = document.getElementById('panel-recommended');
    const all    = document.getElementById('panel-all');
    const tabRec = document.getElementById('tab-recommended');
    const tabAll = document.getElementById('tab-all');
    if (!rec || !all) return;

    if (tab === 'recommended') {
        rec.classList.remove('hidden');
        all.classList.add('hidden');
        tabRec.style.borderColor = '#194077';
        tabRec.style.color = '#1f2937';
        tabAll.style.borderColor = 'transparent';
        tabAll.style.color = '#9ca3af';
    } else {
        all.classList.remove('hidden');
        rec.classList.add('hidden');
        tabAll.style.borderColor = '#194077';
        tabAll.style.color = '#1f2937';
        tabRec.style.borderColor = 'transparent';
        tabRec.style.color = '#9ca3af';
    }
}

    document.getElementById('prijavaModal').addEventListener('click', function(e) {
        if (e.target === this) closePrijavaModal();
    });
</script>
