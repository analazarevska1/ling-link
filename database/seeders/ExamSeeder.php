<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Exam;

class ExamSeeder extends Seeder
{
    public function run(): void
    {
        // ── 1. TELC ─────────────────────────────────────────────────────────────
        $telc = Exam::create([
            'title'                 => 'TELC',
            'subtitle'              => 'The English Language Certificates',
            'duration'              => '2 часа и 40 минути',
            'description'           => 'Твојот доказ за јазични вештини што отвора врати низ Европа. Полагај од А1 до Ц2 нивоа, валидно за работа, студии и миграција.',
            'title_en'              => 'TELC',
            'subtitle_en'           => 'The English Language Certificates',
            'duration_en'           => '2 hours and 40 minutes',
            'description_en'        => 'Your proof of language skills that opens doors across Europe. Take exams from A1 to C2 level, valid for work, studies and migration.',
            'results_time'          => '4–6 недели',
            'has_fast_registration' => false,
            'is_on_demand'          => false,
            'layout_type'           => 'aptitude',
            'info_cards'            => [
                ['title' => 'Флексибилна подготовка', 'items' => ['онлајн и во живо.']],
                ['title' => 'Вкупно времетраење',      'items' => ['приближно 2 часа и 40 минути.']],
                ['title' => 'Европско признавање',     'items' => ['сертификатите важат низ цела ЕУ.']],
                ['title' => 'Брзи резултати',          'items' => ['добиваш сертификат за 4–6 недели.']],
            ],
            'where_recognized'  => 'Насекаде во Европа.',
            'what_for'          => 'За образование и кариера',
            'official_site_url' => 'https://www.telc.net',
            'image'             => 'https://ik.imagekit.io/ijiuecjvx/exam-photos/29456a0dcb1a4d90412fa8fca1c9eb1bc8c3944b.jpg',
            'is_active'         => true,
            'is_featured'       => true,
        ]);

        $telc->levels()->createMany([
            [
                'level'          => 'А1-А2',
                'name'           => 'Основен корисник',
                'description'    => 'Елементарно познавање на јазикот',
                'name_en'        => 'Basic User',
                'description_en' => 'Elementary knowledge of the language',
                'can_do'         => [
                    'Разбираш едноставни фрази и секојдневни изрази',
                    'Можеш да се претставиш и да поставуваш основни прашања',
                    'Комунициш во едноставни, рутински ситуации',
                    'Го опишуваш своето потекло, семејство и непосредна околина',
                ],
                'can_do_en'      => [
                    'You understand simple phrases and everyday expressions',
                    'You can introduce yourself and ask basic questions',
                    'You communicate in simple, routine situations',
                    'You describe your origin, family and immediate surroundings',
                ],
            ],
            [
                'level'          => 'Б1-Б2',
                'name'           => 'Независен корисник',
                'description'    => 'Средно до напредно познавање на јазикот',
                'name_en'        => 'Independent User',
                'description_en' => 'Intermediate to upper-intermediate knowledge',
                'can_do'         => [
                    'Разбираш јасен, стандарден говор за теми поврзани со секојдневниот живот',
                    'Можеш да изразиш мислење, став или објаснување на тема што те интересира',
                    'Ги разбираш главните идеи од комплексни текстови, статии и дискусии',
                    'Можеш да водиш разговор со изворни говорители без поголеми потешкотии',
                ],
                'can_do_en'      => [
                    'You understand clear, standard speech on familiar everyday topics',
                    'You can express an opinion, viewpoint or explanation on a topic of interest',
                    'You understand the main ideas of complex texts, articles and discussions',
                    'You can hold a conversation with native speakers without major difficulty',
                ],
            ],
            [
                'level'          => 'Ц1-Ц2',
                'name'           => 'Напреден корисник',
                'description'    => 'Високо и академско познавање на јазикот',
                'name_en'        => 'Proficient User',
                'description_en' => 'High and academic knowledge of the language',
                'can_do'         => [
                    'Течно и спонтано зборуваш без очигледно пребарување на зборови',
                    'Разбираш комплексни и долги текстови, академски и професионални содржини',
                    'Ја користиш граматиката природно и со висока точност',
                    'Можеш да пишуваш детални, добро структурирани и стилски соодветни текстови',
                ],
                'can_do_en'      => [
                    'You speak fluently and spontaneously without obvious searching for words',
                    'You understand complex and lengthy texts, academic and professional content',
                    'You use grammar naturally and with high accuracy',
                    'You can write detailed, well-structured and stylistically appropriate texts',
                ],
            ],
        ]);

        $telc->structureParts()->createMany([
            ['icon' => 'reading',   'order' => 1, 'title' => 'Читање',   'duration' => '60 минути', 'description' => 'Разбирање на пишани текстови, статии и книжевни пасуси',      'title_en' => 'Reading',   'duration_en' => '60 minutes', 'description_en' => 'Understanding written texts, articles and literary passages'],
            ['icon' => 'writing',   'order' => 2, 'title' => 'Пишување', 'duration' => '45 минути', 'description' => 'Составување есеј и извршување практични задачи за пишување', 'title_en' => 'Writing',   'duration_en' => '45 minutes', 'description_en' => 'Composing essays and completing practical writing tasks'],
            ['icon' => 'listening', 'order' => 3, 'title' => 'Слушање',  'duration' => '40 минути', 'description' => 'Разбирање на говорен јазик во различни контексти',           'title_en' => 'Listening', 'duration_en' => '40 minutes', 'description_en' => 'Understanding spoken language in various contexts'],
            ['icon' => 'speaking',  'order' => 4, 'title' => 'Говорење', 'duration' => '60 минути', 'description' => 'Разговор еден-на-еден со сертифициран испитувач',            'title_en' => 'Speaking',  'duration_en' => '60 minutes', 'description_en' => 'One-on-one conversation with a certified examiner'],
        ]);

        $telc->examDates()->createMany([
            ['registration_start' => '2025-07-01', 'registration_deadline' => '2025-09-10', 'exam_date' => '2025-09-18', 'is_active' => true],
            ['registration_start' => '2025-10-01', 'registration_deadline' => '2025-11-20', 'exam_date' => '2025-11-28', 'is_active' => true],
            ['registration_start' => '2026-01-05', 'registration_deadline' => '2026-02-15', 'exam_date' => '2026-02-25', 'is_active' => true],
        ]);


        // ── 2. TestDaF ───────────────────────────────────────────────────────────
        $testdaf = Exam::create([
            'title'                 => 'TestDaF',
            'subtitle'              => 'The German Language Certificate',
            'duration'              => '3 часа и 10 минути',
            'description'           => 'Твојот доказ за познавање на германскиот јазик што го отвора патот кон студии и работа во Германија. Се полага на нивоа од Б2 до Ц1, валидно за универзитети, стипендии и професионални цели.',
            'title_en'              => 'TestDaF',
            'subtitle_en'           => 'The German Language Certificate',
            'duration_en'           => '3 hours and 10 minutes',
            'description_en'        => 'Your proof of German language skills that opens the path to studies and work in Germany. Taken at B2 to C1 levels, valid for universities, scholarships and professional purposes.',
            'results_time'          => '6 недели',
            'has_fast_registration' => false,
            'is_on_demand'          => false,
            'layout_type'           => 'aptitude',
            'info_cards'            => [
                ['title' => 'Флексибилна подготовка', 'items' => ['онлајн и во живо.']],
                ['title' => 'Вкупно времетраење',      'items' => ['приближно 3 часа и 10 минути.']],
                ['title' => 'Европско признавање',     'items' => ['сертификатите важат низ цела ЕУ.']],
                ['title' => 'Брзи резултати',          'items' => ['добиваш сертификат за 6 недели.']],
            ],
            'where_recognized'  => 'Во сите германски универзитети и низ Европа.',
            'what_for'          => 'За студии, работа и миграција.',
            'official_site_url' => 'https://www.testdaf.de',
            'image'             => 'https://ik.imagekit.io/ijiuecjvx/exam-photos/fb033543675203376e50a2bdad1d55d47b7d0bb3.jpg',
            'is_active'         => true,
            'is_featured'       => true,
        ]);

        $testdaf->levels()->createMany([
            [
                'level'          => 'Б2',
                'name'           => 'Напреден корисник',
                'description'    => 'Напредно ниво на германски јазик',
                'name_en'        => 'Upper Intermediate',
                'description_en' => 'Upper intermediate level of German',
                'can_do'         => [
                    'Разбираш сложени академски текстови на германски',
                    'Пишуваш аргументиран есеј на академска тема',
                    'Разбираш предавања и дискусии во универзитетски контекст',
                    'Изразуваш мислење и аргументираш низ 7 различни задачи',
                ],
                'can_do_en'      => [
                    'You understand complex academic texts in German',
                    'You write an argumentative essay on an academic topic',
                    'You understand lectures and discussions in a university context',
                    'You express opinions and argue through 7 different tasks',
                ],
            ],
            [
                'level'          => 'Ц1',
                'name'           => 'Напреден академски корисник',
                'description'    => 'Академско ниво на германски јазик',
                'name_en'        => 'Advanced Academic User',
                'description_en' => 'Academic level of German language',
                'can_do'         => [
                    'Течно се изразуваш на германски во академски и професионални ситуации',
                    'Пишуваш прецизни и детални академски извештаи',
                    'Разбираш речиси сè на говорен и пишан германски',
                    'Можеш да студираш без јазична поддршка во Германија',
                ],
                'can_do_en'      => [
                    'You express yourself fluently in German in academic and professional situations',
                    'You write precise and detailed academic reports',
                    'You understand virtually everything in spoken and written German',
                    'You can study without language support at a German university',
                ],
            ],
        ]);

        $testdaf->structureParts()->createMany([
            ['icon' => 'reading',   'order' => 1, 'title' => 'Читање',   'duration' => '60 минути', 'description' => 'Разбирање на пишани текстови, статии и книжевни пасуси',                     'title_en' => 'Reading',   'duration_en' => '60 minutes', 'description_en' => 'Understanding written texts, articles and literary passages'],
            ['icon' => 'writing',   'order' => 2, 'title' => 'Пишување', 'duration' => '60 минути', 'description' => 'Составување академски есеј и аргументиран текст поврзан со конкретна тема.', 'title_en' => 'Writing',   'duration_en' => '60 minutes', 'description_en' => 'Composing an academic essay and argumentative text on a specific topic'],
            ['icon' => 'listening', 'order' => 3, 'title' => 'Слушање',  'duration' => '40 минути', 'description' => 'Разбирање на говорен германски во универзитетски контекст.',                 'title_en' => 'Listening', 'duration_en' => '40 minutes', 'description_en' => 'Understanding spoken German in a university context'],
            ['icon' => 'speaking',  'order' => 4, 'title' => 'Говорење', 'duration' => '35 минути', 'description' => 'Изразување на мислење и аргументирање низ 7 различни задачи.',              'title_en' => 'Speaking',  'duration_en' => '35 minutes', 'description_en' => 'Expressing opinions and argumentation through 7 different tasks'],
        ]);

        $testdaf->examDates()->createMany([
            ['registration_start' => '2025-07-01', 'registration_deadline' => '2025-09-10', 'exam_date' => '2025-09-18', 'is_active' => true],
            ['registration_start' => '2025-08-01', 'registration_deadline' => '2025-10-08', 'exam_date' => '2025-10-16', 'is_active' => true],
            ['registration_start' => '2025-11-01', 'registration_deadline' => '2026-01-20', 'exam_date' => '2026-01-29', 'is_active' => true],
        ]);


        // ── 3. TestAS ────────────────────────────────────────────────────────────
        $testas = Exam::create([
            'title'                 => 'TestAS',
            'subtitle'              => 'The Aptitude Test for Studying in Germany',
            'duration'              => '4 часа',
            'description'           => 'TestAS е централен стандардизиран академски испит кој ги тестира интелектуалните способности на потенцијалните студенти од земјите кои не се членки на ЕУ, а сакаат да се образуваат на универзитетите во Германија',
            'title_en'              => 'TestAS',
            'subtitle_en'           => 'The Aptitude Test for Studying in Germany',
            'duration_en'           => '4 hours',
            'description_en'        => 'TestAS is a central standardised academic aptitude test that assesses the intellectual abilities of prospective students from non-EU countries who wish to study at German universities.',
            'results_time'          => '6 недели',
            'has_fast_registration' => false,
            'is_on_demand'          => false,
            'layout_type'           => 'aptitude',
            'info_cards'            => [
                ['title' => 'Флексибилна подготовка', 'items' => ['онлајн и во живо.']],
                ['title' => 'Вкупно времетраење',      'items' => ['приближно 4 часа.']],
                ['title' => 'Европско признавање',     'items' => ['сертификатите важат низ цела ЕУ.']],
                ['title' => 'Брзи резултати',          'items' => ['добиваш сертификат за 6 недели.']],
            ],
            'where_recognized'  => 'Голем број универзитети низ Германија',
            'what_for'          => 'На англиски и германски јазик',
            'official_site_url' => 'https://www.testas.de',
            'image'             => 'https://ik.imagekit.io/ijiuecjvx/exam-photos/d2cf24545da8775daa73f84db80e0b1e7897ed33.jpg',
            'is_active'         => true,
            'is_featured'       => true,
        ]);

        $testas->structureParts()->createMany([
            [
                'icon' => 'reading', 'order' => 1,
                'title' => 'Основен тест (Core Test)', 'duration' => '110 минути',
                'description' => 'Писмен тест кој ги проверува општите академски способности: анализа, логика, квантитативно размислување и разбирање на текст',
                'title_en' => 'Core Test', 'duration_en' => '110 minutes',
                'description_en' => 'Written test assessing general academic abilities: analysis, logic, quantitative reasoning and text comprehension',
            ],
            [
                'icon' => 'writing', 'order' => 2,
                'title' => 'Тест од посебна област (Subject-Specific Module)', 'duration' => 'Приближно 150 минути',
                'description' => 'Се избира една академска област (инженерство, хуманистички науки, економија, општествени науки или STEM).',
                'title_en' => 'Subject-Specific Module', 'duration_en' => 'Approximately 150 minutes',
                'description_en' => 'One academic field is chosen (engineering, humanities, economics, social sciences or STEM).',
            ],
            [
                'icon' => 'listening', 'order' => 3,
                'title' => 'Јазичен тест (Language Test)', 'duration' => null,
                'description' => 'Се полага онлајн преку платформата TestAS пред писмениот дел. Проверува дали имате најмалку Б1 ниво за да го следите испитот.',
                'title_en' => 'Language Test', 'duration_en' => null,
                'description_en' => 'Taken online via the TestAS platform before the written part. Checks whether you have at least B1 level to follow the exam.',
            ],
        ]);

        $testas->levels()->createMany([
            [
                'level'          => 'Полагање',
                'name'           => 'Полагање и пријава',
                'description'    => '',
                'name_en'        => 'Registration and Sitting',
                'description_en' => '',
                'can_do'         => [
                    'Испитот може да го полагате во вашиот лиценциран испитен центар ЛингваЛинк. Пријавувањето се прави на www.testas.de во делот за кандидати. По пријавата добивате e-mail со линк и инструкции.',
                    'Испитот се состои од основен тест, тест од посебна област и јазичен тест. Јазичниот тест се прави online, а основниот тест и тестот од посебна област се работат писмено.',
                    'На денот на испитот носете важечка лична карта или пасош.',
                ],
                'can_do_en'      => [
                    'The exam can be taken at your licensed test centre LinguaLink. Registration is done at www.testas.de in the candidates section. After registration you receive an e-mail with a link and instructions.',
                    'The exam consists of a core test, a subject-specific module and a language test. The language test is done online, while the core test and subject-specific module are written.',
                    'On the day of the exam bring a valid ID card or passport.',
                ],
            ],
            [
                'level'          => 'Јазик',
                'name'           => 'Јазични предуслови',
                'description'    => '',
                'name_en'        => 'Language Requirements',
                'description_en' => '',
                'can_do'         => [
                    'За полагање на TestAS потребно е Б1 ниво според CEFR.',
                    'Проверете дали TestAS е услов за прием на вашиот факултет.',
                ],
                'can_do_en'      => [
                    'A B1 level according to CEFR is required to take the TestAS.',
                    'Check whether TestAS is an admission requirement at your university.',
                ],
            ],
        ]);

        $testas->examDates()->createMany([
            ['registration_start' => '2025-06-01', 'registration_deadline' => '2025-09-10', 'exam_date' => '2025-09-18', 'is_active' => true],
            ['registration_start' => '2025-11-01', 'registration_deadline' => '2026-02-10', 'exam_date' => '2026-02-23', 'is_active' => true],
        ]);


        // ── 4. OnSET ─────────────────────────────────────────────────────────────
        $onset = Exam::create([
            'title'                 => 'OnSET',
            'subtitle'              => 'The Online Language Placement Test',
            'duration'              => '40 минути',
            'description'           => 'Твојот прв чекор кон вистинското јазично ниво. OnSET е брз и сигурен онлајн тест за проценка на твоите јазични компетенции по англиски или германски јазик.',
            'title_en'              => 'OnSET',
            'subtitle_en'           => 'The Online Language Placement Test',
            'duration_en'           => '40 minutes',
            'description_en'        => 'Your first step towards your true language level. OnSET is a quick and reliable online test for assessing your language competencies in English or German.',
            'results_time'          => 'Веднаш',
            'has_fast_registration' => true,
            'is_on_demand'          => true,
            'layout_type'           => 'aptitude',
            'info_cards'            => [
                ['title' => 'Флексибилна подготовка', 'items' => ['онлајн и во живо.']],
                ['title' => 'Вкупно времетраење',      'items' => ['приближно 40 минути.']],
                ['title' => 'Европско признавање',     'items' => ['сертификатите важат низ цела ЕУ.']],
                ['title' => 'Брзи резултати',          'items' => ['добиваш сертификат за 4–6 недели.']],
            ],
            'where_recognized'  => 'Во универзитети и образовни институции низ Германија и ЕУ.',
            'what_for'          => 'За вработување, студии во странство и јазична самоевалуација.',
            'official_site_url' => 'https://www.onset.de',
            'image'             => 'https://ik.imagekit.io/ijiuecjvx/exam-photos/dece3f3598985d6c292fc21db0dac49dc9b9aa0a%20(1).jpg',
            'is_active'         => true,
            'is_featured'       => false,
        ]);

        $onset->levels()->createMany([
            [
                'level'          => 'А1-А2',
                'name'           => 'Почетник',
                'description'    => 'Основни јазични познавања',
                'name_en'        => 'Beginner',
                'description_en' => 'Basic language knowledge',
                'can_do'         => [
                    'Разбираш и користиш познати секојдневни изрази',
                    'Комунициш на многу едноставно ниво',
                ],
                'can_do_en'      => [
                    'You understand and use familiar everyday expressions',
                    'You communicate at a very basic level',
                ],
            ],
            [
                'level'          => 'Б1-Б2',
                'name'           => 'Средно ниво',
                'description'    => 'Самостојна употреба на јазикот',
                'name_en'        => 'Intermediate',
                'description_en' => 'Independent use of language',
                'can_do'         => [
                    'Разбираш главни точки на стандарден говор',
                    'Се справуваш со повеќето ситуации при патување',
                    'Пишуваш едноставен поврзан текст',
                ],
                'can_do_en'      => [
                    'You understand the main points of standard speech',
                    'You deal with most situations likely to arise whilst travelling',
                    'You write simple connected text on familiar topics',
                ],
            ],
            [
                'level'          => 'Ц1-Ц2',
                'name'           => 'Напредно ниво',
                'description'    => 'Совладување на јазикот',
                'name_en'        => 'Advanced',
                'description_en' => 'Mastery of the language',
                'can_do'         => [
                    'Разбираш практично сè',
                    'Се изразуваш спонтано и прецизно',
                    'Разликуваш фини нијанси на значење',
                ],
                'can_do_en'      => [
                    'You understand virtually everything you hear or read',
                    'You express yourself spontaneously and precisely',
                    'You distinguish fine shades of meaning',
                ],
            ],
        ]);

        $onset->structureParts()->createMany([
            [
                'icon' => 'reading', 'order' => 1,
                'title' => 'Читање и разбирање', 'duration' => '20 минути',
                'description' => 'Тестот опфаќа кратки пасуси со реченици во кои недостига по еден збор. Твојот предизвик е да го избереш точниот збор од четири понудени опции.',
                'title_en' => 'Reading and Comprehension', 'duration_en' => '20 minutes',
                'description_en' => 'The test includes short passages with sentences missing one word. Your challenge is to choose the correct word from four options.',
            ],
            [
                'icon' => 'listening', 'order' => 2,
                'title' => 'Слушање (достапно само за OnSET-English)', 'duration' => '20 минути',
                'description' => 'Се слушаат кратки изјави, дијалози и ситуации од секојдневниот живот. Потоа одбираш точен одговор меѓу неколку понудени опции.',
                'title_en' => 'Listening (available for OnSET-English only)', 'duration_en' => '20 minutes',
                'description_en' => 'Short statements, dialogues and everyday situations are listened to. Then you choose the correct answer from several options.',
            ],
        ]);
        // OnSET is on-demand — no fixed exam dates


        // ── 5. LanguageCert ──────────────────────────────────────────────────────
        $languagecert = Exam::create([
            'title'                 => 'LanguageCert',
            'subtitle'              => 'International English Language Qualifications',
            'duration'              => '2 часа и 45 минути',
            'description'           => "Твојот доказ за меѓународно призната јазична вештина со која се отвораат врати низ светот. Полагај од А1 до Ц2 ниво, валидно за студии, работа и миграција.\n\nLinguaLink, како овластен центар за тестирање, на кандидатите од Северна Македонија им нуди многу поволна цена за полагање на испитот.",
            'title_en'              => 'LanguageCert',
            'subtitle_en'           => 'International English Language Qualifications',
            'duration_en'           => '2 hours and 45 minutes',
            'description_en'        => "Your proof of internationally recognised language skills that open doors around the world. Take exams from A1 to C2 level, valid for studies, work and migration.\n\nLinguaLink, as an authorised testing centre, offers candidates from North Macedonia a very competitive price for taking the exam.",
            'results_time'          => '4–6 недели',
            'has_fast_registration' => false,
            'is_on_demand'          => false,
            'layout_type'           => 'aptitude',
            'info_cards'            => [
                ['title' => 'Флексибилна подготовка', 'items' => ['онлајн и во живо.']],
                ['title' => 'Вкупно времетраење',      'items' => ['приближно 2 часа и 45 минути.']],
                ['title' => 'Глобално признавање',     'items' => ['признаен глобално.']],
                ['title' => 'Брзи резултати',          'items' => ['добиваш сертификат за 4–6 недели.']],
            ],
            'where_recognized'  => 'Признаен глобално.',
            'what_for'          => 'За образование и работа во странство.',
            'official_site_url' => 'https://www.languagecert.org',
            'image'             => 'https://ik.imagekit.io/ijiuecjvx/exam-photos/dece3f3598985d6c292fc21db0dac49dc9b9aa0a%20(2).jpg',
            'is_active'         => true,
            'is_featured'       => true,
        ]);

        $languagecert->levels()->createMany([
            [
                'level'          => 'А1-А2',
                'name'           => 'Основен корисник',
                'description'    => 'Елементарно познавање на англискиот јазик',
                'name_en'        => 'Basic User',
                'description_en' => 'Elementary knowledge of English',
                'can_do'         => [
                    'Разбираш едноставни фрази и секојдневни изрази',
                    'Можеш да се претставиш и да поставуваш основни прашања',
                    'Комунициш во едноставни, рутински ситуации',
                    'Го опишуваш своето потекло, семејство и непосредна околина',
                ],
                'can_do_en'      => [
                    'You understand simple phrases and everyday expressions',
                    'You can introduce yourself and ask basic questions',
                    'You communicate in simple, routine situations',
                    'You describe your origin, family and immediate surroundings',
                ],
            ],
            [
                'level'          => 'Б1-Б2',
                'name'           => 'Независен корисник',
                'description'    => 'Средно до напредно познавање на англискиот јазик',
                'name_en'        => 'Independent User',
                'description_en' => 'Intermediate to upper-intermediate English',
                'can_do'         => [
                    'Разбираш јасен стандарден говор на познати теми',
                    'Се справуваш со повеќето ситуации при патување во земји каде се зборува англиски',
                    'Пишуваш едноставен поврзан текст на познати теми',
                    'Ги опишуваш искуствата, настаните и личните ставови',
                ],
                'can_do_en'      => [
                    'You understand clear standard speech on familiar topics',
                    'You deal with most situations likely to arise in an English-speaking country',
                    'You write simple connected text on familiar topics',
                    'You describe experiences, events and personal opinions',
                ],
            ],
            [
                'level'          => 'Ц1-Ц2',
                'name'           => 'Напреден корисник',
                'description'    => 'Напредно и академско познавање на англискиот јазик',
                'name_en'        => 'Proficient User',
                'description_en' => 'Advanced and academic English',
                'can_do'         => [
                    'Разбираш широк спектар на долги и сложени текстови',
                    'Се изразуваш спонтано и течно без напор',
                    'Флексибилно и ефикасно го користиш јазикот за општествени цели',
                    'Произведуваш јасен, добро структуриран текст за сложени теми',
                ],
                'can_do_en'      => [
                    'You understand a wide range of lengthy and complex texts',
                    'You express yourself spontaneously and fluently without effort',
                    'You use language flexibly and effectively for social purposes',
                    'You produce clear, well-structured text on complex topics',
                ],
            ],
        ]);

        $languagecert->structureParts()->createMany([
            ['icon' => 'reading',   'order' => 1, 'title' => 'Читање',   'duration' => '60 минути', 'description' => 'Разбирање на различни видови текстови: формални, неформални, академски', 'title_en' => 'Reading',   'duration_en' => '60 minutes', 'description_en' => 'Understanding various text types: formal, informal, academic'],
            ['icon' => 'writing',   'order' => 2, 'title' => 'Пишување', 'duration' => '60 минути', 'description' => 'Пишување формални и неформални текстови, есеи и извештаи',              'title_en' => 'Writing',   'duration_en' => '60 minutes', 'description_en' => 'Writing formal and informal texts, essays and reports'],
            ['icon' => 'listening', 'order' => 3, 'title' => 'Слушање',  'duration' => '40 минути', 'description' => 'Разбирање на говорен јазик во различни контексти и ситуации',          'title_en' => 'Listening', 'duration_en' => '40 minutes', 'description_en' => 'Understanding spoken language in various contexts and situations'],
            ['icon' => 'speaking',  'order' => 4, 'title' => 'Говорење', 'duration' => '12 минути', 'description' => 'Структуриран разговор со испитувач на зададени теми',                   'title_en' => 'Speaking',  'duration_en' => '12 minutes', 'description_en' => 'Structured conversation with an examiner on given topics'],
        ]);

        $languagecert->examDates()->createMany([
            ['registration_start' => '2025-07-01', 'registration_deadline' => '2025-09-05', 'exam_date' => '2025-09-15', 'is_active' => true],
            ['registration_start' => '2025-10-01', 'registration_deadline' => '2025-11-15', 'exam_date' => '2025-11-25', 'is_active' => true],
            ['registration_start' => '2026-01-05', 'registration_deadline' => '2026-02-10', 'exam_date' => '2026-02-20', 'is_active' => true],
        ]);
    }
}