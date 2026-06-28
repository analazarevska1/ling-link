@extends('parts.main')

@section('content')
    @include('parts.exam-registration-modal')
    <section class="w-full flex justify-center py-6 md:py-8 px-4 md:px-6 bg-[#F9FBFC] md:bg-white">
        <!-- DESKTOP TOP SECTION -->
        <div class="hidden md:flex flex-row items-center w-full bg-white"
            style="
            max-width: 1280px;
            min-height: 505px;
            border-radius: 10px;
            padding: 34px 60px;
            gap: 40px;
            box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);
        ">

            {{-- Left: Text Content --}}
            <div class="flex-1 flex flex-col items-start text-left">

                <h1 class="font-bold text-[#194077] uppercase mb-1"
                    style="font-family: 'Montserrat', sans-serif; font-size: 32px; line-height: 1.2;">
                    {{ $exam->getLocalizedTitle() }}
                </h1>

                @if ($exam->subtitle)
                    <h2 class="uppercase italic text-black mb-6"
                        style="font-family: 'Montserrat', sans-serif; font-size: 26px; font-weight: 400; line-height: 1.35;">
                        {{ $exam->getLocalizedSubtitle() }}
                    </h2>
                @endif

                <p class="text-gray-700 mb-8"
                    style="font-family: 'Montserrat', sans-serif; font-size: 16px; line-height: 1.65; max-width: 520px;">
                    {{ $exam->getLocalizedDescription() }}
                </p>

                <div class="flex flex-row gap-12 mb-8">

                    @if ($exam->where_recognized)
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 rounded-full flex items-center justify-center text-white"
                                style="width: 52px; height: 52px; background-color: #194077;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-black leading-tight"
                                    style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
                                    {{ __('exams.where_recognized') }}</p>
                                <p class="text-gray-600 leading-tight mt-1"
                                    style="font-family: 'Montserrat', sans-serif; font-size: 14px;">
                                    {{ app()->getLocale() === 'en' && $exam->where_recognized_en ? $exam->where_recognized_en : $exam->where_recognized }}
                                </p>
                            </div>
                        </div>
                    @endif

                    @if ($exam->what_for)
                        <div class="flex items-center gap-4">
                            <div class="flex-shrink-0 rounded-full flex items-center justify-center text-white"
                                style="width: 52px; height: 52px; background-color: #194077;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72l5 2.73 5-2.73v3.72z" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-bold text-black leading-tight"
                                    style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
                                    {{ __('exams.what_for') }}</p>
                                <p class="text-gray-600 leading-tight mt-1"
                                    style="font-family: 'Montserrat', sans-serif; font-size: 14px;">
                                    {{ app()->getLocale() === 'en' && $exam->what_for_en ? $exam->what_for_en : $exam->what_for }}
                                </p>
                            </div>
                        </div>
                    @endif
                </div>

                @php
                    $firstDate = $exam->examDates->first();
                @endphp

                @if (!$exam->is_on_demand && $firstDate)
                    <div class="mb-7">
                        <p class="text-gray-800 mb-1" style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
                            {{ __('exams.first_date_full') }}
                            <strong>{{ \Carbon\Carbon::parse($firstDate->exam_date)->format('d.m.Y') }}</strong>
                        </p>
                        <a href="#termini" class="font-bold underline text-black hover:text-[#194077] transition-colors"
                            style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
                            {{ __('exams.see_all_dates') }}
                        </a>
                    </div>
                @elseif($exam->is_on_demand)
                    <div class="mb-7">
                        <p class="text-gray-800" style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
                            {{ __('exams.on_demand_text') }}
                        </p>
                    </div>
                @endif

                @if ($exam->is_on_demand)
                    <button
                        onclick="window.dispatchEvent(new CustomEvent('open-exam-modal', {detail: {dateId: null, dateLabel: null}}))"
                        class="text-white font-medium transition-all duration-200"
                        style="width: 160px; height: 48px; border-radius: 8px; background: #194077; font-family: 'Montserrat', sans-serif; font-size: 16px;"
                        onmouseover="this.style.background='#020C1B';" onmouseout="this.style.background='#194077';">
                        {{ __('exams.register_btn') }}
                    </button>
                @else
                    <a href="#termini"
                        class="inline-flex items-center justify-center text-white font-medium transition-all duration-200"
                        style="width: 160px; height: 48px; border-radius: 8px; background: #194077; font-family: 'Montserrat', sans-serif; font-size: 16px;"
                        onmouseover="this.style.background='#020C1B';" onmouseout="this.style.background='#194077';">
                        {{ __('exams.register_btn') }}
                    </a>
                @endif
            </div>

            {{-- Right: Image --}}
            <div class="flex-shrink-0">
                @php
                    $imageUrl =
                        $exam->image && str_starts_with($exam->image, 'http')
                            ? $exam->image
                            : asset('images/default-exam.jpg');
                @endphp
                <img src="{{ $imageUrl }}" alt="{{ $exam->getLocalizedTitle() }}" class="object-cover"
                    style="width: 420px; height: 437px; border-radius: 20px;">
            </div>
        </div>

        <!-- MOBILE TOP SECTION -->
        <div class="md:hidden flex flex-col items-center w-full max-w-[500px] mx-auto">
            <div class="w-full bg-white rounded-[24px] p-6 mb-8 flex flex-col gap-6"
                style="box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.04);">
                <div class="flex flex-col">
                    <h1 class="font-black text-[#194077] uppercase text-[22px] leading-tight"
                        style="font-family: 'Montserrat', sans-serif;">
                        {{ $exam->getLocalizedTitle() }}
                    </h1>
                    @if ($exam->subtitle)
                        <h2 class="uppercase italic text-[#111827] text-[15px] mt-1 line-clamp-2"
                            style="font-family: 'Montserrat', sans-serif;">
                            {{ $exam->getLocalizedSubtitle() }}
                        </h2>
                    @endif
                </div>

                <p class="text-gray-600 text-[13px] leading-relaxed" style="font-family: 'Montserrat', sans-serif;">
                    {{ $exam->getLocalizedDescription() }}
                </p>

                <div class="flex flex-col gap-5">
                    @if ($exam->where_recognized)
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 rounded-full flex items-center justify-center text-white"
                                style="width: 42px; height: 42px; background-color: #194077;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="font-bold text-[#111827] leading-tight text-[13px]"
                                    style="font-family: 'Montserrat', sans-serif;">{{ __('exams.where_recognized') }}</p>
                                <p class="text-gray-600 leading-snug mt-1 text-[13px]"
                                    style="font-family: 'Montserrat', sans-serif;">
                                    {{ app()->getLocale() === 'en' && $exam->where_recognized_en ? $exam->where_recognized_en : $exam->where_recognized }}
                                </p>
                            </div>
                        </div>
                    @endif

                    @if ($exam->what_for)
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 rounded-full flex items-center justify-center text-white"
                                style="width: 42px; height: 42px; background-color: #194077;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72l5 2.73 5-2.73v3.72z" />
                                </svg>
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="font-bold text-[#111827] leading-tight text-[13px]"
                                    style="font-family: 'Montserrat', sans-serif;">{{ __('exams.what_for') }}</p>
                                <p class="text-gray-600 leading-snug mt-1 text-[13px]"
                                    style="font-family: 'Montserrat', sans-serif;">
                                    {{ app()->getLocale() === 'en' && $exam->what_for_en ? $exam->what_for_en : $exam->what_for }}
                                </p>
                            </div>
                        </div>
                    @endif
                </div>

                @php
                    $firstDate = $exam->examDates->first();
                @endphp

                @if (!$exam->is_on_demand && $firstDate)
                    <div class="pt-2">
                        <p class="text-[#111827] text-[13px] mb-2" style="font-family: 'Montserrat', sans-serif;">
                            {{ __('exams.first_date_full') }}<br>
                            <strong>{{ \Carbon\Carbon::parse($firstDate->exam_date)->format('d.m.Y') }}</strong>
                        </p>
                        <a href="#termini"
                            class="font-bold underline text-[#111827] hover:text-[#194077] transition-colors text-[13px]"
                            style="font-family: 'Montserrat', sans-serif;">
                            {{ __('exams.see_all_dates') }}
                        </a>
                    </div>
                @elseif($exam->is_on_demand)
                    <div class="pt-2">
                        <p class="text-[#111827] text-[13px]" style="font-family: 'Montserrat', sans-serif;">
                            {{ __('exams.on_demand_text') }}
                        </p>
                    </div>
                @endif
            </div>

            @if ($exam->is_on_demand)
                <button
                    onclick="window.dispatchEvent(new CustomEvent('open-exam-modal', {detail: {dateId: null, dateLabel: null}}))"
                    class="w-full inline-flex items-center justify-center text-white font-bold transition-all duration-200 shadow-md"
                    style="height: 54px; border-radius: 40px; background: #194077; font-family: 'Montserrat', sans-serif; font-size: 15px;"
                    onmouseover="this.style.background='#020C1B';" onmouseout="this.style.background='#194077';">
                    {{ __('exams.register_btn') }}
                </button>
            @else
                <a href="#termini"
                    class="w-full inline-flex items-center justify-center text-white font-bold transition-all duration-200 shadow-md"
                    style="height: 54px; border-radius: 40px; background: #194077; font-family: 'Montserrat', sans-serif; font-size: 15px;"
                    onmouseover="this.style.background='#020C1B';" onmouseout="this.style.background='#194077';">
                    {{ __('exams.register_btn') }}
                </a>
            @endif
        </div>

    </section>


    <section class="w-full py-10 md:py-16 bg-[#F9FBFC] md:bg-white">
        <div class="mx-auto w-full max-w-[1280px] px-6 xl:px-0">

            {{-- Section Header --}}
            <div class="text-left md:text-center mb-8 md:mb-12 px-2 xl:px-0">
                <h2 class="font-black text-[22px] md:text-4xl uppercase mb-3 md:mb-4 text-[#111827]"
                    style="font-family: 'Jost', sans-serif;">
                    {{ __('exams.exam_structure') }}
                </h2>
                <p class="text-gray-600 text-[13px] md:text-sm leading-relaxed"
                    style="font-family: 'Montserrat', sans-serif;">
                    {{ __('exams.official_site_text', ['exam' => $exam->getLocalizedTitle()]) }}<br
                        class="hidden md:block">
                    <a href="{{ $exam->official_site_url }}" target="_blank"
                        class="font-bold underline text-[#111827]">{{ __('exams.official_site_link') }}</a>
                </p>
            </div>

            {{-- Centered Flex Container --}}
            <div class="flex flex-col md:flex-row md:flex-wrap lg:flex-nowrap justify-center gap-4 md:gap-6 w-full">
                @foreach ($exam->structureParts as $structure)
                    @php
                        $iconMap = [
                            'reading' => ['img' => 'Vector.png', 'bg' => '#194077'],
                            'writing' => ['img' => 'Vector-1.png', 'bg' => '#90CAF9'],
                            'listening' => ['img' => 'Vector-2.png', 'bg' => '#B3D9F7'],
                            'speaking' => ['img' => 'Vector-3.png', 'bg' => '#194077'],
                            'reading and writing' => ['img' => 'Vector.png', 'bg' => '#194077'],
                            'grammar' => ['img' => 'Vector-1.png', 'bg' => '#90CAF9'],
                        ];
                        $key = strtolower(trim($structure->icon ?? ''));
                        $iconData = $iconMap[$key] ?? ['img' => 'Vector.png', 'bg' => '#194077'];
                    @endphp

                    <div
                        class="bg-white flex flex-col gap-3 md:gap-4 shadow-[0_4px_15px_rgba(0,0,0,0.03)] border border-[#efefef] p-6 md:p-[30px] w-full md:w-[302px] rounded-2xl md:rounded-3xl    ">

                        {{-- Icon --}}
                        <div class="rounded-xl flex items-center justify-center"
                            style="width: 50px; height: 50px; background-color: {{ $iconData['bg'] }};">
                            <img src="{{ asset('images/' . $iconData['img']) }}" alt=""
                                class="w-5 h-5 object-contain">
                        </div>

                        {{-- Title --}}
                        <h3 class="font-bold text-[16px] md:text-xl text-[#111827]"
                            style="font-family: 'Montserrat', sans-serif;">
                            {{ $structure->getLocalizedTitle() }}
                        </h3>

                        {{-- Duration --}}
                        @if ($structure->duration)
                            <div class="flex items-center gap-2 text-gray-400 text-[12px] md:text-sm -mt-2 md:-mt-1"
                                style="font-family: 'Montserrat', sans-serif;">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>{{ $structure->getLocalizedDuration() }}</span>
                            </div>
                        @endif

                        {{-- Description --}}
                        <p class="text-gray-600 text-[13px] md:text-sm leading-relaxed"
                            style="font-family: 'Montserrat', sans-serif;">
                            {{ $structure->getLocalizedDescription() }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="w-full py-8 md:py-12 bg-[#F9FBFC] md:bg-white">
        <div class="mx-auto w-full max-w-[1280px] px-6 xl:px-0">
            <div class="flex flex-col md:flex-row gap-4 md:gap-6 items-stretch">

                <div class="flex-1 rounded-[16px] md:rounded-2xl p-6 text-white flex flex-col justify-center min-h-[90px] md:min-h-[140px]"
                    style="background: #194077;">
                    <p class="text-[13px] md:text-sm font-medium" style="font-family: 'Montserrat', sans-serif;">
                        <strong class="text-[13px] md:text-lg mb-0.5 md:mb-1 block">{{ __('exams.flex_prep') }}</strong>
                        <span class="opacity-90">{{ __('exams.flex_prep_sub') }}</span>
                    </p>
                </div>

                <div class="flex-1 rounded-[16px] md:rounded-2xl p-6 text-[#111827] flex flex-col justify-center min-h-[90px] md:min-h-[140px]"
                    style="background: #E5F7FF;">
                    <p class="text-[13px] md:text-sm" style="font-family: 'Montserrat', sans-serif;">
                        {{ __('exams.total_duration') }}
                        <strong
                            class="text-[13px] md:text-lg block mt-0.5 md:mt-1">{{ $exam->getLocalizedDuration() ?? __('exams.contact_us') }}</strong>
                    </p>
                </div>

                <div class="flex-1 rounded-[16px] md:rounded-2xl p-6 text-[#111827] flex flex-col justify-center min-h-[90px] md:min-h-[140px]"
                    style="background: #84CDF1;">
                    <p class="text-[13px] md:text-sm" style="font-family: 'Montserrat', sans-serif;">
                        <strong
                            class="text-[13px] md:text-lg mb-0.5 md:mb-1 block">{{ __('exams.eu_recognition') }}</strong>
                        {{ __('exams.eu_recognition_sub') }}
                    </p>
                </div>

                <div class="flex-1 rounded-[16px] md:rounded-2xl p-6 text-white flex flex-col justify-center min-h-[90px] md:min-h-[140px]"
                    style="background: #194077;">
                    <p class="text-[13px] md:text-sm font-medium" style="font-family: 'Montserrat', sans-serif;">
                        <strong
                            class="text-[13px] md:text-lg mb-0.5 md:mb-1 block md:inline">{{ __('exams.fast_results') }}</strong>
                        <span
                            class="opacity-90 leading-tight block md:inline md:leading-normal">{{ __('exams.fast_results_sub', ['time' => $exam->results_time ?? '']) }}</span>
                    </p>
                </div>

            </div>
        </div>
    </section>

    {{-- Only show if there is more than 1 level to actually switch between --}}
    @if ($exam->levels->count() > 1)
        <section class="w-full py-16 bg-[#F9FBFC]" x-data="{ activeTab: {{ $exam->levels->first()->id }} }">
            <div class="mx-auto w-full max-w-[1280px] px-6 xl:px-0">

                {{-- Section Title --}}
                <div class="text-left md:text-center mb-8 md:mb-10 w-full max-w-[500px] md:max-w-none mx-auto md:px-0">
                    <h2 class="font-black text-[22px] md:text-4xl uppercase mb-3 md:mb-4 text-[#111827]"
                        style="font-family: 'Jost', sans-serif;">
                        {{ __('exams.cefr_levels_title', ['exam' => $exam->getLocalizedTitle()]) }}
                    </h2>
                    <p class="text-gray-600 text-[14px] md:text-sm max-w-2xl mx-auto md:mx-auto"
                        style="font-family: 'Montserrat', sans-serif;">
                        {{ __('exams.cefr_subtitle') }}
                    </p>
                </div>

                {{-- Thinner Tab Switcher --}}
                <div class="flex justify-center mb-8 md:mb-12">
                    <div
                        class="flex flex-row md:bg-[#E5E7EB] md:rounded-full md:p-0.5 gap-2 md:gap-1 w-full max-w-[500px] md:max-w-none md:w-auto justify-center md:min-w-[800px]">
                        @foreach ($exam->levels as $index => $level)
                            @php
                                // Reversed: Darkest first, then progressively lighter
                                $tabBlues = [
                                    0 => '#194077', // Darkest Blue (e.g., A1-A2)
                                    1 => '#84CDF1', // Medium Blue   (e.g., B1-B2)
                                    2 => '#B3D9F7', // Lightest Blue (e.g., C1-C2)
                                ];
                                $activeColor = $tabBlues[$index] ?? '#194077';
                            @endphp

                            <button @click="activeTab = {{ $level->id }}"
                                :class="activeTab === {{ $level->id }} ? 'text-white border-transparent' :
                                    'text-[#111827] md:text-gray-500 hover:text-black border-gray-300'"
                                :style="activeTab === {{ $level->id }} ?
                                    'background-color: {{ $activeColor }}; box-shadow: 0 2px 4px rgba(0,0,0,0.1);' :
                                    'background-color: transparent;'"
                                class="px-5 md:px-0 py-1.5 md:py-2 flex-1 md:flex-1 font-bold transition-all duration-300 uppercase text-[11px] md:text-xs tracking-wider border md:border-transparent outline-none focus:outline-none rounded-xl md:rounded-2xl"
                                style="font-family: 'Montserrat', sans-serif;">
                                {{ $level->level }}
                            </button>
                        @endforeach
                    </div>
                </div>

                {{-- Content Card --}}
                <div class="relative w-full max-w-[500px] md:max-w-none mx-auto">
                    @foreach ($exam->levels as $index => $level)
                        @php
                            $pointBlues = [
                                0 => '#194077',
                                1 => '#84CDF1',
                                2 => '#B3D9F7',
                            ];
                            $badgeColor = $pointBlues[$index] ?? '#194077';
                        @endphp

                        <div x-show="activeTab === {{ $level->id }}"
                            x-transition:enter="transition ease-out duration-300"
                            x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                            class="bg-white rounded-[24px] md:rounded-3xl p-6 md:p-12 shadow-[0_4px_25px_rgba(0,0,0,0.04)] md:shadow-[0_10px_40px_rgba(0,0,0,0.03)] border border-gray-100 mx-auto w-full">

                            <div class="flex flex-col gap-5 md:gap-6">
                                {{-- Level Badge --}}
                                <div class="flex items-center">
                                    <span
                                        class="inline-block px-4 py-1.5 md:py-1 rounded-full md:rounded-2xl text-white font-bold text-[11px] md:text-[10px] w-fit uppercase"
                                        style="background-color: {{ $badgeColor }};">
                                        {{ $level->level }}
                                    </span>
                                </div>

                                <div class="flex flex-col md:gap-2">
                                    <h3 class="font-bold text-[18px] md:text-2xl text-[#111827]"
                                        style="font-family: 'Montserrat', sans-serif;">
                                        {{ $level->getLocalizedName() }}
                                    </h3>
                                    <p class="text-gray-600 md:text-gray-500 font-medium md:italic md:font-normal text-[14px] md:text-sm mt-1 md:mt-0"
                                        style="font-family: 'Montserrat', sans-serif;">
                                        {{ $level->getLocalizedDescription() }}
                                    </p>
                                </div>

                                {{-- Bullet Points from JSON can_do array --}}
                                <div class="grid grid-cols-1 gap-5 md:gap-5 mt-2 md:mt-4">
                                    @if ($level->can_do)
                                        @foreach (app()->getLocale() === 'en' && $level->can_do_en ? $level->can_do_en : $level->can_do as $point)
                                            <div class="flex items-start gap-4">
                                                <div class="mt-1 flex-shrink-0">
                                                    <svg width="18" height="14" viewBox="0 0 18 14"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1.5 7.5L6.5 12.5L16.5 1.5" stroke="#111827"
                                                            stroke-width="2.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                </div>
                                                <p class="text-gray-700 text-[14px] md:text-[16px] leading-relaxed font-medium md:font-normal"
                                                    style="font-family: 'Montserrat', sans-serif;">
                                                    {{ $point }}
                                                </p>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


    @if (!$exam->is_on_demand && $exam->examDates->count() > 0)
        @php
            $mappedDates = $exam->examDates
                ->map(function ($date) {
                    return [
                        'date' => \Carbon\Carbon::parse($date->exam_date)->format('Y-m-d'),
                        'id' => $date->id,
                        'label' => \Carbon\Carbon::parse($date->exam_date)->format('d.m.Y'),
                    ];
                })
                ->values()
                ->toArray();
        @endphp

        <section class="w-full py-16 bg-white" id="termini">
            <div class="mx-auto w-full max-w-[1280px] px-6 xl:px-0">

                <div class="mb-10">
                    <h2 class="font-black text-[28px] uppercase text-black" style="font-family: 'Jost', sans-serif;">
                        {{ __('exams.exam_dates_title') }}
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start"
                    x-data='examCalendar(@json($mappedDates))'>

                    {{-- LEFT: Calendar --}}
                    <div class="col-span-5 bg-white rounded-2xl p-8 border border-gray-200">
                        <h3 class="font-bold text-[16px] mb-2 text-black" style="font-family: 'Montserrat', sans-serif;">
                            {{ __('exams.select_date') }}
                        </h3>
                        <p class="text-gray-500 text-[14px] leading-relaxed mb-8"
                            style="font-family: 'Montserrat', sans-serif;">
                            {!! __('exams.formats_text', ['exam' => $exam->getLocalizedTitle()]) !!}
                        </p>

                        <div class="border border-gray-200 rounded-xl p-6 w-full"
                            style="font-family: 'Montserrat', sans-serif;">

                            {{-- Month Navigation --}}
                            <div class="flex justify-between items-center mb-6">
                                <button @click="prevMonth()"
                                    class="w-8 h-8 flex items-center justify-center border border-gray-200 rounded-md text-gray-600 hover:bg-gray-50 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
                                    </svg>
                                </button>
                                <span class="font-bold text-[14px] text-black"
                                    x-text="monthNames[month] + ' ' + year"></span>
                                <button @click="nextMonth()"
                                    class="w-8 h-8 flex items-center justify-center border border-gray-200 rounded-md text-gray-600 hover:bg-gray-50 transition">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </button>
                            </div>

                            {{-- Day Headers --}}
                            <div class="grid grid-cols-7 text-center text-[12px] text-gray-400 font-medium mb-2">
                                <div>{{ __('exams.day_sun') }}</div>
                                <div>{{ __('exams.day_mon') }}</div>
                                <div>{{ __('exams.day_tue') }}</div>
                                <div>{{ __('exams.day_wed') }}</div>
                                <div>{{ __('exams.day_thu') }}</div>
                                <div>{{ __('exams.day_fri') }}</div>
                                <div>{{ __('exams.day_sat') }}</div>
                            </div>

                            {{-- Day Grid --}}
                            <div class="grid grid-cols-7 gap-y-1 text-center text-[13px]">
                                <template x-for="blank in blanks" :key="'b' + blank">
                                    <div></div>
                                </template>
                                <template x-for="day in days" :key="day">
                                    <div class="flex items-center justify-center">
                                        <div class="w-8 h-8 flex items-center justify-center rounded-lg font-semibold transition-colors"
                                            :class="hasExam(day) ? 'bg-[#194077] text-white cursor-pointer hover:bg-[#020C1B]' :
                                                'text-gray-700'"
                                            @click="handleDayClick(day)" x-text="day">
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    {{-- RIGHT: Date Cards --}}
                    <div class="col-span-7 bg-white rounded-2xl p-8 border border-gray-200">
                        <h3 class="font-bold text-[16px] mb-1 text-black" style="font-family: 'Montserrat', sans-serif;">
                            {{ __('exams.upcoming_dates') }}
                        </h3>
                        <p class="text-gray-500 text-[14px] mb-6" style="font-family: 'Montserrat', sans-serif;">
                            {{ __('exams.available_dates_sub') }}
                        </p>

                        <div class="flex flex-col gap-3 overflow-y-auto pr-1 custom-scrollbar" style="max-height: 520px;">
                            @foreach ($exam->examDates as $date)
                                <div @click="activeDateId = activeDateId === {{ $date->id }} ? null : {{ $date->id }}"
                                    class="rounded-2xl p-6 cursor-pointer transition-all duration-200 bg-white"
                                    style="box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">

                                    <h4 class="font-bold text-[15px] text-black mb-3"
                                        style="font-family: 'Montserrat', sans-serif;">
                                        {{ $date->title ?? $exam->getLocalizedTitle() }}
                                    </h4>

                                    <div class="flex items-center gap-2 mb-2">
                                        <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none"
                                            stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                            <rect x="3" y="4" width="18" height="18" rx="2" />
                                            <line x1="16" y1="2" x2="16" y2="6" />
                                            <line x1="8" y1="2" x2="8" y2="6" />
                                            <line x1="3" y1="10" x2="21" y2="10" />
                                        </svg>
                                        <span class="font-bold text-[14px] text-black"
                                            style="font-family: 'Montserrat', sans-serif;">
{{ \Carbon\Carbon::parse($date->exam_date)->format('d.m.Y') }}
                                        </span>
                                    </div>

                                    @if ($date->registration_start && $date->registration_deadline)
                                        <div class="flex items-center gap-2 text-gray-400 text-[13px]"
                                            style="font-family: 'Montserrat', sans-serif;">
                                            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor"
                                                stroke-width="1.8" viewBox="0 0 24 24">
                                                <circle cx="12" cy="12" r="10" />
                                                <polyline points="12 6 12 12 16 14" />
                                            </svg>
                                            <span>{{ __('exams.reg_deadline') }}
                                                {{ \Carbon\Carbon::parse($date->registration_start)->format('d.m.Y') }} –
                                                {{ \Carbon\Carbon::parse($date->registration_deadline)->format('d.m.Y') }}</span>
                                        </div>
                                    @endif

                                    <div x-show="activeDateId === {{ $date->id }}" x-collapse class="mt-5">
                                        <button
                                            @click.stop="$dispatch('open-exam-modal', {dateId: {{ $date->id }}, dateLabel: '{{ \Carbon\Carbon::parse($date->exam_date)->format('d.m.Y') }}'})"
                                            class="inline-flex items-center justify-center text-white font-medium transition-all duration-200"
                                            style="width: 130px; height: 40px; border-radius: 8px; background: #194077; font-family: 'Montserrat', sans-serif; font-size: 14px;"
                                            onmouseover="this.style.background='#020C1B';"
                                            onmouseout="this.style.background='#194077';">
                                            {{ __('exams.register_btn') }}
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <style>
            .custom-scrollbar::-webkit-scrollbar {
                width: 5px;
            }

            .custom-scrollbar::-webkit-scrollbar-track {
                background: #f9fafb;
                border-radius: 10px;
            }

            .custom-scrollbar::-webkit-scrollbar-thumb {
                background: #d1d5db;
                border-radius: 10px;
            }

            .custom-scrollbar::-webkit-scrollbar-thumb:hover {
                background: #9ca3af;
            }
        </style>

        <script>
            function examCalendar(availableDates) {
                return {
                    activeDateId: null,
                    month: new Date().getMonth(),
                    year: new Date().getFullYear(),
                    monthNames: '{{ __('exams.months') }}'.split(','),
                    availableDates: availableDates,
                    get blanks() {
                        return Array.from({
                            length: new Date(this.year, this.month, 1).getDay()
                        });
                    },
                    get days() {
                        return Array.from({
                            length: new Date(this.year, this.month + 1, 0).getDate()
                        }, (_, i) => i + 1);
                    },
                    prevMonth() {
                        if (this.month === 0) {
                            this.month = 11;
                            this.year--;
                        } else {
                            this.month--;
                        }
                    },
                    nextMonth() {
                        if (this.month === 11) {
                            this.month = 0;
                            this.year++;
                        } else {
                            this.month++;
                        }
                    },
                    getExamForDay(day) {
                        const m = String(this.month + 1).padStart(2, '0');
                        const d = String(day).padStart(2, '0');
                        const dateStr = this.year + '-' + m + '-' + d;
                        return this.availableDates.find(e => e.date === dateStr) || null;
                    },
                    hasExam(day) {
                        return this.getExamForDay(day) !== null;
                    },
                    handleDayClick(day) {
                        const exam = this.getExamForDay(day);
                        if (!exam) return;
                        window.dispatchEvent(new CustomEvent('open-exam-modal', {
                            detail: {
                                dateId: exam.id,
                                dateLabel: exam.label
                            }
                        }));
                    }
                }
            }
        </script>
    @endif
@endsection
