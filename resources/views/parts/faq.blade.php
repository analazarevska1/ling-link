<section class="w-full py-16 px-6 md:px-24" style="background: #e8f6fd;">

    {{-- Heading --}}
    <h2 class="font-black uppercase mb-4 text-left md:text-center"
        style="font-family: 'Jost', sans-serif; font-size: clamp(1.8rem, 5vw, 2.5rem); line-height: 1.2;">
        ЧЕСТО<br class="md:hidden">
        <span class="hidden md:inline"><br></span>
        ПОСТАВУВАНИ <span style="color: #194077;">ПРАШАЊА</span>
    </h2>

    <p class="text-gray-600 mb-10 text-left md:text-center" style="font-family: 'Montserrat', sans-serif; font-size: 0.95rem; line-height: 1.6;">
        Имаме одговори на најчестите прашања за да ти го олесниме изборот и уписот во курсевите.
    </p>

    <div class="flex flex-col gap-4 mx-auto" style="max-width: 700px;">

        @php
        $faqs = [
            ['q' => '1. Колку трае еден курс?',                        'a' => 'Траењето зависи од нивото и програмата, во просек од 8 до 12 недели.'],
            ['q' => '2. Дали нудите онлајн часови?',                   'a' => 'Да, имаме и онлајн и во живо настава – можеш да одбереш формат што најмногу ти одговара.'],
            ['q' => '3. Што добивам по завршување на курсот?',         'a' => 'По завршување добиваш сертификат и практични вештини за реална комуникација.'],
            ['q' => '4. Дали треба да правам тест пред упис?',         'a' => 'Да, правиме краток влезен тест за да го одредиме твоето ниво на знаење на јазикот.'],
            ['q' => '5. Кои јазици се достапни за учење?',             'a' => 'LinguaLink нуди широк спектар на јазици, од најпопуларните како англиски и германски.'],
            ['q' => '6. Дали нудите поддршка надвор од часовите?',     'a' => 'Да, секој студент добива пристап до материјали, квизови и консултации.'],
        ];
        @endphp

        @foreach($faqs as $faq)
        <div class="bg-white rounded-2xl overflow-hidden" style="box-shadow: 0px 0px 7px 0px rgba(0,0,0,0.08);">
            <button onclick="toggleFaq(this)" class="w-full flex items-center justify-between px-6 py-4 text-left">
                <span class="font-bold text-sm md:text-base" style="font-family: 'Montserrat', sans-serif;">
                    {{ $faq['q'] }}
                </span>
                {{-- Desktop: blue circle | Mobile: simple arrow --}}
                <div class="hidden md:flex flex-shrink-0 w-8 h-8 rounded-full items-center justify-center text-white" style="background: #194077;">
                    <svg class="faq-icon w-4 h-4 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/>
                    </svg>
                </div>
                <svg class="faq-icon md:hidden w-5 h-5 flex-shrink-0 text-gray-400 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                </svg>
            </button>
            <div class="faq-answer px-6 pb-4 text-gray-600 text-sm hidden text-left" style="font-family: 'Montserrat', sans-serif;">
                {{ $faq['a'] }}
            </div>
        </div>
        @endforeach

    </div>
</section>

<script>
    function toggleFaq(button) {
        const answer = button.nextElementSibling;
        const icons  = button.querySelectorAll('.faq-icon');
        const isOpen = !answer.classList.contains('hidden');

        document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
        document.querySelectorAll('.faq-icon').forEach(i => i.style.transform = 'rotate(0deg)');

        if (!isOpen) {
            answer.classList.remove('hidden');
            icons.forEach(i => i.style.transform = 'rotate(180deg)');
        }
    }
</script>