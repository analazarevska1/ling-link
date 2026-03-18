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
</style>

<section style="background-color: #194077; padding: 64px 150px; margin: 40px 0; width: 100%;">

    @php
    $cards = [
        ['bg' => '#84CDF1', 'title' => 'Самодоверба во комуникацијата и говорење.',    'desc' => 'Ке зборуваш англиски без страв и двоумење.',            'modal_title' => 'САМОДОВЕРБА ВО КОМУНИКАЦИЈА', 'modal_desc' => ' Најчестата пречка при учење јазик не е граматиката, туку стравот од зборување. На нашите часови ќе научите како да го надминете тој страв преку практични разговори, игри со улоги и реални ситуации. Постепено ќе стекнете сигурност во изразувањето, ќе го подобрите изговорот и ќе зборувате природно, без двоумење. Со секој час, ќе го чувствувате напредокот и ќе стекнувате вистинска самодоверба во комуникацијата.'],
        ['bg' => '#E5F7FF', 'title' => 'Подобри можности за работа и кариера',         'desc' => 'Јазикот ќе ти отвори врати кон нови професионални шанси.', 'modal_title' => 'МОЖНОСТИ ЗА КАРИЕРА',         'modal_desc' => 'Во денешниот свет, знаењето на јазикот е еден од најголемите адути за професионален успех. Со стекнатите комуникациски вештини ќе можете полесно да се поврзете со колеги и клиенти од различни земји, да учествувате на меѓународни состаноци и конференции, или да аплицирате за работа во странство. Курсевите во Lingua Link се фокусирани на реални ситуации во деловното опкружување, со цел да ви помогнат да напредувате во вашата кариерата'],
        ['bg' => '#84CDF1', 'title' => 'Поддршка при училиште или факултет',           'desc' => 'Полесно совладување на наставата.',                       'modal_title' => 'ПОДДРШКА ПРИ УЧЕЊЕ',          'modal_desc' => 'Без разлика дали се подготвувате за матурски, колоквиум или презентација, со нас ќе учите поефикасно и полесно ќе ја совладате наставата. Нашите професори го прилагодуваат материјалот според вашите потреби и темпо на учење, нудејќи индивидуален пристап и дополнителна поддршка. Ќе стекнете јасно разбирање на граматиката, ќе го збогатите речникот и ќе научите да пишувате и зборувате со повеќе сигурност. На тој начин, учењето станува полесно и поинтересно. '],
        ['bg' => '#E5F7FF', 'title' => 'Подготовка за испити',                         'desc' => 'Сигурност за IELTS, TOEFL, Cambridge и други тестови.',    'modal_title' => 'ПОДГОТОВКА ЗА ИСПИТИ',        'modal_desc' => 'Испитите како IELTS, TOEFL, Cambridge и други бараат специфична стратегија и фокусирана подготовка. Во Lingua Link ќе добиете темелна обука која ги опфаќа сите делови од тестот: читање, слушање, пишување и говорење. Ќе вежбате со автентични материјали, ќе добивате индивидуални совети и повратна информација од искусни инструктори. Нашата цел е да се чувствувате сигурни и подготвени, без страв или неизвесност на денот на испитот.'],
        ['bg' => '#84CDF1', 'title' => 'Слободно патување и секојдневна комуникација', 'desc' => 'Лесно ќе се снајдеш насекаде во светот.',                  'modal_title' => 'СЛОБОДНО ПАТУВАЊЕ',           'modal_desc' => 'Замислете да патувате без потреба од преведувач и да се снајдете во секоја ситуација – на аеродром, во хотел, ресторан или при разговор со локалци. Курсевите во Lingua Link се создадени за да ве научат јазикот од реалниот живот, со практични примери и сценарија. Ќе научите како природно да комуницирате во различни културни контексти и ќе се чувствувате опуштено каде и да одите. Јазикот ќе стане ваш најкорисен патнички алат – и средство за поврзување со луѓе од целиот свет.'],
    ];
    @endphp

    {{-- ── Row 1: Title + Card 1 + Card 2 ── --}}
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px; margin-bottom: 24px;">

        {{-- Title --}}
        <div style="display: flex; flex-direction: column; justify-content: center; padding-right: 40px; height: 260px;">
            <h2 style="font-size: 2.2rem; font-weight: 800; color: #ffffff; line-height: 1.2; margin-bottom: 20px;">
                КЛУЧНИ<br>ПРИДОБИВКИ
            </h2>
            <p style="font-size: 0.88rem; color: #cce4f0; line-height: 1.6;">
                Нашите курсеви носат практични вештини и резултати што веднаш ќе ги почувствуваш.
            </p>
        </div>

        {{-- Card 1 --}}
        <div class="benefit-wrapper">
            <div class="benefit-card" style="background-color: {{ $cards[0]['bg'] }};">
                <p style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; line-height: 1.4;">{{ $cards[0]['title'] }}</p>
                <p style="font-size: 0.88rem; color: #1a1a1a; line-height: 1.5;">{{ $cards[0]['desc'] }}</p>
            </div>
            <div class="benefit-btn">
                <button onclick="openBenefitModal(0)" style="width:90%;background:#fff;border:none;cursor:pointer;font-size:0.9rem;font-weight:500;color:#1a1a1a;padding:14px;border-radius:50px;box-shadow:0 2px 8px rgba(0,0,0,0.1);">Прочитај повеќе</button>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="benefit-wrapper">
            <div class="benefit-card" style="background-color: {{ $cards[1]['bg'] }};">
                <p style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; line-height: 1.4;">{{ $cards[1]['title'] }}</p>
                <p style="font-size: 0.88rem; color: #1a1a1a; line-height: 1.5;">{{ $cards[1]['desc'] }}</p>
            </div>
            <div class="benefit-btn">
                <button onclick="openBenefitModal(1)" style="width:90%;background:#fff;border:none;cursor:pointer;font-size:0.9rem;font-weight:500;color:#1a1a1a;padding:14px;border-radius:50px;box-shadow:0 2px 8px rgba(0,0,0,0.1);">Прочитај повеќе</button>
            </div>
        </div>

    </div>

    {{-- ── Row 2: Card 3 + Card 4 + Card 5 ── --}}
    <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 24px;">

        {{-- Card 3 --}}
        <div class="benefit-wrapper">
            <div class="benefit-card" style="background-color: {{ $cards[2]['bg'] }};">
                <p style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; line-height: 1.4;">{{ $cards[2]['title'] }}</p>
                <p style="font-size: 0.88rem; color: #1a1a1a; line-height: 1.5;">{{ $cards[2]['desc'] }}</p>
            </div>
            <div class="benefit-btn">
                <button onclick="openBenefitModal(2)" style="width:90%;background:#fff;border:none;cursor:pointer;font-size:0.9rem;font-weight:500;color:#1a1a1a;padding:14px;border-radius:50px;box-shadow:0 2px 8px rgba(0,0,0,0.1);">Прочитај повеќе</button>
            </div>
        </div>

        {{-- Card 4 --}}
        <div class="benefit-wrapper">
            <div class="benefit-card" style="background-color: {{ $cards[3]['bg'] }};">
                <p style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; line-height: 1.4;">{{ $cards[3]['title'] }}</p>
                <p style="font-size: 0.88rem; color: #1a1a1a; line-height: 1.5;">{{ $cards[3]['desc'] }}</p>
            </div>
            <div class="benefit-btn">
                <button onclick="openBenefitModal(3)" style="width:90%;background:#fff;border:none;cursor:pointer;font-size:0.9rem;font-weight:500;color:#1a1a1a;padding:14px;border-radius:50px;box-shadow:0 2px 8px rgba(0,0,0,0.1);">Прочитај повеќе</button>
            </div>
        </div>

        {{-- Card 5 --}}
        <div class="benefit-wrapper">
            <div class="benefit-card" style="background-color: {{ $cards[4]['bg'] }};">
                <p style="font-size: 1rem; font-weight: 700; color: #1a1a1a; margin-bottom: 10px; line-height: 1.4;">{{ $cards[4]['title'] }}</p>
                <p style="font-size: 0.88rem; color: #1a1a1a; line-height: 1.5;">{{ $cards[4]['desc'] }}</p>
            </div>
            <div class="benefit-btn">
                <button onclick="openBenefitModal(4)" style="width:90%;background:#fff;border:none;cursor:pointer;font-size:0.9rem;font-weight:500;color:#1a1a1a;padding:14px;border-radius:50px;box-shadow:0 2px 8px rgba(0,0,0,0.1);">Прочитај повеќе</button>
            </div>
        </div>

    </div>

</section>

{{-- Modal --}}
<div id="benefitModal" onclick="closeBenefitModal()"
     style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.45);
            z-index:9999; align-items:center; justify-content:center;">
    <div onclick="event.stopPropagation()"
         style="background:#fff; border-radius:16px; padding:48px 52px;
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