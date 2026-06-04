<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ExamPrep;

class ExamPrepSeeder extends Seeder
{
    public function run(): void
    {
        $data = [

            // ── АНГЛИСКИ ЈАЗИК ── CAMBRIDGE ENGLISH ─────────────────────────────
            [
                'category'       => 'Англиски јазик',
                'exam_group'     => 'Cambridge English',
                'name'           => 'A2 Key (KET)',
                'description'    => 'Подготовка за основно ниво на англиски, каде што учиш како да се снајдеш во едноставни секојдневни ситуации.',
                'name_en'        => 'A2 Key (KET)',
                'description_en' => 'Preparation for the basic level of English, where you learn how to handle simple everyday situations.',
            ],
            [
                'category'       => 'Англиски јазик',
                'exam_group'     => 'Cambridge English',
                'name'           => 'B1 Preliminary (PET)',
                'description'    => 'Курс што те подготвува да комунициш и разбираш англиски во училиште, работа и патување.',
                'name_en'        => 'B1 Preliminary (PET)',
                'description_en' => 'A course that prepares you to communicate and understand English at school, work and while travelling.',
            ],
            [
                'category'       => 'Англиски јазик',
                'exam_group'     => 'Cambridge English',
                'name'           => 'B2 First (FCE)',
                'description'    => 'Подготовка за стабилно користење на англискиот јазик во академска или работна средина.',
                'name_en'        => 'B2 First (FCE)',
                'description_en' => 'Preparation for confident use of English in academic or professional environments.',
            ],
            [
                'category'       => 'Англиски јазик',
                'exam_group'     => 'Cambridge English',
                'name'           => 'C1 Advanced (CAE)',
                'description'    => 'Интензивна подготовка за постигнување високо ниво на англиски за студии и професионални цели.',
                'name_en'        => 'C1 Advanced (CAE)',
                'description_en' => 'Intensive preparation for achieving a high level of English for academic and professional purposes.',
            ],
            [
                'category'       => 'Англиски јазик',
                'exam_group'     => 'Cambridge English',
                'name'           => 'C2 Proficiency (CPE)',
                'description'    => 'Подготовка за совршено владеење на англискиот јазик и највисок степен на прецизност.',
                'name_en'        => 'C2 Proficiency (CPE)',
                'description_en' => 'Preparation for mastery of the English language and the highest degree of precision.',
            ],
            [
                'category'       => 'Англиски јазик',
                'exam_group'     => 'Cambridge English',
                'name'           => 'BEC Business English Certificates',
                'description'    => 'Подготовка за развивање на бизнис комуникациски вештини и професионален вокабулар на англиски.',
                'name_en'        => 'BEC Business English Certificates',
                'description_en' => 'Preparation for developing business communication skills and professional vocabulary in English.',
            ],

            // ── АНГЛИСКИ ЈАЗИК ── TOEFL iBT ─────────────────────────────────────
            [
                'category'       => 'Англиски јазик',
                'exam_group'     => 'TOEFL iBT',
                'name'           => 'Test of English as a Foreign Language Internet based Test',
                'description'    => 'Курс фокусиран на академски англиски, со практични задачи за читање, слушање, пишување и зборување.',
                'name_en'        => 'Test of English as a Foreign Language Internet based Test',
                'description_en' => 'A course focused on academic English, with practical tasks for reading, listening, writing and speaking.',
            ],

            // ── АНГЛИСКИ ЈАЗИК ── IELTS ─────────────────────────────────────────
            [
                'category'       => 'Англиски јазик',
                'exam_group'     => 'IELTS',
                'name'           => 'International English Language Testing System',
                'description'    => 'Подготовка што ги развива сите четири јазични вештини за успешно полагање на академски или генерален модул.',
                'name_en'        => 'International English Language Testing System',
                'description_en' => 'Preparation that develops all four language skills for successfully passing the academic or general module.',
            ],

            // ── ГЕРМАНСКИ ЈАЗИК ── TESTDAF ───────────────────────────────────────
            [
                'category'       => 'Германски јазик',
                'exam_group'     => 'TestDaF',
                'name'           => 'Test Deutsch als Fremdsprache',
                'description'    => 'Ке ги усовршите сите јазични вештини потребни за успешно полагање на TestDaF.',
                'name_en'        => 'Test Deutsch als Fremdsprache',
                'description_en' => 'You will perfect all the language skills needed to successfully pass the TestDaF.',
            ],

            // ── ГЕРМАНСКИ ЈАЗИК ── TELC DEUTSCH ─────────────────────────────────
            [
                'category'       => 'Германски јазик',
                'exam_group'     => 'Telc Deutsch',
                'name'           => 'Telc Deutsch B1',
                'description'    => 'Започнете со градење цврста основа на граматика и збореновен фонд за самостојна комуникација.',
                'name_en'        => 'Telc Deutsch B1',
                'description_en' => 'Start building a solid foundation in grammar and vocabulary for independent communication.',
            ],
            [
                'category'       => 'Германски јазик',
                'exam_group'     => 'Telc Deutsch',
                'name'           => 'Telc Deutsch B2',
                'description'    => 'Продлабочете го знаењето и стекнете сигурност во говор и пишување.',
                'name_en'        => 'Telc Deutsch B2',
                'description_en' => 'Deepen your knowledge and gain confidence in speaking and writing.',
            ],
            [
                'category'       => 'Германски јазик',
                'exam_group'     => 'Telc Deutsch',
                'name'           => 'Telc Deutsch C1',
                'description'    => 'Совладајте го германскиот на напредно ниво и подгответе се за академски предизвици.',
                'name_en'        => 'Telc Deutsch C1',
                'description_en' => 'Master German at an advanced level and prepare yourself for academic challenges.',
            ],

            // ── ДРЖАВНА МАТУРА ───────────────────────────────────────────────────
            [
                'category'       => 'Државна матура',
                'exam_group'     => 'Државна матура',
                'name'           => 'Државна матура по англиски јазик',
                'description'    => 'Кандидатите се запознаваат со форматот на испитот и стратегиите за успешно положување.',
                'name_en'        => 'State Graduation Exam in English',
                'description_en' => 'Candidates become familiar with the exam format and strategies for successful passing.',
            ],
        ];

        foreach ($data as $item) {
            ExamPrep::create($item);
        }
    }
}