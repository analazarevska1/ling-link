<footer class="bg-white border-t border-blue-200 pt-12 pb-8 px-6 md:px-16">
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">

    {{-- Logo & Description --}}
    
    <div class="col-span-1">
      <div class="mb-4">
        {{-- Replace with your actual logo --}}
        <img src="{{ asset('images/logo.png') }}" alt="LinguaLink" class="h-30 w-70">
      </div>
      <p class="text-gray-600 text-sm leading-relaxed mb-5">
        Повеќе од училница – Lingua Link е заедница која те води од првите зборови до самоуверена комуникација.
      </p>
      <p class="text-gray-800 font-bold text-sm mb-3">Следете не на:</p>
      <div class="flex gap-3">
        <a href="#" class="bg-[#1e3a5f] hover:bg-[#16304f] text-white rounded-full w-11 h-11 flex items-center justify-center transition">
          <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
        </a>
        <a href="#" class="bg-[#1e3a5f] hover:bg-[#16304f] text-white rounded-full w-11 h-11 flex items-center justify-center transition">
          <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" class="fill-[#1e3a5f]"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
        </a>
        <a href="#" class="bg-[#1e3a5f] hover:bg-[#16304f] text-white rounded-full w-11 h-11 flex items-center justify-center transition">
          <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.18 2 2 0 0 1 3.6 1h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.6a16 16 0 0 0 6 6l.92-.92a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </a>
      </div>
    </div>

    {{-- Компанија --}}
    <div class="">
      <h4 class="text-gray-900 font-extrabold text-base mb-5">Компанија</h4>
      <ul class="space-y-10 text-gray-600 text-sm">
        <li><a href="#" class="hover:text-[#1e3a5f] transition">Почетна</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">За нас</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">Курсеви</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">Испити</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">Контакт</a></li>
      </ul>
    </div>

    {{-- Курсеви --}}
    <div class="">
      <h4 class="text-gray-900 font-extrabold text-base mb-5">Курсеви</h4>
      <ul class="space-y-10 text-gray-600 text-sm">
        <li><a href="#" class="hover:text-[#1e3a5f] transition">Англиски јазик</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">Македонски јазик за странци</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">Италијански јазик</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">Француски јазик</a></li>
      </ul>
    </div>

    {{-- Испити --}}
    <div class="">
      <h4 class="text-gray-900 font-extrabold text-base mb-5">Испити</h4>
      <ul class="space-y-10 text-gray-600 text-sm">
        <li><a href="#" class="hover:text-[#1e3a5f] transition">Telc</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">OnSet</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">TestDaF</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">TestAS</a></li>
        <li><a href="#" class="hover:text-[#1e3a5f] transition">Language Cert</a></li>
      </ul>
    </div>

  </div>

  {{-- Bottom bar --}}
  <div class="max-w-7xl mx-auto mt-10 pt-5 border-t border-gray-200 text-center text-gray-400 text-xs">
    © {{ date('Y') }} LinguaLink. Сите права се задржани.
  </div>
</footer>