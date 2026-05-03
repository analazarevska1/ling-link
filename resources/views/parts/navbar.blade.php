<nav class="sticky top-0 z-50 flex items-center justify-between px-6 lg:px-20 py-2 bg-white" style="font-family: 'Montserrat', sans-serif; font-size: 14px; font-weight: 400; line-height: 100%;">

  <a href="{{route('home-page')}}">
    <img src="{{ asset('images/logo.png') }}" alt="LinguaLink" style="width: 130px; height: 49.77px;">
  </a>

  {{-- Desktop nav links --}}
  <ul class="hidden lg:flex items-center gap-12 list-none m-0 p-0">
    <li><a href="{{route('home-page')}}" class="text-[#194077]">{{ __('nav.home') }}</a></li>
    <li><a href="{{route('about-us')}}" class="text-gray-700 hover:text-[#194077]">{{ __('nav.about') }}</a></li>
    <li><a href="{{route('courses.index')}}" class="text-gray-700 hover:text-[#194077]">{{ __('nav.courses') }}</a></li>
    <li><a href="{{route('exams.index')}}" class="text-gray-700 hover:text-[#194077]">{{ __('nav.exams') }}</a></li>
    <li><a href="{{route('contact')}}" class="text-gray-700 hover:text-[#194077]">{{ __('nav.contact') }}</a></li>
  </ul>

  {{-- Desktop right side: language switcher + auth --}}
  <div class="hidden lg:flex items-center gap-6">

    {{-- ✅ Language Switcher --}}
    <div class="flex items-center gap-1" style="font-size: 13px; font-weight: 700;">
      <a href="{{ route('language.switch', 'mk') }}"
         style="color: {{ app()->getLocale() === 'mk' ? '#194077' : '#9ca3af' }}; text-decoration: none;">
        MKD
      </a>
      <span style="color: #d1d5db; margin: 0 2px;">|</span>
      <a href="{{ route('language.switch', 'en') }}"
         style="color: {{ app()->getLocale() === 'en' ? '#194077' : '#9ca3af' }}; text-decoration: none;">
        EN
      </a>
    </div>

    @auth
    <div class="flex items-center gap-6">
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
    </div>
    @else
    <a href="{{ route('login') }}" class="flex items-center gap-2 text-gray-700 hover:text-[#194077] transition" style="font-family: 'Montserrat', sans-serif; font-size: 14px;">
      <img src="{{ asset('images/user-icon.png') }}" class="h-6">
      {{ __('nav.login') }}
    </a>
    @endauth
  </div>

{{-- Mobile: language switcher + hamburger grouped together --}}
  <div class="lg:hidden flex items-center gap-3">
    <div class="flex items-center gap-1" style="font-size: 13px; font-weight: 700;">
      <a href="{{ route('language.switch', 'mk') }}"
         style="color: {{ app()->getLocale() === 'mk' ? '#194077' : '#9ca3af' }}; text-decoration: none;">
        MKD
      </a>
      <span style="color: #d1d5db; margin: 0 2px;">|</span>
      <a href="{{ route('language.switch', 'en') }}"
         style="color: {{ app()->getLocale() === 'en' ? '#194077' : '#9ca3af' }}; text-decoration: none;">
        EN
      </a>
    </div>

    <button id="mobileMenuOpen" class="flex flex-col justify-center items-center gap-[5px] p-2" onclick="document.getElementById('mobileMenu').classList.add('open')" aria-label="Open menu" style="background: none; border: none; cursor: pointer;">
      <span style="display: block; width: 24px; height: 2.5px; background: #194077; border-radius: 2px;"></span>
      <span style="display: block; width: 24px; height: 2.5px; background: #194077; border-radius: 2px;"></span>
      <span style="display: block; width: 24px; height: 2.5px; background: #194077; border-radius: 2px;"></span>
    </button>
  </div>

</nav>

{{-- Mobile fullscreen menu overlay --}}
<div id="mobileMenu" class="mobile-menu-overlay">

  {{-- Header: Logo + Close --}}
  <div class="mobile-menu-header">
    <a href="{{route('home-page')}}">
      <img src="{{ asset('images/logo.png') }}" alt="LinguaLink" style="width: 130px; height: 49.77px;">
    </a>
    <button onclick="document.getElementById('mobileMenu').classList.remove('open')" aria-label="Close menu" style="background: none; border: none; cursor: pointer; padding: 8px;">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2 2L18 18M18 2L2 18" stroke="#333" stroke-width="2.5" stroke-linecap="round"/>
      </svg>
    </button>
  </div>

  {{-- Menu items --}}
  <nav class="mobile-menu-nav">
    <a href="{{route('courses.index')}}" class="mobile-menu-item">
      <span>{{ __('nav.select_course') }}</span>
      <svg width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M1 1L7 7L1 13" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </a>
    <a href="{{route('exams.index')}}" class="mobile-menu-item">
      <span>{{ __('nav.select_exam') }}</span>
      <svg width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M1 1L7 7L1 13" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </a>
    <a href="{{route('about-us')}}" class="mobile-menu-item">
      <span>{{ __('nav.more_about_us') }}</span>
      <svg width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M1 1L7 7L1 13" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
    </a>



    {{-- Auth section for mobile --}}
    @auth
      @if(auth()->user()->isAdmin())
        <a href="{{ url('/admin') }}" class="mobile-menu-item">
          <span>{{ __('nav.admin_panel') }}</span>
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M1 1L7 7L1 13" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </a>
      @endif
      <form method="POST" action="{{ route('logout') }}" class="m-0" style="border-bottom: 1px solid #eee;">
        @csrf
        <button type="submit" class="mobile-menu-item" style="width: 100%; background: none; border: none; cursor: pointer; border-bottom: none;">
          <span>{{ __('nav.logout') }}</span>
          <svg width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M1 1L7 7L1 13" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </button>
      </form>
    @else
      <a href="{{ route('login') }}" class="mobile-menu-item">
        <span>{{ __('nav.login') }}</span>
        <svg width="8" height="14" viewBox="0 0 8 14" fill="none"><path d="M1 1L7 7L1 13" stroke="#999" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
      </a>
    @endauth
  </nav>

  {{-- Social icons at bottom --}}
  <div class="mobile-menu-social">
    <p style="font-family: 'Montserrat', sans-serif; font-weight: 700; font-size: 14px; color: #333; margin-bottom: 16px;">{{ __('nav.follow_us') }}</p>
    <div style="display: flex; gap: 12px;">
      <a href="#" class="mobile-social-icon">
        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
      </a>
      <a href="#" class="mobile-social-icon">
        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" class="fill-[#1e3a5f]"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
      </a>
      <a href="#" class="mobile-social-icon">
        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      </a>
    </div>
  </div>

</div>

<style>
  .mobile-menu-overlay {
    position: fixed; top: 0; left: 0; width: 90%; height: 100%;
    background: white; z-index: 100; display: flex; flex-direction: column;
    transform: translateX(-100%);
    transition: transform 0.35s cubic-bezier(0.4, 0, 0.2, 1);
    box-shadow: 5px 0 15px rgba(0,0,0,0.1);
    overflow-y: auto; -webkit-overflow-scrolling: touch;
  }
  .mobile-menu-overlay.open { transform: translateX(0); }
  body.mobile-menu-active { overflow: hidden; }
  .mobile-menu-header { display: flex; align-items: center; justify-content: space-between; padding: 12px 24px; flex-shrink: 0; }
  .mobile-menu-nav { flex: 1; display: flex; flex-direction: column; padding: 16px 0; }
  .mobile-menu-item { display: flex; align-items: center; justify-content: space-between; padding: 18px 28px; font-family: 'Montserrat', sans-serif; font-size: 15px; font-weight: 500; color: #333; text-decoration: none; border-bottom: 1px solid #eee; transition: background 0.15s ease; }
  .mobile-menu-item:first-child { border-top: 1px solid #eee; }
  .mobile-menu-item:active { background: #f5f5f5; }
  .mobile-menu-social { flex-shrink: 0; padding: 24px 28px 40px; }
  .mobile-social-icon { display: flex; align-items: center; justify-content: center; width: 44px; height: 44px; border-radius: 50%; background: #1e3a5f; color: white; transition: background 0.2s ease; }
  .mobile-social-icon:hover { background: #16304f; }
  @media (min-width: 1024px) { .mobile-menu-overlay { display: none !important; } }
</style>

<script>
  const mobileMenu = document.getElementById('mobileMenu');
  const observer = new MutationObserver(() => {
    if (mobileMenu.classList.contains('open')) {
      document.body.classList.add('mobile-menu-active');
    } else {
      document.body.classList.remove('mobile-menu-active');
    }
  });
  observer.observe(mobileMenu, { attributes: true, attributeFilter: ['class'] });
</script>