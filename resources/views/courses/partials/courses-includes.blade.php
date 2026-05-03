@php
$items = __('includes.items');
$colors = ['#194077', '#84CDF1', '#194077', '#84CDF1', '#194077', '#84CDF1', '#194077', '#84CDF1'];
@endphp

<style>
    .includes-card {
        background: #ffffff; border: 1.5px solid #d1d5db; border-radius: 16px;
        padding: 24px 20px; box-shadow: 0px 2px 6px rgba(0,0,0,0.07);
        transition: box-shadow 0.25s ease; height: 240px;
        box-sizing: border-box; overflow: hidden;
    }
    .includes-card:hover { box-shadow: 0px 8px 24px rgba(0,0,0,0.13); }
    @media (max-width: 768px) { .includes-card { height: 210px; } }
</style>

<section class="py-16 px-6 md:px-20">

    <h2 class="font-extrabold text-gray-900 mb-10 text-left md:text-center"
        style="font-size: clamp(1.4rem, 4vw, 2.2rem); line-height: 1.4;">
        <span class="block md:hidden">{!! __('includes.title_mobile') !!}</span>
        <span class="hidden md:block">
            {{ __('includes.title_desktop') }}<br>
            <span style="font-style: italic; font-weight: 300; color: #333;">{{ __('includes.title_every') }}</span>
            <span class="font-extrabold text-gray-900"> {{ __('includes.title_of') }} </span>
            <span style="color: #194077; font-weight: 800;">{{ __('includes.title_courses') }}</span>
        </span>
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6">
        @foreach($items as $i => $item)
        <div class="includes-card">
            <div style="margin-bottom: 10px;">
                <span style="font-size: clamp(2rem, 5vw, 3.5rem); font-weight: 200; line-height: 1;
                             color: {{ $colors[$i] }}; display: block; font-family: 'Outfit', sans-serif;">
                    {{ $item['num'] }}
                </span>
            </div>
            <p style="font-size: 0.88rem; font-weight: 700; color: #1a1a1a; line-height: 1.4; margin-bottom: 6px;">
                {{ $item['title'] }}
            </p>
            <p style="font-size: 0.78rem; color: #6b7280; line-height: 1.5;">
                {{ $item['desc'] }}
            </p>
        </div>
        @endforeach
    </div>

</section>