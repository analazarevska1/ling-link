@extends('parts.main')

@section('content')
  <img src="{{ asset('images/cover-image.jpg') }}" alt="LinguaLink" class="w-full object-cover">

  <div class="flex flex-col items-center text-center py-16 px-4">
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

<section class="w-full py-16" style="background: #f8fbff;">
    <h2 class="text-center font-black text-4xl uppercase mb-4" style="font-family: 'Jost', sans-serif;">Одбери курс</h2>
  
    <div class="flex justify-center gap-16 px-32">
  
      <!-- Card 1 -->
      <a href="/courses/english" class="block" style="width: 280px; margin-top: 180px; position: relative;">
        <img src="{{ asset('images/flag-en.png') }}" alt="English" class="absolute object-contain z-10" style="height: 190px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 130px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-extrabold text-base text-center" style="font-family: 'Montserrat', sans-serif;">Англиски јазик</span>
        </div>
      </a>
  
      <!-- Card 2 -->
      <a href="/courses/german" class="block" style="width: 280px; margin-top: 180px; position: relative;">
        <img src="{{ asset('images/flag-de.png') }}" alt="German" class="absolute object-contain z-10" style="height: 190px; bottom: 50%; left: 10px;">
        <div class="bg-white rounded-2xl hover:shadow-lg transition-shadow duration-200 flex items-center justify-center" style="height: 130px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid black; padding: 20px 24px 20px 40px;">
          <span class="font-bold text-base text-center" style="font-family: 'Montserrat', sans-serif;">Германски јазик</span>
        </div>
      </a>
  
      <!-- Card 3 -->
      <a href="/courses/macedonian" class="block" style="width: 280px; margin-top: 180px; position: relative;">
        <img src="{{ asset('images/flag-mk.png') }}" alt="Macedonian" class="absolute object-contain z-10" style="height: 190px; bottom: 50%; left: 10px;">
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
      
        <a href="/quiz"
          class="flex items-center justify-center transition-all duration-200"
          style="width: 185px; height: 50px; border-radius: 20px; background: linear-gradient(to right, #194077, #194077); color: white; font-family: 'Montserrat', sans-serif; font-size: 14px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10);"
          onmouseover="this.style.background='linear-gradient(to right, #2a6db5, #0d1f3c)';"
          onmouseout="this.style.background='linear-gradient(to right, #194077, #194077)';">
          Започни сега
        </a>
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
  </section>

   
@endsection