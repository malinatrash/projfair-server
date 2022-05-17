<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Participation;
use App\Models\Project;
use App\Models\Skill;
use App\Models\SkillCategory;
use App\Models\Speciality;
use App\Models\State;
use App\Models\StateParticipation;
use App\Models\Supervisor;
use Illuminate\Support\Facades\DB;
use App\Models\Type;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$skills = Skill::factory(100)->create();
        //$candidates = Candidate::factory(100)->create();
        //Type::factory(20)->create();
        //Supervisor::factory(20)->create();
        //StateParticipation::factory(20)->create();

        DB::table('states')->insert([
            'state' => 'Идёт набор',
        ]);
        DB::table('states')->insert([
            'state' => 'Активный',
        ]);
        DB::table('states')->insert([
            'state' => 'Добор',
        ]);
        DB::table('states')->insert([
            'state' => 'В архиве',
        ]);
        DB::table('types')->insert([
            'type' => 'Прикладной',
        ]);
        DB::table('types')->insert([
            'type' => 'Научная',
        ]);
        DB::table('types')->insert([
            'type' => 'Сервисный',
        ]);

        DB::table('supervisors')->insert([
            'fio' => 'Лукьянов Никита Дмитриевич',
            'email' => 'ijsjpp@gmail.com',
            'position' => 'Руководитель проекта',
            'about' => '',
        ]);

        DB::table('supervisors')->insert([
            'fio' => 'Аршинский Вадим Леонидович',
            'email' => 'arshinskyv@mail.ru',
            'position' => 'Доцент',
            'about' => 'Руководитель центра программной инженерии',
        ]);

        DB::table('supervisors')->insert([
            'fio' => 'Чернышенко Марина Сергеевна',
            'email' => 'karo_m@mail.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Осипова Ирина Михайловна',
            'email' => 'phenka@mail.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Наумова Татьяна Александровна',
            'email' => 'Tanya_n80@list.ru',
            'position' => 'Руководитель проекта',
            'about' => 'руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Баяскаланова Туяна Александровна ',
            'email' => 'Dama83@mail.ru ',
            'position' => 'руководитель проекта',
            'about' => 'руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Другова Елена Сергеевна',
            'email' => 'Alena-svetlaya@mail.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Бельская Ольга Герасимовна',
            'email' => 'olgabelskaya@mail.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Днепровская Марина Анатольевна',
            'email' => 'mariosky@rambler.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Красноярова Елена Викторовна',
            'email' => 'Krasnoyarova.65@mail.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Мушинский Михаил Адеилович',
            'email' => 'mushinskiy@mail.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Пахаруков Александр Анатольевич',
            'email' => 'paharukov@mail.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Самусевич Алексей Геннадьевич',
            'email' => 'Samusevich79@mail.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Степаненко Ольга Геннадьевна',
            'email' => 'Ols-tep@yandex.ru',
            'position' => '� уководитель проекта',
            'about' => '� уководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Туркова Валентина Николаевна',
            'email' => 'Nikolaevna_ur@mail.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);
        DB::table('supervisors')->insert([
            'fio' => 'Чердакова Лариса Анатольевна',
            'email' => 'l.docent@mail.ru',
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
        ]);



        DB::table('state_participations')->insert([
            'state' => 'Идёт набор',
        ]);
        DB::table('state_participations')->insert([
            'state' => 'Активный',
        ]);
        DB::table('state_participations')->insert([
            'state' => 'Добор',
        ]);
        DB::table('state_participations')->insert([
            'state' => 'В архиве',
        ]);

        DB::table('specialities')->insert([
            'name' => 'ИСТ',
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИСТ',
        ]);
        DB::table('specialities')->insert([
            'name' => 'АСУ',
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭВМ',
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИБ',
        ]);

        DB::table('skill_categories')->insert([
            'name' => 'Математика',
        ]);
        DB::table('skill_categories')->insert([
            'name' => 'Программная разработка',
        ]);
        DB::table('skill_categories')->insert([
            'name' => 'Работа с данными',
        ]);
        DB::table('skill_categories')->insert([
            'name' => 'Web-разработка',
        ]);
        DB::table('skill_categories')->insert([
            'name' => 'Работа с графикой',
        ]);
        DB::table('skill_categories')->insert([
            'name' => 'Проектирование',
        ]);

        DB::table('skills')->insert([
            ['skill' => 'C#',  'skillCategory_id' => '2'],
            ['skill' => 'Java',  'skillCategory_id' => '2'],
            ['skill' => 'Мат.логика',  'skillCategory_id' => '1'],
            ['skill' => 'SQL',  'skillCategory_id' => '3'],
            ['skill' => 'HTML',  'skillCategory_id' => '4'],
            ['skill' => 'AutoCAD',  'skillCategory_id' => '5'],
            ['skill' => 'CASE-средства',  'skillCategory_id' => '6'],
        ]);

        DB::table('projects')->insert([
            'title' => 'Платформа для размещения вузовских олимпиад',
            'places' => '1',
            'goal' => 'Создать платформу (страничку) для рекламы олимпиад',
            'description' => 'В настоящий момент олимпиады проводятся на сайте "Открытые курсы ИРНИТУ", базирующемся на платформе MOODLE, ДАнная платформа при всех ее достоинствах имеет существенный недостаток',
            'difficulty' => '1',
            'date_start' => '2021-01-29',
            'date_end' => '2021-01-29',
            'requirements' => 'Знание основ верстки  и дизайна веб-страниц',
            'customer' => 'ЦЭО, Лукьянов Н.Д.',
            'study_result' => 'Платформа пригодная для размещения олимпиад, анонса других мероприятий интегрированная с moodle',
            'product_result' => 'Платформа пригодная для размещения олимпиад, анонса других мероприятий интегрированная с moodle',
            'state_id' => '1',
            'supervisor_id' => '1',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Мастер подбора руководителя ВКР',
            'places' => '2',
            'goal' => 'Решение проблемы поиска студентами выпускного курса руководителя выпускной квалификационной работы',
            'description' => 'Создать в помощь студенту "мастер подбора" руководителя ВКР на основе предыдущих интересов преподавателя и темат',
            'difficulty' => '2',
            'date_start' => '2021-01-29',
            'date_end' => '2021-01-29',
            'requirements' => 'серверная часть: php, MySQL; клиентская часть: BootStrap, JQ',
            'customer' => 'ИТиАД, ИРНИТУ',
            'study_result' => 'Методика подбора рекомендуемых руководителей ВКР на основе указанных ими интересов, компетенций и тем защищенных под их руководством ВКР.',
            'product_result' => 'Платформа пригодная для размещения олимпиад, анонса других мероприятий интегрированная с moodle',
            'state_id' => '2',
            'supervisor_id' => '2',
            'type_id' => '1',
        ]);


        DB::table('candidates')->insert([
            'fio' => 'Мишланов Семён Сергеевич',
            'about' => 'Очень люблю пиццу и программировать. Особенная страсть заполнять данные',
            'email' => 'semomihlanav@gmail.com',
            'numz' => 'Мы не поняли что это, но это varchar',
            'phone' => '8-800-555-35-35',
            'course' => '3',
            'training_group' => 'ИСТ-19-2',

        ]);

        DB::table('project_skill')->insert([
            'skill_id' => '1',
            'project_id' => '1',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '1',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '3',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '4',
            'project_id' => '2',
        ]);

        // $projects = Project::factory(200)->create();

        // foreach ($projects as $project) {
        //     $skillsIds = $skills->random(10)->pluck('id');
        //      $project->skills()->attach($skillsIds);
        //  }

        //  foreach ($candidates as $candidate) {
        //      $skillsIds = $skills->random(15)->pluck('id');
        //       $candidate->skills()->attach($skillsIds);
        //  }

        //   Participation::factory(100)->create();
    }
}
