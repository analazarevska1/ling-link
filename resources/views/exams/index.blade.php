@extends('parts.main')

@section('content')

<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

   <div class="relative w-full h-32 overflow-hidden px-16 md:px-20 hidden md:block">
        <img src="{{ asset('images/exams-header.jpg') }}" alt="Курсеви"
            class="w-full h-full object-cover brightness-75 rounded-3xl">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-3xl md:text-5xl font-extrabold tracking-widest uppercase">{{ __('exams.page_title') }}</h1>
        </div>
    </div>
<h1 class="hidden md:block text-center mx-auto mt-8 w-[196px] h-[40px] font-semibold text-[20px] leading-[40px] opacity-100" style="font-family: 'Jost', sans-serif;">{{ __('exams.exam_list') }}</h1>

<section class="w-full py-8 md:px-24">

  <div class="flex justify-center items-center gap-4 md:gap-8 mb-8 md:mb-16 px-4 md:px-0">
    {{-- Desktop --}}
    <button onclick="switchTab('administrirani')" id="tab-administrirani"
      class="exam-tab-btn hidden md:flex rounded-2xl border-2 font-medium transition-all duration-200 items-center justify-center text-center"
      style="font-family: 'Montserrat', sans-serif; font-size: 0.78rem; width: 200px; height: 60px; padding: 10px 16px; box-sizing: border-box; background-color: #194077; color: #ffffff; border-color: #194077;">
      {{ __('exams.tab_administered') }}
    </button>
    <button onclick="switchTab('podgotveni')" id="tab-podgotveni"
      class="exam-tab-btn hidden md:flex rounded-2xl border-2 font-medium transition-all duration-200 items-center justify-center text-center"
      style="font-family: 'Montserrat', sans-serif; font-size: 0.78rem; width: 200px; height: 60px; padding: 10px 16px; box-sizing: border-box; background-color: #ffffff; color: #374151; border-color: #d1d5db;">
      {{ __('exams.tab_preparation') }}
    </button>

    {{-- Mobile --}}
    <button onclick="switchTab('administrirani')" id="tab-administrirani-mob"
      class="exam-tab-btn flex md:hidden flex-shrink-0 rounded-2xl border-2 font-medium transition-all duration-200 items-center justify-center text-center"
      style="font-family: 'Montserrat', sans-serif; font-size: 0.72rem; min-width: 130px; height: 40px; padding: 6px 12px; box-sizing: border-box; background-color: #194077; color: #ffffff; border-color: #194077;">
      {{ __('exams.tab_administered') }}
    </button>
    <button onclick="switchTab('podgotveni')" id="tab-podgotveni-mob"
      class="exam-tab-btn flex md:hidden flex-shrink-0 rounded-2xl border-2 font-medium transition-all duration-200 items-center justify-center text-center"
      style="font-family: 'Montserrat', sans-serif; font-size: 0.72rem; min-width: 130px; height: 40px; padding: 6px 12px; box-sizing: border-box; background-color: #ffffff; color: #374151; border-color: #d1d5db;">
      {{ __('exams.tab_preparation') }}
    </button>
  </div>

  <div id="content-administrirani">
    @if($exams->isNotEmpty())
        <!-- DESKTOP VIEW -->
        <div class="relative hidden md:flex items-center justify-center">
          <button onclick="scrollCarousel('administrirani', -1)" class="flex-shrink-0 hover:opacity-60 transition-opacity duration-200" style="margin-right: 40px;">
            <svg width="30" height="52" viewBox="0 0 30 52" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M26 4L4 26L26 48" stroke="#000000" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>

          <div id="carousel-administrirani" class="flex overflow-hidden items-stretch" style="scroll-behavior: smooth; gap: 44px; width: calc(3 * 310px + 2 * 44px);">
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
              <img src="{{ $imageUrl }}" alt="{{ $exam->getLocalizedTitle() }}" class="w-full object-cover" style="height: 240px;">
              <div class="p-5 flex-1 flex flex-col {{ $textColor }}" style="background: {{ $bgColor }};">
                <p class="font-black text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">{{ $exam->getLocalizedTitle() }}</p>
                <p class="text-sm mb-4 {{ $subtitleColor }}" style="font-family: 'Montserrat', sans-serif;">{{ $exam->getLocalizedSubtitle() }}</p>
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
                  @if($exam->is_on_demand)
                    <span>{{ __('exams.first_date') }} <strong>{{ __('exams.on_demand') }}</strong></span>
                  @else
                    <span>{{ __('exams.first_date') }} <strong>{{ $exam->first_exam_date ? \Carbon\Carbon::parse($exam->first_exam_date)->format('d.m.Y') : __('exams.soon') }}</strong></span>
                  @endif
                </div>
                <div class="mt-auto">
                  <span class="text-sm underline font-medium" style="font-family: 'Montserrat', sans-serif;">{{ __('exams.read_more') }}</span>
                </div>
              </div>
            </a>
            @endforeach
          </div>

          <button onclick="scrollCarousel('administrirani', 1)" class="flex-shrink-0 hover:opacity-60 transition-opacity duration-200" style="margin-left: 40px;">
            <svg width="30" height="52" viewBox="0 0 30 52" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 4L26 26L4 48" stroke="#000000" stroke-width="7" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
        </div>

        <!-- MOBILE VIEW -->
        <div class="flex md:hidden flex-col gap-4 items-stretch justify-center w-full px-6">
            <p class="text-gray-500 text-[13px] mb-2 text-left w-full pl-2" style="font-family: 'Montserrat', sans-serif;">{{ __('exams.all_exams') }}</p>
            @foreach($exams as $exam)
            @php
              $bgColor = $exam->is_featured ? '#194077' : 'white';
              $textColor = $exam->is_featured ? 'text-white' : 'text-[#111827]';
              $subtitleColor = $exam->is_featured ? 'opacity-90' : 'text-gray-600';
              $borderStyle = $exam->is_featured ? 'none' : '1px solid #e5e7eb';
              
              $levelsMobile = $exam->levels->pluck('level')->filter()->values();
              if ($levelsMobile->count() > 1) {
                  $f = $levelsMobile->first();
                  $l = $levelsMobile->last();
                  if (preg_match('/^([A-ZА-Шa-zа-ш][1-2])/u', $f, $fm) && preg_match('/([A-ZА-Шa-zа-ш][1-2])$/u', $l, $lm)) {
                      $levelMobileText = mb_strtoupper($fm[1]) . '-' . mb_strtoupper($lm[1]);
                  } else {
                      $levelMobileText = $f . ' до ' . $l;
                  }
              } elseif ($levelsMobile->count() === 1) {
                  $levelMobileText = $levelsMobile->first();
              } else {
                  $levelMobileText = $exam->what_for ?: 'Сите нивоа';
              }
            @endphp
            <a href="{{ route('exams.show', $exam) }}" class="flex flex-col rounded-[20px] overflow-hidden flex-shrink-0 hover:shadow-md transition-shadow duration-200 w-full min-h-[160px]" style="box-shadow: 0px 4px 15px rgba(0,0,0,0.03); border: {{ $borderStyle }}; background: {{ $bgColor }};">
              <div class="p-6 flex-1 flex flex-col {{ $textColor }}">
                <p class="font-black text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">{{ $exam->getLocalizedTitle() }}</p>
                <p class="text-[13px] mb-6 {{ $subtitleColor }}" style="font-family: 'Montserrat', sans-serif;">{{ $exam->getLocalizedSubtitle() }}</p>
                
                <div class="flex items-center gap-3 text-[13px] font-semibold mb-3 {{ $textColor == 'text-white' ? 'text-white' : 'text-[#111827]' }}" style="font-family: 'Montserrat', sans-serif;">
                  <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/>
                  </svg>
                  <span class="opacity-80 font-normal">{{ __('exams.levels') }} <strong class="ml-1 opacity-100 font-bold {{ $textColor == 'text-white' ? 'text-white' : 'text-black' }}">{{ $levelMobileText }}</strong></span>
                </div>
                
                <div class="flex items-start gap-3 text-[13px] font-semibold mb-2 {{ $textColor == 'text-white' ? 'text-white' : 'text-[#111827]' }}" style="font-family: 'Montserrat', sans-serif;">
                  <svg class="w-5 h-5 flex-shrink-0 mt-[2px]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                  </svg>
                  <span class="opacity-80 font-normal">{{ __('exams.first_exam_date') }}<br><strong class="opacity-100 font-bold {{ $textColor == 'text-white' ? 'text-white' : 'text-black' }}">{{ $exam->first_exam_date ? \Carbon\Carbon::parse($exam->first_exam_date)->format('d.m.Y') : ($exam->is_on_demand ? __('exams.on_demand_short') : __('exams.by_appointment')) }}</strong></span>
                </div>
              </div>
            </a>
            @endforeach
        </div>
    @else
        <div class="flex flex-col items-center justify-center py-16 text-center">
            <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <p class="text-lg text-gray-500 font-medium" style="font-family: 'Montserrat', sans-serif;">
                {{ __('exams.no_exams') }}
            </p>
        </div>
    @endif
  </div>

  <div id="content-podgotveni" class="hidden w-full pb-12">
    <p class="md:hidden text-gray-500 text-[12px] mb-4 text-left px-6" style="font-family: 'Montserrat', sans-serif;">&laquo; {{ __('exams.prep_breadcrumb') }}</p>
    
    @if($groupedExamPreps->isNotEmpty())
        <div class="max-w-5xl mx-auto space-y-4 md:space-y-6 px-4 md:px-0">

            @php
                $categoryTranslations = [
                    'Англиски јазик'    => 'English language',
                    'Германски јазик'   => 'German language',
                    'Македонски јазик'  => 'Macedonian language',
                    'Француски јазик'   => 'French language',
                    'Италијански јазик' => 'Italian language',
                    'Државна матура'    => 'State graduation exam',
                ];
            @endphp
            
            @foreach($groupedExamPreps as $category => $groups)
            @php
                $categoryLabel = app()->getLocale() === 'en'
                    ? ($categoryTranslations[$category] ?? $category)
                    : $category;
            @endphp
            <div class="bg-white rounded-2xl md:rounded-[20px] overflow-hidden" style="box-shadow: 0px 2px 16px rgba(0, 0, 0, 0.06);">
                
                {{-- Category header --}}
                <div class="px-6 md:px-10 pt-6 md:pt-8 pb-3 md:pb-4">
                    <p class="text-gray-400 text-[11px] md:text-[12px] font-semibold uppercase tracking-widest" style="font-family: 'Montserrat', sans-serif;">
                        {{ $categoryLabel }}
                    </p>
                </div>

                {{-- Accordion rows --}}
                <div class="px-4 md:px-6 pb-4 md:pb-6">
                    @foreach($groups as $examGroup => $preps)
                    <div x-data="{ expanded: false }" class="rounded-xl md:rounded-2xl mb-2 last:mb-0 overflow-hidden border border-gray-100">
                        
                        {{-- Accordion trigger --}}
                        <button 
                            @click="expanded = !expanded" 
                            class="w-full flex justify-between items-center px-5 md:px-6 py-4 md:py-5 text-left transition-colors duration-200 focus:outline-none"
                            :class="expanded ? 'bg-[#194077]' : 'bg-white hover:bg-gray-50'">
                            
                            <span class="font-bold text-[14px] md:text-[15px] transition-colors duration-200"
                                  :class="expanded ? 'text-white' : 'text-[#111827]'"
                                  style="font-family: 'Montserrat', sans-serif;">
                                {{ $examGroup }}
                            </span>
                            
                            <svg :class="[expanded ? 'rotate-180 text-white' : 'text-gray-400']" 
                                 class="w-4 h-4 flex-shrink-0 ml-4 transition-all duration-300" 
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        {{-- Expanded content --}}
                        <div x-show="expanded" x-collapse x-cloak class="bg-white border-t border-gray-100">
                            @foreach($preps as $index => $prep)
                            <div class="px-5 md:px-6 py-4 md:py-5 {{ !$loop->last ? 'border-b border-gray-50' : '' }}">
                                <h3 class="font-semibold text-[#111827] text-[13px] md:text-[14px] mb-1 leading-snug" style="font-family: 'Montserrat', sans-serif;">
                                    {{ $prep->getLocalizedName() }}
                                </h3>
                                @if($prep->getLocalizedDescription())
                                    <p class="text-[12px] md:text-[13px] text-gray-500 leading-relaxed" style="font-family: 'Montserrat', sans-serif;">
                                        {{ $prep->getLocalizedDescription() }}
                                    </p>
                                @endif
                            </div>
                            @endforeach
                        </div>

                    </div>
                    @endforeach
                </div>

            </div>
            @endforeach

        </div>
    @else
        <div class="flex flex-col items-center justify-center py-16 text-center">
            <p class="text-lg text-gray-400 font-medium" style="font-family: 'Montserrat', sans-serif;">
                {{ __('exams.no_preps') }}
            </p>
        </div>
    @endif
</div>
</section>

<section class="w-full py-16" style="background: white;">
    <!-- DESKTOP TITLE -->
    <h2 class="hidden md:block text-center font-black text-4xl uppercase mb-12" style="font-family: 'Jost', sans-serif;">
      {!! __('exams.info_title') !!}
    </h2>
    <!-- MOBILE TITLE -->
    <h2 class="md:hidden text-left font-black text-[25px] uppercase mb-8 leading-tight px-6" style="font-family: 'Jost', sans-serif; color: #111827;">
      {!! __('exams.info_title_mobile') !!}
    </h2>

    <!-- DESKTOP BOXES -->
    <div class="hidden md:flex mx-auto" style="width: 1100px; height: 211px; gap: 43px;">
      <div class="flex-1 flex items-center rounded-2xl p-8 text-white" style="background: #194077;">
        <p class="font-bold text-lg" style="font-family: 'Montserrat', sans-serif;">{{ __('exams.info1') }}</p>
      </div>
      <div class="flex-1 flex items-center rounded-2xl p-8" style="background: #f0f4f8;">
        <p class="font-bold text-lg" style="font-family: 'Montserrat', sans-serif;">{{ __('exams.info2') }}</p>
      </div>
      <div class="flex-1 flex items-center rounded-2xl p-8" style="background: #a8dff0;">
        <p class="font-bold text-lg" style="font-family: 'Montserrat', sans-serif;">{{ __('exams.info3') }}</p>
      </div>
    </div>

    <!-- MOBILE BOXES -->
    <div class="flex md:hidden flex-col w-full h-auto gap-4 px-6">
      <div class="flex-1 flex rounded-[20px] p-6 text-white min-h-[140px]" style="background: #194077;">
        <p class="font-bold text-[15px] leading-snug" style="font-family: 'Montserrat', sans-serif;">{{ __('exams.info1') }}</p>
      </div>
      <div class="flex-1 flex rounded-[20px] p-6 min-h-[140px]" style="background: #f0f9ff;">
        <p class="font-bold text-[15px] text-[#111827] leading-snug" style="font-family: 'Montserrat', sans-serif;">{{ __('exams.info2') }}</p>
      </div>
      <div class="flex-1 flex rounded-[20px] p-6 min-h-[140px]" style="background: #89CDE3;">
        <p class="font-bold text-[15px] text-[#111827] leading-snug" style="font-family: 'Montserrat', sans-serif;">{{ __('exams.info3') }}</p>
      </div>
      <div class="flex-1 flex rounded-[20px] p-6 text-white min-h-[140px]" style="background: #194077;">
        <p class="font-bold text-[15px] leading-snug" style="font-family: 'Montserrat', sans-serif;">{{ __('exams.info4') }}</p>
      </div>
    </div>
</section>

@include('parts.faq')

<style>
  .exam-tab-btn:hover {
    background-color: #194077 !important;
    color: white !important;
    border-color: #194077 !important;
  }
</style>

<script>
  function setTabActive(id) {
    document.getElementById(id).style.backgroundColor = '#194077';
    document.getElementById(id).style.color           = '#ffffff';
    document.getElementById(id).style.borderColor     = '#194077';
  }
  function setTabInactive(id) {
    document.getElementById(id).style.backgroundColor = '#ffffff';
    document.getElementById(id).style.color           = '#374151';
    document.getElementById(id).style.borderColor     = '#d1d5db';
  }

  function switchTab(tab) {
    document.getElementById('content-administrirani').classList.add('hidden');
    document.getElementById('content-podgotveni').classList.add('hidden');

    setTabInactive('tab-administrirani');
    setTabInactive('tab-podgotveni');
    setTabInactive('tab-administrirani-mob');
    setTabInactive('tab-podgotveni-mob');

    document.getElementById('content-' + tab).classList.remove('hidden');

    setTabActive('tab-' + tab);
    setTabActive('tab-' + tab + '-mob');
  }

  function scrollCarousel(id, direction) {
    const carousel = document.getElementById('carousel-' + id);
    carousel.scrollBy({ left: direction * 354, behavior: 'smooth' });
  }
</script>

@endsection