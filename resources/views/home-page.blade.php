@extends('parts.main')

@section('content')
<img src="{{ asset('images/cover-image.jpg') }}" alt="LinguaLink" class="w-full object-cover" style="max-height: 350px; object-position: top;">
<div class="flex flex-col items-center text-center pt-4 pb-2 w-full m-0">

  <!-- Badge -->
  <span class="px-5 py-1 rounded-full text-gray-600 text-sm mb-4" style="background: rgba(0,0,0,0.07); font-family: 'Montserrat', sans-serif;">
    Добродојдовте на Lingua Link
  </span>

  <h1 class="text-center uppercase" style="font-family: 'Jost', sans-serif; font-size: 56px; line-height: 66px; letter-spacing: 0;">
    <span style="font-weight: 600; font-style: normal;">ТВОЈОТ </span>
    <span style="font-weight: 500; font-style: italic;">ЛИНК</span><br>
    <span style="font-weight: 600; font-style: normal;">ДО </span>
    <span style="font-weight: 600; font-style: normal; color: #194077;">СВЕТОТ</span>
  </h1>

  <p class="mt-3 text-gray-600 max-w-lg" style="font-family: 'Montserrat', sans-serif; font-size: 16px;">
    Повеќе од училница – Lingua Link е заедница која те води од
    првите зборови до самоуверена комуникација.
  </p>

  <div class="flex gap-4 mt-5">
    <!-- Одбери курс -->
    <a href="#" class="flex items-center justify-center transition-all duration-200"
      style="width: 160px; height: 40px; border-radius: 10px; padding: 10px 16px; background: linear-gradient(90deg, #E5F7FF, #E5F7FF); color: #194077; font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
      onmouseover="this.style.background='linear-gradient(90deg, #E5F7FF, #89D0F2)';"
      onmouseout="this.style.background='linear-gradient(90deg, #E5F7FF, #E5F7FF)';">
      Одбери курс
    </a>

    <!-- Одбери испит -->
    <a href="{{route('exams.index')}}" class="flex items-center justify-center transition-all duration-200"
      style="width: 160px; height: 40px; border-radius: 10px; padding: 10px 16px; background: linear-gradient(90deg, #194077, #194077); color: white; font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 2px solid transparent rounded;"
      onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'; this.style.borderImage='linear-gradient(90deg, #041020, #194077) 1';"
      onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'; this.style.borderImage='none'; this.style.borderColor='transparent';">
      Одбери испит
    </a>
  </div>
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

<section class="w-full pt-8" style="background: #f8fbff;">
    <h2 class="text-center font-black text-4xl uppercase mb-4" style="font-family: 'Jost', sans-serif;">Одбери курс</h2>
  
    <div class="flex justify-center gap-[60px] px-32">
  
      <!-- Card 1 -->
      <a href="/courses/english" class="block" style="width: 244px; height: 88px; margin-top: 140px; position: relative;">
        <img src="{{ asset('images/flag-en.png') }}" alt="English" class="absolute object-contain z-10" style="height: 160px; width: 110px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 88px; width: 240px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-extrabold text-base text-left" style="font-family: 'Montserrat', sans-serif;">Англиски јазик</span>
        </div>
      </a>
  
      <!-- Card 2 -->
      <a href="/courses/german" class="block" style="width: 244px; height: 88px; margin-top: 140px; position: relative;">
        <img src="{{ asset('images/flag-de.png') }}" alt="German" class="absolute object-contain z-10" style="height: 160px; width: 110px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 88px; width: 240px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-bold text-base text-left" style="font-family: 'Montserrat', sans-serif;">Германски јазик</span>
        </div>
      </a>
  
      <!-- Card 3 -->
      <a href="/courses/macedonian" class="block" style="width: 244px; height: 110px; margin-top: 140px; position: relative;">
        <img src="{{ asset('images/flag-mk.png') }}" alt="Macedonian" class="absolute object-contain z-10" style="height: 160px; width: 110px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 88px; width: 240px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-bold text-base text-left" style="font-family: 'Montserrat', sans-serif;">Македонски јазик за странци</span>
        </div>
      </a>

      
    </div>

    <div class="flex flex-col items-center text-center py-10" style="background: #f8fbff;">
      <p class="text-lg text-gray-700 mb-6" style="font-family: 'Montserrat', sans-serif;">
        Сакаш ние да ти <span style="font-style: italic;">препорачаме</span> курс<br>
        кој најмногу ке ти <a href="#" class="font-bold text-[#194077]">одговара</a>?
      </p>
    
      <form method="POST" action="/set-personalizacija-session">
        @csrf
        <button type="submit"
          class="flex items-center justify-center transition-all duration-200"
          style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #194077, #194077); color: white; font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 2px solid transparent rounded; "
          onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'; this.style.borderImage='linear-gradient(90deg, #041020, #194077) 1';"
          onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'; this.style.borderImage='none'; this.style.borderColor='transparent';">
          Започни сега
        </button>
      </form>
    </div>

    <section class="w-full py-16 px-24">
      <h2 class="font-black text-4xl uppercase mb-12 text-left" style="font-family: 'Jost', sans-serif;">Одбери испит</h2>
    
      <div class="relative flex items-center justify-center">
    
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
                    <span>Прв термин: <strong>{{ $exam->first_exam_date ?? 'Наскоро' }}</strong></span>
                  @endif
                </div>
                <div class="mt-auto">
                  <span class="text-sm underline font-medium" style="font-family: 'Montserrat', sans-serif;">Прочитај повеќе.</span>
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
    </section>
    
    <script>
      function scrollExamCarousel(direction) {
        const carousel = document.getElementById('homeExamCarousel');
        carousel.scrollBy({ left: direction * 354, behavior: 'smooth' });
      }
    </script>



<div class="flex items-center justify-between px-8 mx-auto" style="width: 900px; height: 80px; border-radius: 20px; background: white; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); gap: 116px; margin-top: 32px; margin-bottom: 32px;">
  <div class="text-left">
    <p class="font-black text-base" style="font-family: 'Montserrat', sans-serif;">Дали си подготвен да го докажеш своето знаење?</p>
    <p class="text-gray-600 text-sm mt-1" style="font-family: 'Montserrat', sans-serif;">Избери некој од нашите испити!</p>
  </div>
  <a href="{{route('exams.index')}}" class="flex-shrink-0 flex items-center justify-center text-white font-medium transition-all duration-200"
  style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #194077, #194077); font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 2px solid transparent rounded;"
  onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'; this.style.borderImage='linear-gradient(90deg, #041020, #194077) 1';"
  onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'; this.style.borderImage='none'; this.style.borderColor='transparent';">
  Прочитај повеќе
</a>
</div>



<section class="w-full py-16 px-16" style="background: white;">
  <h2 class="text-center font-black text-4xl uppercase mb-12" style="font-family: 'Jost', sans-serif;">Други услуги</h2>

  <div class="grid grid-cols-3 gap-8 max-w-6xl mx-auto">

    <!-- Card 1 -->
    <div class="bg-white flex flex-col gap-4 p-6 rounded-xl" style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
      <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Потврди за јазик</span>
      <p class="font-black text-base" style="font-family: 'Montserrat', sans-serif;">Потврди за активно и пасивно</p>
      <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">За вработување или запишување на постдипломски студии</p>
      <a href="#" onclick="document.getElementById('modal-aktivno-pasivno').classList.remove('hidden'); return false;"
        class="flex items-center justify-center text-white text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #194077, #194077); font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 2px solid transparent rounded;"
        onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'; this.style.borderImage='linear-gradient(90deg, #041020, #194077) 1';"
        onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'; this.style.borderImage='none'; this.style.borderColor='transparent';">
        Прочитај повеќе
      </a>
    </div>

    @include('parts.modal-prijava', [
    'id' => 'aktivno-pasivno',
    'title' => 'ПОТВРДА ЗА АКТИВНО И ПАСИВНО',
    'description' => '
        <p class="mb-4"><strong>Потврдите за активно или пасивно</strong> познавање на јазик може да послужат за вработување, запишување на постдипломски студии, учество на семинари и сл.</p>
        <p class="mb-4">Тестирањето се закажува во <strong>ЛингваЛинк</strong> и по положениот тест, потврдата се издава на македонски јазик.</p>
        <p><strong>На барање на кандидатот, потврдата може да се издаде и на странскиот јазик на кој се полага.</strong></p>
    '
])

    <!-- Card 2 -->
    <div class="bg-white flex flex-col gap-4 p-6 rounded-xl" style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
      <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Потврди за јазик</span>
      <p class="font-black text-base" style="font-family: 'Montserrat', sans-serif;">Потврда за ниво според CEFR</p>
      <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">Заедничката европска референтна рамка за јазици</p>
      <a href="#" onclick="document.getElementById('modal-cefr').classList.remove('hidden'); return false;"
      class="flex items-center justify-center text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #E5F7FF, #E5F7FF); color: #194077; font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
        onmouseover="this.style.background='linear-gradient(90deg, #E5F7FF, #89D0F2)';"
        onmouseout="this.style.background='linear-gradient(90deg, #E5F7FF, #E5F7FF)';">
        Прочитај повеќе
      </a>
    </div>
    @include('parts.modal-prijava', [
      'id' => 'cefr',
      'title' => 'ПОТВРДА ЗА НИВО СПОРЕД CEFR',
      'description' => '
          <p class="mb-4">LinguaLink издава потврди за јазично ниво според <strong>Заедничката европска референтна рамка (CEFR)</strong> — од А1 до С2.</p>
          <p class="mb-4">Оваа потврда е објективен доказ за степенот на познавање на јазикот и е често потребна при аплицирање за работа во странство, визи, студии или меѓународни програми.</p>
          <p><strong>Тестирањето опфаќа слушање, читање, пишување и говор, со детална проценка по секоја вештина.</strong></p>
      '
  ])
    <!-- Card 3 -->
    <div class="bg-white flex flex-col gap-4 p-6 rounded-xl" style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
      <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Потврди за јазик</span>
      <p class="font-black text-base" style="font-family: 'Montserrat', sans-serif;">Тестирања потребни на институции</p>
      <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">Тестирање според потребите на вашата организација</p>
      <a href="#" onclick="document.getElementById('modal-institucii').classList.remove('hidden'); return false;"
      class="flex items-center justify-center text-white text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #194077, #194077); font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 2px solid transparent rounded;"
        onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'; this.style.borderImage='linear-gradient(90deg, #041020, #194077) 1';"
        onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'; this.style.borderImage='none'; this.style.borderColor='transparent';">
        Прочитај повеќе
      </a>
    </div>

    @include('parts.modal-prijava', [
    'id' => 'institucii',
    'title' => 'ТЕСТИРАЊА ПОТРЕБНИ НА ИНСТИТУЦИИ',
    'description' => '
        <p class="mb-4">Нудиме прилагодени тестирања според потребите на компании, образовни установи и организации.</p>
        <p class="mb-4">Тестовите можат да бидат групни или индивидуални, на различни јазици, и се дизајнирани според специфичните цели на институцијата — вработување, интерна евалуација или професионален развој.</p>
        <p><strong>Резултатите се презентираат во детален извештај со препораки за понатамошна обука или сертификација.</strong></p>
    '
])

    <!-- Card 4 -->
    <div class="bg-white flex flex-col gap-4 p-6 rounded-xl" style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
      <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Потврди за јазик</span>
      <p class="font-black text-base" style="font-family: 'Montserrat', sans-serif;">Пробни тестови (англиски и германски)</p>
      <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">Запознавање со тежината, нивото и форматот на испитот.</p>
      <a href="#" onclick="document.getElementById('modal-probni-testovi').classList.remove('hidden'); return false;"
      class="flex items-center justify-center text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #E5F7FF, #E5F7FF); color: #194077; font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
        onmouseover="this.style.background='linear-gradient(90deg, #E5F7FF, #89D0F2)';"
        onmouseout="this.style.background='linear-gradient(90deg, #E5F7FF, #E5F7FF)';">
        Прочитај повеќе
      </a>
    </div>
    @include('parts.modal-prijava', [
    'id' => 'probni-testovi',
    'title' => 'ПРОБНИ ТЕСТОВИ ПО АНГЛИСКИ И ГЕРМАНСКИ',
    'description' => '
        <p class="mb-4">Подгответ се самоуверено за полагање на официјални испити преку нашите <strong>пробни тестови</strong>.</p>
        <p class="mb-4">Тестовите се базирани на форматите на telc, TestDaF, LanguageCert и други меѓународни стандарди.</p>
        <p>Со нив ќе можеш да го процениш своето тековно ниво, да се запознаеш со типичните задачи и да научиш стратегии за подобро управување со времето. По тестирањето, добиваш <strong>детална повратна информација</strong> и <strong>индивидуални препораки</strong> од предавач.</p>
    '
])

    <!-- Card 5 -->
    <div class="bg-white flex flex-col gap-4 p-6 rounded-xl" style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
      <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Други услуги</span>
      <p class="font-black text-base" style="font-family: 'Montserrat', sans-serif;">Изнајмување на простории</p>
      <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">Изведување испити, одржување семинари, предавања и сл.</p>
      <a href="#" onclick="document.getElementById('modal-iznajmuvanje').classList.remove('hidden'); return false;"
      class="flex items-center justify-center text-white text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #194077, #194077); font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 2px solid transparent rounded;"
        onmouseover="this.style.background='linear-gradient(90deg, #194077, #020C1B)'; this.style.borderImage='linear-gradient(90deg, #041020, #194077) 1';"
        onmouseout="this.style.background='linear-gradient(90deg, #194077, #194077)'; this.style.borderImage='none'; this.style.borderColor='transparent';">
        Прочитај повеќе
      </a>
    </div>

    @include('parts.modal-prijava', [
    'id' => 'iznajmuvanje',
    'title' => 'ИЗНАЈМУВАЊЕ НА ПРОСТОРИИ',
    'description' => '
        <p class="mb-4">LinguaLink располага со современо опремени училници и тест-сали кои можат да се изнесуваат под наем за <strong>спроведување на испити, семинари, или деловни состаноци</strong>.</p>
        <p class="mb-4">Просториите се климатизирани, имаат стабилна интернет конекција, проектор, табла и удобен распоред за различен број учесници.</p>
        <p>Нашиот персонал обезбедува логистичка поддршка, техничка асистенција и прилагодување на распоредот според вашите потреби.</p>
    '
])

    <!-- Card 6 -->
    <div class="bg-white flex flex-col gap-4 p-6 rounded-xl" style="border: 0.3px solid #d1d5db; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
      <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Други услуги</span>
      <p class="font-black text-base" style="font-family: 'Montserrat', sans-serif;">Комуникациски обуки</p>
      <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">Развој на деловните комуникациски вештини во усна и писмена форма.</p>
      <a href="#" onclick="document.getElementById('modal-komunikaciski-obuki').classList.remove('hidden'); return false;"
      class="flex items-center justify-center text-sm font-medium transition-all duration-200"
        style="width: 160px; height: 40px; border-radius: 10px; background: linear-gradient(90deg, #E5F7FF, #E5F7FF); color: #194077; font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); "
        onmouseover="this.style.background='linear-gradient(90deg, #E5F7FF, #89D0F2)';"
        onmouseout="this.style.background='linear-gradient(90deg, #E5F7FF, #E5F7FF)';">
        Прочитај повеќе
      </a>
    </div>

    @include('parts.modal-prijava', [
    'id' => 'komunikaciski-obuki',
    'title' => 'КОМУНИКАЦИСКИ ОБУКИ',
    'description' => '
        <p class="mb-4">Со нашите обуки за деловна и професионална комуникација ќе го усовршите изразувањето во <strong>писмена</strong> и <strong>усна</strong> форма.</p>
        <p class="mb-4">Програмите опфаќаат: пишување професионални мејлови, презентациски вештини, водење состаноци, аргументирање, интервјуа и јавен настап.</p>
        <p>Овие обуки се погодни за компании, јавни институции и поединци кои сакаат да го унапредат својот <strong>професионален израз</strong> и <strong>меѓународна комуникација</strong>.</p>
    '
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


<section class="w-full py-16 px-24">

  <!-- Title -->
  <h2 class="text-center font-black text-5xl uppercase leading-tight mb-12" style="font-family: 'Jost', sans-serif;">
    НАШАТА <span style="font-weight: 500; font-style: italic;">РАБОТА</span><br>
    ЗБОРУВА ЗА <span style="color: #194077;">НАС</span>
  </h2>

  <!-- Stats - 1282px wide, gap 46px, each 240x149 -->
  <div class="flex justify-center mb-12" style="gap: 46px;">
    <div class="flex-shrink-0 flex flex-col items-center justify-center text-white" style="width: 240px; height: 149px; background: #194077; border-radius: 60px 16px 16px 16px;">
      <p class="font-black text-4xl" style="font-family: 'Montserrat', sans-serif;">500+</p>
      <p class="text-sm text-center mt-2" style="font-family: 'Montserrat', sans-serif;">задоволни<br>студенти</p>
    </div>
    <div class="flex-shrink-0 flex flex-col items-center justify-center rounded-2xl" style="width: 240px; height: 149px; background: #a8dff0;">
      <p class="font-black text-4xl" style="font-family: 'Montserrat', sans-serif;">10+</p>
      <p class="text-sm text-center mt-2" style="font-family: 'Montserrat', sans-serif;">години<br>искуство</p>
    </div>
    <div class="flex-shrink-0 flex flex-col items-center justify-center rounded-2xl" style="width: 240px; height: 149px; background: #d6eef8;">
      <p class="font-black text-4xl" style="font-family: 'Montserrat', sans-serif;">15+</p>
      <p class="text-sm text-center mt-2" style="font-family: 'Montserrat', sans-serif;">сертификати и<br>акредитации</p>
    </div>
    <div class="flex-shrink-0 flex flex-col items-center justify-center text-white" style="width: 240px; height: 149px; background: #194077; border-radius: 16px 60px 16px 16px;">
      <p class="font-black text-4xl" style="font-family: 'Montserrat', sans-serif;">20+</p>
      <p class="text-sm text-center mt-2" style="font-family: 'Montserrat', sans-serif;">професионални<br>наставници</p>
    </div>
  </div>

  <!-- Image + Points -->
  <div class="flex justify-center gap-12">

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
          <strong>Модерно јазично училиште</strong> – со фокус на практична комуникација и реални ситуации.
        </p>
      </div>

      <!-- Point 2 -->
      <div class="flex items-start gap-5">
        <svg class="flex-shrink-0" width="87" height="49" viewBox="0 0 87 49" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 24.5H80M80 24.5L62 8M80 24.5L62 41" stroke="#84CDF1" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
          <strong>Гаранција за квалитет</strong> – ЛингваЛинк го гарантира квалитетот во јазичното подучување преку висококвалитетни наставни и образовни стандарди
        </p>
      </div>

      <!-- Point 3 -->
      <div class="flex items-start gap-5">
        <svg class="flex-shrink-0" width="87" height="49" viewBox="0 0 87 49" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 24.5H80M80 24.5L62 8M80 24.5L62 41" stroke="#194077" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <p style="font-family: 'Montserrat', sans-serif; font-size: 15px;">
          <strong>Флексибилни формати на настава</strong> – индивидуални, групни и онлајн часови според твоите потреби.
        </p>
      </div>

    </div>
  </div>

</section>
  <section class="w-full py-24 flex items-center gap-16 px-24" style="background: #194077; min-height: 700px;">
    <!-- Left: Title -->
    <div class="flex-shrink-0" style="width: 320px;">
      <h2 class="font-black text-5xl uppercase leading-tight text-white mb-6" style="font-family: 'Jost', sans-serif;">
        СЛУШНЕТЕ <span style="font-weight: 500; font-style: italic;">ПОВЕЌЕ</span> ОД НАШИТЕ КЛИЕНТИ
      </h2>
      <p class="text-white text-sm mb-4" style="font-family: 'Montserrat', sans-serif; opacity: 0.9;">
        Прочитај ги тестимониалите оставени од нашите верни клиенти. Сакаш да напишеш свој тестимониал?
      </p>
      <a href="#" onclick="document.getElementById('modal-testimonial').classList.remove('hidden'); return false;" class="text-white font-bold underline text-sm" style="font-family: 'Montserrat', sans-serif;">притисни овде.</a>
      @include('parts.modal-testimonial')
    </div>
  
    <!-- Right: Carousel -->
    <div class="flex-1 relative" style="overflow: hidden;">
      <div id="testimonialCarousel" class="flex gap-6" style="scroll-behavior: smooth; overflow-x: hidden; padding-top: 60px; width: calc(2.5 * 340px + 2 * 24px);">
  
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl p-8 flex-shrink-0 flex flex-col gap-4 relative" style="width: 340px; min-height: 380px; padding-top: 70px;">
          <img src="{{ asset('images/user1.png') }}" alt="Avatar" class="absolute rounded-full object-cover" style="width: 100px; height: 100px; top: -50px; left: 50%; transform: translateX(-50%);">
          <p class="font-black text-lg text-center" style="font-family: 'Montserrat', sans-serif;">Марија Петковска</p>
          <p class="text-gray-500 text-sm text-center italic" style="font-family: 'Montserrat', sans-serif;">студент</p>
          <p class="text-gray-700 text-base text-center flex-1" style="font-family: 'Montserrat', sans-serif;">„Во LinguaLink за првпат стекнав самодоверба да зборувам англиски. Наставниците се супер и резултатите се веднаш видливи."</p>
          <div class="flex justify-center gap-1 text-yellow-400 text-xl">★ ★ ★ ★ ★</div>
        </div>
  
        <!-- Card 2 -->
        <div class="bg-white rounded-2xl p-8 flex-shrink-0 flex flex-col gap-4 relative" style="width: 340px; min-height: 380px; padding-top: 70px;">
          <img src="{{ asset('images/user2.png') }}" alt="Avatar" class="absolute rounded-full object-cover" style="width: 100px; height: 100px; top: -50px; left: 50%; transform: translateX(-50%);">
          <p class="font-black text-lg text-center" style="font-family: 'Montserrat', sans-serif;">Иван Јовановски</p>
          <p class="text-gray-500 text-sm text-center italic" style="font-family: 'Montserrat', sans-serif;">родител</p>
          <p class="text-gray-700 text-base text-center flex-1" style="font-family: 'Montserrat', sans-serif;">„Моето дете со задоволство оди на часови во Lingua Link. За кратко време напредуваше многу и сега со самодоверба зборува на јазикот."</p>
          <div class="flex justify-center gap-1 text-yellow-400 text-xl">★ ★ ★ ★ ★</div>
        </div>
  
        <!-- Card 3 -->
        <div class="bg-white rounded-2xl p-8 flex-shrink-0 flex flex-col gap-4 relative" style="width: 340px; min-height: 380px; padding-top: 70px;">
          <img src="{{ asset('images/user3.png') }}" alt="Avatar" class="absolute rounded-full object-cover" style="width: 100px; height: 100px; top: -50px; left: 50%; transform: translateX(-50%);">
          <p class="font-black text-lg text-center" style="font-family: 'Montserrat', sans-serif;">Маја Иванова</p>
          <p class="text-gray-500 text-sm text-center italic" style="font-family: 'Montserrat', sans-serif;">родител</p>
          <p class="text-gray-700 text-base text-center flex-1" style="font-family: 'Montserrat', sans-serif;">„Мојата ќерка многу брзо почна да зборува со самодоверба благодарение на професорите во Lingua Link. Часовите се забавни и секогаш чека со радост."</p>
          <div class="flex justify-center gap-1 text-yellow-400 text-xl">★ ★ ★ ★ ★</div>
        </div>
  
        <!-- Card 4 -->
        <div class="bg-white rounded-2xl p-8 flex-shrink-0 flex flex-col gap-4 relative" style="width: 340px; min-height: 380px; padding-top: 70px;">
          <img src="{{ asset('images/user4.jpg') }}" alt="Avatar" class="absolute rounded-full object-cover" style="width: 100px; height: 100px; top: -50px; left: 50%; transform: translateX(-50%);">
          <p class="font-black text-lg text-center" style="font-family: 'Montserrat', sans-serif;">Александар Јованов</p>
          <p class="text-gray-500 text-sm text-center italic" style="font-family: 'Montserrat', sans-serif;">ученик</p>
          <p class="text-gray-700 text-base text-center flex-1" style="font-family: 'Montserrat', sans-serif;">„Kako тинејџер ми беше тешко да најдам мотивација за јазици, но овде часовите се динамични и интересни. Конечно чувствувам дека напредувам."</p>
          <div class="flex justify-center gap-1 text-yellow-400 text-xl">★ ★ ★ ★ ★</div>
        </div>
  
        <!-- Card 5 -->
        <div class="bg-white rounded-2xl p-8 flex-shrink-0 flex flex-col gap-4 relative" style="width: 340px; min-height: 380px; padding-top: 70px;">
          <img src="{{ asset('images/user5.jpg') }}" alt="Avatar" class="absolute rounded-full object-cover" style="width: 100px; height: 100px; top: -50px; left: 50%; transform: translateX(-50%);">
          <p class="font-black text-lg text-center" style="font-family: 'Montserrat', sans-serif;">Даниел Георгиев</p>
          <p class="text-gray-500 text-sm text-center italic" style="font-family: 'Montserrat', sans-serif;">професионалец</p>
          <p class="text-gray-700 text-base text-center flex-1" style="font-family: 'Montserrat', sans-serif;">„Lingua Link ми даде сигурност во деловниот англиски. Сега со самодоверба водам состаноци со странски партнери."</p>
          <div class="flex justify-center gap-1 text-yellow-400 text-xl">★ ★ ★ ★ ★</div>
        </div>
  
      </div>
  
            <!-- Scroll bar -->
            <!-- Scroll bar -->
      <div class="mt-6 flex justify-center">
        <div class="rounded-full" style="height: 7px; background: rgba(255,255,255,0.3); width: 40%;">
          <div id="scrollIndicator" class="rounded-full" style="height: 7px; background: white; width: 30%; transition: margin-left 0.2s;"></div>
        </div>
      </div>
  
  </section>
  
  <script>
    const carousel = document.getElementById('testimonialCarousel');
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
      const scrollPercent = carousel.scrollLeft / (carousel.scrollWidth - carousel.clientWidth);
      indicator.style.marginLeft = (scrollPercent * 70) + '%';
    });
  
    carousel.style.cursor = 'grab';
    carousel.style.overflowX = 'scroll';
    carousel.style.scrollbarWidth = 'none';
  </script>


   @include('parts.faq')

   <section class="w-full py-24 relative overflow-hidden text-center" style="background: #f0f9ff; min-height: 650px;">

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
        Повик за акција
      </span>
  
      <h2 class="font-black text-6xl uppercase leading-tight mb-6" style="font-family: 'Jost', sans-serif;">
        ДАЛИ СИ СПРЕМЕН<br>
        ДА <span style="color: #194077;">ЗАПОЧНЕШ</span>?
      </h2>
  
      <p class="text-gray-600 text-lg mb-10 max-w-xl" style="font-family: 'Montserrat', sans-serif;">
        Избери го курсот што ти одговара и постигни резултати кои ќе ти ја отворат вратата кон нови можности.
      </p>
  
      <a href="/courses" class="flex items-center justify-center px-10 py-4 text-white font-medium text-lg transition-all duration-200"
        style="border-radius: 30px; background: linear-gradient(to right, #194077, #194077); font-family: 'Montserrat', sans-serif; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.15);"
        onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)';"
        onmouseout="this.style.background='linear-gradient(to right, #194077, #194077)';">
        Започни сега
      </a>
  
    </div>
  
  </section>
@endsection