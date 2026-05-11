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

    <div class="flex justify-center items-center gap-3 md:gap-4 mb-8 md:mb-16 px-4 md:px-0">
        <button onclick="switchTab('administrirani')" id="tab-administrirani"
          class="rounded-full transition-all duration-200 flex items-center justify-center text-center whitespace-nowrap px-6 md:px-8 py-[10px] border border-gray-300 p-3"
          style="font-family: 'Montserrat', sans-serif; background: #194077; color: white; font-weight: 700; font-size: 14px; box-shadow: 0px 4px 15px rgba(0,0,0,0.05);">
          {{ __('exams.tab_administered') }}
        </button>

        <button onclick="switchTab('podgotveni')" id="tab-podgotveni"
          class="rounded-full transition-all duration-200 flex items-center justify-center text-center whitespace-nowrap px-6 md:px-8 py-[10px] border border-gray-300 p-3"
          style="font-family: 'Montserrat', sans-serif; background: #FFFFFF; color: #111827; font-weight: 500; font-size: 14px; box-shadow: 0px 4px 15px rgba(0,0,0,0.05);">
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
                <p class="font-black text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">{{ $exam->title }}</p>
                <p class="text-[13px] mb-6 {{ $subtitleColor }}" style="font-family: 'Montserrat', sans-serif;">{{ $exam->subtitle }}</p>
                
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
    <!-- MOBILE Breadcrumbs equivalent -->
    <p class="md:hidden text-gray-500 text-[12px] mb-4 text-left px-6" style="font-family: 'Montserrat', sans-serif;">&laquo; {{ __('exams.prep_breadcrumb') }}</p>
    
    @if($groupedExamPreps->isNotEmpty())
        <div class="max-w-5xl mx-auto space-y-4 md:space-y-8 px-4 md:px-0">
            
            @foreach($groupedExamPreps as $category => $groups)
            <div class="bg-white rounded-2xl md:rounded-[20px] p-5 md:p-10" style="box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.05);">
                
                <h2 class="text-gray-500 text-[13px] md:text-[15px] mb-4 md:mb-6 font-medium" style="font-family: 'Montserrat', sans-serif;">
                    {{ $category }}
                </h2>

                <div class="space-y-2">
                    @foreach($groups as $examGroup => $preps)
                    <div x-data="{ expanded: false }" class="border-b border-gray-100 last:border-0 pb-2 last:pb-0">
                        
                        <button @click="expanded = !expanded" class="w-full flex justify-between items-center py-3 md:py-4 group focus:outline-none">
                            <div class="flex items-center gap-3 md:gap-4">
                                <svg class="w-[20px] h-[20px] text-[#194077]" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                                <span class="font-bold text-[#111827] text-[15px] md:text-[16px] group-hover:opacity-80 transition-opacity" style="font-family: 'Montserrat', sans-serif;">
                                    {{ $examGroup }}
                                </span>
                            </div>
                            
                            <svg :class="{'rotate-180': expanded}" class="w-4 h-4 text-gray-400 opacity-80 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div x-show="expanded" x-collapse x-cloak class="mt-1 space-y-3 pl-8 pb-4">
                            @foreach($preps as $prep)
                            <div class="bg-white border border-[#f3f4f6] rounded-2xl p-5" style="box-shadow: 0px 2px 10px rgba(0,0,0,0.02);">
                                <h3 class="font-bold text-[#111827] text-[14px] mb-1 leading-snug" style="font-family: 'Montserrat', sans-serif;">
                                    {{ $prep->name }}
                                </h3>
                                @if($prep->description)
                                    <p class="text-[13px] text-gray-500 leading-relaxed" style="font-family: 'Montserrat', sans-serif;">
                                        {{ $prep->description }}
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
            <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
            <p class="text-lg text-gray-500 font-medium" style="font-family: 'Montserrat', sans-serif;">
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

<script>
  function switchTab(tab) {
    // Hide both content sections
    document.getElementById('content-administrirani').classList.add('hidden');
    document.getElementById('content-podgotveni').classList.add('hidden');
    
    // Reset both buttons to the inactive state (White background, Dark text)
    const btnAdmin = document.getElementById('tab-administrirani');
    const btnPrep = document.getElementById('tab-podgotveni');
    
    btnAdmin.style.background = '#FFFFFF';
    btnAdmin.style.color = '#111827';
    btnAdmin.style.fontWeight = '500';
    
    btnPrep.style.background = '#FFFFFF';
    btnPrep.style.color = '#111827';
    btnPrep.style.fontWeight = '500';

    // Show the clicked content section
    document.getElementById('content-' + tab).classList.remove('hidden');
    
    // Set the clicked button to the active state (Dark Blue background, White text)
    const activeBtn = document.getElementById('tab-' + tab);
    activeBtn.style.background = '#194077';
    activeBtn.style.color = 'white';
    activeBtn.style.fontWeight = '700';
  }

  function scrollCarousel(id, direction) {
    const carousel = document.getElementById('carousel-' + id);
    carousel.scrollBy({ left: direction * 354, behavior: 'smooth' });
  }
</script>

@endsection





