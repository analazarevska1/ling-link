

{{-- resources/views/courses/partials/courses-includes.blade.php --}}

<section class="py-16" style="max-width: 100%; padding-left: 80px; padding-right: 80px;">

    {{-- Heading --}}
    <h2 class="text-center font-extrabold text-gray-900 mb-12" style="font-size: 2.2rem; line-height: 1.4;">
        ШТО ВКЛУЧУВА<br>
        <span style="font-style: italic; font-weight: 300; color: #333;">СЕКОЈ</span>
        <span class="font-extrabold text-gray-900"> ОД </span>
        <span style="color: #194077; font-weight: 800;">КУРСЕВИТЕ:</span>
    </h2>

    {{-- Grid --}}
    <div style="display: grid; grid-template-columns: repeat(4, 245px); justify-content: center;; gap: 24px;">

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

        @foreach($items as $item)
<div style="background: #ffffff; border: 1.5px solid #d1d5db; border-radius: 16px; padding: 28px 24px; width: 245px; height: 240px; box-sizing: border-box; hover: shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);">

            {{-- Number --}}
            <div style="margin-bottom: 16px; ">
<span style="font-size: 4rem; font-weight: 300; line-height: 1; color: {{ $item['color'] }}; display: block; font-family: 'Josefin Sans', sans-serif;">
        {{ $item['num'] }}
    </span>
</div>

            {{-- Title --}}
            <p style="font-size: 0.95rem; font-weight: 700; color: #1a1a1a; line-height: 1.4; padding-right: 50px">
                {{ $item['title'] }}
            </p>

            {{-- Description --}}
            <p style="font-size: 0.85rem; color: #6b7280; line-height: 1.5;">
                {{ $item['desc'] }}
            </p>

        </div>
        @endforeach

    </div>

</section>


@push('styles')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap');
    .includes-number {
        font-family: 'Josefin Sans', sans-serif;
    }
</style>
@endpush

