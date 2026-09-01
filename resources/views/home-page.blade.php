@extends('parts.main')

@section('content')
<!-- Hero Section -->
<div class="w-full hidden md:block" style="background: url('{{ asset('images/hero-books.png') }}') center right / cover no-repeat; height: 673px; padding: 70px 80px 100px 140px; position: relative;">

  <!-- Text Content - On top of background image -->
  <div class="flex flex-col mt-16" style="max-width: 620px;">

    <!-- Badge -->
    <span class="px-5 py-1 rounded-full text-gray-600 text-sm mb-6 self-start" style="background: rgba(0,0,0,0.07); font-family: 'Montserrat', sans-serif;">
      {{ __('home.welcome_badge') }}
    </span>

    <h1 class="uppercase" style="font-family: 'Jost', sans-serif; font-size: 72px; line-height: 82px; letter-spacing: 0; font-weight: 900; color: #000;">
      {{ __('home.hero_title_l1') }}<br>
      {{ __('home.hero_title_l2') }}
    </h1>

    <p class="mt-4 text-gray-600" style="font-family: 'Montserrat', sans-serif; font-size: 17px; max-width: 480px;">
      {{ __('home.hero_subtitle') }}
    </p>

    <div class="flex gap-4 mt-8">
      <a href="{{route('courses.index')}}" class="flex items-center justify-center transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; padding: 10px 16px; background: rgba(229, 247, 255, 0.9); color: #194077; font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
        onmouseover="this.style.background='linear-gradient(90deg, #E5F7FF, #89D0F2)';"
        onmouseout="this.style.background='rgba(229, 247, 255, 0.9)';">
        {{ __('home.select_course') }}
      </a>

      <a href="{{route('exams.index')}}" class="flex items-center justify-center transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; padding: 10px 16px; background: #194077; color: white; font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
        onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)';"
        onmouseout="this.style.background='#194077';">
        {{ __('home.select_exam') }}
      </a>
    </div>
  </div>

</div>

<!-- Mobile Hero Section -->
<div class="flex flex-col md:hidden w-full bg-[#f8fbff]">
  <img src="{{ asset('images/hero-books.png') }}" alt="LinguaLink" class="w-full h-auto">
  
  <div class="flex flex-col items-center text-center px-6 py-10">
    <span class="px-5 py-1 rounded-full text-gray-600 text-xs mb-6" style="background: rgba(0,0,0,0.07); font-family: 'Montserrat', sans-serif;">
      {{ __('home.welcome_badge') }}
    </span>

    <h1 class="uppercase mb-4" style="font-family: 'Jost', sans-serif; font-size: 42px; line-height: 1.1; font-weight: 900; color: #000;">
      {{ __('home.hero_title_l1') }}<br>
      {{ __('home.hero_title_l2') }}
    </h1>

    <p class="text-gray-600 text-sm mb-10" style="font-family: 'Montserrat', sans-serif; max-width: 320px;">
      {{ __('home.hero_subtitle') }}
    </p>

    <div class="flex flex-col gap-4 w-full px-4">
      <a href="#" class="flex items-center justify-center transition-all duration-200"
        style="width: 100%; height: 50px; border-radius: 12px; background: rgba(229, 247, 255, 0.9); color: #194077; font-family: 'Montserrat', sans-serif; font-size: 16px; font-weight: 600; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
        {{ __('home.select_course') }}
      </a>

      <a href="{{route('exams.index')}}" class="flex items-center justify-center transition-all duration-200"
        style="width: 100%; height: 50px; border-radius: 12px; background: #194077; color: white; font-family: 'Montserrat', sans-serif; font-size: 16px; font-weight: 600; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
        {{ __('home.select_exam') }}
      </a>
    </div>
  </div>
</div>

<!-- Info Banner-->
<div class="flex flex-col items-center justify-center mx-auto text-center" style="max-width: 620px; border-radius: 20px; background: white; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.12); padding: 16px 40px; margin-top: 36px; margin-bottom: 36px; position: relative; z-index: 10;">
  <p class="font-black text-base" style="font-family: 'Montserrat', sans-serif;">{{ __('home.admin_hours_title') }}</p>
  <p class="text-gray-600 text-sm mt-1" style="font-family: 'Montserrat', sans-serif;">{{ __('home.admin_hours_schedule') }}</p>
</div> 


<section class="w-full pt-8" style="background: #f8fbff;">
    <h2 class="text-center font-black text-4xl uppercase mb-4" style="font-family: 'Jost', sans-serif;">{{ __('home.choose_course') }}</h2>
  
    {{-- DESKTOP LAYOUT (Perfect - Visible on MD and up) --}}
    <div class="hidden md:flex justify-center gap-[60px] px-32 pb-12">
  
      <!-- Card 1 -->
      <a href="/courses/english" class="block" style="width: 244px; height: 88px; margin-top: 140px; position: relative;">
        <img src="{{ asset('images/flag-en.png') }}" alt="English" class="absolute object-contain z-10" style="height: 160px; width: 110px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 88px; width: 240px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-extrabold text-base text-left" style="font-family: 'Montserrat', sans-serif;">{{ __('home.english') }}</span>
        </div>
      </a>

      <!-- Card 2 -->
      <a href="/courses/german" class="block" style="width: 244px; height: 88px; margin-top: 140px; position: relative;">
        <img src="{{ asset('images/flag-de.png') }}" alt="German" class="absolute object-contain z-10" style="height: 160px; width: 110px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 88px; width: 240px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-bold text-base text-left" style="font-family: 'Montserrat', sans-serif;">{{ __('home.german') }}</span>
        </div>
      </a>

      <!-- Card 3 -->
      <a href="/courses/macedonian" class="block" style="width: 244px; height: 110px; margin-top: 140px; position: relative;">
        <img src="{{ asset('images/flag-mk.png') }}" alt="Macedonian" class="absolute object-contain z-10" style="height: 160px; width: 110px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 88px; width: 240px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-bold text-base text-left" style="font-family: 'Montserrat', sans-serif;">{{ __('home.macedonian') }}</span>
        </div>
      </a>
    </div>

    {{-- MOBILE LAYOUT: same floating flag design, stacked vertically --}}
    <div class="flex flex-col items-center gap-16 px-8 md:hidden" style="margin-top: 100px; padding-bottom: 40px;">

        <a href="/courses/english" class="block w-full" style="position: relative; max-width: 320px;">
            <img src="{{ asset('images/flag-en.png') }}" alt="English" class="absolute object-contain z-10"
                style="height: 120px; width: 90px; bottom: 100%; left: 10px; transform: translateY(40px);">
            <div class="bg-white rounded-2xl flex items-center justify-center"
                style="height: 110px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid #d1d5db; padding: 20px 24px 20px 24px;">
                <span class="font-extrabold text-lg text-center" style="font-family: 'Montserrat', sans-serif;">{{ __('home.english') }}</span>
            </div>
        </a>

        <a href="/courses/macedonian" class="block w-full" style="position: relative; max-width: 320px;">
            <img src="{{ asset('images/flag-mk.png') }}" alt="Macedonian" class="absolute object-contain z-10"
                style="height: 120px; width: 90px; bottom: 100%; left: 10px; transform: translateY(40px);">
            <div class="bg-white rounded-2xl flex items-center justify-center"
                style="height: 110px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid #d1d5db; padding: 20px 24px 20px 24px;">
                <span class="font-bold text-lg text-center" style="font-family: 'Montserrat', sans-serif;">{{ __('home.macedonian') }}</span>
            </div>
        </a>

        <a href="/courses/german" class="block w-full" style="position: relative; max-width: 320px;">
            <img src="{{ asset('images/flag-de.png') }}" alt="German" class="absolute object-contain z-10"
                style="height: 120px; width: 90px; bottom: 100%; left: 10px; transform: translateY(40px);">
            <div class="bg-white rounded-2xl flex items-center justify-center"
                style="height: 110px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid #d1d5db; padding: 20px 24px 20px 24px;">
                <span class="font-bold text-lg text-center" style="font-family: 'Montserrat', sans-serif;">{{ __('home.german') }}</span>
            </div>
        </a>

    </div>

    {{-- Common Recommendation Footer --}}
    <div class="flex flex-col items-center text-center py-10 px-6" style="background: #f8fbff;">
      <p class="text-base md:text-lg text-gray-700 mb-8" style="font-family: 'Montserrat', sans-serif;">
        {!! __('home.recommend_text') !!}
      </p>
    
      <form method="POST" action="/set-personalizacija-session" class="w-full flex justify-center">
        @csrf
        <button type="submit"
          class="flex items-center justify-center transition-all duration-200 w-full max-w-[340px] md:max-w-[160px]"
          style="height: 52px; md:height: 40px; border-radius: 12px; md:border-radius: 10px; background: #194077; color: white; font-family: 'Montserrat', sans-serif; font-size: 16px; md:font-size: 14px; font-weight: 600; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: none;"
          onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)';"
          onmouseout="this.style.background='#194077';">
          {{ __('home.start_now') }}
        </button>
      </form>
    </div>
	<div class="overflow-hidden w-full py-10 mt-10">
    <div class="animate-scroll" style="display: flex; width: max-content; align-items: center;">
      
      <!-- Set 1 -->
      <img src="{{ asset('images/test4.png') }}" alt="telc" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test1.png') }}" alt="TestDaF" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test2.png') }}" alt="TestAS" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test3.png') }}" alt="onSET" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">

      <!-- Set 2 -->
      <img src="{{ asset('images/test4.png') }}" alt="telc" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test1.png') }}" alt="TestDaF" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test2.png') }}" alt="TestAS" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test3.png') }}" alt="onSET" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">

      <!-- Set 3 -->
      <img src="{{ asset('images/test4.png') }}" alt="telc" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test1.png') }}" alt="TestDaF" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test2.png') }}" alt="TestAS" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test3.png') }}" alt="onSET" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">

      <!-- Set 4 -->
      <img src="{{ asset('images/test4.png') }}" alt="telc" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test1.png') }}" alt="TestDaF" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test2.png') }}" alt="TestAS" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
      <img src="{{ asset('images/test3.png') }}" alt="onSET" style="height: 56px; width: 160px; object-fit: contain; margin-right: 96px;">
  
    </div>
  </div>
  
  <style>
    @keyframes scroll {
      0% { transform: translateX(0); }
      100% { transform: translateX(-25%); }
    }
    .animate-scroll {
      animation: scroll 18s linear infinite;
    }
    .animate-scroll:hover {
      animation-play-state: paused;
    }
  </style>
    <section class="w-full py-16 px-6 md:px-24">
  <h2 class="font-black text-4xl uppercase mb-12 text-center md:text-left" style="font-family: 'Jost', sans-serif;">{{ __('home.choose_exam') }}</h2>

  {{-- DESKTOP CAROUSEL (Visible on MD and up) --}}
  <div class="hidden md:flex relative items-center justify-center">

    <button onclick="scrollExamCarousel(-1)" class="flex-shrink-0 hover:opacity-60 transition-opacity duration-200" style="margin-right: 40px;">
      <svg width="30" height="52" viewBox="0 0 30 52" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M26 4L4 26L26 48" stroke="#000000" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>

    <div id="homeExamCarousel" class="flex overflow-hidden items-stretch" style="scroll-behavior: smooth; gap: 44px; width: calc(3 * 310px + 2 * 44px);">
      @foreach($exams as $exam)
        @php
          $bgColor = $exam->is_featured ? '#194077' : 'white';
          $textColor = $exam->is_featured ? 'text-white' : 'text-black';
          $subtitleColor = $exam->is_featured ? 'opacity-90' : 'text-gray-600 italic';
          $imageUrl = $exam->image && str_starts_with($exam->image, 'http')
            ? $exam->image
            : asset('images/default-exam.jpg');
            
          $levelsDesktop = $exam->levels->pluck('level')->filter()->values();
          if ($levelsDesktop->count() > 1) {
              $f = $levelsDesktop->first();
              $l = $levelsDesktop->last();
              if (preg_match('/^([A-ZА-Шa-zа-ш][1-2])/u', $f, $fm) && preg_match('/([A-ZА-Шa-zа-ш][1-2])$/u', $l, $lm)) {
                  $levelDesktopText = mb_strtoupper($fm[1]) . '-' . mb_strtoupper($lm[1]);
              } else {
                  $levelDesktopText = $f . ' до ' . $l;
              }
          } elseif ($levelsDesktop->count() === 1) {
              $levelDesktopText = $levelsDesktop->first();
          } else {
              $levelDesktopText = $exam->what_for ?: 'Сите нивоа';
          }
        @endphp
        <a href="{{ route('exams.show', $exam) }}" class="flex flex-col rounded-2xl overflow-hidden flex-shrink-0 hover:shadow-xl transition-shadow duration-200" style="width: 310px; min-height: 458px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
          <img src="{{ $imageUrl }}" alt="{{ $exam->title }}" class="w-full object-cover" style="height: 240px;">
          <div class="p-5 flex-1 flex flex-col {{ $textColor }}" style="background: {{ $bgColor }};">
            <p class="font-black text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">{{ $exam->title }}</p>
            <p class="text-sm mb-4 {{ $subtitleColor }}" style="font-family: 'Montserrat', sans-serif;">{{ $exam->subtitle }}</p>
            <div class="flex items-center gap-2 text-sm mb-2" style="font-family: 'Montserrat', sans-serif;">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
              </svg>
              <span>{{ __('exams.levels') }} <strong>{{ $levelDesktopText }}</strong></span>
            </div>
            <div class="flex items-center gap-2 text-sm mb-4" style="font-family: 'Montserrat', sans-serif;">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
              </svg>
              @php
                $soonestDateObj = $exam->examDates->where('exam_date', '>=', now())->sortBy('exam_date')->first();
                if ($soonestDateObj) {
                    $examDateFormatted = \Carbon\Carbon::parse($soonestDateObj->exam_date)->format('d.m.Y');
                } elseif ($exam->first_exam_date && $exam->first_exam_date >= now()) {
                    $examDateFormatted = \Carbon\Carbon::parse($exam->first_exam_date)->format('d.m.Y');
                } else {
                    $examDateFormatted = __('exams.soon');
                }
              @endphp

              @if($exam->is_on_demand)
                <span>{{ __('exams.first_date') }} <strong>{{ __('exams.on_demand') }}</strong></span>
              @else
              <span>{{ __('exams.first_date') }} <strong>{{ $examDateFormatted }}</strong></span>
              @endif
            </div>
            <div class="mt-auto">
              <span class="text-sm underline font-medium" style="font-family: 'Montserrat', sans-serif;">{{ __('exams.read_more') }}</span>
            </div>
          </div>
        </a>
      @endforeach
    </div>

    <button onclick="scrollExamCarousel(1)" class="flex-shrink-0 hover:opacity-60 transition-opacity duration-200" style="margin-left: 40px;">
      <svg width="30" height="52" viewBox="0 0 30 52" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4 4L26 26L4 48" stroke="#000000" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </button>

  </div>

  {{-- MOBILE STACK (Visible only on Mobile - Below MD) --}}
  <div class="md:hidden flex flex-col gap-6">
    @foreach($exams->take(3) as $exam)
      @php
        $isFeatured = $exam->is_featured;
        $bgColor = $isFeatured ? '#194077' : 'white';
        $textColor = $isFeatured ? 'text-white' : 'text-black';
        $subtitleColor = $isFeatured ? 'text-white opacity-80' : 'text-gray-500 font-medium';
        
        // Robust Level Range Logic
        $levels = $exam->levels->pluck('level')->filter()->values();
        if ($levels->count() > 1) {
            $f = $levels->first();
            $l = $levels->last();
            if (preg_match('/^([A-ZА-Шa-zа-ш][1-2])/u', $f, $fm) && preg_match('/([A-ZА-Шa-zа-ш][1-2])$/u', $l, $lm)) {
                $levelText = mb_strtoupper($fm[1]) . '-' . mb_strtoupper($lm[1]);
            } else {
                $levelText = $f . ' до ' . $l;
            }
        } elseif ($levels->count() === 1) {
            $levelText = $levels->first();
        } else {
            $levelText = $exam->what_for ?: 'Сите нивоа';
        }
        
        // Format Dynamic Date
        $soonestMobileDateObj = $exam->examDates->where('exam_date', '>=', now())->sortBy('exam_date')->first();
        if ($soonestMobileDateObj) {
            $examDate = \Carbon\Carbon::parse($soonestMobileDateObj->exam_date)->format('d.m.Y');
        } elseif ($exam->first_exam_date && $exam->first_exam_date >= now()) {
            $examDate = \Carbon\Carbon::parse($exam->first_exam_date)->format('d.m.Y');
        } else {
            $examDate = __('exams.soon');
        }

        if ($exam->is_on_demand) {
            $examDate = __('exams.by_appointment');
        }
@endphp
      <a href="{{ route('exams.show', $exam) }}" class="flex flex-col p-8 rounded-[32px] shadow-sm border border-gray-100 {{ $textColor }}" style="background: {{ $bgColor }};">
        <p class="font-black text-xl mb-1" style="font-family: 'Montserrat', sans-serif;">{{ $exam->title }}</p>
        <p class="text-sm mb-6 {{ $subtitleColor }}" style="font-family: 'Montserrat', sans-serif;">{{ $exam->subtitle }}</p>
        
        <div class="flex flex-col gap-3">
          <!-- Info Row: Levels or Tasks -->
          <div class="flex items-center gap-3">
            @if($exam->title === 'OnSET')
              <span class="text-xl">?</span>
              <span class="text-sm font-bold">20 задачи</span>
            @else
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
              </svg>
              <span class="text-sm">{{ __('exams.levels') }} <strong>{{ $levelText }}</strong></span>
            @endif
          </div>

          <!-- Info Row: Date -->
          <div class="flex items-center gap-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <span class="text-sm">{{ __('exams.first_exam_date') }}<br><strong>{{ $examDate }}</strong></span>
          </div>
        </div>
      </a>
    @endforeach

    <!-- See all button -->
    <a href="{{ route('exams.index') }}" class="mt-4 flex items-center justify-center py-5 rounded-[20px] font-bold text-[#194077] transition-all hover:bg-[#d6effa]" style="background: #e5f7ff; font-family: 'Montserrat', sans-serif;">
      {{ __('home.see_all') }}
    </a>
  </div>

</section>

<script>
  function scrollExamCarousel(direction) {
    const carousel = document.getElementById('homeExamCarousel');
    if (carousel) {
      carousel.scrollBy({ left: direction * 354, behavior: 'smooth' });
    }
  }
</script>



<div class="hidden md:flex items-center justify-between px-8 mx-auto" style="width: 900px; height: 80px; border-radius: 20px; background: white; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); gap: 116px; margin-top: 32px; margin-bottom: 32px;">
  <div class="text-left">
    <p class="font-black text-base" style="font-family: 'Montserrat', sans-serif;">{{ __('home.exam_promo_title') }}</p>
    <p class="text-gray-600 text-sm mt-1" style="font-family: 'Montserrat', sans-serif;">{{ __('home.exam_promo_subtitle') }}</p>
  </div>
  <a href="{{route('exams.index')}}" class="flex-shrink-0 flex items-center justify-center text-white font-medium transition-all duration-200"
  style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #194077, #194077); font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 2px solid transparent rounded;"
  onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'; this.style.borderImage='linear-gradient(90deg, #041020, #194077) 1';"
  onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'; this.style.borderImage='none'; this.style.borderColor='transparent';">
  {{ __('home.read_more') }}
</a>
</div>



<section class="w-full py-16 px-16" style="background: white;">
  <h2 class="text-center font-black text-4xl uppercase mb-12" style="font-family: 'Jost', sans-serif;">{{ __('home.other_services') }}</h2>

  <div class="flex flex-wrap justify-center gap-8 max-w-6xl mx-auto">

    <!-- Card 1 -->
    <div onclick="if(window.innerWidth < 768) document.getElementById('modal-aktivno-pasivno').classList.remove('hidden');"
      class="w-full md:w-72 md:min-h-[320px] bg-white flex flex-col gap-3 p-6 md:p-5 rounded-3xl md:rounded-xl cursor-pointer md:cursor-default"
      style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
<p class="font-black text-lg md:text-base" style="font-family: 'Montserrat', sans-serif;">{{ __('home.svc1_title') }}</p>
      <p class="text-gray-500 text-sm leading-relaxed md:leading-normal line-clamp-3" style="font-family: 'Montserrat', sans-serif;">{{ __('home.svc1_desc') }}</p>
      <a href="#" onclick="document.getElementById('modal-aktivno-pasivno').classList.remove('hidden'); return false;"
        class="hidden md:flex items-center justify-center text-white text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #194077, #194077); font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 2px solid transparent rounded;"
        onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'; this.style.borderImage='linear-gradient(90deg, #041020, #194077) 1';"
        onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'; this.style.borderImage='none'; this.style.borderColor='transparent';">
        {{ __('home.read_more') }}
      </a>
    </div>

    @include('parts.modal-prijava', [
    'id' => 'aktivno-pasivno',
    'title' => __('home.svc1_modal_title'),
    'description' => __('home.svc1_modal_desc'),
    'description_mobile' => __('home.svc1_modal_mobile')
    ])

    <!-- Card 2 -->
    <div onclick="if(window.innerWidth < 768) document.getElementById('modal-cefr').classList.remove('hidden');"
      class="w-full md:w-72 md:min-h-[320px] bg-white flex flex-col gap-3 p-6 md:p-5 rounded-3xl md:rounded-xl cursor-pointer md:cursor-default"
      style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
<p class="font-black text-lg md:text-base" style="font-family: 'Montserrat', sans-serif;">{{ __('home.svc2_title') }}</p>
      <p class="text-gray-500 text-sm leading-relaxed md:leading-normal line-clamp-3" style="font-family: 'Montserrat', sans-serif;">{{ __('home.svc2_desc') }}</p>
      <a href="#" onclick="document.getElementById('modal-cefr').classList.remove('hidden'); return false;"
      class="hidden md:flex items-center justify-center text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #E5F7FF, #E5F7FF); color: #194077; font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
        onmouseover="this.style.background='linear-gradient(90deg, #E5F7FF, #89D0F2)';"
        onmouseout="this.style.background='linear-gradient(90deg, #E5F7FF, #E5F7FF)';">
        {{ __('home.read_more') }}
      </a>
    </div>
    @include('parts.modal-prijava', [
      'id' => 'cefr',
      'title' => __('home.svc2_modal_title'),
      'description' => __('home.svc2_modal_desc'),
      'description_mobile' => __('home.svc2_modal_mobile')
  ])
    <!-- Card 3 -->
    <div onclick="if(window.innerWidth < 768) document.getElementById('modal-institucii').classList.remove('hidden');"
      class="w-full md:w-72 md:min-h-[320px] bg-white flex flex-col gap-3 p-6 md:p-5 rounded-3xl md:rounded-xl cursor-pointer md:cursor-default"
      style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
<p class="font-black text-lg md:text-base" style="font-family: 'Montserrat', sans-serif;">{{ __('home.svc3_title') }}</p>
      <p class="text-gray-500 text-sm leading-relaxed md:leading-normal line-clamp-3" style="font-family: 'Montserrat', sans-serif;">{{ __('home.svc3_desc') }}</p>
      <a href="#" onclick="document.getElementById('modal-institucii').classList.remove('hidden'); return false;"
      class="hidden md:flex items-center justify-center text-white text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #194077, #194077); font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 2px solid transparent rounded;"
        onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'; this.style.borderImage='linear-gradient(90deg, #041020, #194077) 1';"
        onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'; this.style.borderImage='none'; this.style.borderColor='transparent';">
        {{ __('home.read_more') }}
      </a>
    </div>

    @include('parts.modal-prijava', [
    'id' => 'institucii',
    'title' => __('home.svc3_modal_title'),
    'description' => __('home.svc3_modal_desc'),
    'description_mobile' => __('home.svc3_modal_mobile')
    ])

    <!-- Card 4 -->
    <div onclick="if(window.innerWidth < 768) document.getElementById('modal-probni-testovi').classList.remove('hidden');"
      class="w-full md:w-72 md:min-h-[320px] bg-white flex flex-col gap-3 p-6 md:p-5 rounded-3xl md:rounded-xl cursor-pointer md:cursor-default"
      style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
<p class="font-black text-lg md:text-base" style="font-family: 'Montserrat', sans-serif;">{{ __('home.svc4_title') }}</p>
      <p class="text-gray-500 text-sm leading-relaxed md:leading-normal line-clamp-3" style="font-family: 'Montserrat', sans-serif;">{{ __('home.svc4_desc') }}</p>
      <a href="#" onclick="document.getElementById('modal-probni-testovi').classList.remove('hidden'); return false;"
      class="hidden md:flex items-center justify-center text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #E5F7FF, #E5F7FF); color: #194077; font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
        onmouseover="this.style.background='linear-gradient(90deg, #E5F7FF, #89D0F2)';"
        onmouseout="this.style.background='linear-gradient(90deg, #E5F7FF, #E5F7FF)';">
        {{ __('home.read_more') }}
      </a>
    </div>
    @include('parts.modal-prijava', [
    'id' => 'probni-testovi',
    'title' => __('home.svc4_modal_title'),
    'description' => __('home.svc4_modal_desc'),
    'description_mobile' => __('home.svc4_modal_mobile')
    ])

    <!-- Card 5 -->
    <div onclick="if(window.innerWidth < 768) document.getElementById('modal-iznajmuvanje').classList.remove('hidden');"
      class="w-full md:w-72 md:min-h-[320px] bg-white flex flex-col gap-3 p-6 md:p-5 rounded-3xl md:rounded-xl cursor-pointer md:cursor-default"
      style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
<p class="font-black text-lg md:text-base" style="font-family: 'Montserrat', sans-serif;">{{ __('home.svc5_title') }}</p>
      <p class="text-gray-500 text-sm leading-relaxed md:leading-normal line-clamp-3" style="font-family: 'Montserrat', sans-serif;">{{ __('home.svc5_desc') }}</p>
      <a href="#" onclick="document.getElementById('modal-iznajmuvanje').classList.remove('hidden'); return false;"
      class="hidden md:flex items-center justify-center text-white text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #194077, #194077); font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 2px solid transparent rounded;"
        onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'; this.style.borderImage='linear-gradient(90deg, #041020, #194077) 1';"
        onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'; this.style.borderImage='none'; this.style.borderColor='transparent';">
        {{ __('home.read_more') }}
      </a>
    </div>

    @include('parts.modal-prijava', [
    'id' => 'iznajmuvanje',
    'title' => __('home.svc5_modal_title'),
    'description' => __('home.svc5_modal_desc'),
    'description_mobile' => __('home.svc5_modal_mobile')
    ])

  

 

  </div>

  <script>
    function closeModal(id) {
      document.getElementById(id).classList.add('hidden');
    }
    // Close on backdrop click
    document.querySelectorAll('[id^="modal-"]').forEach(modal => {
      modal.addEventListener('click', function(e) {
        if (e.target === this) closeModal(this.id);
      });
    });
  </script>
</section>


<section class="w-full py-16 px-6 md:px-24">

  <!-- Title -->
  <h2 class="text-center font-black text-3xl md:text-5xl uppercase leading-tight mb-8 md:mb-12" style="font-family: 'Jost', sans-serif;">
    {!! __('home.our_work_title') !!}
  </h2>



  <!-- Image + Points - Desktop: side by side, Mobile: stacked -->
  <div class="hidden md:flex justify-center gap-12">

    <!-- Left: Image -->
    <div class="flex-shrink-0">
      <img src="{{ asset('images/homepage-ppl.jpg') }}" alt="Class" class="rounded-2xl object-cover" style="width: 519px; height: 300px;">
    </div>

    <!-- Right: Points -->
    <div class="flex flex-col justify-center gap-8" style="width: 627px;">

      <!-- Point 1 -->
      <div class="flex items-start gap-5">
        <svg class="flex-shrink-0" width="87" height="49" viewBox="0 0 87 49" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 24.5H80M80 24.5L62 8M80 24.5L62 41" stroke="#194077" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
          <strong>{{ __('home.point1_title') }}</strong> {{ __('home.point1_desc') }}
        </p>
      </div>

      <!-- Point 2 -->
      <div class="flex items-start gap-5">
        <svg class="flex-shrink-0" width="87" height="49" viewBox="0 0 87 49" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 24.5H80M80 24.5L62 8M80 24.5L62 41" stroke="#84CDF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
          <strong>{{ __('home.point2_title') }}</strong> {{ __('home.point2_desc') }}
        </p>
      </div>

      <!-- Point 3 -->
      <div class="flex items-start gap-5">
        <svg class="flex-shrink-0" width="87" height="49" viewBox="0 0 87 49" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 24.5H80M80 24.5L62 8M80 24.5L62 41" stroke="#194077" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
          <strong>{{ __('home.point3_title') }}</strong> {{ __('home.point3_desc') }}
        </p>
      </div>

    </div>
  </div>

  <!-- Mobile: Image + Points stacked -->
  <div class="flex flex-col md:hidden">
    
    <!-- Image - full width -->
    <div class="mb-8">
      <img src="{{ asset('images/homepage-ppl.jpg') }}" alt="Class" class="rounded-2xl object-cover w-full" style="height: 220px;">
    </div>

    <!-- Points -->
    <div class="flex flex-col gap-6">

      <!-- Point 1 -->
      <div class="flex items-start gap-4">
        <svg class="flex-shrink-0 mt-1" width="50" height="28" viewBox="0 0 50 28" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 14H44M44 14L34 4M44 14L34 24" stroke="#194077" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p style="font-family: 'Montserrat', sans-serif; font-size: 13px; line-height: 1.6;">
          <strong>{{ __('home.point1_title') }}</strong> {{ __('home.point1_desc') }}
        </p>
      </div>

      <!-- Point 2 -->
      <div class="flex items-start gap-4">
        <svg class="flex-shrink-0 mt-1" width="50" height="28" viewBox="0 0 50 28" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 14H44M44 14L34 4M44 14L34 24" stroke="#84CDF1" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p style="font-family: 'Montserrat', sans-serif; font-size: 13px; line-height: 1.6;">
          <strong>{{ __('home.point2_title') }}</strong> {{ __('home.point2_desc') }}
        </p>
      </div>

      <!-- Point 3 -->
      <div class="flex items-start gap-4">
        <svg class="flex-shrink-0 mt-1" width="50" height="28" viewBox="0 0 50 28" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 14H44M44 14L34 4M44 14L34 24" stroke="#194077" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p style="font-family: 'Montserrat', sans-serif; font-size: 13px; line-height: 1.6;">
          <strong>{{ __('home.point3_title') }}</strong> {{ __('home.point3_desc') }}
        </p>
      </div>

    </div>
  </div>

</section>
  <!-- DESKTOP Testimonials (md and up) -->
  <section class="w-full py-16 hidden md:flex items-center gap-16 px-24" style="background: #194077; min-height: 625px;">
    <!-- Left: Title -->
    <div class="flex-shrink-0" style="width: 320px;">
      <h2 class="font-black text-5xl uppercase leading-tight text-white mb-6" style="font-family: 'Jost', sans-serif;">
        {!! __('home.testimonials_title') !!}
      </h2>
      <p class="text-white text-sm mb-4" style="font-family: 'Montserrat', sans-serif; opacity: 0.9;">
        {{ __('home.testimonials_subtitle') }}
      </p>
      <a href="#" onclick="document.getElementById('modal-testimonial').classList.remove('hidden'); return false;" class="text-white font-bold underline text-sm" style="font-family: 'Montserrat', sans-serif;">{{ __('home.testimonials_link') }}</a>
    </div>
  
    <!-- Right: Carousel -->
    <div class="flex-1 relative" style="overflow: hidden;">
      <div id="testimonialCarousel" class="flex gap-6" style="scroll-behavior: smooth; overflow-x: hidden; padding-top: 60px; width: calc(2.5 * 340px + 2 * 24px);">
  
        @foreach($testimonials as $testimonial)
        <!-- Card -->
        <div class="bg-white rounded-2xl p-8 flex-shrink-0 flex flex-col gap-4" style="width: 340px; min-height: 280px; justify-content: center;">
          <p class="font-black text-lg text-center" style="font-family: 'Montserrat', sans-serif;">{{ $testimonial->name }}</p>
          <p class="text-gray-500 text-sm text-center italic" style="font-family: 'Montserrat', sans-serif;">{{ $testimonial->role }}</p>
          <p class="text-gray-700 text-base text-center flex-1 flex items-center justify-center mt-2" style="font-family: 'Montserrat', sans-serif;">„{{ $testimonial->message }}“</p>
          <div class="flex justify-center gap-1 text-yellow-400 text-xl">
            @for ($i = 0; $i < $testimonial->rating; $i++)
              ★ 
            @endfor
          </div>
        </div>
        @endforeach
  
      </div>
  
            <!-- Scroll bar -->
      <div class="mt-6 flex justify-center">
        <div class="rounded-full" style="height: 7px; background: rgba(255,255,255,0.3); width: 40%;">
          <div id="scrollIndicator" class="rounded-full" style="height: 7px; background: white; width: 30%; transition: margin-left 0.2s;"></div>
        </div>
      </div>
    </div>
  </section>

  <!-- MOBILE Testimonials (below md) -->
  <section class="w-full md:hidden flex flex-col items-center text-center px-6 py-14" style="background: #194077;">
    
    <!-- Title -->
    <h2 class="font-black text-3xl uppercase leading-tight text-white mb-4" style="font-family: 'Jost', sans-serif;">
      {!! __('home.testimonials_title_mobile') !!}
    </h2>
    <p class="text-white text-sm mb-10" style="font-family: 'Montserrat', sans-serif; opacity: 0.85; max-width: 280px; line-height: 1.6;">
      {{ __('home.testimonials_subtitle_mob') }}
    </p>

    <!-- Card Carousel -->
    <div class="relative w-full flex items-center justify-center px-2">

      <!-- Prev Arrow -->
      <button onclick="scrollMobileTestimonial(-1)" class="absolute z-10 flex items-center justify-center bg-white rounded-full shadow-md" style="left: 0px; width: 36px; height: 36px; border: none; cursor: pointer;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#194077" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
      </button>

      <!-- Next Arrow -->
      <button onclick="scrollMobileTestimonial(1)" class="absolute z-10 flex items-center justify-center bg-white rounded-full shadow-md" style="right: 0px; width: 36px; height: 36px; border: none; cursor: pointer;">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#194077" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
      </button>

      <!-- Cards Container -->
      <div id="mobileTestimonialCarousel" class="overflow-hidden w-full max-w-[270px]">
        <div id="mobileTestimonialTrack" class="flex transition-transform duration-300 ease-in-out">
          @foreach($testimonials as $index => $testimonial)
          <div class="w-full flex-shrink-0 flex justify-center px-2">
            <div class="bg-white p-6 flex flex-col items-center gap-2 w-full" style="min-height: 220px; border-radius: 20px;">
              <p class="font-black text-[16px] text-center text-[#194077] mt-2" style="font-family: 'Montserrat', sans-serif;">{{ $testimonial->name }}</p>
              <p class="text-[12px] text-center italic text-[#194077] opacity-80" style="font-family: 'Montserrat', sans-serif;">{{ $testimonial->role }}</p>
              <p class="text-[#194077] text-[13px] text-center mt-2 mb-2 flex-1 flex items-center justify-center" style="font-family: 'Montserrat', sans-serif; line-height: 1.5;">
                „{{ $testimonial->message }}“
              </p>
              <div class="flex justify-center gap-1 text-[#FBBF24] text-xl">
                @for ($i = 0; $i < $testimonial->rating; $i++)
                  ★
                @endfor
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>

    <!-- "Напиши тестимониал" Button -->
    <button type="button" onclick="document.getElementById('modal-testimonial').classList.remove('hidden');"
      class="mt-12 flex items-center justify-center w-full font-medium transition-all duration-200"
      style="max-width: 300px; height: 50px; border-radius: 25px; background: #E0F2FE; color: #194077; font-family: 'Montserrat', sans-serif; font-size: 15px; border: none; cursor: pointer;">
      {{ __('home.write_testimonial_btn') }}
    </button>
  </section>

  <!-- Global Modal Include -->
  @include('parts.modal-testimonial')
  
  <script>
    // Desktop carousel
    const carousel = document.getElementById('testimonialCarousel');
    if (carousel) {
      let isDown = false;
      let startX;
      let scrollLeft;
    
      carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
        carousel.style.cursor = 'grabbing';
      });
    
      carousel.addEventListener('mouseleave', () => { isDown = false; carousel.style.cursor = 'grab'; });
      carousel.addEventListener('mouseup', () => { isDown = false; carousel.style.cursor = 'grab'; });
      carousel.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 2;
        carousel.scrollLeft = scrollLeft - walk;
      });
    
      carousel.addEventListener('touchstart', (e) => {
        startX = e.touches[0].pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
      });
      carousel.addEventListener('touchmove', (e) => {
        const x = e.touches[0].pageX - carousel.offsetLeft;
        carousel.scrollLeft = scrollLeft - (x - startX);
      });
    
      carousel.addEventListener('scroll', () => {
        const indicator = document.getElementById('scrollIndicator');
        if (indicator) {
            const scrollPercent = carousel.scrollLeft / (carousel.scrollWidth - carousel.clientWidth);
            indicator.style.marginLeft = (scrollPercent * 70) + '%';
        }
      });
    
      carousel.style.cursor = 'grab';
      carousel.style.overflowX = 'scroll';
      carousel.style.scrollbarWidth = 'none';
    }

    // Mobile testimonial carousel
    let mobileTestimonialIndex = 0;
    const mobileTestimonialTrack = document.getElementById('mobileTestimonialTrack');
    const mobileTestimonialTotal = mobileTestimonialTrack ? mobileTestimonialTrack.children.length : 0;

    function scrollMobileTestimonial(direction) {
      if (!mobileTestimonialTrack || mobileTestimonialTotal === 0) return;
      mobileTestimonialIndex += direction;
      
      if (mobileTestimonialIndex < 0) mobileTestimonialIndex = mobileTestimonialTotal - 1;
      if (mobileTestimonialIndex >= mobileTestimonialTotal) mobileTestimonialIndex = 0;
      
      mobileTestimonialTrack.style.transform = `translateX(-${mobileTestimonialIndex * 100}%)`;
    }

    // Touch swipe for mobile testimonials
    if (mobileTestimonialTrack) {
      let mtStartX = 0;
      mobileTestimonialTrack.addEventListener('touchstart', (e) => {
        mtStartX = e.touches[0].clientX;
      });
      mobileTestimonialTrack.addEventListener('touchend', (e) => {
        const diff = mtStartX - e.changedTouches[0].clientX;
        if (Math.abs(diff) > 50) {
          scrollMobileTestimonial(diff > 0 ? 1 : -1);
        }
      });
    }
  </script>


   @include('parts.faq')

   <section class="w-full hidden md:block py-24 relative overflow-hidden text-center" style="background: #f0f9ff; min-height: 650px;">

    <!-- LEFT SIDE -->
    <!-- Magnifier: top-left, rotated clockwise ~10deg -->
    <img src="{{ asset('images/magnifier.png') }}" alt="" class="absolute" style="top: 0px; left: 60px; width: 280px; transform: rotate(10deg);">
  
    <!-- Pink sticky: middle-left, slight counter-clockwise tilt -->
    <img src="{{ asset('images/sticky-pink.png') }}" alt="" class="absolute" style="top: 280px; left: 130px; width: 180px; transform: rotate(-8deg);">
  
    <!-- Yellow sticky: bottom-left -->
    <img src="{{ asset('images/sticky-yellow.png') }}" alt="" class="absolute" style="bottom: 20px; left: 60px; width: 150px; transform: rotate(-3deg);">
  
    <!-- Blue sticky: bottom-left, next to yellow, slight clockwise -->
    <img src="{{ asset('images/sticky-blue.png') }}" alt="" class="absolute" style="bottom: 10px; left: 200px; width: 140px; transform: rotate(5deg);">
  
    <!-- RIGHT SIDE -->
    <!-- Paperclips: top-right, no rotation -->
    <img src="{{ asset('images/shpenagli 1.png') }}" alt="" class="absolute" style="top: 0px; right: 40px; width: 320px;">
  
    <!-- Notebook: bottom-right, rotated clockwise ~12deg -->
    <img src="{{ asset('images/tetratka 1.png') }}" alt="" class="absolute" style="bottom: -20px; right: 30px; width: 380px; transform: rotate(12deg);">
  
    <!-- Pen+pencil: ON TOP of notebook, z-index higher, rotated clockwise ~12deg -->
    <img src="{{ asset('images/moliv i penkalo 1.png') }}" alt="" class="absolute" style="bottom: 80px; right: 40px; width: 200px; transform: rotate(12deg); z-index: 5;">
  
    <!-- Center content -->
    <div class="relative flex flex-col items-center" style="z-index: 10;">
  
      <span class="px-6 py-2 rounded-full text-gray-600 text-sm mb-8" style="background: rgba(0,0,0,0.07); font-family: 'Montserrat', sans-serif;">
        {{ __('home.cta_badge') }}
      </span>

      <h2 class="font-black text-6xl uppercase leading-tight mb-6" style="font-family: 'Jost', sans-serif;">
        {!! __('home.cta_title') !!}
      </h2>

      <p class="text-gray-600 text-lg mb-10 max-w-xl" style="font-family: 'Montserrat', sans-serif;">
        {{ __('home.cta_subtitle') }}
      </p>

      <a href="/courses" class="flex items-center justify-center px-10 py-4 text-white font-medium text-lg transition-all duration-200"
        style="border-radius: 30px; background: linear-gradient(to right, #194077, #194077); font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.15);"
        onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)';"
        onmouseout="this.style.background='linear-gradient(to right, #194077, #194077)';">
        {{ __('home.cta_btn') }}
      </a>
  
    </div>
  
  </section>
@endsection