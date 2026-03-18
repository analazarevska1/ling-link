{{-- resources/views/courses/index.blade.php --}}
@extends('parts.main')

@section('title', 'Курсеви - LinguaLink')

@section('content')

     {{-- ═══════════════════ HERO BANNER ═══════════════════ --}}
    <div class="relative w-full h-32 overflow-hidden px-4 md:px-20">
        <img src="{{ asset('images/courses/courses1.jpg') }}" alt="Курсеви"
            class="w-full h-full object-cover brightness-75 rounded-3xl">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-3xl md:text-5xl font-extrabold tracking-widest uppercase">Курсеви</h1>
        </div>
    </div>

     <h2 class="text-center font-black text-3xl uppercase mb-4 mt-16" style="font-family: 'Jost', sans-serif;">Одбери курс</h2>
  
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


    @include('courses.partials.courses-includes')
    @include('courses.partials.courses-benefits')
    @include('parts.faq')


@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const track   = document.getElementById('carouselTrack');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const cards   = track.querySelectorAll('.course-card');

        console.log('Cards found:', cards.length);
        console.log('Card width:', cards[0]?.offsetWidth);
        console.log('Max index:', Math.max(0, cards.length - 3));

        if (!cards.length) return;

        const GAP     = 48;
        const VISIBLE = 3.1;
        let   index   = 0;
        const max     = Math.max(0, cards.length - VISIBLE);

        function cardW() {
            return cards[0].offsetWidth + GAP;
        }

        function update() {
            console.log('Updating index:', index, 'translateX:', -(index * cardW()));
            track.style.transform = `translateX(-${index * cardW()}px)`;
            prevBtn.disabled = index === 0;
            nextBtn.disabled = index >= max;
        }

        prevBtn.addEventListener('click', () => { if (index > 0)   { index--; update(); } });
        nextBtn.addEventListener('click', () => { if (index < max) { index++; update(); } });

        window.addEventListener('resize', update);
        update();
    });
</script>
@endpush

@push('styles')
<style>
    .filter-btn:hover {
        background-color: #194077 !important;
        color: white !important;
        border-color: #1a5678 !important;
    }
</style>
@endpush
