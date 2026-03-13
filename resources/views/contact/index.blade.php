@extends('parts.main')

@section('content')

<div class="relative  w-full h-32 overflow-hidden px-4 md:px-20">
    <img src="{{ asset('images/contact-img.jpg') }}" alt="За нас"
        class="w-full h-full brightness-70 rounded-3xl object-cover"
        style="object-position: center 25%;">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-3xl md:text-5xl font-extrabold tracking-widest uppercase">Контакт</h1>
    </div>
</div>

<div class="w-full px-4 md:px-20 py-10">
    <div class="flex flex-col md:flex-row gap-6">

        {{-- Left: Form Card --}}
        <div class="flex-1 bg-white rounded-3xl p-8 shadow-2xl">
            <h2 class="text-2xl font-extrabold uppercase tracking-wide mb-2">Форма За Пријавување</h2>
            <p class="text-gray-500 text-sm mb-6">Пополнете ја формата и некој од нашиот тим ќе ве контактира во најкус можен рок.</p>

            <form method="POST" action="#">
                @csrf

                {{-- Name + Phone --}}
                <div class="flex flex-col md:flex-row gap-4 mb-4">
                    <div class="flex-1">
                        <label class="block font-bold text-sm mb-1">Вашето име и презиме</label>
                        <input type="text" placeholder="пр.Маја Иванова"
                            class="w-full border border-gray-300 rounded-full px-4 py-4 text-sm focus:outline-none focus:ring-2 focus:ring-blue-900">
                    </div>
                    <div class="flex-1">
                        <label class="block font-bold text-sm mb-1">Вашиот телефонски број</label>
                        <input type="text" placeholder="пр.07* *** ***"
                            class="w-full border border-gray-300 rounded-full px-4 py-4 text-sm focus:outline-none focus:ring-2 focus:ring-blue-900">
                    </div>
                </div>

                {{-- Email --}}
                <div class="mb-4">
                    <label class="block font-bold text-sm mb-1">Вашата е-меил адреса</label>
                    <input type="email" placeholder="пр. majaivanova@gmail.com"
                        class="w-full border border-gray-300 rounded-full px-4 py-4 text-sm focus:outline-none focus:ring-2 focus:ring-blue-900">
                </div>

                {{-- Message --}}
                <div class="mb-6">
                    <label class="block font-bold text-sm mb-1">Порака</label>
                    <textarea rows="7" placeholder='пр. "Сакам да се пријавам за активно и пасивно."'
                        class="w-full border border-gray-300 rounded-2xl px-4 py-4 text-sm focus:outline-none focus:ring-2 focus:ring-blue-900 resize-none"></textarea>
                </div>

                {{-- Submit --}}
                <div class="flex justify-center">
                    <button type="submit"
                        class="  text-white px-10 py-4 rounded-full font-semibold hover:bg-blue-800 transition"style="background-color: #194077;">
                        Пријави се
                    </button>
                </div>
            </form>
        </div>

        {{-- Right: Contact Info Card --}}
        <div class="flex-1 rounded-3xl p-8 text-white" style="background-color: #194077;">
            <h2 class="text-2xl font-extrabold uppercase tracking-wide mb-2">Стапете Во Контакт</h2>
            <p class="text-blue-200 text-sm mb-8">Слободно обратете ни се за сите прашања, информации или соработка. Тука сме да ви помогнеме.</p>

            {{-- Location --}}
            <div class="flex items-start gap-4 mb-6">
                <div class="bg-white rounded-full p-3 flex-shrink-0">
                    <svg class="w-5 h-5" style="color: #1e3a5f;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Локација</p>
                    <p class="text-blue-200 text-sm">Vasil Gjorgov 33, Skopje 1000</p>
                </div>
            </div>

            {{-- Email --}}
            <div class="flex items-start gap-4 mb-6">
                <div class="bg-white rounded-full p-3 flex-shrink-0">
                    <svg class="w-5 h-5" style="color: #1e3a5f;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Е-меил</p>
                    <a href="http://www.lingualink.com.mk/" class="text-blue-300 text-sm hover:underline">http://www.lingualink.com.mk/</a>
                </div>
            </div>

            {{-- Phone --}}
            <div class="flex items-start gap-4 mb-8">
                <div class="bg-white rounded-full p-3 flex-shrink-0">
                    <svg class="w-5 h-5" style="color: #1e3a5f;" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.61 21 3 13.39 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                    </svg>
                </div>
                <div>
                    <p class="font-bold">Телефонски броеви</p>
                    <p class="text-blue-200 text-sm">(02) 3225-755</p>
                    <p class="text-blue-200 text-sm">(02) 3222-189</p>
                    <p class="text-blue-200 text-sm">+389 70 21 21 29</p>
                </div>
            </div>

            {{-- Social --}}
            <div>
                <p class="font-bold mb-3">Следете не на:</p>
                <div class="flex gap-3">
                    {{-- Facebook --}}
                    <a href="#" class="bg-white rounded-full p-3 hover:bg-blue-100 transition">
                        <svg class="w-5 h-5" style="color: #1e3a5f;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                        </svg>
                    </a>
                    {{-- Instagram --}}
                    <a href="#" class="bg-white rounded-full p-3 hover:bg-blue-100 transition">
                        <svg class="w-5 h-5" style="color: #194077;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <circle cx="12" cy="12" r="4"/>
                            <circle cx="17.5" cy="6.5" r="1" fill="currentColor"/>
                        </svg>
                    </a>
                    {{-- Phone --}}
                    <a href="#" class="bg-white rounded-full p-3 hover:bg-blue-100 transition">
                        <svg class="w-5 h-5" style="color: #1e3a5f;" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.61 21 3 13.39 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.24 1.02l-2.21 2.2z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>

<section class="bg-gray-100 py-10">

  <h2 class="text-center text-3xl font-bold mb-10">
    НАЈДЕТЕ НЕ ОВДЕ:
  </h2>

  <div class="mx-auto px-20">
    
    <div class="rounded-3xl overflow-hidden shadow-lg">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2965.3422236540873!2d21.413732876666053!3d41.99293045821597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1354143829866af5%3A0xd1515ebd1df9c72b!2sLinguaLink!5e0!3m2!1sen!2smk!4v1773431798143!5m2!1sen!2smk" 
     class="w-full h-112.5 border-0"
     style="border:0;" 
     allowfullscreen="" 
     loading="lazy" 
     referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    </div>

  </div>

</section>



@endsection

