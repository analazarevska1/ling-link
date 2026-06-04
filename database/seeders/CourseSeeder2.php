<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder2 extends Seeder
{
    public function run(): void
    {
        $courses = [

            // ─── ENGLISH SPECIALIZED ────────────────────────────────────────

            [
                'language'       => 'english',
                'category'       => 'specialized',
                'level'          => null,
                'age_group'      => '18-25',
                'title'          => 'Деловен англиски',
                'subtitle'       => 'Усовршување на деловниот англиски јазик',
                'description'    => 'Подобрување на комуникациските вештини.',
                'title_en'       => 'Business English',
                'subtitle_en'    => 'Perfecting business English language',
                'description_en' => 'Improving communication skills.',
                'duration'       => '6 недели',
                'duration_en'    => '6 weeks',
                'students_count' => '1000+',
                'hours'          => 30,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/1.jpg',
            ],

            [
                'language'       => 'english',
                'category'       => 'specialized',
                'level'          => null,
                'age_group'      => '18-25',
                'title'          => 'Англиски за новинари',
                'subtitle'       => 'Специфичен англиски јазик за новинари',
                'description'    => 'Подобрување на комуникациските вештини.',
                'title_en'       => 'English for Journalists',
                'subtitle_en'    => 'Specific English language for journalists',
                'description_en' => 'Improving communication skills.',
                'duration'       => '6 недели',
                'duration_en'    => '6 weeks',
                'students_count' => '1000+',
                'hours'          => 30,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/2.jpg',
            ],

            [
                'language'       => 'english',
                'category'       => 'specialized',
                'level'          => null,
                'age_group'      => '18-25',
                'title'          => 'Курс по граматика',
                'subtitle'       => 'Усовршување на знаењата',
                'description'    => 'Проширување на знаењата од областа на граматиката.',
                'title_en'       => 'Grammar Course',
                'subtitle_en'    => 'Perfecting your knowledge',
                'description_en' => 'Expanding knowledge in the field of grammar.',
                'duration'       => '6 недели',
                'duration_en'    => '6 weeks',
                'students_count' => '1000+',
                'hours'          => 30,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/3.jpg',
            ],

            // ─── GERMAN CHILDREN ────────────────────────────────────────────

            [
                'language'       => 'german',
                'category'       => 'children',
                'level'          => 'A1-A2',
                'age_group'      => 'до 12',
                'title'          => 'Ниво А1 и А2',
                'subtitle'       => 'Основна комуникација и секојдневни ситуации',
                'description'    => 'Интересна и мотивирачка наставна програма.',
                'title_en'       => 'Level A1 and A2',
                'subtitle_en'    => 'Basic communication and everyday situations',
                'description_en' => 'An engaging and motivating teaching programme.',
                'duration'       => '32 недели',
                'duration_en'    => '32 weeks',
                'students_count' => '1234',
                'hours'          => 128,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/4.jpg',
            ],

            // ─── GERMAN REGULAR ADULTS ──────────────────────────────────────

            [
                'language'       => 'german',
                'category'       => 'regular',
                'level'          => 'A1-A2',
                'age_group'      => '18-25',
                'title'          => 'Ниво А1 и А2',
                'subtitle'       => 'Целосен почетник',
                'description'    => 'Научи да комуницираш на основно ниво преку едноставни изрази и секојдневни ситуации.',
                'title_en'       => 'Level A1 and A2',
                'subtitle_en'    => 'Complete Beginner',
                'description_en' => 'Learn to communicate at a basic level through simple expressions and everyday situations.',
                'duration'       => '16 недели',
                'duration_en'    => '16 weeks',
                'students_count' => '1000+',
                'hours'          => 80,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/5.jpg',
            ],

            [
                'language'       => 'german',
                'category'       => 'regular',
                'level'          => 'A1-A2',
                'age_group'      => '18-25',
                'title'          => 'Ниво А2',
                'subtitle'       => 'Разбираш кратки разговори и пишани текстови.',
                'description'    => 'Се изразуваш сигурно во секојдневни ситуации.',
                'title_en'       => 'Level A2',
                'subtitle_en'    => 'Understanding short conversations and written texts.',
                'description_en' => 'Express yourself confidently in everyday situations.',
                'duration'       => '16 недели',
                'duration_en'    => '16 weeks',
                'students_count' => '1000+',
                'hours'          => 80,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/6.jpg',
            ],

            [
                'language'       => 'german',
                'category'       => 'regular',
                'level'          => 'B1-B2',
                'age_group'      => '18-25',
                'title'          => 'Ниво Б1',
                'subtitle'       => 'Слободно изразување и слушање на говор.',
                'description'    => 'Совршено ниво за секојдевна комуникација.',
                'title_en'       => 'Level B1',
                'subtitle_en'    => 'Free expression and listening to speech.',
                'description_en' => 'Perfect level for everyday communication.',
                'duration'       => '16 недели',
                'duration_en'    => '16 weeks',
                'students_count' => '1000+',
                'hours'          => 80,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/7.jpg',
            ],

            // ─── GERMAN INTENSIVE ADULTS ────────────────────────────────────

            [
                'language'       => 'german',
                'category'       => 'intensive',
                'level'          => 'A1-A2',
                'age_group'      => '18-25',
                'title'          => 'Ниво А1-Б1',
                'subtitle'       => 'Интензивно учење со брз напредок низ основните нивоа.',
                'description'    => 'Резултати за кратко време.',
                'title_en'       => 'Level A1-B1',
                'subtitle_en'    => 'Intensive learning with rapid progress through basic levels.',
                'description_en' => 'Results in a short time.',
                'duration'       => '32 недели',
                'duration_en'    => '32 weeks',
                'students_count' => '1000+',
                'hours'          => 420,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/8.jpg',
            ],

            [
                'language'       => 'german',
                'category'       => 'intensive',
                'level'          => 'B1-B2',
                'age_group'      => '26-35',
                'title'          => 'Ниво Б2',
                'subtitle'       => 'Користење напреден вокабулар и правилна граматика',
                'description'    => 'Подготовка за работа, студии...',
                'title_en'       => 'Level B2',
                'subtitle_en'    => 'Using advanced vocabulary and correct grammar',
                'description_en' => 'Preparation for work, studies...',
                'duration'       => '16 недели',
                'duration_en'    => '16 weeks',
                'students_count' => '1000+',
                'hours'          => 220,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/9.jpg',
            ],

            [
                'language'       => 'german',
                'category'       => 'intensive',
                'level'          => 'C1-C2',
                'age_group'      => '26-35',
                'title'          => 'Ниво Ц1',
                'subtitle'       => 'Напредна јазична компетенција',
                'description'    => 'Го користиш јазикот течно и прецизно.',
                'title_en'       => 'Level C1',
                'subtitle_en'    => 'Advanced language competence',
                'description_en' => 'You use the language fluently and precisely.',
                'duration'       => '16 недели',
                'duration_en'    => '16 weeks',
                'students_count' => '1000+',
                'hours'          => 220,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/10.jpg',
            ],

            // ─── GERMAN SPECIALIZED ─────────────────────────────────────────

            [
                'language'       => 'german',
                'category'       => 'specialized',
                'level'          => null,
                'age_group'      => '18-25',
                'title'          => 'Деловен англиски',
                'subtitle'       => 'Усовршување на деловниот англиски јазик',
                'description'    => 'Подобрување на комуникациските вештини.',
                'title_en'       => 'Business German',
                'subtitle_en'    => 'Perfecting business German language',
                'description_en' => 'Improving communication skills.',
                'duration'       => '6 недели',
                'duration_en'    => '6 weeks',
                'students_count' => '1000+',
                'hours'          => 30,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/1.jpg',
            ],

            [
                'language'       => 'german',
                'category'       => 'specialized',
                'level'          => null,
                'age_group'      => '18-25',
                'title'          => 'Курс според вашите потреби',
                'subtitle'       => 'Прилагоден курс според вашите цели и потреби.',
                'description'    => 'Учиш она што ти е тебе најважно.',
                'title_en'       => 'Course according to your needs',
                'subtitle_en'    => 'A customised course according to your goals and needs.',
                'description_en' => 'You learn what matters most to you.',
                'duration'       => null,
                'duration_en'    => null,
                'students_count' => null,
                'hours'          => null,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/2.jpg',
            ],

            [
                'language'       => 'german',
                'category'       => 'specialized',
                'level'          => null,
                'age_group'      => '18-25',
                'title'          => 'Курс по граматика',
                'subtitle'       => 'Усовршување на знаењата',
                'description'    => 'Проширување на знаењата од областа на граматиката.',
                'title_en'       => 'Grammar Course',
                'subtitle_en'    => 'Perfecting your knowledge',
                'description_en' => 'Expanding knowledge in the field of grammar.',
                'duration'       => '6 недели',
                'duration_en'    => '6 weeks',
                'students_count' => '1000+',
                'hours'          => 30,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/3.jpg',
            ],

            // ─── MACEDONIAN CHILDREN ────────────────────────────────────────

            [
                'language'       => 'macedonian',
                'category'       => 'children',
                'level'          => null,
                'age_group'      => 'до 12',
                'title'          => 'Курс за средношколци',
                'subtitle'       => 'Забавно учење преку разговор и игри.',
                'description'    => 'Совршено за млади кои сакаат лесно да напредуваат.',
                'title_en'       => 'Course for high school students',
                'subtitle_en'    => 'Fun learning through conversation and games.',
                'description_en' => 'Perfect for young people who want to progress easily.',
                'duration'       => '16 недели',
                'duration_en'    => '16 weeks',
                'students_count' => '1234',
                'hours'          => 80,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/5.jpg',
            ],

            [
                'language'       => 'macedonian',
                'category'       => 'children',
                'level'          => null,
                'age_group'      => '18-25',
                'title'          => 'Курсеви за возрасни',
                'subtitle'       => 'Практична настава за секојдневна комуникација.',
                'description'    => 'Прилагодено на вашето темпо и цели.',
                'title_en'       => 'Courses for adults',
                'subtitle_en'    => 'Practical teaching for everyday communication.',
                'description_en' => 'Adapted to your pace and goals.',
                'duration'       => '16 недели',
                'duration_en'    => '16 weeks',
                'students_count' => '2394',
                'hours'          => 80,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/6.jpg',
            ],

            // ─── MACEDONIAN INDIVIDUAL ──────────────────────────────────────

            [
                'language'       => 'macedonian',
                'category'       => 'individual',
                'level'          => null,
                'age_group'      => '18-25',
                'title'          => 'Индивидуални часови',
                'subtitle'       => 'Персонализирани часови според вашите потреби.',
                'description'    => 'Брз напредок со целосно внимание од професор.',
                'title_en'       => 'Individual lessons',
                'subtitle_en'    => 'Personalised lessons according to your needs.',
                'description_en' => 'Fast progress with full attention from a professor.',
                'duration'       => null,
                'duration_en'    => null,
                'students_count' => '2394',
                'hours'          => null,
                'image'          => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/4.jpg',
            ],

        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}