@extends('parts.main')

@section('content')

<script defer src="https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<div class="mx-auto" style="width: 1280px; height: 150px; border-radius: 20px; overflow: hidden; position: relative;">
    <img src="{{ asset('images/exams-header.jpg') }}" alt="Испити" class="w-full h-full object-cover" style="object-position: top;">
 
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 style="
            font-family: 'Jost', sans-serif;
            font-weight: 900;
            font-size: 2.75rem;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            text-shadow: 0 2px 12px rgba(0,0,0,0.25);
            margin: 0;
        ">ИСПИТИ</h1>
    </div>
</div>
<h1 class="text-center mx-auto mt-8 w-[196px] h-[40px] font-semibold text-[20px] leading-[40px] opacity-100" style="font-family: 'Jost', sans-serif;">ЛИСТА НА ИСПИТИ</h1>

<section class="w-full py-8 px-24">

    <div class="flex justify-center items-stretch gap-6 mb-16">
        <button onclick="switchTab('administrirani')" id="tab-administrirani"
          class="px-10 py-3 rounded-[20px] text-[17px] leading-tight transition-all duration-200 flex items-center justify-center text-center shadow-sm"
          style="font-family: 'Montserrat', sans-serif; background: #194077; color: white; font-weight: 700; min-width: 280px; box-shadow: 0px 4px 15px rgba(0,0,0,0.05);">
          Администрирање<br>на испити
        </button>
        
        <button onclick="switchTab('podgotveni')" id="tab-podgotveni"
          class="px-10 py-3 rounded-[20px] text-[17px] leading-tight transition-all duration-200 flex items-center justify-center text-center shadow-sm border border-[#111827] b b-[0.33px] "
          style="font-family: 'Montserrat', sans-serif; background: #FFFFFF; color: #111827; font-weight: 500; min-width: 280px; box-shadow: 0px 4px 15px rgba(0,0,0,0.05);">
          Подготовка на испити
        </button>
      </div>

  <div id="content-administrirani">
    @if($exams->isNotEmpty())
        <div class="relative flex items-center justify-center">
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
                  <span>{{ $exam->what_for ?? 'Повеќе информации' }}</span>
                </div>
                <div class="flex items-center gap-2 text-sm mb-4" style="font-family: 'Montserrat', sans-serif;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                  </svg>
                  @if($exam->is_on_demand)
                    <span>Прв термин: <strong>Зависно од пријавата</strong></span>
                  @else
                    <span>Прв термин: <strong>{{ $exam->first_exam_date ? \Carbon\Carbon::parse($exam->first_exam_date)->format('d.m.Y') : 'Наскоро' }}</strong></span>
                  @endif
                </div>
                <div class="mt-auto">
                  <span class="text-sm underline font-medium" style="font-family: 'Montserrat', sans-serif;">Прочитај повеќе.</span>
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
    @else
        <div class="flex flex-col items-center justify-center py-16 text-center">
            <svg class="w-16 h-16 text-gray-300 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            <p class="text-lg text-gray-500 font-medium" style="font-family: 'Montserrat', sans-serif;">
                Моментално нема активни испити.
            </p>
        </div>
    @endif
  </div>

  <div id="content-podgotveni" class="hidden w-full pb-12">
    @if($groupedExamPreps->isNotEmpty())
        <div class="max-w-5xl mx-auto space-y-8">
            
            @foreach($groupedExamPreps as $category => $groups)
            <div class="bg-white rounded-[20px] p-8 md:p-10" style="box-shadow: 0px 8px 30px rgba(0, 0, 0, 0.05);">
                
                <h2 class="text-gray-600 text-sm md:text-base mb-6 font-medium" style="font-family: 'Montserrat', sans-serif;">
                    {{ $category }}
                </h2>

                <div class="space-y-2">
                    @foreach($groups as $examGroup => $preps)
                    <div x-data="{ expanded: false }" class="border-b border-gray-100 last:border-0 pb-2 last:pb-0">
                        
                        <button @click="expanded = !expanded" class="w-full flex justify-between items-center py-4 group focus:outline-none">
                            <div class="flex items-center gap-3">
                                <svg class="w-[22px] h-[22px] text-[#194077]" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                                <span class="font-bold text-gray-900 text-lg group-hover:opacity-80 transition-opacity" style="font-family: 'Montserrat', sans-serif;">
                                    {{ $examGroup }}
                                </span>
                            </div>
                            
                            <svg :class="{'rotate-180': expanded}" class="w-5 h-5 text-gray-400 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <div x-show="expanded" x-collapse x-cloak class="mt-2 space-y-3 pl-9 pb-5">
                            @foreach($preps as $prep)
                            <div class="bg-white border border-[#f0f0f0] rounded-xl p-5" style="box-shadow: 0px 2px 10px rgba(0,0,0,0.01);">
                                <h3 class="font-bold text-gray-900 text-[15px] mb-1" style="font-family: 'Montserrat', sans-serif;">
                                    {{ $prep->name }}
                                </h3>
                                @if($prep->description)
                                    <p class="text-[14px] text-gray-500 leading-relaxed" style="font-family: 'Montserrat', sans-serif;">
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
                Моментално нема достапни подготовки за испити.
            </p>
        </div>
    @endif
  </div>

</section>

<section class="w-full py-16" style="background: white;">
    <h2 class="text-center font-black text-4xl uppercase mb-12" style="font-family: 'Jost', sans-serif;">
      СЕ ШТО <span style="font-weight: 500; font-style: italic;">ТРЕБА</span> ДА<br>
      ЗНАЕТЕ ЗА <span style="color: #194077;">ИСПИТИТЕ</span>
    </h2>
    <div class="flex mx-auto" style="width: 1100px; height: 211px; gap: 43px;">
  
      <div class="flex-1 flex items-center rounded-2xl p-8 text-white" style="background: #194077;">
        <p class="font-bold text-lg" style="font-family: 'Montserrat', sans-serif;">Пријавите и уплатите пред крајниот датум за пријавување</p>
      </div>
  
      <div class="flex-1 flex items-center rounded-2xl p-8" style="background: #f0f4f8;">
        <p class="font-bold text-lg" style="font-family: 'Montserrat', sans-serif;">Принципот на пријавување работи на начин прв-дојден, прв-услужен</p>
      </div>
  
      <div class="flex-1 flex items-center rounded-2xl p-8" style="background: #a8dff0;">
        <p class="font-bold text-lg" style="font-family: 'Montserrat', sans-serif;">Местата за секој датум за испит се ограничени, резервирајте го вашето.</p>
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





