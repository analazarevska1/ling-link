<nav class="sticky top-0 z-50 flex items-center justify-between px-20 py-2 bg-white" style="font-family: 'Montserrat', sans-serif; font-size: 14px; font-weight: 400; line-height: 100%;">

  <a href="{{ route('home-page') }}">
    <img src="{{ asset('images/logo.png') }}" alt="LinguaLink" style="width: 130px; height: 49.77px;">
  </a>

  <ul class="flex items-center gap-12 list-none m-0 p-0">
    <li><a href="{{ route('home-page') }}" class="text-[#194077]">{{ __('nav.home') }}</a></li>
    <li><a href="{{ route('about-us') }}" class="text-gray-700 hover:text-[#194077]">{{ __('nav.about') }}</a></li>
    <li><a href="{{ route('courses.index') }}" class="text-gray-700 hover:text-[#194077]">{{ __('nav.courses') }}</a></li>
    <li><a href="{{ route('exams.index') }}" class="text-gray-700 hover:text-[#194077]">{{ __('nav.exams') }}</a></li>
    <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-[#194077]">{{ __('nav.contact') }}</a></li>
  </ul>

  <div class="flex items-center gap-6">

    {{-- Language Switcher --}}
    <div class="flex items-center gap-1" style="font-size: 13px; font-weight: 600;">
      <a href="{{ route('language.switch', 'mk') }}"
         class="px-2 py-1 rounded transition"
         style="color: {{ app()->getLocale() === 'mk' ? '#194077' : '#9ca3af' }};">
        MKD
      </a>
      <span class="text-gray-300">|</span>
      <a href="{{ route('language.switch', 'en') }}"
         class="px-2 py-1 rounded transition"
         style="color: {{ app()->getLocale() === 'en' ? '#194077' : '#9ca3af' }};">
        EN
      </a>
    </div>

    @auth
      @if(auth()->user()->isAdmin())
        <a href="{{ url('/admin') }}" class="font-bold text-white bg-[#194077] px-4 py-2 rounded-md hover:opacity-90 transition" style="font-family: 'Montserrat', sans-serif; font-size: 14px;">
          {{ __('nav.admin_panel') }}
        </a>
      @else
        <span style="font-family: 'Montserrat', sans-serif; font-size: 14px; color: #194077; font-weight: 600;">
          {{ auth()->user()->name }}
        </span>
      @endif

      <form method="POST" action="{{ route('logout') }}" class="m-0">
        @csrf
        <button type="submit" class="flex items-center gap-2 text-gray-700 hover:text-[#194077] transition" style="font-family: 'Montserrat', sans-serif; font-size: 14px; background: none; border: none; cursor: pointer;">
          <img src="{{ asset('images/user-icon.png') }}" class="h-6">
          {{ __('nav.logout') }}
        </button>
      </form>
    @else
      <a href="{{ route('login') }}" class="flex items-center gap-2 text-gray-700 hover:text-[#194077] transition" style="font-family: 'Montserrat', sans-serif; font-size: 14px;">
        <img src="{{ asset('images/user-icon.png') }}" class="h-6">
        {{ __('nav.login') }}
      </a>
    @endauth

  </div>

</nav>