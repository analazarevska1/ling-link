@extends('parts.main')

@section('content')
  <img src="{{ asset('images/cover-image.jpg') }}" alt="LinguaLink" class="w-full object-cover">

  <div class="flex flex-col items-center text-center py-16  w-full m-0">
    <h1 class="text-center uppercase" style="font-family: 'Jost', sans-serif; font-size: 60px; line-height: 70px;">
        <span style="font-weight: 600; font-style: normal;">ТВОЈОТ </span>
        <span style="font-weight: 500; font-style: italic;">ЛИНК</span><br>
        <span style="font-weight: 600; font-style: normal;">ДО </span>
        <span style="font-weight: 600; color: #1d3f8a;">СВЕТОТ</span>
      </h1>

    <p class="mt-6 text-gray-600 text-lg max-w-lg">
      Повеќе од училница – Lingua Link е заедница која те води од
      првите зборови до самоуверена комуникација.
    </p>

   <div class="flex gap-4 mt-8">
  <!-- Одбери курс (outline) -->
  <a href="#" class="flex items-center justify-center transition-all duration-200"
  style="width: 185px; height: 50px; border-radius: 20px; background: linear-gradient(to right, #E5F7FF, #E5F7FF); color: #194077; font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
  onmouseover="this.style.background='linear-gradient(to right, #d0efff, #a0d4f0)';"
  onmouseout="this.style.background='linear-gradient(to right, #E5F7FF, #E5F7FF)';">
  Одбери курс
</a>

  <a href="#" class="flex items-center justify-center transition-all duration-200"
  style="width: 185px; height: 50px; border-radius: 20px; background: linear-gradient(to right, #194077, #194077); color: white; font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
  onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)';"
  onmouseout="this.style.background='linear-gradient(to right, #194077, #194077)';">
  Одбери испит
</a>
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
      <a href="/courses/english" class="block" style="width: 244px; height: 110px; margin-top: 140px; position: relative;">
        <img src="{{ asset('images/flag-en.png') }}" alt="English" class="absolute object-contain z-10" style="height: 160px; width: 110px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 130px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-extrabold text-base text-center" style="font-family: 'Montserrat', sans-serif;">Англиски јазик</span>
        </div>
      </a>
  
      <!-- Card 2 -->
      <a href="/courses/german" class="block" style="width: 244px; height: 110px; margin-top: 140px; position: relative;">
        <img src="{{ asset('images/flag-de.png') }}" alt="German" class="absolute object-contain z-10" style="height: 160px; width: 110px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 130px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-bold text-base text-center" style="font-family: 'Montserrat', sans-serif;">Германски јазик</span>
        </div>
      </a>
  
      <!-- Card 3 -->
      <a href="/courses/macedonian" class="block" style="width: 244px; height: 110px; margin-top: 140px; position: relative;">
        <img src="{{ asset('images/flag-mk.png') }}" alt="Macedonian" class="absolute object-contain z-10" style="height: 160px; width: 110px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 130px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-bold text-base text-center" style="font-family: 'Montserrat', sans-serif;">Македонски јазик за странци</span>
        </div>
      </a>

      
    </div>

    <div class="flex flex-col items-center text-center py-16" style="background: #f8fbff;">
      <p class="text-lg text-gray-700 mb-6" style="font-family: 'Montserrat', sans-serif;">
        Сакаш ние да ти <span style="font-style: italic;">препорачаме</span> курс<br>
        кој најмногу ке ти <a href="#" class="font-bold text-[#194077]">одговара</a>?
      </p>
    
      <form method="POST" action="/set-personalizacija-session">
        @csrf
        <button type="submit"
          class="flex items-center justify-center transition-all duration-200"
          style="width: 185px; height: 50px; border-radius: 20px; background: linear-gradient(to right, #194077, #194077); color: white; font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
          onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)';"
          onmouseout="this.style.background='linear-gradient(to right, #194077, #194077)';">
          Започни сега
        </button>
      </form>
    </div>

      <section class="w-full py-16 px-24">
        <h2 class="font-black text-4xl uppercase mb-12 text-left" style="font-family: 'Jost', sans-serif;">Одбери испит</h2>
      
        <div class="relative flex items-center justify-center">

            <!-- Left Arrow -->
            <button onclick="scrollCarousel(-1)" class="flex-shrink-0 text-9xl font-black text-black hover:text-[#194077]" style="margin-right: 90px;">&#8249;</button>
          
            <!-- Cards Wrapper -->
            <div id="examCarousel" class="flex gap-12 overflow-hidden" style="scroll-behavior: smooth; width: calc(3 * 310px + 2 * 48px);">
            <!-- Card 1 -->
            <a href="/exams/onset" class="block rounded-2xl overflow-hidden flex-shrink-0 hover:shadow-xl transition-shadow duration-200" style="width: 310px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
              <img src="{{ asset('images/carousel-2.jpg') }}" alt="OnSET" class="w-full object-cover" style="height: 280px;">
              <div class="p-5 text-left" style="background: white;">
                <p class="font-black text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">OnSET</p>
                <p class="text-sm mb-4 italic text-gray-600" style="font-family: 'Montserrat', sans-serif;">Oxford Online Placement Test</p>
                <div class="flex items-center gap-2 text-sm mb-2" style="font-family: 'Montserrat', sans-serif;">
                  <span>?</span><span>20 задачи</span>
                </div>
                <div class="flex items-center gap-2 text-sm mb-4" style="font-family: 'Montserrat', sans-serif;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                  <span>Прв термин за испит: <strong>20.09.2025</strong></span>
                </div>
                <span class="text-sm underline font-medium" style="font-family: 'Montserrat', sans-serif;">Прочитај повеќе.</span>
              </div>
            </a>
      
            <!-- Card 2 -->
            <a href="/exams/telc" class="block rounded-2xl overflow-hidden flex-shrink-0 hover:shadow-xl transition-shadow duration-200" style="width: 310px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
              <img src="{{ asset('images/fill-form.jpg') }}" alt="TELC" class="w-full object-cover" style="height: 280px;">
              <div class="p-5 text-white text-left" style="background: #194077;">
                <p class="font-black text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">TELC</p>
                <p class="text-sm mb-4 opacity-90" style="font-family: 'Montserrat', sans-serif;">The European Language Certificates</p>
                <div class="flex items-center gap-2 text-sm mb-2" style="font-family: 'Montserrat', sans-serif;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                  <span>Нивоа: <strong>А1-Ц2</strong></span>
                </div>
                <div class="flex items-center gap-2 text-sm mb-4" style="font-family: 'Montserrat', sans-serif;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                  <span>Прв термин за испит: <strong>18.09.2025</strong></span>
                </div>
                <span class="text-sm underline font-medium" style="font-family: 'Montserrat', sans-serif;">Прочитај повеќе.</span>
              </div>
            </a>
      
            <!-- Card 3 -->
            <a href="/exams/testdaf" class="block rounded-2xl overflow-hidden flex-shrink-0 hover:shadow-xl transition-shadow duration-200" style="width: 310px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
              <img src="{{ asset('images/carousel-3.jpg') }}" alt="TestDaF" class="w-full object-cover" style="height: 280px;">
              <div class="p-5 text-left" style="background: white;">
                <p class="font-black text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">TestDaF</p>
                <p class="text-sm mb-4 text-gray-600" style="font-family: 'Montserrat', sans-serif;">Test Deutsch als Fremdsprache</p>
                <div class="flex items-center gap-2 text-sm mb-2" style="font-family: 'Montserrat', sans-serif;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                  <span>Нивоа: <strong>А1-Ц1</strong></span>
                </div>
                <div class="flex items-center gap-2 text-sm mb-4" style="font-family: 'Montserrat', sans-serif;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                  <span>Прв термин за испит: <strong>16.10.2025</strong></span>
                </div>
                <span class="text-sm underline font-medium" style="font-family: 'Montserrat', sans-serif;">Прочитај повеќе.</span>
              </div>
            </a>
    
            <!-- Card 4 -->
            <a href="/exams/testas" class="block rounded-2xl overflow-hidden flex-shrink-0 hover:shadow-xl transition-shadow duration-200 text-white" style="width: 310px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
              <img src="{{ asset('images/fill-form.jpg') }}" alt="TestAS" class="w-full object-cover" style="height: 280px;">
              <div class="p-5 text-left" style="background: #194077;">
                <p class="font-black text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">TestAS</p>
                <p class="text-sm mb-4 text-white" style="font-family: 'Montserrat', sans-serif;">Test für Ausländische Studierende</p>
                <div class="flex items-center gap-2 text-sm mb-2" style="font-family: 'Montserrat', sans-serif;">
                  <span>?</span><span>Скала од <strong>70-130 поени.</strong></span>
                </div>
                <div class="flex items-center gap-2 text-sm mb-4" style="font-family: 'Montserrat', sans-serif;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                  <span>Прв термин за испит: <strong>23.02.2026</strong></span>
                </div>
                <span class="text-sm underline font-medium" style="font-family: 'Montserrat', sans-serif;">Прочитај повеќе.</span>
              </div>
            </a>
    
            <!-- Card 5 -->
            <a href="/exams/languagecert" class="block rounded-2xl overflow-hidden flex-shrink-0 hover:shadow-xl transition-shadow duration-200" style="width: 310px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
              <img src="{{ asset('images/carousel-2.jpg') }}" alt="LanguageCert" class="w-full object-cover" style="height: 280px;">
              <div class="p-5 text-left" style="background: white;">
                <p class="font-black text-lg mb-1" style="font-family: 'Montserrat', sans-serif;">LanguageCert</p>
                <p class="text-sm mb-4 italic text-gray-600" style="font-family: 'Montserrat', sans-serif;">Јазичен сертификат</p>
                <div class="flex items-center gap-2 text-sm mb-2" style="font-family: 'Montserrat', sans-serif;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                  <span>Нивоа: <strong>А1-Ц1</strong></span>
                </div>
                <div class="flex items-center gap-2 text-sm mb-4" style="font-family: 'Montserrat', sans-serif;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                  <span>Прв термин за испит: <strong>Зависно од пријавата</strong></span>
                </div>
                <span class="text-sm underline font-medium" style="font-family: 'Montserrat', sans-serif;">Прочитај повеќе.</span>
              </div>
            </a>
    
          </div>
      
          <!-- Right Arrow -->
          <!-- Right Arrow -->
  <button onclick="scrollCarousel(1)" class="flex-shrink-0 text-9xl font-black text-black hover:text-[#194077]" style="margin-left: 90px;">&#8250;</button>
      
        </div>
      </section>
      
      <script>
        function scrollCarousel(direction) {
          const carousel = document.getElementById('examCarousel');
          carousel.scrollLeft += direction * (310 + 48);
        }
      </script>



<div class="my-8 flex items-center justify-between px-8 py-6 rounded-2xl mx-auto" style="width: calc(3 * 310px + 2 * 48px); border: 1px solid #e5e7eb; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
    <div class="text-left">
        <p class="font-black text-lg" style="font-family: 'Montserrat', sans-serif;">Дали си подготвен да го докажеш своето знаење?</p>
        <p class="text-gray-600 text-sm mt-1" style="font-family: 'Montserrat', sans-serif;">Избери некој од нашите испити!</p>
      </div>
    <a href="/exams" class="flex items-center justify-center px-8 py-3 text-white font-medium transition-all duration-200"
      style="border-radius: 20px; background: linear-gradient(to right, #194077, #194077); font-family: 'Montserrat', sans-serif; white-space: nowrap; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
      onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)';"
      onmouseout="this.style.background='linear-gradient(to right, #194077, #194077)';">
      Прочитај повеќе
    </a>
  </div>



  <section class="w-full py-16 px-24" style="background: #f8fbff;">
    <h2 class="text-center font-black text-4xl uppercase mb-12" style="font-family: 'Jost', sans-serif;">Други услуги</h2>
  
    <div class="grid grid-cols-3 text-left" style="gap: 60px;">
  
      <!-- Card 1 -->
      <div class="bg-white rounded-2xl flex flex-col gap-4" style="padding: 16px; border: 1px solid black; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
        <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Потврди за јазик</span>
        <p class="font-black text-lg" style="font-family: 'Montserrat', sans-serif;">Потврди за активно и пасивно</p>
        <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">За вработување или запишување на постдипломски студии</p>
        <a href="#" class="self-start flex items-center justify-center px-6 py-2 text-white text-sm font-medium transition-all duration-200"
          style="border-radius: 20px; background: linear-gradient(to right, #194077, #194077); font-family: 'Montserrat', sans-serif;"
          onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)';"
          onmouseout="this.style.background='linear-gradient(to right, #194077, #194077)';">
          Прочитај повеќе
        </a>
      </div>
  
      <!-- Card 2 -->
      <div class="bg-white rounded-2xl flex flex-col gap-4" style="padding: 16px; border: 1px solid black; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
        <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Потврди за јазик</span>
        <p class="font-black text-lg" style="font-family: 'Montserrat', sans-serif;">Потврда за ниво според CEFR</p>
        <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">Заедничката европска референтна рамка за јазици</p>
        <a href="#" class="self-start flex items-center justify-center px-6 py-2 text-sm font-medium transition-all duration-200"
          style="border-radius: 20px; background: #E5F7FF; color: #194077; font-family: 'Montserrat', sans-serif;"
          onmouseover="this.style.background='linear-gradient(to right, #d0efff, #a0d4f0)';"
          onmouseout="this.style.background='#E5F7FF';">
          Прочитај повеќе
        </a>
      </div>
  
      <!-- Card 3 -->
      <div class="bg-white rounded-2xl flex flex-col gap-4" style="padding: 16px; border: 1px solid black; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
        <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Потврди за јазик</span>
        <p class="font-black text-lg" style="font-family: 'Montserrat', sans-serif;">Тестирања потребни на институции</p>
        <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">Тестирање според потребите на вашата организација</p>
        <a href="#" class="self-start flex items-center justify-center px-6 py-2 text-white text-sm font-medium transition-all duration-200"
          style="border-radius: 20px; background: linear-gradient(to right, #194077, #194077); font-family: 'Montserrat', sans-serif;"
          onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)';"
          onmouseout="this.style.background='linear-gradient(to right, #194077, #194077)';">
          Прочитај повеќе
        </a>
      </div>
  
      <!-- Card 4 -->
      <div class="bg-white rounded-2xl flex flex-col gap-4" style="padding: 16px; border: 1px solid black; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
        <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Потврди за јазик</span>
        <p class="font-black text-lg" style="font-family: 'Montserrat', sans-serif;">Пробни тестови (англиски и германски)</p>
        <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">Запознавање со тежината, нивото и форматот на испитот.</p>
        <a href="#" class="self-start flex items-center justify-center px-6 py-2 text-sm font-medium transition-all duration-200"
          style="border-radius: 20px; background: #E5F7FF; color: #194077; font-family: 'Montserrat', sans-serif;"
          onmouseover="this.style.background='linear-gradient(to right, #d0efff, #a0d4f0)';"
          onmouseout="this.style.background='#E5F7FF';">
          Прочитај повеќе
        </a>
      </div>
  
      <!-- Card 5 -->
      <div class="bg-white rounded-2xl flex flex-col gap-4" style="padding: 16px; border: 1px solid black; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
        <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Други услуги</span>
        <p class="font-black text-lg" style="font-family: 'Montserrat', sans-serif;">Изнајмување на простории</p>
        <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">Изведување испити, одржување семинари, предавања и сл.</p>
        <a href="#" class="self-start flex items-center justify-center px-6 py-2 text-white text-sm font-medium transition-all duration-200"
          style="border-radius: 20px; background: linear-gradient(to right, #194077, #194077); font-family: 'Montserrat', sans-serif;"
          onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)';"
          onmouseout="this.style.background='linear-gradient(to right, #194077, #194077)';">
          Прочитај повеќе
        </a>
      </div>
  
      <!-- Card 6 -->
      <div class="bg-white rounded-2xl flex flex-col gap-4" style="padding: 16px; border: 1px solid black; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);">
        <span class="text-xs px-3 py-1 rounded-full bg-gray-100 self-start" style="font-family: 'Montserrat', sans-serif;">Други услуги</span>
        <p class="font-black text-lg" style="font-family: 'Montserrat', sans-serif;">Комуникациски обуки</p>
        <p class="text-gray-500 text-sm flex-1" style="font-family: 'Montserrat', sans-serif;">Развој на деловните комуникациски вештини во усна и писмена форма.</p>
        <a href="#" class="self-start flex items-center justify-center px-6 py-2 text-sm font-medium transition-all duration-200"
          style="border-radius: 20px; background: #E5F7FF; color: #194077; font-family: 'Montserrat', sans-serif;"
          onmouseover="this.style.background='linear-gradient(to right, #d0efff, #a0d4f0)';"
          onmouseout="this.style.background='#E5F7FF';">
          Прочитај повеќе
        </a>
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
      <a href="#" class="text-white font-bold underline text-sm" style="font-family: 'Montserrat', sans-serif;">притисни овде.</a>
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