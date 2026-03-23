{{-- resources/views/courses/partials/courses-benefits.blade.php --}}

<style>
    .benefit-wrapper {
        position: relative;
        height: 260px;
    }
    .benefit-card {
        position: absolute;
        inset: 0;
        border-radius: 18px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 32px;
        transition: bottom 0.35s ease;
        bottom: 0;
    }
    .benefit-btn {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        display: flex;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.35s ease;
    }
    .benefit-wrapper:hover .benefit-card { bottom: 60px; }
    .benefit-wrapper:hover .benefit-btn  { opacity: 1; }

    /* Mobile — disable hover effect, static cards */
    @media (max-width: 768px) {
        .benefit-wrapper {
            height: auto;
            position: static;
        }
        .benefit-card {
            position: static;
            border-radius: 18px;
            padding: 24px 20px;
            height: auto;
            bottom: auto;
            transition: none;
        }
        .benefit-wrapper:hover .benefit-card { bottom: auto; }
        .benefit-btn { display: none !important; }
    }
</style>

@php
$cards = [
    ['bg' => '#84CDF1', 'title' => 'Самодоверба во комуникацијата и говорење.',    'desc' => 'Ке зборуваш англиски без страв и двоумење.',            'modal_title' => 'САМОДОВЕРБА ВО КОМУНИКАЦИЈА', 'modal_desc' => 'Најчестата пречка при учење јазик не е граматиката, туку стравот од зборување. На нашите часови ќе научите како да го надминете тој страв преку практични разговори, игри со улоги и реални ситуации.'],
    ['bg' => '#E5F7FF', 'title' => 'Подобри можности за работа и кариера',         'desc' => 'Јазикот ќе ти отвори врати кон нови професионални шанси.', 'modal_title' => 'МОЖНОСТИ ЗА КАРИЕРА',         'modal_desc' => 'Во денешниот свет, знаењето на јазикот е еден од најголемите адути за професионален успех.'],
    ['bg' => '#84CDF1', 'title' => 'Поддршка при училиште или факултет',           'desc' => 'Полесно совладување на наставата.',                       'modal_title' => 'ПОДДРШКА ПРИ УЧЕЊЕ',          'modal_desc' => 'Без разлика дали се подготвувате за матурски, колоквиум или презентација, со нас ќе учите поефикасно.'],
    ['bg' => '#E5F7FF', 'title' => 'Подготовка за испити',                         'desc' => 'Сигурност за IELTS, TOEFL, Cambridge и други тестови.',    'modal_title' => 'ПОДГОТОВКА ЗА ИСПИТИ',        'modal_desc' => 'Испитите како IELTS, TOEFL, Cambridge и други бараат специфична стратегија и фокусирана подготовка.'],
    ['bg' => '#84CDF1', 'title' => 'Слободно патување и секојдневна комуникација', 'desc' => 'Лесно ќе се снајдеш насекаде во светот.',                  'modal_title' => 'СЛОБОДНО ПАТУВАЊЕ',           'modal_desc' => 'Замислете да патувате без потреба од преведувач и да се снајдете во секоја ситуација.'],
];
@endphp

{{-- ═══ DESKTOP ═══ --}}
<section class="hidden md:block" style="background-color: #194077; padding: 64px 150px; margin: 40px 0; width: 100%;">

    {{-- Row 1: Title + Card 1 + Card 2 --}}
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px; margin-bottom: 24px;">

        <div style="display: flex; flex-direction: column; justify-content: center; padding-right: 40px; height: 260px;">
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; line-height: 1.2; margin-bottom: 20px;">
                КЛУЧНИ<br>ПРИДОБИВКИ
            </h2>
            <p style="font-size: 0.88rem; color: #cce4f0; line-height: 1.6;">
                Нашите курсеви носат практични вештини и резултати што веднаш ќе ги почувствуваш.
            </p>
        </div>

        @foreach(array_slice($cards, 0, 2) as $i => $card)
        <div class="benefit-wrapper">
            <div class="benefit-card" style="background-color: {{ $card['bg'] }};">
                <p style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; line-height: 1.4;">{{ $card['title'] }}</p>
                <p style="font-size: 0.88rem; color: #1a1a1a; line-height: 1.5;">{{ $card['desc'] }}</p>
            </div>
            <div class="benefit-btn">
                <button onclick="openBenefitModal({{ $i }})" style="width:90%;background:#fff;border:none;cursor:pointer;font-size:0.9rem;font-weight:500;color:#1a1a1a;padding:14px;border-radius:50px;box-shadow:0 2px 8px rgba(0,0,0,0.1);">Прочитај повеќе</button>
            </div>
        </div>
        @endforeach

    </div>

    {{-- Row 2: Card 3 + Card 4 + Card 5 --}}
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px;">
        @foreach(array_slice($cards, 2, 3) as $i => $card)
        <div class="benefit-wrapper">
            <div class="benefit-card" style="background-color: {{ $card['bg'] }};">
                <p style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; line-height: 1.4;">{{ $card['title'] }}</p>
                <p style="font-size: 0.88rem; color: #1a1a1a; line-height: 1.5;">{{ $card['desc'] }}</p>
            </div>
            <div class="benefit-btn">
                <button onclick="openBenefitModal({{ $i + 2 }})" style="width:90%;background:#fff;border:none;cursor:pointer;font-size:0.9rem;font-weight:500;color:#1a1a1a;padding:14px;border-radius:50px;box-shadow:0 2px 8px rgba(0,0,0,0.1);">Прочитај повеќе</button>
            </div>
        </div>
        @endforeach
    </div>

</section>

{{-- ═══ MOBILE ═══ --}}
<section class="block md:hidden px-5 py-10">

    {{-- Title --}}
    <h2 style="font-size: 1.8rem; font-weight: 800; color: #1a1a1a; line-height: 1.2; margin-bottom: 12px;">
        КЛУЧНИ<br>ПРИДОБИВКИ
    </h2>
    <p style="font-size: 0.88rem; color: #555; line-height: 1.6; margin-bottom: 24px;">
        Нашите курсеви носат практични вештини и резултати што веднаш ќе ги почувствуваш.
    </p>

    {{-- Cards stacked --}}
    <div style="display: flex; flex-direction: column; gap: 16px;">
        @foreach($cards as $i => $card)
        <div class="benefit-wrapper" onclick="openBenefitModal({{ $i }})">
            <div class="benefit-card" style="background-color: {{ $card['bg'] }};">
                <p style="font-size: 0.95rem; font-weight: 700; color: #1a1a1a; margin-bottom: 8px; line-height: 1.4;">{{ $card['title'] }}</p>
                <p style="font-size: 0.85rem; color: #1a1a1a; line-height: 1.5;">{{ $card['desc'] }}</p>
            </div>
        </div>
        @endforeach
    </div>

</section>

{{-- Modal --}}
<div id="benefitModal" onclick="closeBenefitModal()"
     style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.45);
            z-index:9999; align-items:center; justify-content:center;">
    <div onclick="event.stopPropagation()"
         style="background:#fff; border-radius:16px; padding:36px 28px;
                max-width:580px; width:90%; position:relative; text-align:center;">
        <button onclick="closeBenefitModal()"
                style="position:absolute; top:16px; right:20px; background:none;
                       border:none; font-size:1.4rem; cursor:pointer; color:#333;">✕</button>
        <h3 id="benefitModalTitle"
            style="font-size:1.4rem; font-weight:800; color:#194077; margin-bottom:24px; line-height:1.3;"></h3>
        <p id="benefitModalDesc"
           style="font-size:0.95rem; color:#444; line-height:1.8;"></p>
    </div>
</div>

<script>
    const benefitCards = [
        @foreach($cards as $card)
        { title: "{{ $card['modal_title'] }}", desc: "{{ addslashes($card['modal_desc']) }}" },
        @endforeach
    ];

    function openBenefitModal(index) {
        document.getElementById('benefitModalTitle').innerText = benefitCards[index].title;
        document.getElementById('benefitModalDesc').innerText  = benefitCards[index].desc;
        document.getElementById('benefitModal').style.display  = 'flex';
    }

    function closeBenefitModal() {
        document.getElementById('benefitModal').style.display = 'none';
    }

    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeBenefitModal();
    });
</script>