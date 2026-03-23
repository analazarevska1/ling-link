@extends('parts.main')

@section('content')
<section class="w-full flex justify-center py-8 px-6 bg-white">
    <div class="w-full flex flex-row items-center"
        style="
            width: 1280px;
            min-height: 505px;
            border-radius: 10px;
            padding: 34px 60px;
            gap: 40px;
            box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);
            background: #fff;
        ">

        {{-- Left: Text Content --}}
        <div class="flex-1 flex flex-col items-start text-left">

            <h1 class="font-bold text-[#194077] uppercase mb-1" style="font-family: 'Montserrat', sans-serif; font-size: 32px; line-height: 1.2;">
                {{ $exam->title }}
            </h1>

            @if($exam->subtitle)
            <h2 class="uppercase italic text-black mb-6" style="font-family: 'Montserrat', sans-serif; font-size: 26px; font-weight: 400; line-height: 1.35;">
                {{ $exam->subtitle }}
            </h2>
            @endif

            <p class="text-gray-700 mb-8" style="font-family: 'Montserrat', sans-serif; font-size: 16px; line-height: 1.65; max-width: 520px;">
                {{ $exam->description }}
            </p>

            <div class="flex flex-row gap-12 mb-8">

                @if($exam->where_recognized)
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0 rounded-full flex items-center justify-center text-white" style="width: 52px; height: 52px; background-color: #194077;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-black leading-tight" style="font-family: 'Montserrat', sans-serif; font-size: 15px;">Каде е признаен?</p>
                        <p class="text-gray-600 leading-tight mt-1" style="font-family: 'Montserrat', sans-serif; font-size: 14px;">{{ $exam->where_recognized }}</p>
                    </div>
                </div>
                @endif

                @if($exam->what_for)
                <div class="flex items-center gap-4">
                    <div class="flex-shrink-0 rounded-full flex items-center justify-center text-white" style="width: 52px; height: 52px; background-color: #194077;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72l5 2.73 5-2.73v3.72z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="font-bold text-black leading-tight" style="font-family: 'Montserrat', sans-serif; font-size: 15px;">За што е потребен?</p>
                        <p class="text-gray-600 leading-tight mt-1" style="font-family: 'Montserrat', sans-serif; font-size: 14px;">{{ $exam->what_for }}</p>
                    </div>
                </div>
                @endif
            </div>

            @php
                $firstDate = $exam->examDates->first();
            @endphp

            @if(!$exam->is_on_demand && $firstDate)
            <div class="mb-7">
                <p class="text-gray-800 mb-1" style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
                    Прв термин за полагање на испит: <strong>{{ \Carbon\Carbon::parse($firstDate->exam_date)->format('d.m.Y') }}</strong>
                </p>
                <a href="#termini" class="font-bold underline text-black hover:text-[#194077] transition-colors" style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
                    Види ги сите термини.
                </a>
            </div>
            @elseif($exam->is_on_demand)
            <div class="mb-7">
                <p class="text-gray-800" style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
                    Овој испит се полага по барање.
                </p>
            </div>
            @endif

            <button
                class="text-white font-medium transition-all duration-200"
                style="width: 160px; height: 48px; border-radius: 8px; background: #194077; font-family: 'Montserrat', sans-serif; font-size: 16px;"
                onmouseover="this.style.background='#020C1B';"
                onmouseout="this.style.background='#194077';">
                Пријави се
            </button>
        </div>

        {{-- Right: Image --}}
        <div class="flex-shrink-0">
            @php
                $imageUrl = $exam->image && str_starts_with($exam->image, 'http')
                    ? $exam->image
                    : asset('images/default-exam.jpg');
            @endphp
            <img src="{{ $imageUrl }}" alt="{{ $exam->title }}"
                class="object-cover"
                style="width: 420px; height: 437px; border-radius: 20px;">
        </div>

    </div>
</section>

{{-- Dynamic Info Cards Section --}}
@if(!empty($exam->info_cards))
    {{-- Check for both 'list' or 'aptitude' layout types --}}
    @if($exam->layout_type === 'list' || $exam->layout_type === 'aptitude') 
        <section class="w-full py-12 px-6 bg-[#F9FBFC]">
            <div class="max-w-[1280px] mx-auto flex flex-col gap-10">
                
                @foreach($exam->info_cards as $card)
                <div class="bg-white rounded-2xl p-10 shadow-sm border border-gray-100 mx-auto w-full" 
                     style="box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.04);">
                    
                    {{-- Card Title --}}
                    <h3 class="font-bold text-xl mb-8 text-black" style="font-family: 'Montserrat', sans-serif;">
                        {{ $card['title'] ?? 'Информација' }}
                    </h3>

                    {{-- Card Content --}}
                    <div class="flex flex-col gap-5">
                        @php
                            // Check if 'items' exists and is an array (like in your TESTAS data)
                            // Otherwise, fallback to 'content' and explode it if it's a string
                            if (isset($card['items']) && is_array($card['items'])) {
                                $items = $card['items'];
                            } else {
                                $content = $card['content'] ?? '';
                                $items = explode("\n", str_replace("\r", "", $content));
                            }
                        @endphp

                        @foreach($items as $item)
                            @if(trim($item))
                            <div class="flex items-start gap-5">
                                <div class="mt-1 flex-shrink-0">
                                    {{-- Black Checkmark SVG --}}
                                    <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 7.5L6.5 12.5L16.5 1.5" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                                <p class="text-gray-800 text-[16px] leading-relaxed" style="font-family: 'Montserrat', sans-serif;">
                                    {{ trim($item) }}
                                </p>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                @endforeach

            </div>
        </section>
    @endif
@endif

<section class="w-full py-16 bg-white">
    <div class="mx-auto" style="width: 1280px;">
        
        {{-- Section Header --}}
        <div class="text-center mb-12">
            <h2 class="font-black text-4xl uppercase mb-4" style="font-family: 'Jost', sans-serif;">
                СТРУКТУРА НА ИСПИТОТ
            </h2>
            <p class="text-gray-600 text-sm" style="font-family: 'Montserrat', sans-serif;">
                Сакате да дознаете повеќе од официјалната страна на {{ $exam->title }}?<br>
                <a href="{{ $exam->official_site_url }}" target="_blank" class="font-bold underline text-black">Кликнете овде.</a>
            </p>
        </div>

        {{-- Centered Flex Container --}}
        <div class="flex flex-wrap justify-center gap-6">
            @foreach($exam->structureParts as $structure)
                @php
                    $iconMap = [
                        'reading'           => ['img' => 'Vector.png',   'bg' => '#194077'],
                        'writing'           => ['img' => 'Vector-1.png', 'bg' => '#90CAF9'],
                        'listening'         => ['img' => 'Vector-2.png', 'bg' => '#B3D9F7'],
                        'speaking'          => ['img' => 'Vector-3.png', 'bg' => '#194077'],
                        'reading and writing'=> ['img' => 'Vector.png',   'bg' => '#194077'],
                        'grammar'           => ['img' => 'Vector-1.png', 'bg' => '#90CAF9'],
                    ];
                    $key = strtolower(trim($structure->icon ?? ''));
                    $iconData = $iconMap[$key] ?? ['img' => 'Vector.png', 'bg' => '#194077'];
                @endphp

                {{-- We set a specific width (302px) so 4 cards + gaps = 1280px --}}
                <div class="bg-white flex flex-col gap-4 shadow-sm"
                     style="
                        width: 302px; 
                        border-radius: 15px;
                        border: 1px solid #efefef;
                        padding: 30px;
                        box-shadow: 0px 4px 15px rgba(0,0,0,0.03);
                     ">

                    {{-- Icon --}}
                    <div class="rounded-xl flex items-center justify-center"
                         style="width: 56px; height: 56px; background-color: {{ $iconData['bg'] }};">
                        <img src="{{ asset('images/' . $iconData['img']) }}" alt="" class="w-6 h-6 object-contain">
                    </div>

                    {{-- Title --}}
                    <h3 class="font-bold text-xl text-black" style="font-family: 'Montserrat', sans-serif;">
                        {{ $structure->title }}
                    </h3>

                    {{-- Duration --}}
                    @if($structure->duration)
                    <div class="flex items-center gap-2 text-gray-400 text-sm" style="font-family: 'Montserrat', sans-serif;">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>{{ $structure->duration }}</span>
                    </div>
                    @endif

                    {{-- Description --}}
                    <p class="text-gray-600 text-sm leading-relaxed" style="font-family: 'Montserrat', sans-serif;">
                        {{ $structure->description }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>


<section class="w-full py-12 flex justify-center bg-white">
    <div class="flex flex-row gap-6 items-stretch" style="width: 1280px; px-6">
        
        <div class="flex-1 rounded-2xl p-6 text-white flex flex-col justify-center" style="background: #194077; min-height: 140px;">
            <p class="font-bold text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">Флексибилна подготовка</p>
            <p class="text-sm opacity-90" style="font-family: 'Montserrat', sans-serif;">онлајн и во живо.</p>
        </div>

        <div class="flex-1 rounded-2xl p-6 text-black flex flex-col justify-center" style="background: #84CDF1; min-height: 140px;">
            <p class="font-bold text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">Вкупно времетраење</p>
            <p class="text-sm" style="font-family: 'Montserrat', sans-serif;">
                {{ $exam->duration ?? 'Контактирајте не за информации' }}
            </p>
        </div>

        <div class="flex-1 rounded-2xl p-6 text-black flex flex-col justify-center" style="background: #E5F7FF; min-height: 140px;">
            <p class="font-bold text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">Европско признавање</p>
            <p class="text-sm" style="font-family: 'Montserrat', sans-serif;">сертификатите важат низ цела ЕУ.</p>
        </div>

        <div class="flex-1 rounded-2xl p-6 text-white flex flex-col justify-center" style="background: #194077; min-height: 140px;">
            <p class="font-bold text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">Брзи резултати</p>
            <p class="text-sm opacity-90" style="font-family: 'Montserrat', sans-serif;">
                добиваш сертификат за {{ $exam->results_time ?? 'неколку недели' }}.
            </p>
        </div>

    </div>
</section>

{{-- Only show if there is more than 1 level to actually switch between --}}
@if($exam->levels->count() > 1)
<section class="w-full py-16 bg-[#F9FBFC]" x-data="{ activeTab: {{ $exam->levels->first()->id }} }">
    <div class="mx-auto" style="width: 1400px; max-w-full; px-6">
        
        {{-- Section Title --}}
        <div class="text-center mb-10">
            <h2 class="font-black text-4xl uppercase mb-4" style="font-family: 'Jost', sans-serif;">
                CEFR НИВОА ЗА {{ $exam->title }}
            </h2>
            <p class="text-gray-600 text-sm max-w-2xl mx-auto" style="font-family: 'Montserrat', sans-serif;">
                Сите нивоа се усогласени со Заедничката европска референтна рамка за јазици (CEFR).
            </p>
        </div>

        {{-- Thinner Tab Switcher --}}
        <div class="flex justify-center mb-12">
            {{-- Reduced padding from p-1 to p-0.5 and decreased height --}}
            <div class="flex bg-[#E5E7EB] rounded-full p-0.5 gap-1" style="width: fit-content; min-width: 800px;">
                @foreach($exam->levels as $index => $level)
                    @php
                        // Reversed: Darkest first, then progressively lighter
                        $tabBlues = [
                            0 => '#194077', // Darkest Blue (e.g., A1-A2)
                            1 => '#84CDF1', // Medium Blue   (e.g., B1-B2)
                            2 => '#B3D9F7', // Lightest Blue (e.g., C1-C2)
                        ];
                        $activeColor = $tabBlues[$index] ?? '#194077';
                    @endphp

                    <button 
                        @click="activeTab = {{ $level->id }}"
                        :class="activeTab === {{ $level->id }} ? 'text-white' : 'text-gray-500 hover:text-black'"
                        :style="activeTab === {{ $level->id }} ? 'background-color: {{ $activeColor }}; shadow: 0 2px 4px rgba(0,0,0,0.1);' : ''"
                        {{-- py-2 instead of py-3 to make it thinner --}}
                        class="flex-1 py-2 rounded-full font-bold transition-all duration-300 uppercase text-xs tracking-wider"
                        style="font-family: 'Montserrat', sans-serif;">
                        {{ $level->level }}
                    </button>
                @endforeach
            </div>
        </div>

        {{-- Content Card --}}
        <div class="relative">
            @foreach($exam->levels as $index => $level)
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
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     class="bg-white rounded-3xl p-12 shadow-sm border border-gray-100 mx-auto w-full"
                     style="box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.03);">
                    
                    <div class="flex flex-col gap-6">
                        {{-- Level Badge --}}
                        <span class="inline-block px-4 py-1 rounded-md text-white font-bold text-[10px] w-fit uppercase" 
                              style="background-color: {{ $badgeColor }};">
                            {{ $level->level }}
                        </span>

                        <div>
                            <h3 class="font-bold text-2xl mb-2 text-black" style="font-family: 'Montserrat', sans-serif;">
                                {{ $level->name }}
                            </h3>
                            <p class="text-gray-500 italic text-sm" style="font-family: 'Montserrat', sans-serif;">
                                {{ $level->description }}
                            </p>
                        </div>

                        {{-- Bullet Points from JSON can_do array --}}
                        <div class="grid grid-cols-1 gap-5 mt-4">
                            @if($level->can_do)
                                @foreach($level->can_do as $point)
                                    <div class="flex items-start gap-4">
                                        <div class="mt-1 flex-shrink-0">
                                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1.5 7.5L6.5 12.5L16.5 1.5" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </div>
                                        <p class="text-gray-700 text-[16px] leading-relaxed" style="font-family: 'Montserrat', sans-serif;">
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


@if(!$exam->is_on_demand && $exam->examDates->count() > 0)
@php
    $mappedDates = $exam->examDates->map(function($date) {
        return \Carbon\Carbon::parse($date->exam_date)->format('Y-m-d');
    })->toArray();
@endphp

<section class="w-full py-16 bg-white" id="termini">
    <div class="mx-auto px-6" style="max-width: 1280px;">

        <div class="mb-10">
            <h2 class="font-black text-[28px] uppercase text-black" style="font-family: 'Jost', sans-serif;">
                ДАТУМИ НА ПОЛАГАЊЕ
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-start"
            x-data='examCalendar(@json($mappedDates))'>

            {{-- LEFT: Calendar --}}
            <div class="col-span-5 bg-white rounded-2xl p-8 border border-gray-200">
                <h3 class="font-bold text-[16px] mb-2 text-black" style="font-family: 'Montserrat', sans-serif;">
                    Селектирај датум на полагање
                </h3>
                <p class="text-gray-500 text-[14px] leading-relaxed mb-8" style="font-family: 'Montserrat', sans-serif;">
                    Постојат два формати за полагање на {{ $exam->title }}, <strong>дигитален</strong> и <strong>класичен</strong>.
                    Кликни на датата за да дознаеш повеќе детали.
                </p>

                <div class="border border-gray-200 rounded-xl p-6 w-full" style="font-family: 'Montserrat', sans-serif;">

                    {{-- Month Navigation --}}
                    <div class="flex justify-between items-center mb-6">
                        <button @click="prevMonth()" class="w-8 h-8 flex items-center justify-center border border-gray-200 rounded-md text-gray-600 hover:bg-gray-50 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
                        </button>
                        <span class="font-bold text-[14px] text-black" x-text="monthNames[month] + ' ' + year"></span>
                        <button @click="nextMonth()" class="w-8 h-8 flex items-center justify-center border border-gray-200 rounded-md text-gray-600 hover:bg-gray-50 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
                        </button>
                    </div>

                    {{-- Day Headers --}}
                    <div class="grid grid-cols-7 text-center text-[12px] text-gray-400 font-medium mb-2">
                        <div>Не</div><div>Пон</div><div>Втр</div><div>Сре</div><div>Чет</div><div>Пет</div><div>Саб</div>
                    </div>

                    {{-- Day Grid --}}
                    <div class="grid grid-cols-7 gap-y-1 text-center text-[13px]">
                        <template x-for="blank in blanks" :key="'b' + blank">
                            <div></div>
                        </template>
                        <template x-for="day in days" :key="day">
                            <div class="flex items-center justify-center">
                                <div
                                    class="w-8 h-8 flex items-center justify-center rounded-lg font-semibold transition-colors"
                                    :class="hasExam(day) ? 'bg-[#194077] text-white' : 'text-gray-700'"
                                    x-text="day">
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            {{-- RIGHT: Date Cards --}}
            <div class="col-span-7 bg-white rounded-2xl p-8 border border-gray-200">
                <h3 class="font-bold text-[16px] mb-1 text-black" style="font-family: 'Montserrat', sans-serif;">
                    Сите претстојни датуми
                </h3>
                <p class="text-gray-500 text-[14px] mb-6" style="font-family: 'Montserrat', sans-serif;">
                    Одбери од достапните термини
                </p>

                <div class="flex flex-col gap-3 overflow-y-auto pr-1 custom-scrollbar" style="max-height: 520px;">
                    @foreach($exam->examDates as $date)
                    <div
                        @click="activeDateId = activeDateId === {{ $date->id }} ? null : {{ $date->id }}"
                        class="rounded-2xl p-6 cursor-pointer transition-all duration-200 bg-white"
                        style="box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">

                        <h4 class="font-bold text-[15px] text-black mb-3" style="font-family: 'Montserrat', sans-serif;">
                            {{ $date->title ?? $exam->title }}
                        </h4>

                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-4 h-4 text-gray-500 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
                            </svg>
                            <span class="font-bold text-[14px] text-black" style="font-family: 'Montserrat', sans-serif;">
                                {{ \Carbon\Carbon::parse($date->exam_date)->translatedFormat('F d, Y') }}
                            </span>
                        </div>

                        @if($date->registration_start && $date->registration_deadline)
                        <div class="flex items-center gap-2 text-gray-400 text-[13px]" style="font-family: 'Montserrat', sans-serif;">
                            <svg class="w-4 h-4 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.8" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>
                            </svg>
                            <span>Рок за пријавување: {{ \Carbon\Carbon::parse($date->registration_start)->format('d.m.Y') }} – {{ \Carbon\Carbon::parse($date->registration_deadline)->format('d.m.Y') }}</span>
                        </div>
                        @endif

                        <div x-show="activeDateId === {{ $date->id }}" x-collapse class="mt-5">
                            <a href="#"
                                class="inline-flex items-center justify-center text-white font-medium transition-all duration-200"
                                style="width: 130px; height: 40px; border-radius: 8px; background: #194077; font-family: 'Montserrat', sans-serif; font-size: 14px;"
                                onmouseover="this.style.background='#020C1B';"
                                onmouseout="this.style.background='#194077';">
                                Пријави се
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    .custom-scrollbar::-webkit-scrollbar { width: 5px; }
    .custom-scrollbar::-webkit-scrollbar-track { background: #f9fafb; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 10px; }
    .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #9ca3af; }
</style>

<script>
    function examCalendar(availableDates) {
        return {
            activeDateId: null,
            month: new Date().getMonth(),
            year: new Date().getFullYear(),
            monthNames: ['Јануари','Февруари','Март','Април','Мај','Јуни','Јули','Август','Септември','Октомври','Ноември','Декември'],
            availableDates: availableDates,
            get blanks() {
                return Array.from({ length: new Date(this.year, this.month, 1).getDay() });
            },
            get days() {
                return Array.from({ length: new Date(this.year, this.month + 1, 0).getDate() }, (_, i) => i + 1);
            },
            prevMonth() {
                if (this.month === 0) { this.month = 11; this.year--; } else { this.month--; }
            },
            nextMonth() {
                if (this.month === 11) { this.month = 0; this.year++; } else { this.month++; }
            },
            hasExam(day) {
                const m = String(this.month + 1).padStart(2, '0');
                const d = String(day).padStart(2, '0');
                return this.availableDates.includes(this.year + '-' + m + '-' + d);
            }
        }
    }
</script>
@endif
@endsection