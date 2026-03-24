{{-- resources/views/courses/index.blade.php --}}
@extends('parts.main')

@section('title', 'Курсеви - LinguaLink')

@section('content')

    {{-- HERO — desktop only --}}
    <div class="relative w-full h-32 overflow-hidden px-4 md:px-20 hidden md:block">
        <img src="{{ asset('images/courses/courses1.jpg') }}" alt="Курсеви"
            class="w-full h-full object-cover brightness-75 rounded-3xl">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-3xl md:text-5xl font-extrabold tracking-widest uppercase">Курсеви</h1>
        </div>
    </div>

    {{-- HEADING --}}
    <h2 class="font-black uppercase mb-4 mt-10 md:mt-16 text-2xl md:text-3xl md:text-center px-6 md:px-0"
        style="font-family: 'Jost', sans-serif;">
        Одбери курс
    </h2>

    {{-- DESKTOP: floating flag cards --}}
    <div class="hidden md:flex justify-center gap-[60px] px-32">
  
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

    {{-- MOBILE: same floating flag design, stacked vertically --}}
    <div class="flex flex-col items-center gap-16 px-8 md:hidden" style="margin-top: 100px;">

        <a href="/courses/english" class="block w-full" style="position: relative; max-width: 320px;">
            <img src="{{ asset('images/flag-en.png') }}" alt="English" class="absolute object-contain z-10"
                 style="height: 120px; width: 90px; bottom: 100%; left: 10px; transform: translateY(40px);">
            <div class="bg-white rounded-2xl flex items-center justify-center"
                 style="height: 110px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid #d1d5db; padding: 20px 24px 20px 24px;">
                <span class="font-extrabold text-lg text-center" style="font-family: 'Montserrat', sans-serif;">Англиски јазик</span>
            </div>
        </a>

        <a href="/courses/macedonian" class="block w-full" style="position: relative; max-width: 320px;">
            <img src="{{ asset('images/flag-mk.png') }}" alt="Macedonian" class="absolute object-contain z-10"
                 style="height: 120px; width: 90px; bottom: 100%; left: 10px; transform: translateY(40px);">
            <div class="bg-white rounded-2xl flex items-center justify-center"
                 style="height: 110px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid #d1d5db; padding: 20px 24px 20px 24px;">
                <span class="font-bold text-lg text-center" style="font-family: 'Montserrat', sans-serif;">Македонски јазик за странци</span>
            </div>
        </a>

        <a href="/courses/german" class="block w-full" style="position: relative; max-width: 320px;">
            <img src="{{ asset('images/flag-de.png') }}" alt="German" class="absolute object-contain z-10"
                 style="height: 120px; width: 90px; bottom: 100%; left: 10px; transform: translateY(40px);">
            <div class="bg-white rounded-2xl flex items-center justify-center"
                 style="height: 110px; box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.10); border: 1px solid #d1d5db; padding: 20px 24px 20px 24px;">
                <span class="font-bold text-lg text-center" style="font-family: 'Montserrat', sans-serif;">Германски јазик</span>
            </div>
        </a>

    </div>

    {{-- RECOMMENDATION --}}
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

    @include('courses.partials.courses-includes')
    @include('courses.partials.courses-benefits')
    @include('parts.faq')

@endsection

@push('styles')
<style>
    .filter-btn:hover {
        background-color: #194077 !important;
        color: white !important;
        border-color: #1a5678 !important;
    }
</style>
@endpush