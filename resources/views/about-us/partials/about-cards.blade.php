{{-- resources/views/partials/about-cards.blade.php --}}

<style>
    .expand-card {
        flex: 1;
        transition: flex 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .expand-card.active {
        flex: 2.2;
    }

    @media (max-width: 768px) {
        .expand-card,
        .expand-card.active {
            flex: none;
            height: 220px;
            transition: none;
        }
        .expand-card .card-desc,
        .expand-card.active .card-desc {
            opacity: 1 !important;
            max-height: 200px !important;
        }
        .expand-card .read-more,
        .expand-card.active .read-more {
            opacity: 0 !important;
        }
    }
    .expand-card .card-desc {
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        transition: opacity 0.4s ease 0.2s, max-height 0.4s ease 0.2s;
    }
    .expand-card.active .card-desc {
        opacity: 1;
        max-height: 200px;
    }
    .expand-card .read-more {
        opacity: 0;
        transform: translateY(10px);
        transition: opacity 0.4s ease 0.3s, transform 0.4s ease 0.3s;
    }
    .expand-card.active .read-more {
        opacity: 1;
        transform: translateY(0);
    }
</style>

{{-- Desktop: flex row | Mobile: flex col --}}
<div class="flex flex-col md:flex-row gap-4 px-6 md:px-20 py-16 md:h-[420px]">

    {{-- Card 1 --}}
    <div class="expand-card active relative rounded-3xl overflow-hidden cursor-pointer"
         onclick="expandCard(this)">
        <img src="{{ asset('images/about-us/about-us-1.png') }}"
             alt="Модерно јазично училиште"
             class="w-full h-full object-cover">
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.6));"></div>
        <div class="absolute bottom-0 left-0 right-0 p-5 md:p-7 text-white">
            <p class="font-bold text-base md:text-lg leading-snug mb-2">Модерно јазично училиште</p>
            <p class="card-desc text-sm leading-relaxed mb-4">
                Со фокус на практична комуникација и реални ситуации.
            </p>
            <div class="read-more flex items-center gap-3">
                <span class="bg-white/90 text-gray-900 text-sm font-semibold px-5 py-2 rounded-full">
                    Прочитај повеќе
                </span>
                <span class="w-9 h-9 bg-white/90 rounded-full flex items-center justify-center text-gray-900 font-bold">
                    →
                </span>
            </div>
        </div>
    </div>

    {{-- Card 2 --}}
    <div class="expand-card relative rounded-3xl overflow-hidden cursor-pointer"
         onclick="expandCard(this)">
        <img src="{{ asset('images/about-us/about-us-5.jpg') }}"
             alt="Гаранција за квалитет"
             class="w-full h-full object-cover">
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.6));"></div>
        <div class="absolute bottom-0 left-0 right-0 p-5 md:p-7 text-white">
            <p class="font-bold text-base md:text-lg leading-snug mb-2">Гаранција за квалитет</p>
            <p class="card-desc text-sm leading-relaxed mb-4">
                Преку висококвалитетни наставни и образовни стандарди
            </p>
            <div class="read-more flex items-center gap-3">
                <span class="bg-white/90 text-gray-900 text-sm font-semibold px-5 py-2 rounded-full">
                    Прочитај повеќе
                </span>
                <span class="w-9 h-9 bg-white/90 rounded-full flex items-center justify-center text-gray-900 font-bold">
                    →
                </span>
            </div>
        </div>
    </div>

    {{-- Card 3 --}}
    <div class="expand-card relative rounded-3xl overflow-hidden cursor-pointer"
         onclick="expandCard(this)">
        <img src="{{ asset('images/about-us/about-us-6.jpg') }}"
             alt="Флексибилни формати на настава"
             class="w-full h-full object-cover">
        <div class="absolute inset-0" style="background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.6));"></div>
        <div class="absolute bottom-0 left-0 right-0 p-5 md:p-7 text-white">
            <p class="font-bold text-base md:text-lg leading-snug mb-2">Флексибилни формати на настава</p>
            <p class="card-desc text-sm leading-relaxed mb-4">
                Индивидуални, групни и онлајн часови според твоите потреби.
            </p>
            <div class="read-more flex items-center gap-3">
                <span class="bg-white/90 text-gray-900 text-sm font-semibold px-5 py-2 rounded-full">
                    Прочитај повеќе
                </span>
                <span class="w-9 h-9 bg-white/90 rounded-full flex items-center justify-center text-gray-900 font-bold">
                    →
                </span>
            </div>
        </div>
    </div>

</div>

<script>
    function expandCard(clicked) {
        document.querySelectorAll('.expand-card').forEach(card => {
            card.classList.remove('active');
        });
        clicked.classList.add('active');
    }
</script>