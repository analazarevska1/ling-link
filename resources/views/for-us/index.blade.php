@extends('parts.main')


@section('content')

    {{-- Hero Banner --}}
    <div class="relative w-full h-32 overflow-hidden px-20 ">
        <img src="{{ asset('images/about-us/about-us-1.png') }}" alt="За нас" class="w-full h-full object-cover brightness-50 rounded-3xl">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-5xl font-extrabold tracking-widest uppercase">За Нас</h1>
        </div>
    </div>

    {{-- Main Section --}}
    <div class="flex gap-40 w-full justify-between px-20 py-14 items-center">

    {{-- Left: Text --}}
    <div class="w-1/3">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-6">
            КОИ СМЕ <span class="text-[#4a90c4]">НИЕ?</span>
        </h2>
        <p class="text-gray-600 text-base leading-relaxed mb-10">
            Lingua Link е училиште кое комбинира современи методи, искусни професори и програми прилагодени на секој студент. Со нас, учењето е поефикасно, подостапно и насочено кон реални резултати.
        </p>

        {{-- Stats --}}
        <div class="flex gap-12">
            <div>
                <p class="text-5xl font-extrabold text-[#1e3a5f]">95%</p>
                <p class="text-gray-700 font-medium mt-1">валдиност</p>
            </div>
            <div>
                <p class="text-5xl font-extrabold text-[#4a90c4]">100%</p>
                <p class="text-[#4a90c4] font-medium mt-1">успешност</p>
            </div>
        </div>
    </div>

  <div class="w-2/3 overflow-hidden rounded-2xl shadow-lg h-[300px]">
    <img src="{{ asset('images/about-us/about-us-2.jpg') }}" alt="Студент"
         class="w-full h-full object-cover" style="object-position: center 80%;">
</div>
    {{-- Right: Image
    <div class="w-2/3 overflow-hidden rounded-2xl shadow-lg h-[320px]">
        <img src="{{ asset('images/about-us/about-us-2.jpg') }}" alt="Студент" class="w-full h-full object-cover object-[center_30%]">
    </div> --}}

</div>

{{-- Нашата Визија Section --}}
<section class="px-20 py-16">

    {{-- Header --}}
    <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-4">НАШАТА <span class="text-[#4a90c4]">ВИЗИЈА</span></h2>
        <p class="text-gray-500 text-base max-w-xl mx-auto">
            Веруваме дека јазикот не е само средство за комуникација, туку и алатка за личен и професионален развој.
        </p>
    </div>

  {{-- Top 3 Cards --}}
<div class="grid grid-cols-3 gap-12 mb-6">
    <div class="bg-[#1e3a5f] text-white rounded-2xl p-8 min-h-[220px] flex flex-col justify-center">
        <h3 class="font-bold text-xl mb-3">Свет без јазични бариери</h3>
        <p class="text-base leading-relaxed opacity-90">Каде што секој има пристап до нови можности.</p>
    </div>
    <div class="bg-[#5aaedc] text-white rounded-2xl p-8 min-h-[220px] flex flex-col justify-center">
        <h3 class="font-bold text-xl mb-3">Знаење што создава иднина</h3>
        <p class="text-base leading-relaxed opacity-90">Учење кое носи реални резултати во образованието и кариерата.</p>
    </div>
    <div class="bg-[#ddeef8] text-gray-800 rounded-2xl p-8 min-h-[220px] flex flex-col justify-center">
        <h3 class="font-bold text-xl mb-3">Заедница што поврзува</h3>
        <p class="text-base leading-relaxed">Место каде студенти, професори и култури се обединуваат преку јазиците.</p>
    </div>
</div>

{{-- Bottom 4 Cards --}}
<div class="grid grid-cols-4 gap-12">
    <div class="border border-gray-200 rounded-2xl px-10 bg-white text-base text-gray-700 min-h-[140px] flex items-center">
        <span><span class="font-bold">Учиш</span> како и каде сакаш.</span>
    </div>
    <div class="border border-gray-200 rounded-2xl px-10 bg-white text-base text-gray-700 min-h-[140px] flex items-center">
        <span>Нашите курсеви се <span class="font-bold">кратки, но ефективни.</span></span>
    </div>
    <div class="border border-gray-200 rounded-2xl px-10 bg-white text-base text-gray-700 min-h-[140px] flex items-center">
        <span>Сертификатите се препознаени <span class="font-bold">низ цела Европа.</span></span>
    </div>
    <div class="border border-gray-200 rounded-2xl px-10 bg-white text-base text-gray-700 min-h-[140px] flex items-center">
        <span>Постигни видлив напредок за <span class="font-bold">неколку недели.</span></span>
    </div>
</div>

</section>


{{-- Нашите Вредности Section --}}
<section class="bg-white px-20 py-16">

    {{-- Header --}}
    <div class="text-center mb-12">
        <h2 class="text-4xl font-extrabold text-gray-900">НАШИТЕ <span class="text-[#4a90c4]">ВРЕДНОСТИ</span></h2>
    </div>

   {{-- Image + Values --}}
<div class="flex gap-16 items-stretch mb-16">

    {{-- Left: Image --}}
    <div class="w-1/2 overflow-hidden rounded-2xl shadow-md ">
        <img src="{{ asset('images/about-us/about-us-3.png') }}" alt="Наставник"
             class="w-full h-[40vh] object-cover">
    </div>

    {{-- Right: Values List --}}
    <div class="w-1/2 flex flex-col justify-between py-2">

        <div class="flex gap-5 items-start">
            <span class="text-[#1e3a5f] text-5xl font-bold leading-none mt-1">→</span>
            <p class="text-gray-700 text-base leading-relaxed">
                <span class="font-bold">Квалитет и професионалност</span> – наставата ја водат сертифицирани професори со меѓународно искуство.
            </p>
        </div>

        <div class="flex gap-5 items-start">
            <span class="text-[#4a90c4] text-5xl font-bold leading-none mt-1">→</span>
            <p class="text-gray-700 text-base leading-relaxed">
                <span class="font-bold">Модерен пристап кон учење</span> – интерактивни методи што го прават јазикот полесен и поинтересен.
            </p>
        </div>

        <div class="flex gap-5 items-start">
            <span class="text-[#1e3a5f] text-5xl font-bold leading-none mt-1">→</span>
            <p class="text-gray-700 text-base leading-relaxed">
                <span class="font-bold">Поддршка и доверба</span> – секој студент добива внимание, мотивација и средина каде може да напредува.
            </p>
        </div>

    </div>
</div>
{{-- Bottom Stats --}}
<div class="grid grid-cols-4 gap-6">
    
    <!-- Card 1 -->
    <div class="bg-[#1e3a5f] text-white rounded-3xl rounded-bl-[80px] p-8 text-center min-h-35 flex flex-col items-center justify-center">
        <p class="text-5xl font-extrabold mb-2">500+</p>
        <p class="text-base opacity-90">задоволни студенти</p>
    </div>

    <!-- Card 2 -->
    <div class="bg-[#5aaedc] text-white rounded-3xl p-8 text-center min-h-35 flex flex-col items-center justify-center">
        <p class="text-5xl font-extrabold mb-2">10+</p>
        <p class="text-base opacity-90">години искуство</p>
    </div>

    <!-- Card 3 -->
    <div class="bg-[#ddeef8] text-gray-800 rounded-3xl p-8 text-center min-h-35 flex flex-col items-center justify-center">
        <p class="text-5xl font-extrabold mb-2">15+</p>
        <p class="text-base">сертификати и акредитации</p>
    </div>

    <!-- Card 4 -->
    <div class="bg-[#1e3a5f] text-white rounded-3xl rounded-br-[80px] p-8 text-center min-h-35 flex flex-col items-center justify-center">
        <p class="text-5xl font-extrabold mb-2">20+</p>
        <p class="text-base opacity-90">професионални наставници</p>
    </div>

</div>

</section>

{{-- Bottom Banner --}}
<section class="px-20 py-10">
    <div class="relative overflow-hidden rounded-3xl h-90">
        <img src="{{ asset('images/about-us/about-us-4.jpg') }}" alt="Banner"
             class="w-full h-full object-cover brightness-70">
        <div class="absolute inset-0 flex items-center justify-center text-center px-10">
            <h2 class="text-white text-5xl font-bold uppercase leading-tight">
                Јазикот е твој клуч, <br> ние ја отвараме вратата
            </h2>
        </div>
    </div>
</section>

@endsection

