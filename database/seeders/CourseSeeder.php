<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [

            // ─── ENGLISH CHILDREN ───────────────────────────────────────────

            [
                'language'      => 'english',
                'category'      => 'children',
                'level'         => 'A0',
                'age_group'     => 'до 12',
                'title'         => 'Ниво А0',
                'subtitle'      => 'Целосен почетник',
                'description'   => 'Наменети за деца од 5-7 години. Засновани на првично описменување.',
                'title_en'      => 'Level A0',
                'subtitle_en'   => 'Complete Beginner',
                'description_en'=> 'Designed for children aged 5-7 years. Based on early literacy development.',
                'duration'      => '32 недели',
                'duration_en'   => '32 weeks',
                'students_count'=> '1234',
                'hours'         => 128,
                'image'         => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/children1.jpg',
            ],

            [
                'language'      => 'english',
                'category'      => 'children',
                'level'         => 'A1-A2',
                'age_group'     => 'до 12',
                'title'         => 'Ниво А1 и А2',
                'subtitle'      => 'Основна комуникација и секојдневни ситуации',
                'description'   => 'Интересна и мотивирачка наставна програма.',
                'title_en'      => 'Level A1 and A2',
                'subtitle_en'   => 'Basic communication and everyday situations',
                'description_en'=> 'An engaging and motivating teaching programme.',
                'duration'      => '32 недели',
                'duration_en'   => '32 weeks',
                'students_count'=> '2394',
                'hours'         => 128,
                'image'         => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/children3.jpg',
            ],

            [
                'language'      => 'english',
                'category'      => 'children',
                'level'         => 'B1-B2',
                'age_group'     => '13-17',
                'title'         => 'Ниво Б1',
                'subtitle'      => 'Флуентност и сигурност во пошироки теми',
                'description'   => 'Се изразуваш сигурно во секојдневни ситуации.',
                'title_en'      => 'Level B1',
                'subtitle_en'   => 'Fluency and confidence across broader topics',
                'description_en'=> 'Express yourself confidently in everyday situations.',
                'duration'      => '32 недели',
                'duration_en'   => '32 weeks',
                'students_count'=> '2187',
                'hours'         => 128,
                'image'         => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/children2.jpg',
            ],

            // ─── ENGLISH ADULTS ─────────────────────────────────────────────

            [
                'language'      => 'english',
                'category'      => 'adults',
                'level'         => 'A1-A2',
                'age_group'     => '18-25',
                'title'         => 'Ниво А1 и А2',
                'subtitle'      => 'Целосен почетник',
                'description'   => 'Научи да комуницираш на основно ниво преку едноставни изрази и секојдневни ситуации.',
                'title_en'      => 'Level A1 and A2',
                'subtitle_en'   => 'Complete Beginner',
                'description_en'=> 'Learn to communicate at a basic level through simple expressions and everyday situations.',
                'duration'      => '16 недели',
                'duration_en'   => '16 weeks',
                'students_count'=> '1000+',
                'hours'         => 80,
                'image'         => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/adult1.jpg',
            ],

            [
                'language'      => 'english',
                'category'      => 'adults',
                'level'         => 'B1-B2',
                'age_group'     => '18-25',
                'title'         => 'Ниво Б1 и Б2',
                'subtitle'      => 'Флуентност и сигурност во пошироки теми',
                'description'   => 'Развивај течно и сигурно изразување во секојдневието.',
                'title_en'      => 'Level B1 and B2',
                'subtitle_en'   => 'Fluency and confidence across broader topics',
                'description_en'=> 'Develop fluent and confident expression in everyday life.',
                'duration'      => '16 недели',
                'duration_en'   => '16 weeks',
                'students_count'=> '1000+',
                'hours'         => 80,
                'image'         => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/adult2.jpg',
            ],

            [
                'language'      => 'english',
                'category'      => 'adults',
                'level'         => 'C1-C2',
                'age_group'     => '26-35',
                'title'         => 'Ниво Ц1 и Ц2',
                'subtitle'      => 'Напредна јазична компетенција',
                'description'   => 'Совладај го јазикот на напредно ниво и зборувај природно.',
                'title_en'      => 'Level C1 and C2',
                'subtitle_en'   => 'Advanced language competence',
                'description_en'=> 'Master the language at an advanced level and speak naturally.',
                'duration'      => '16 недели',
                'duration_en'   => '16 weeks',
                'students_count'=> '1000+',
                'hours'         => 80,
                'image'         => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/adult5.jpg',
            ],

            // ─── GERMAN CHILDREN ────────────────────────────────────────────

            [
                'language'      => 'german',
                'category'      => 'children',
                'level'         => 'A0',
                'age_group'     => 'до 12',
                'title'         => 'Ниво А0',
                'subtitle'      => 'Целосен почетник',
                'description'   => 'Наменети за деца од 5-7 години. Засновани на првично описменување.',
                'title_en'      => 'Level A0',
                'subtitle_en'   => 'Complete Beginner',
                'description_en'=> 'Designed for children aged 5-7 years. Based on early literacy development.',
                'duration'      => '32 недели',
                'duration_en'   => '32 weeks',
                'students_count'=> '1234',
                'hours'         => 128,
                'image'         => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/adult3.jpg',
            ],

            [
                'language'      => 'german',
                'category'      => 'children',
                'level'         => 'A1-A2',
                'age_group'     => 'до 12',
                'title'         => 'Ниво А1 и А2',
                'subtitle'      => 'Основна комуникација и секојдневни ситуации',
                'description'   => 'Интересна и мотивирачка наставна програма.',
                'title_en'      => 'Level A1 and A2',
                'subtitle_en'   => 'Basic communication and everyday situations',
                'description_en'=> 'An engaging and motivating teaching programme.',
                'duration'      => '32 недели',
                'duration_en'   => '32 weeks',
                'students_count'=> '2394',
                'hours'         => 128,
                'image'         => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/children1.jpg',
            ],

            // ─── GERMAN ADULTS ──────────────────────────────────────────────

            [
                'language'      => 'german',
                'category'      => 'adults',
                'level'         => 'A1-A2',
                'age_group'     => '18-25',
                'title'         => 'Ниво А1 и А2',
                'subtitle'      => 'Целосен почетник',
                'description'   => 'Научи да комуницираш на основно ниво преку едноставни изрази и секојдневни ситуации.',
                'title_en'      => 'Level A1 and A2',
                'subtitle_en'   => 'Complete Beginner',
                'description_en'=> 'Learn to communicate at a basic level through simple expressions and everyday situations.',
                'duration'      => '16 недели',
                'duration_en'   => '16 weeks',
                'students_count'=> '1000+',
                'hours'         => 80,
                'image'         => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/adult4.jpg',
            ],

            [
                'language'      => 'german',
                'category'      => 'adults',
                'level'         => 'B1-B2',
                'age_group'     => '18-25',
                'title'         => 'Ниво Б1 и Б2',
                'subtitle'      => 'Флуентност и сигурност во пошироки теми',
                'description'   => 'Развивај течно и сигурно изразување во секојдневието.',
                'title_en'      => 'Level B1 and B2',
                'subtitle_en'   => 'Fluency and confidence across broader topics',
                'description_en'=> 'Develop fluent and confident expression in everyday life.',
                'duration'      => '16 недели',
                'duration_en'   => '16 weeks',
                'students_count'=> '1000+',
                'hours'         => 80,
                'image'         => 'https://ik.imagekit.io/ijiuecjvx/courses/courses-images/adult2.jpg',
            ],

        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}