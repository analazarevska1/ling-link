@extends('parts.main')

@section('content')

    {{-- Hero Banner --}}
    <div class="relative w-full h-32 overflow-hidden px-4 md:px-20">
        <img src="{{ asset('images/about-us/about-us-1.png') }}" alt="За нас"
            class="w-full h-full object-cover brightness-50 rounded-3xl">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-3xl md:text-5xl  tracking-widest uppercase font-jost font-semibold">За Нас</h1>
        </div>
    </div>

    {{-- Main Section --}}
    <div class="flex flex-col md:flex-row gap-10 md:gap-40 w-full px-4 md:px-20 py-14 items-center">

        <div class="w-full md:w-1/3">
            <h2 class="text-3xl md:text-4xl  text-gray-900 mb-6 font-jost font-semibold">
                КОИ СМЕ <span class="text-[#194077] font-jost font-semibold">НИЕ <span class="font-jost font-semibold text-gray-900 ">?</span></span> 
            </h2>
            <p class="text-gray-600 text-base leading-relaxed mb-10 pr-16 font-jost font-semibold">
                Lingua Link е училиште кое комбинира современи методи, искусни професори и програми прилагодени на секој
                студент. Со нас, учењето е поефикасно, подостапно и насочено кон реални резултати.
            </p>
         
        </div>

        <div class="w-full md:w-2/3 overflow-hidden rounded-2xl shadow-lg h-64 md:h-75">
            <img src="{{ asset('images/about-us/about-us-2.jpg') }}" alt="Студент"
                class="w-full h-full object-cover" style="object-position: center 80%;">
        </div>

    </div>
    @include('about-us.partials.about-cards')


    {{-- Нашата Визија Section --}}
    <section class="px-4 md:px-20 py-16">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-4 font-jost ">НАШАТА <span class="text-[#194077] font-jost font-semibold">ВИЗИЈА</span></h2>
            <p class="text-gray-500 text-base max-w-xl mx-auto font-jost ">
                Веруваме дека јазикот не е само средство за комуникација, туку и алатка за личен и професионален развој.
            </p>
        </div>

        {{-- Top 3 Cards --}}
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-12 mb-6">
            <div class="bg-[#194077] text-white rounded-2xl p-8 min-h-40 md:min-h-70 flex flex-col justify-center py-10 " >
                <h3 class="font-bold text-xl mb-3 pr-20">Свет без јазични бариери</h3>
                <p class="text-xl leading-relaxed opacity-90 pr-28">Каде што секој има пристап до нови можности.</p>
            </div>
            <div class="bg-[#84CDF1] text-black rounded-2xl p-8 min-h-40 md:min-h-55 flex flex-col justify-center py-1-">
                <h3 class="font-bold text-xl mb-3 pr-28">Знаење што создава иднина</h3>
                <p class="text-xl leading-relaxed opacity-90 pr-20">Учење кое носи реални резултати во образованието и кариерата.</p>
            </div>
            <div class="bg-[#E5F7FF] text-gray-800 rounded-2xl p-8 min-h-40 md:min-h-55 flex flex-col justify-center py-10">
                <h3 class="font-bold text-xl mb-3 pr-10 text-black">Заедница што поврзува</h3>
                <p class="text-xl leading-relaxed pr-20">Место каде студенти, професори и култури се обединуваат преку јазиците.</p>
            </div>
        </div>
     
    </section>

    {{-- Нашите Вредности Section --}}
    <section class="bg-white px-4 md:px-20 py-16 font-jost font-semibold">

        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900">НАШИТЕ <span class="text-[#194077]">ВРЕДНОСТИ</span></h2>
        </div>

        <div class="flex flex-col md:flex-row gap-10 md:gap-16 items-stretch mb-16">

            <div class="w-full md:w-1/2 overflow-hidden rounded-2xl shadow-md">
                <img src="{{ asset('images/about-us/about-us-3.png') }}" alt="Наставник"
                    class="w-full h-64 md:h-[40vh] object-cover">
            </div>

            <div class="w-full md:w-1/2 flex flex-col justify-between gap-8 md:gap-0 py-2">
                <div class="flex gap-5 items-start">
                    <span class="text-[#1e3a5f] text-4xl md:text-5xl font-bold leading-none mt-1">→</span>
                    <p class="text-gray-700 text-base leading-relaxed">
                        <span class="font-bold">Квалитет и професионалност</span> – наставата ја водат сертифицирани професори со меѓународно искуство.
                    </p>
                </div>
                <div class="flex gap-5 items-start">
                    <span class="text-[#4a90c4] text-4xl md:text-5xl font-bold leading-none mt-1">→</span>
                    <p class="text-gray-700 text-base leading-relaxed">
                        <span class="font-bold">Модерен пристап кон учење</span> – интерактивни методи што го прават јазикот полесен и поинтересен.
                    </p>
                </div>
                <div class="flex gap-5 items-start">
                    <span class="text-[#1e3a5f] text-4xl md:text-5xl font-bold leading-none mt-1">→</span>
                    <p class="text-gray-700 text-base leading-relaxed">
                        <span class="font-bold">Поддршка и доверба</span> – секој студент добива внимание, мотивација и средина каде може да напредува.
                    </p>
                </div>
            </div>

        </div>

        {{-- Bottom Stats --}}
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            <div class="bg-[#1e3a5f] text-white rounded-3xl rounded-bl-[80px] p-8 text-center min-h-[140px] flex flex-col items-center justify-center">
                <p class="text-4xl md:text-5xl font-extrabold mb-2">500+</p>
                <p class="text-base opacity-90">задоволни студенти</p>
            </div>
            <div class="bg-[#5aaedc] text-white rounded-3xl p-8 text-center min-h-[140px] flex flex-col items-center justify-center">
                <p class="text-4xl md:text-5xl font-extrabold mb-2">10+</p>
                <p class="text-base opacity-90">години искуство</p>
            </div>
            <div class="bg-[#ddeef8] text-gray-800 rounded-3xl p-8 text-center min-h-[140px] flex flex-col items-center justify-center">
                <p class="text-4xl md:text-5xl font-extrabold mb-2">15+</p>
                <p class="text-base">сертификати и акредитации</p>
            </div>
            <div class="bg-[#1e3a5f] text-white rounded-3xl rounded-br-[80px] p-8 text-center min-h-[140px] flex flex-col items-center justify-center">
                <p class="text-4xl md:text-5xl font-extrabold mb-2">20+</p>
                <p class="text-base opacity-90">професионални наставници</p>
            </div>
        </div>

    </section>

    {{-- Bottom Banner --}}
    <section class="px-4 md:px-20 py-10">
        <div class="relative overflow-hidden rounded-3xl h-60 md:h-90">
            <img src="{{ asset('images/about-us/about-us-4.jpg') }}" alt="Banner"
                class="w-full h-full object-cover brightness-70">
            <div class="absolute inset-0 flex items-center justify-center text-center px-6 md:px-10">
                <h2 class="text-white text-3xl md:text-5xl font-bold uppercase leading-tight font-jost font-semibold">
                    Јазикот е твој клуч, <br> ние ја отвараме вратата
                </h2>
            </div>
        </div>
    </section>

@endsection