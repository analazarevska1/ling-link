{{-- resources/views/courses/partials/courses-includes.blade.php --}}

<style>
    .includes-card {
        background: #ffffff;
        border: 1.5px solid #d1d5db;
        border-radius: 16px;
        padding: 24px 20px;
        box-shadow: 0px 2px 6px rgba(0,0,0,0.07);
        transition: box-shadow 0.25s ease;
        height: 240px;
        box-sizing: border-box;
        overflow: hidden;
    }
    .includes-card:hover {
        box-shadow: 0px 8px 24px rgba(0,0,0,0.13);
    }

    @media (max-width: 768px) {
        .includes-card {
            height: 210px;
        }
    }
</style>

<section class="py-16 px-6 md:px-20">

    {{-- Heading --}}
    <h2 class="font-extrabold text-gray-900 mb-10 text-left md:text-center"
        style="font-size: clamp(1.4rem, 4vw, 2.2rem); line-height: 1.4;">
        <span class="block md:hidden">СЕ ШТО ТРЕБА ДА<br>ЗНАЕТЕ ЗА КУРСЕВИТЕ</span>
        <span class="hidden md:block">
            ШТО ВКЛУЧУВА<br>
            <span style="font-style: italic; font-weight: 300; color: #333;">СЕКОЈ</span>
            <span class="font-extrabold text-gray-900"> ОД </span>
            <span style="color: #194077; font-weight: 800;">КУРСЕВИТЕ:</span>
        </span>
    </h2>

    @php
    $items = [
        ['num' => '01', 'color' => '#194077', 'title' => 'Влезен тест за јазично познавање',     'desc' => 'за да се одреди најсоодветниот курс и ниво'],
        ['num' => '02', 'color' => '#84CDF1', 'title' => 'Светски признати методи и материјали', 'desc' => 'за да се одреди најсоодветниот курс'],
        ['num' => '03', 'color' => '#194077', 'title' => 'Континуирано следење и оценување',     'desc' => 'преку редовни задачи и тестови'],
        ['num' => '04', 'color' => '#84CDF1', 'title' => 'Редовни извештаи за напредокот',       'desc' => 'за клиентите, деца, нивните родители, студенти итн.'],
        ['num' => '05', 'color' => '#194077', 'title' => 'Дополнителни ресурси за учење',        'desc' => 'пристап до библиотека, компјутери итн.'],
        ['num' => '06', 'color' => '#84CDF1', 'title' => 'Интерактивна бела табла',              'desc' => 'современа технологија и најнови модерни елементи во наставата'],
        ['num' => '07', 'color' => '#194077', 'title' => 'Континуирано следење и оценување',     'desc' => 'преку редовни задачи и тестови'],
        ['num' => '08', 'color' => '#84CDF1', 'title' => 'Редовни извештаи за напредокот',       'desc' => 'за клиентите, деца, нивните родители, студенти итн.'],
    ];
    @endphp

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
        @foreach($items as $item)
        <div class="includes-card">

            {{-- Number --}}
            <div style="margin-bottom: 10px;">
                <span style="font-size: clamp(2rem, 5vw, 3.5rem); font-weight: 200; line-height: 1;
                             color: {{ $item['color'] }}; display: block; font-family: 'Outfit', sans-serif;">
                    {{ $item['num'] }}
                </span>
            </div>

            {{-- Title --}}
            <p style="font-size: 0.88rem; font-weight: 700; color: #1a1a1a; line-height: 1.4; margin-bottom: 6px;">
                {{ $item['title'] }}
            </p>

            {{-- Description --}}
            <p style="font-size: 0.78rem; color: #6b7280; line-height: 1.5;">
                {{ $item['desc'] }}
            </p>

        </div>
        @endforeach
    </div>

</section>