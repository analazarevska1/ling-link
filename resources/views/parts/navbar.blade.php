<nav class="flex items-center justify-between px-16 py-2 bg-white" style="font-family: 'Montserrat', sans-serif; font-size: 14px; font-weight: 400; line-height: 100%;">

  <!-- Logo -->
  <img src="{{ asset('images/logo.png') }}" alt="LinguaLink" style="width: 130px; height: 49.77px;">

  <!-- Nav Links -->
  <ul class="flex items-center gap-12 list-none m-0 p-0">
    <li><a href="#" class="text-[#194077]">Почетна</a></li>
    <li><a href="{{route('about-us')}}" class="text-gray-700 hover:text-[#194077]">За нас</a></li>
    <li><a href="#" class="text-gray-700 hover:text-[#194077]">Курсеви</a></li>
    <li><a href="#" class="text-gray-700 hover:text-[#194077]">Испити</a></li>
    <li><a href="{{route('contact')}}" class="text-gray-700 hover:text-[#194077]">Контакт</a></li>
  </ul>

  <!-- Login -->
  @auth
  <div class="flex items-center gap-4">
    <span style="font-family: 'Montserrat', sans-serif; font-size: 14px; color: #194077;">
      {{ auth()->user()->name }}
    </span>
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button type="submit" class="flex items-center gap-2 text-gray-700 hover:text-[#194077]" style="font-family: 'Montserrat', sans-serif; font-size: 14px;">
        <img src="{{ asset('images/user-icon.png') }}" class="h-6">
        Одјави се
      </button>
    </form>
  </div>
@else
  <a href="{{ route('login') }}" class="flex items-center gap-2 text-gray-700 hover:text-[#194077]" style="font-family: 'Montserrat', sans-serif; font-size: 14px;">
    <img src="{{ asset('images/user-icon.png') }}" class="h-6">
    Логирај се
  </a>
@endauth

</nav>