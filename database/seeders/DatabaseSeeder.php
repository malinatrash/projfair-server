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

        DB::table('institutes')->insert([
            'name' => 'Институт авиамашиностроения и транспорта',
        ]);
        DB::table('institutes')->insert([
            'name' => 'Институт заочно-вечернего обучения',
        ]);
        DB::table('institutes')->insert([
            'name' => 'Институт высоких технологий',
        ]);
        DB::table('institutes')->insert([
            'name' => 'Институт информационных технологий и анализа данных',
        ]);
        DB::table('institutes')->insert([
            'name' => 'Институт архитектуры, строительства и дизайна',
        ]);
        DB::table('institutes')->insert([
            'name' => 'Институт недропользования',
        ]);
        DB::table('institutes')->insert([
            'name' => 'Институт экономики, управления и права',
        ]);
        DB::table('institutes')->insert([
            'name' => 'Байкальский институт БРИКС',
        ]);
        DB::table('institutes')->insert([
            'name' => 'Институт лингвистики и межкультурной коммуникации',
        ]);
        DB::table('institutes')->insert([
            'name' => 'Институт энергетики',
        ]);











        DB::table('specialities')->insert([
            'name' => 'АМб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АТбп',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АТМб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АСУб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АДб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АСб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭТбп',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ДСб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АРб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РРб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РРбп',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'БТПб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'НДб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ВВб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭВМб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГСХб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГСХбп',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГМФб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГРб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЮРГб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЖРб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЖКб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИРб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИНС',
            'institute_id' => '8'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИСТб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИСМб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИИКб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'КНб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИБб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'НМб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЛИМб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МБб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МДБб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МЦб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МИРб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МЭб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИФб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МРб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МТб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МТбп',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УСТб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ООСб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИСТбп',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ПМб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'БТб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ПГСб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РДб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АТПб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПАб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ДИб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭСТб',
            'institute_id' => '9'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ТВб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭЛб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭЛбп',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ММб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ТПб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ТХб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЮРУб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИНб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УКб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УКбп',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УПб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИЭб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ФКб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ХТОб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ХТТб',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ХТТбп',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭИб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭТЭКб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПОб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭУНб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'НДДб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭСб',
            'institute_id' => '9'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭЛТбп',
            'institute_id' => '9'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭАПЭб',
            'institute_id' => '9'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭАПб',
            'institute_id' => '9'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПб',
            'institute_id' => '9'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭЭЗбп',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГИСиРФ',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РМ',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГИС',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РФ',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГЭ',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГМ',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'НБ',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИГ',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГГ',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МД',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ОП',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГО',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГП',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'СДМ',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РГ',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'СМ',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'СУЗ',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПЭБ',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГА',
            'institute_id' => '5'
        ]);




















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
            'about' => 'Руководитель проекта',
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
            'position' => 'Руководитель проекта',
            'about' => 'Руководитель проекта',
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
            'state' => 'На распределении',
        ]);
        DB::table('state_participations')->insert([
            'state' => 'Участвует',
        ]);
        DB::table('state_participations')->insert([
            'state' => 'Архив',
        ]);
        DB::table('state_participations')->insert([
            'state' => 'Отклонена',
        ]);




        DB::table('skill_categories')->insert([
            'name' => 'Навыки',
        ]);
        DB::table('skills')->insert([
            ['name' => 'Unity 3d',  'skillCategory_id' => '1'],
            ['name' => 'Blender',  'skillCategory_id' => '1'],
            ['name' => 'PHP',  'skillCategory_id' => '1'],
            ['name' => 'C++',  'skillCategory_id' => '1'],
            ['name' => 'Проектирование БД',  'skillCategory_id' => '1'],
            ['name' => 'Linux',  'skillCategory_id' => '1'],
            ['name' => 'Git',  'skillCategory_id' => '1'],
            ['name' => 'JavaScript',  'skillCategory_id' => '1'],
            ['name' => 'HTML',  'skillCategory_id' => '1'],
            ['name' => 'CSS',  'skillCategory_id' => '1'],
            ['name' => 'SQL',  'skillCategory_id' => '1'],
            ['name' => 'JSON',  'skillCategory_id' => '1'],
            ['name' => 'Проектирование БД и информационных систем',  'skillCategory_id' => '1'],
            ['name' => 'Анализ бизнес-процессов',  'skillCategory_id' => '1'],
            ['name' => 'Разработка руководства пользователя',  'skillCategory_id' => '1'],
            ['name' => 'Laravel',  'skillCategory_id' => '1'],
            ['name' => 'MySQL',  'skillCategory_id' => '1'],
            ['name' => 'Nginx',  'skillCategory_id' => '1'],
            ['name' => 'Vue',  'skillCategory_id' => '1'],
            ['name' => 'Android',  'skillCategory_id' => '1'],
            ['name' => 'Kotlin',  'skillCategory_id' => '1'],
            ['name' => 'Figma',  'skillCategory_id' => '1'],
            ['name' => 'Удалённое управление ОС',  'skillCategory_id' => '1'],
            ['name' => 'Python',  'skillCategory_id' => '1'],
            ['name' => 'TensorFlow',  'skillCategory_id' => '1'],
            ['name' => 'Keras',  'skillCategory_id' => '1'],
            ['name' => 'Gensim',  'skillCategory_id' => '1'],
            ['name' => 'Pandas',  'skillCategory_id' => '1'],
            ['name' => 'Numpy',  'skillCategory_id' => '1'],
            ['name' => 'Trello',  'skillCategory_id' => '1'],
            ['name' => 'Dropbox',  'skillCategory_id' => '1'],
            ['name' => 'Объектно-ориентированное программирование',  'skillCategory_id' => '1'],
            ['name' => 'Машинное обучение (DNN, SVM)',  'skillCategory_id' => '1'],
            ['name' => 'Обработка естественного языка (NLP)',  'skillCategory_id' => '1'],
            ['name' => 'Основы высшей математики и математической статистики',  'skillCategory_id' => '1'],
            ['name' => 'Элементарные навыки программирования на языке Python',  'skillCategory_id' => '1'],
            ['name' => 'Проектирование АСОИиУ',  'skillCategory_id' => '1'],
            ['name' => 'Базовые знания языков Java/C#/python',  'skillCategory_id' => '1'],
            ['name' => 'Java',  'skillCategory_id' => '1'],
            ['name' => 'AnyLogic',  'skillCategory_id' => '1'],
            ['name' => 'С++',  'skillCategory_id' => '1'],
            ['name' => 'С#',  'skillCategory_id' => '1'],
            ['name' => 'PostgreSQL',  'skillCategory_id' => '1'],
            ['name' => 'Visual Studio',  'skillCategory_id' => '1'],
            ['name' => 'VC++ Express',  'skillCategory_id' => '1'],
            ['name' => 'Работа с виртуальной машиной (Virtual Box, Virtual PC 2007 –  свободный доступ «бесплатные»).',  'skillCategory_id' => '1'],
            ['name' => 'Имеет знания базовых математических дисциплин и проявлять высокую степень их понимания',  'skillCategory_id' => '1'],
            ['name' => 'Умеет решать математические задачи, аналогичные ранее изученным, но более высокого уровня сложности',  'skillCategory_id' => '1'],
            ['name' => 'Обладает способностью к применению знаний на практике, в том числе умением составлять математические модели типовых профессиональных задач и находить способы их решений, интерпретировать профессиональный (физический) смысл полученного математического результата',  'skillCategory_id' => '1'],
            ['name' => 'Умеет представлять математические утверждения и их доказательства, задачи и их решения ясно и точно в терминах, понятных для профессиональной аудитории, как в письменной, так и устной форме',  'skillCategory_id' => '1'],
            ['name' => 'Обладает математическим мышлением, математической культурой как частью профессиональной и общечеловеческой культуры',  'skillCategory_id' => '1'],
            ['name' => 'Используя соответствующие структуры данных и алгоритмы получает обобщённый/объектно-ориентированный код, в котором инкапсулированы и нужным образом выделены те аспекты задачи, которые могут измениться',  'skillCategory_id' => '1'],
            ['name' => 'Способен представлять и проектировать сложные системы из множества продуктов с интеграцией с внешними системами',  'skillCategory_id' => '1'],
            ['name' => 'Способен понимать и сообщать мысли/архитектурные идеи/спецификации в непротиворечивой форме и в общении ориентируется на контекст (на понимание собеседниками друг друга). Может обучать других',  'skillCategory_id' => '1'],
            ['name' => 'Способен предложить лучшие альтернативы предлагаемым решениям исходя из личного опыта',  'skillCategory_id' => '1'],
            ['name' => 'Экспериментирует с предварительными версиями программ, создаёт пробные новые решения',  'skillCategory_id' => '1'],
            ['name' => 'Знание английского B1',  'skillCategory_id' => '1'],
            ['name' => 'Ethernet',  'skillCategory_id' => '1'],
            ['name' => 'Удалённое',  'skillCategory_id' => '1'],
            ['name' => 'Работа с БД',  'skillCategory_id' => '1'],
            ['name' => 'С',  'skillCategory_id' => '1'],
            ['name' => 'Управление ОС',  'skillCategory_id' => '1'],
            ['name' => 'Arduino. ',  'skillCategory_id' => '1'],
            ['name' => 'LoRa',  'skillCategory_id' => '1'],
            ['name' => 'Wi-Fi',  'skillCategory_id' => '1'],
            ['name' => 'Bluetooth',  'skillCategory_id' => '1'],
            ['name' => 'Разработка руководства пользователя ',  'skillCategory_id' => '1'],
            ['name' => 'Обеспечение технологического стека – знания и умение программировать',  'skillCategory_id' => '1'],
            ['name' => 'Для фронтенда: React.js + дизайн и web-дизайн',  'skillCategory_id' => '1'],
            ['name' => 'Для бэкэнда: Java + PostgreSQL',  'skillCategory_id' => '1'],
            ['name' => 'Обеспечение технологического стека – знания и умение программировать в:1)MSSQL2)C#3)ASP.NET',  'skillCategory_id' => '1'],
            ['name' => 'Для фронтенда: PHP + дизайн и web-дизайн',  'skillCategory_id' => '1'],
            ['name' => 'Для бэкэнда: PHP, Java + MySQL',  'skillCategory_id' => '1'],
            ['name' => 'ФЗ-63',  'skillCategory_id' => '1'],
            ['name' => 'Битрикс» ',  'skillCategory_id' => '1'],
            ['name' => 'Матричная структура управления: геолого-разведка',  'skillCategory_id' => '1'],
            ['name' => 'Строительство',  'skillCategory_id' => '1'],
            ['name' => 'Проектное управление',  'skillCategory_id' => '1'],
            ['name' => 'Добыча и транспортировка газа',  'skillCategory_id' => '1'],
            ['name' => 'SimInTech',  'skillCategory_id' => '1'],
            ['name' => 'Universal Mechanism',  'skillCategory_id' => '1'],
            ['name' => 'Proteus',  'skillCategory_id' => '1'],
            ['name' => 'Invertor',  'skillCategory_id' => '1'],
            ['name' => 'Kompas 3D ',  'skillCategory_id' => '1'],
            ['name' => 'Microsoft Windows',  'skillCategory_id' => '1'],
            ['name' => 'Microsoft Office',  'skillCategory_id' => '1'],
            ['name' => 'PTC_MathCAD',  'skillCategory_id' => '1'],
            ['name' => 'Excel Link concurrent AcademicEdition',  'skillCategory_id' => '1'],
            ['name' => 'КОМПАС-3D',  'skillCategory_id' => '1'],
            ['name' => 'Знание основ сопротивления материалов',  'skillCategory_id' => '1'],
            ['name' => 'Желание работать на 3d-принтере',  'skillCategory_id' => '1'],
            ['name' => 'Желание работать в CAD/CAE – системах ',  'skillCategory_id' => '1'],
            ['name' => 'Знания  CAD программ',  'skillCategory_id' => '1'],
            ['name' => 'Основы программирования',  'skillCategory_id' => '1'],
            ['name' => 'Основы  термодинамики  теплопередачи',  'skillCategory_id' => '1'],
            ['name' => 'Siemens Femap',  'skillCategory_id' => '1'],
            ['name' => 'Excel',  'skillCategory_id' => '1'],
            ['name' => 'Понимание основ линейной алгебры ',  'skillCategory_id' => '1'],
            ['name' => 'ЭЛб19',  'skillCategory_id' => '1'],
            ['name' => 'Знание основ гидравлики',  'skillCategory_id' => '1'],
            ['name' => 'Умение читать гидросхемы',  'skillCategory_id' => '1'],
            ['name' => 'NX',  'skillCategory_id' => '1'],
            ['name' => 'FloEFD',  'skillCategory_id' => '1'],
            ['name' => 'Mathlab Simulink',  'skillCategory_id' => '1'],
            ['name' => 'Конструирование и проектирование изделий',  'skillCategory_id' => '1'],
            ['name' => 'Моделирование в Siemens NX',  'skillCategory_id' => '1'],
            ['name' => 'Siemens NX',  'skillCategory_id' => '1'],
            ['name' => 'Умение работать с композиционными материалами',  'skillCategory_id' => '1'],
            ['name' => 'Начальные навыки конструирования и проектирования изделий в области машиностроения с применением САПР',  'skillCategory_id' => '1'],
            ['name' => 'Знания в области станков, инструмента',  'skillCategory_id' => '1'],
            ['name' => 'Материаловедения и сварочных технологий',  'skillCategory_id' => '1'],
            ['name' => 'Конструирование и проектирование изделий ',  'skillCategory_id' => '1'],
            ['name' => 'ЧПУ',  'skillCategory_id' => '1'],
            ['name' => 'Mach3',  'skillCategory_id' => '1'],
            ['name' => 'PLCM',  'skillCategory_id' => '1'],
            ['name' => 'Д печать',  'skillCategory_id' => '1'],
            ['name' => 'Cura',  'skillCategory_id' => '1'],
            ['name' => 'Знания в области материаловедения',  'skillCategory_id' => '1'],
            ['name' => 'Сварочных технологий',  'skillCategory_id' => '1'],
            ['name' => 'Начальные навыки конструирования и проектирования изделий в области машиностроения ',  'skillCategory_id' => '1'],
            ['name' => 'Сварочно-наплавочных технологий',  'skillCategory_id' => '1'],
            ['name' => 'Знания в области материаловедения, сварочных технологий, начальные навыки конструирования и проектирования изделий в области машиностроения с применением САПР',  'skillCategory_id' => '1'],
            ['name' => 'Навыки работы на компьютере на уровне уверенного пользователя',  'skillCategory_id' => '1'],
            ['name' => 'Навыки работы в графических редакторах',  'skillCategory_id' => '1'],
            ['name' => 'MS Office',  'skillCategory_id' => '1'],
            ['name' => 'Навыки анализа и интерпретации данных',  'skillCategory_id' => '1'],
            ['name' => 'Активная позиция',  'skillCategory_id' => '1'],
            ['name' => 'Творческие навыки',  'skillCategory_id' => '1'],
            ['name' => 'Желание работать в коллективе',  'skillCategory_id' => '1'],
            ['name' => 'Знание программ по обработке и монтажу видео',  'skillCategory_id' => '1'],
            ['name' => 'Базовые знания и умения в области бизнес-планирования',  'skillCategory_id' => '1'],
            ['name' => 'Базовые знания и умения в области страхового дела',  'skillCategory_id' => '1'],
            ['name' => 'Знание китайского языка',  'skillCategory_id' => '1'],
            ['name' => 'Базовые знания и умения в области банковского дела',  'skillCategory_id' => '1'],
            ['name' => 'Базовые знания и умения в области макроэкономики, региональной экономики и финансов',  'skillCategory_id' => '1'],
            ['name' => 'Знания экономических основ системы государственного управления бюджетным процессом',  'skillCategory_id' => '1'],
            ['name' => 'Знать основные ресурсные ограничения проекта',  'skillCategory_id' => '1'],
            ['name' => 'Знать основные требования к представлению результатов проекта',  'skillCategory_id' => '1'],
            ['name' => 'Уметь выполнять критический анализ и сформулировать перечень недостающих знаний, необходимых для достижения целей',  'skillCategory_id' => '1'],
            ['name' => 'Уметь использовать различные инструменты поиска и анализа информации',  'skillCategory_id' => '1'],
            ['name' => 'Уметь критически оценивать полученные результаты',  'skillCategory_id' => '1'],
            ['name' => 'Уметь определять внутренний и внешний круг стейкхолдеров для проектной команды',  'skillCategory_id' => '1'],
            ['name' => 'Уметь определять круг задач и решать их в соответствии со своей ролевой позицией',  'skillCategory_id' => '1'],
            ['name' => 'Уметь подготовить результаты',  'skillCategory_id' => '1'],
            ['name' => 'Уметь пользоваться основными инструментами организации рефлексии',  'skillCategory_id' => '1'],
            ['name' => 'Уметь спланировать и реализовать проект с учетом ресурсных ограничений и требований к результату проекта',  'skillCategory_id' => '1'],
            ['name' => 'Владеть навыками на основе полученной первичной информации сформировать комплексное понимание предмета изучения',  'skillCategory_id' => '1'],
            ['name' => 'Владеть навыками презентации результатов проекта',  'skillCategory_id' => '1'],
            ['name' => 'Владеть навыками определения задач и соотнесения их с ролевыми позициями',  'skillCategory_id' => '1'],
            ['name' => 'Владеть навыками четкого формулирования запроса на поиск новых знаний',  'skillCategory_id' => '1'],
            ['name' => 'Владеть навыками выполнения системного анализа полученной информации, выделения «дефицитов» знаний и формулирования запроса на поиск новой информации',  'skillCategory_id' => '1'],
            ['name' => 'Владеть навыками самоанализа и может оценить личный вклад в достигнутых результатах',  'skillCategory_id' => '1'],
            ['name' => 'Владеть навыками социального взаимодействия как с членами команды, так и с внешними стейкхолдерами',  'skillCategory_id' => '1'],
            ['name' => 'NanoCAD',  'skillCategory_id' => '1'],
            ['name' => 'Знать основы горных работ и вычислительной техники',  'skillCategory_id' => '1'],
            ['name' => 'Auto CAD',  'skillCategory_id' => '1'],
            ['name' => 'Datamine',  'skillCategory_id' => '1'],
            ['name' => 'Знание геодезии',  'skillCategory_id' => '1'],
            ['name' => 'Основ маркшейдерского дела',  'skillCategory_id' => '1'],
            ['name' => 'Геофизики',  'skillCategory_id' => '1'],
            ['name' => 'ГИС-систем',  'skillCategory_id' => '1'],
            ['name' => 'ДДЗ',  'skillCategory_id' => '1'],
            ['name' => 'Основ археологии',  'skillCategory_id' => '1'],
            ['name' => 'Знание рудной геологии, геодезии, основ маркшейдерского дела, основ горного дела',  'skillCategory_id' => '1'],
            ['name' => 'Навыки работы с геодезическими приборами и ПК',  'skillCategory_id' => '1'],
            ['name' => 'Аэрофотосъемки',  'skillCategory_id' => '1'],
            ['name' => 'Фотограмметрии',  'skillCategory_id' => '1'],
            ['name' => 'Навыки программирования логических контроллеров',  'skillCategory_id' => '1'],
            ['name' => 'Физико-математическая и геологическая подготовка, владение компьютерными технологиями в рамках вузовской программы.',  'skillCategory_id' => '1'],
            ['name' => 'Навыки проведения стратиграфических исследований (анализ, расчленения, корреляция стратиграфических разрезов и составления стратиграфических схем, колонок)',  'skillCategory_id' => '1'],
            ['name' => 'Matlab (Simulink)',  'skillCategory_id' => '1'],
            ['name' => 'Студент НДб20',  'skillCategory_id' => '1'],
            ['name' => 'Студент НДДб20',  'skillCategory_id' => '1'],
            ['name' => 'Студент НДб19',  'skillCategory_id' => '1'],
            ['name' => 'Дисциплинированность',  'skillCategory_id' => '1'],
            ['name' => 'Способность проявлять инициативу',  'skillCategory_id' => '1'],
            ['name' => 'Предлагать нестандартные варианты решения задач',  'skillCategory_id' => '1'],
            ['name' => 'Синтезировать научные и технологические тезисы из разрозненных данных',  'skillCategory_id' => '1'],
            ['name' => 'Желание развиваться и развивать науку и технику',  'skillCategory_id' => '1'],
            ['name' => 'Умение работать не только головой, но и руками',  'skillCategory_id' => '1'],
            ['name' => 'Умение работать в команде и нести ответственность за свою часть проекта',  'skillCategory_id' => '1'],
            ['name' => 'Знание методов обращения с отходами',  'skillCategory_id' => '1'],
            ['name' => 'Навыки работы с перерабатывающим оборудованием',  'skillCategory_id' => '1'],
            ['name' => 'Основы обогащения минерального сырья',  'skillCategory_id' => '1'],
            ['name' => 'Навыки работы в любых графических редакторах',  'skillCategory_id' => '1'],
            ['name' => 'Знание английского языка на уровне «Intermediate»',  'skillCategory_id' => '1'],
            ['name' => 'MS Word',  'skillCategory_id' => '1'],
            ['name' => 'MS Excel',  'skillCategory_id' => '1'],
            ['name' => 'MS PowerPoint',  'skillCategory_id' => '1'],
            ['name' => 'Курс минералогии',  'skillCategory_id' => '1'],
            ['name' => 'Курс физики',  'skillCategory_id' => '1'],
            ['name' => 'Курс высшей математики',  'skillCategory_id' => '1'],
            ['name' => 'Умение работать с петрографическим микроскопом',  'skillCategory_id' => '1'],
            ['name' => 'Знания в области проектирования систем автоматизации',  'skillCategory_id' => '1'],
            ['name' => 'CodeSys',  'skillCategory_id' => '1'],
            ['name' => 'Знания в области создания интегрированных систем управления',  'skillCategory_id' => '1'],
            ['name' => 'Знание основ программирования и алгоритмизации',  'skillCategory_id' => '1'],
            ['name' => 'Верстка на языке HTML/CSS',  'skillCategory_id' => '1'],
            ['name' => 'Разработка прототипа сайта (figma)',  'skillCategory_id' => '1'],
            ['name' => 'Разработка бизнес-моделей',  'skillCategory_id' => '1'],
            ['name' => 'CAE',  'skillCategory_id' => '1'],
            ['name' => 'Nastran',  'skillCategory_id' => '1'],
            ['name' => 'Эрудиция по вопросам медицины',  'skillCategory_id' => '1'],
            ['name' => 'Знание медико-биологических требований и санитарных норм качества пищевой продукции',  'skillCategory_id' => '1'],
            ['name' => 'Знание системы менеджмента безопасности пищевой продукции ',  'skillCategory_id' => '1'],
            ['name' => 'Знание пищевой микробиологии',  'skillCategory_id' => '1'],
            ['name' => 'Знание системы менеджмента безопасности пищевой продукции',  'skillCategory_id' => '1'],
            ['name' => 'Умение работать: с химической посудой',  'skillCategory_id' => '1'],
            ['name' => 'Знания ГОСТовских методик определения характеристик масел',  'skillCategory_id' => '1'],
            ['name' => 'Работа со спецоборудованием',  'skillCategory_id' => '1'],
            ['name' => 'Химическими веществами',  'skillCategory_id' => '1'],
            ['name' => 'Работа с технической, нормативной, научной и патентной  литературой',  'skillCategory_id' => '1'],
            ['name' => 'Умение работать: с химической посудой, спецоборудованием, химическими веществами, с технической литературой',  'skillCategory_id' => '1'],
            ['name' => 'Знание физико-химии наночастиц',  'skillCategory_id' => '1'],
            ['name' => 'Наноматериалов',  'skillCategory_id' => '1'],
            ['name' => 'Знание органической химии, химии полимеров',  'skillCategory_id' => '1'],
            ['name' => 'Знание химии поверхностных явлений и дисперсных систем',  'skillCategory_id' => '1'],
            ['name' => 'Знание физико-химии наночастиц, наноматериалов.',  'skillCategory_id' => '1'],
            ['name' => 'ArhiCad 25',  'skillCategory_id' => '1'],
            ['name' => 'Владение  навыками компьютерного моделирования',  'skillCategory_id' => '1'],
            ['name' => 'Формирование проектной концепции',  'skillCategory_id' => '1'],
            ['name' => 'Умение схематизировать и стилизовать, конструирование и проектирование зданий',  'skillCategory_id' => '1'],
            ['name' => 'Конструирование и проектирование предметов мебели, малых архитектурных форм',  'skillCategory_id' => '1'],
            ['name' => 'Моделирование в графических компьютерных программах',  'skillCategory_id' => '1'],
            ['name' => 'AutoCad',  'skillCategory_id' => '1'],
            ['name' => 'ArchiCad',  'skillCategory_id' => '1'],
            ['name' => 'Adobe',  'skillCategory_id' => '1'],
            ['name' => 'Corel Draw',  'skillCategory_id' => '1'],
            ['name' => 'D',  'skillCategory_id' => '1'],
            ['name' => 'Навыки создания графической части объектов архитектуры, зданий и сооружений',  'skillCategory_id' => '1'],
            ['name' => 'Работа в пространстве программного обеспечения',  'skillCategory_id' => '1'],
            ['name' => 'Конструирование и проектирование зданий',  'skillCategory_id' => '1'],
            ['name' => 'ArchiCAD',  'skillCategory_id' => '1'],
            ['name' => 'AutoCAD',  'skillCategory_id' => '1'],
            ['name' => 'D моделирование (3D MAX)',  'skillCategory_id' => '1'],
            ['name' => 'Знание разработки чертежей раздела электрики ( желательно )',  'skillCategory_id' => '1'],
            ['name' => 'Autodesk AutoCAD',  'skillCategory_id' => '1'],
            ['name' => 'Конструирование и проектирование зданий, инженерных систем зданий',  'skillCategory_id' => '1'],
            ['name' => 'ARCHICAD ',  'skillCategory_id' => '1'],
            ['name' => 'Владение автоматизированной системой проектирования и черчения.',  'skillCategory_id' => '1'],
            ['name' => 'AutoCAD Architecture',  'skillCategory_id' => '1'],
            ['name' => 'Microsoft Visual Studio ',  'skillCategory_id' => '1'],
            ['name' => 'Умение ориентироваться в нормативной документации',  'skillCategory_id' => '1'],
            ['name' => 'Владение навыками AutoCAD и др. программами.',  'skillCategory_id' => '1'],
            ['name' => 'ГИС Панорама»',  'skillCategory_id' => '1'],
            ['name' => 'Правовые основ земельно-имущественных отношений',  'skillCategory_id' => '1'],
            ['name' => 'Знание ПО «ГИС Панорама», Правовые основ земельно-имущественных отношений',  'skillCategory_id' => '1'],
            ['name' => 'Знание основ академической живописи, рисунка, композиции',  'skillCategory_id' => '1'],
            ['name' => 'Способность анализировать и определять требования к дизайн-проекту и синтезировать набор возможных решений задачи или подходов к выполнению дизайн-проекта',  'skillCategory_id' => '1'],
            ['name' => 'Способность применять современные технологии, требуемые при реализации дизайн-проекта на практике',  'skillCategory_id' => '1'],
            ['name' => 'Способность учитывать при разработке художественного замысла особенности материалов с учетом их формообразующих свойств',  'skillCategory_id' => '1'],
            ['name' => 'Способность анализировать и определять требования к дизайн-проекту и синтезировать набор возможных решений задачи или подходов к выполнению дизайн-проекта и применять современные технологии, требуемые при реализации дизайн-проекта на практике',  'skillCategory_id' => '1'],
            ['name' => 'Знание основ академической живописи, рисунка, композиции.',  'skillCategory_id' => '1'],
            ['name' => 'Гео Кванториум ',  'skillCategory_id' => '1'],
            ['name' => 'Основы экономики',  'skillCategory_id' => '1'],
            ['name' => 'Теория градостроительства',  'skillCategory_id' => '1'],
            ['name' => 'Autodesk 3ds Max',  'skillCategory_id' => '1'],
            ['name' => 'QGIS Desktop',  'skillCategory_id' => '1'],
            ['name' => 'Archicad',  'skillCategory_id' => '1'],
            ['name' => 'Работа с режущим станком Thermo cut',  'skillCategory_id' => '1'],
            ['name' => 'Результативность',  'skillCategory_id' => '1'],
            ['name' => 'Высокий уровень трудоспособности',  'skillCategory_id' => '1'],
            ['name' => 'Коммуникабельность',  'skillCategory_id' => '1'],
            ['name' => 'Ответственность',  'skillCategory_id' => '1'],
            ['name' => 'Программы ГИС',  'skillCategory_id' => '1'],
            ['name' => 'Знание основ архитектурно-строительной, дизайнерской, социологической и экономической подготовки и действующих проектных норм',  'skillCategory_id' => '1'],
            ['name' => 'Работа в специальных графических программах ',  'skillCategory_id' => '1'],
            ['name' => 'Знание правил оформления архитектурно-строительных чертежей',  'skillCategory_id' => '1'],
            ['name' => 'Владение графическими программами на начальном уровне ',  'skillCategory_id' => '1'],
            ['name' => 'QGIS',  'skillCategory_id' => '1'],
            ['name' => 'Exel',  'skillCategory_id' => '1'],
            ['name' => 'Matlab',  'skillCategory_id' => '1'],
            ['name' => 'Autodesk Inventor',  'skillCategory_id' => '1'],
            ['name' => 'Qt',  'skillCategory_id' => '1'],
            ['name' => 'Компас 3D',  'skillCategory_id' => '1'],
            ['name' => 'Компьютерные технологии',  'skillCategory_id' => '1'],
            ['name' => 'Знания в области теплоэнергетики',  'skillCategory_id' => '1'],
            ['name' => 'Понимание электрических процессов в электрической сети',  'skillCategory_id' => '1'],
            ['name' => 'Понимание взаимосвязи параметров электрического режима и параметров схемы замещения',  'skillCategory_id' => '1'],
            ['name' => 'MATLAB',  'skillCategory_id' => '1'],
            ['name' => 'Ехсеl',  'skillCategory_id' => '1'],
            ['name' => 'MathCad',  'skillCategory_id' => '1'],
            ['name' => 'Visual Basic',  'skillCategory_id' => '1'],
            ['name' => 'Знание электротехники',  'skillCategory_id' => '1'],
            ['name' => 'Навыки работы на ПК',  'skillCategory_id' => '1'],
            ['name' => 'Знание основ релейной защиты',  'skillCategory_id' => '1'],
            ['name' => 'Интерес к работе с техникой и оборудованием',  'skillCategory_id' => '1'],
            ['name' => 'Базовые навыки чтения электрических схем',  'skillCategory_id' => '1'],
            ['name' => 'Работа в САПР',  'skillCategory_id' => '1'],
            ['name' => 'Редактор схем',  'skillCategory_id' => '1'],
            ['name' => 'Компас, Visio',  'skillCategory_id' => '1'],
            ['name' => 'Подготавливать исходную техническую и климатическую информацию',  'skillCategory_id' => '1'],
            ['name' => 'Программирование в Matlab',  'skillCategory_id' => '1'],
            ['name' => 'Читать и переводить англоязычную литературу',  'skillCategory_id' => '1'],
            ['name' => 'Программирование в Matla',  'skillCategory_id' => '1'],
            ['name' => 'Моделирование в MatLab ',  'skillCategory_id' => '1'],
            ['name' => 'Знание электротехники, базовые навыки чтения электрических схем',  'skillCategory_id' => '1'],
            ['name' => 'Компас',  'skillCategory_id' => '1'],
            ['name' => 'Visio',  'skillCategory_id' => '1'],
            ['name' => 'Eplan',  'skillCategory_id' => '1'],
            ['name' => 'МВТУ',  'skillCategory_id' => '1'],
            ['name' => 'Сайт ФИПС',  'skillCategory_id' => '1'],
        ]);

        // DB::table('skill_categories')->insert([
        //             'name' => 'Навыки',
        //         ]);
        // DB::table('skills')->insert([
        // ]);
        // DB::table('skill_categories')->insert([
        //             'name' => 'Навыки',
        //         ]);
        // DB::table('skills')->insert([
        // ]);
        // DB::table('skill_categories')->insert([
        //             'name' => 'Навыки',
        //         ]);
        // DB::table('skills')->insert([
        // ]);
        // DB::table('skill_categories')->insert([
        //             'name' => 'Навыки',
        //        ]);






        DB::table('projects')->insert([
            'title' => 'Разработка цифрового двойника авиастроительного предприятия с применение VR (unity)',
            'places' => '15',
            'goal' => 'Создание цифрового двойника производственного помещения в образовательном сегменте позволит обеспечить доступные инструменты для пользователей и дополнить обучающие программы интерактивным визуальным контентом. Погружение студентов в производственную атмосферу, без физического присутствия на производстве.',
            'description' => 'В настоящее время имеется следующий задел по проекту: разработано 1 станция виртуальной сборки, виртуализированы 3 лабораторных работ. 
В рамках данного проекта планируется масштабировать виртуальные цеха авиастроительного предприятия, доработать имеющийся сценарий агрегатно-сборочных работ.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Иркутский авиазавод, применение современных ИТ инструментов для цифровизации производств',
            'study_result' => 'Знания: принципы работы с gamedev
Умения: читать и составлять техническую документа. 
Навыки: работа с графическими редакторами, создание и реализация сценария
',
            'product_result' => 'Создан симулятор (тренажер), содержащий следующие функции:
1. Знакомство с конструкцией авиационных узлов и агрегатов (членение агрегатов и узлов)
2. Монтаж и ППР сборочного приспособления (доработка существующего функционала)',
            'state_id' => '1',
            'supervisors' => 'Говорков Алексей Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка цифрового следа обучающего ИРНИТУ (на примере студента института ИТиАД)',
            'places' => '15',
            'goal' => 'Разработка решения для сбора цифрового следа обучающихся ИРНИТУ (на примере обучающихся Института информационных технологий и анализа данных)',
            'description' => 'Целью данного проекта является разработка концепции, модели и прототипа (макетная реализация) информационной системы для сбора данных, являющихся составляющими цифрового следа студентов, обучающихся в ИРНИТУ. Собираемые данные содержат информацию об активностях студентов и достигнутых результатах в рамках этих активностей. Под «активностью студента» в проекте понимается участие обучающегося в учебных, научных и общественных мероприятиях, проводимых в университете и за его пределами. 
В настоящее время имеется следующий задел по проекту: в информационных системах университета фиксируются данные об успеваемости студентов, проводимых мероприятиях, победителях и призерах олимпиад и конференций.
В рамках данного проекта планируется разработка концепции (принципиальной модели сбора цифрового следа студентов), модели бизнес-процессов для сбора информации о деятельности студентов, проектирование хранилища данных и реализация прототипа информационной системы
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Управление по молодёжной политике, Учебно-методическое управление, Управление научной деятельности',
            'study_result' => 'Знания: принципы построения информационных систем, основы веб-программирования, принципы интеграции информационных систем, нотация Чена, стандарты описания UML, IDEF0.
Умения: анализировать проблему и ставить задачу, читать и составлять техническую документацию с использованием стандартов UML, IDEF0, моделировать данные, составление SQL-запросов.
Навыки: проектирования информационных систем, работа с реляционными СУБД, разработка JavaScript-скриптов, разработка php-скриптов.
',
            'product_result' => 'Концепция системы для сбора данных о деятельности студентов, проект информационной системы для фиксации цифрового следа, реализация системы на уровне прототипа',
            'state_id' => '1',
            'supervisors' => 'Копайгородский Алексей Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка цифровой платформы "Академия ИТ" (web + мобильное приложение)',
            'places' => '15',
            'goal' => 'Создание комплексного решения для поддержки и реализации проекта дополнительного обучения «Академия ИТ»',
            'description' => 'В настоящее время имеется следующий задел по проекту: 2-ой год реализации проекта, ЭОР «Академия ИТ 1, 2 этап», лендинг проекта, множество гугл форм и опросов.
В рамках данного проекта планируется разработать комплексное решение для реализации программы дополнительного обучения «Академия ИТ» с целью отражения оперативной успеваемостью студентов (элементы цифрового следа), а также с целью тиражирования проекта в других университетах РФ. 
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Эн+ Диджитал, Институт ИТиАД',
            'study_result' => 'Знания: принципы работы веб-сайта, основы веб-программирования, ORM-фреймворки, нотация Чена, стандарты описания UML, IDEF0, RDF
Умения: читать и составлять техническую документацию с использованием стандартов UML, IDEF0, RDF, моделирование данных, составление SQL-запросов, 
Навыки: работа с СУБД MySQL, администрирование Linux, работа с Figma, разработка JavaScript скриптов, разработка php-скриптов, работы с Laravel
',
            'product_result' => 'Реализация следующих функций: добавление отзыва наставника на работу участника проекта,  интерфейс обучающихся и администраторов проекта для загрузки аннотаций проектов в систему, ручного распределения студентов по проектам, загрузка и поддержка образовательного контента  выгрузки списков распределения студентов по проектам.',
            'state_id' => '1',
            'supervisors' => 'Говорков Алексей Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Развитие веб-платформы «Ярмарка проектов ИРНИТУ»',
            'places' => '15',
            'goal' => 'Создание решения для поддержки процесса распределения студентов ИРНИТУ в рамках проектной деятельности',
            'description' => 'Данный проект основывается на результатах проекта «Развитие веб-платформы “Ярмарка проектов” института ИТиАД»
В настоящее время имеется следующий задел по проекту: разработано веб-приложение позволяющее студентам просматривать карточки проектов, осуществлять сбор заявок от студентов на участие и автоматически распределять студентов по проектам с учетом их предпочтений и принадлежности к тому или иному направлению подготовки
В рамках данного проекта планируется доработать имеющуюся систему для поддержки процесса распределения студентов ИРНИТУ по проектам, для чего необходимо реализовать интерфейс руководителя центра проектного обучения, а также разработать механизмы дальнейшей интеграции с «АИС Университет»
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Центр проектного обучения',
            'study_result' => 'Знания: принципы работы веб-сайта, основы веб-программирования, ORM-фреймворки, нотация Чена, стандарты описания UML, IDEF0, RDF
Умения: читать и составлять техническую документацию с использованием стандартов UML, IDEF0, RDF, моделирование данных, составление SQL-запросов, 
Навыки: работа с СУБД MySQL, администрирование Linux, работа с Figma, разработка JavaScript скриптов, разработка php-скриптов, работы с Laravel
',
            'product_result' => 'Реализация следующих функций: добавление отзыва руководителя на работу участника проекта,  интерфейс руководителя центра проектного обучения для загрузки аннотаций проектов в систему, ручного перераспределения студентов по проектам, запуска механизма автоматического распределения студентов, в том числе «молчунов» (не подавших заявки на проекты), выгрузки списков распределения студентов по проектам.',
            'state_id' => '1',
            'supervisors' => 'Аршинский Вадим Леонидович, Серышева Ирина Анатольевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка методов и программного средства автоматического извлечения данных из таблиц',
            'places' => '15',
            'goal' => 'Создание решения для поддержки процесса автоматического извлечения данных из таблиц',
            'description' => 'Данный проект связан с разработкой модуля семантической интерпретации таблиц в рамках веб-платформы TALISMAN, предназначенной для построения предметно-ориентированных интеллектуальных систем поиска и извлечения информации. Разработка проводиться совместно с Институтом системного программирования им. В.П. Иванникова РАН и Институтом динамики систем и теории управления им. В.М. Матросова СО РАН.
Основная задача модуля – извлечение знаний в виде набора фактов из реляционных таблиц, содержащихся в различных документах (PDF, DOCX, HTML и др.) и наполнение этими фактами целевого графа знаний (labeled property graph).
В настоящее время имеется следующий задел по проекту: разработан модуль для автоматизированного извлечения фактов из строк реляционных таблиц на основе специально подготовленной конфигурации в формате JSON (в этой конфигурации явно указывается, какие факты и откуда извлекать).
В рамках данного проекта планируется доработать имеющийся модуль, сделать его более универсальным, в том числе для случаев, когда в документе много таблиц и они разные по структуре. В частности, необходимо реализовать автоматическое распознавание типов таблиц (вертикальная, горизонтальная, матричная) и приведение их к реляционной форме, включая отдельные задачи по нормализации данных и определению заголовков таблиц.
В целом данный проект связан с крупной и актуальной на сегодняшний день научной проблемой – автоматического понимания табличной информации (table understanding). Проект соответствует мировому уровню.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ИДСТУ СО РАН / ИСП РАН',
            'study_result' => 'Знания: общее представление о научной проблеме понимания табличной информации, принципы интеграции и настройки готовых программных решений, объектно-ориентированное программирование, основы обработки естественного языка (NLP) и машинного обучения, в частности глубокие нейросетевые модели (DNN), CRF, SVM.
Умения: программирование в объектно-ориентированном стиле на языке Python, формирование тестовых и обучающих выборок, проведение тестов производительности, взаимодействие в команде разработчиков, составление документации
Навыки: работа с платформой TALISMAN, работа с форматом JSON, разработка py-скриптов, работа на ML-платформе TensorFlow, администрирование Linux, работа в системе контроля версий Git
',
            'product_result' => 'Реализация следующих функций: автоматическое распознавание типов таблиц, автоматическое приведение распознанных таблиц к реляционной форме, автоматическая идентификация данных и метаданных (заголовков) в таблицах.',
            'state_id' => '1',
            'supervisors' => 'Юрин Александр Юрьевич, Дородных Никита Олегович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Развитие системы «Рейтинг студентов»',
            'places' => '15',
            'goal' => 'Автоматизация процесса формирования списков студентов на получение повышенной стипендии',
            'description' => 'Данный проект основывается на результатах проекта «Рейтинг студентов». 
На данный момент в рамках проекта выполнены следующие работы: анализ деятельности по начислению рейтинговой стипендии студентам ИрНИТУ; выделено пять модулей данного процесса; проведены подробный анализ и  проектирование модуля распределения стипендии; разрабатывается прототип версия модуля распределения стипендии.
В рамках данного проекта планируется выполнение дальнейших работ по разработке системы «Рейтинг студентов»:  выпустить первый релиз  модуля  распределения стипендии; выполнить детальный анализ и проектирование модуля формирования коллективов, разработать механизм интеграции проекта с  «АИС Университет»
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Управление информатизации ИРНИТУ',
            'study_result' => 'Знания: нотаций URL,  IDEF0, DFD,  RDF, нотация Чена, основы веб-программирования, основы проектирования программ
Умения:  применять методы проектирования программного продукта, работать  с инструментальными средствами, поддерживающими создание программного обеспечения; использовать методы организации работы в коллективах разработчиков программного обеспечения; 
Навыки:  работа с СУБД SQL, работа с Figma, разработка JavaScript скриптов, разработка php-скриптов, работы с Laravel и React, HTML, CSS
',
            'product_result' => 'Результат данного проекта: проектная документация модуля формирования коллективов  и реализация модуля распределения стипендии.',
            'state_id' => '1',
            'supervisors' => 'Бахвалова Зинаида Андреевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание интеллектуальной технологии цифрового материаловедения для анализа и прогнозирования свойств кристаллических кремниевых материалов для солнечной энергетики',
            'places' => '15',
            'goal' => 'Разработка программно-инструментальных средств для автоматизированного анализа структурных, электрических и эксплуатационных свойств поликристаллических материалов с целью создания универсальных руководящих принципов получения высокопроизводительных материалов для солнечной энергетики. ',
            'description' => 'В рамках заявляемого проекта предполагается использовать мультикристаллический кремний в качестве модельного материала для разработки комплекса программ, реализующих следующие полезные модели:
• усовершенствованная  нейронная сеть  для идентификации параметров ориентации монокристаллических зёрен в промышленных слитках мультикремния по их сканированным изображениям;
• модель для  автоматизированного зонирования макроструктуры продольных пластин слитков мультикремния с целью поиска взаимосвязей между пространственным распределением зон на изображениях пластин и условиями направленной кристаллизации. 
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Институт геохимии им. А.П. Виноградова СО РАН',
            'study_result' => 'Знания: математические и алгоритмические  основы моделей  машинного обучения, основы программирования на языке Python, стандарты описания UML, IDEF0.
Умения: применить  знания основ высшей математики и математической статистики на практике, создавать модели  машинного обучения для решения научно-исследовательских и промышленных  задач, читать и составлять техническую документацию с использованием стандартов UML, IDEF0.
Навыки: реализация нейронных сетей и других алгоритмов машинного обучения  с помощью языка Python,  создание GUI –приложений на языке Python
',
            'product_result' => '1. Усовершенствованная методика проведения автоматизированного статистического анализа сканированных изображений продольных и поперечных пластин мультикремния с применением кластерного анализа с целью поиска небольшого числа малых репрезентативных областей для сканирования с помощью выборочного ориентационного метода анализа дифракции обратно-рассеянных электронов (ДОРЭ);
2. Нейронная сеть, улавливающая взаимосвязи оттенков серого цвета отдельных точек сканированного изображения и исходных данных ДОРЭ (матрица значений углов Эйлера) соответствующего образца и на основе этого идентифицирующая  параметры ориентации зёрен (на макроуровне) на всей площади сканированной пластины;
3. Нейронная сеть, способная решать указанные задачи на разных пластинах мультикремния;
4. Модель, с помощью которой будут выявлены зоны макроструктуры на сканированных изображениях продольных пластин слитков мультикремния;
5.  Прототип программного комплекса для автоматизированного анализа структурных, электрических и эксплуатационных свойств поликристаллических материалов
',
            'state_id' => '1',
            'supervisors' => 'Осипова Елизавета Алексеевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка концепции Ситуационно-аналитического центра энергетической компании',
            'places' => '15',
            'goal' => 'Разработка концепции Ситуационно-аналитического центра энергетической компании',
            'description' => 'В компании создан САЦ, но нет стратегии по наполнению данными и анализу этих данных. Необходимо выполнить ряд задач: 1) Сократить время реагирования и ликвидации аварий и нештатных ситуаций. 2) Найти способы снижение аварийности основного и вспомогательного оборудования, за счет оперативного оповещения о внештатных ситуациях. 3) Найти способ сокращения затрат на ТОиР. 4) Сформировать предложения, направленных на увеличение надежности работы оборудования энергетического оборудования. 5) Повысить достоверность и оперативности доставки и обработки информации об авариях, чрезвычайных и нештатных ситуациях, связанных с производственной деятельностью объектов управления, а также ЧС природного и техногенного характера. 6) Снизить трудоемкость процессов отслеживания текущей ситуации и подготовки оперативных сводок, справок и отчетов.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО "Эн+ Диджитал"',
            'study_result' => 'Знания: понятие ситуационно-аналитических центров, основы программирования на языках высокого уровня, знакомство с методами визуальной аналитики, нотация Чена, стандарты описания UML, IDEF0, BPMN
Умения: читать и составлять техническую документацию с использованием стандартов UML, IDEF0, BPMN
Навыки: администрирование, работа с СУБД, работа с Dashboard  разработка JavaScript скриптов, разработка php-скриптов, работы
',
            'product_result' => 'Концепция с детальным описанием бизнес-процессов, систем целевой модели; информационных потоков, методов их обработки. Выделение целей использования  и групп пользователей.',
            'state_id' => '1',
            'supervisors' => 'Массель Алексей Геннадьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Инструментальные средства для моделирования интеллектуальных интегрированных энергетических систем на основе мультиагентного подхода',
            'places' => '15',
            'goal' => '',
            'description' => 'Разработка средств для моделирования интеллектуальных интегрированных энергетических систем',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ИСЭМ СО РАН, возможно участие в грантах и публикация научных статей',
            'study_result' => 'Знания: принципы проведения мультиагентного моделирования, обучение с подкреплением 
Умения: применение машинного обучения, моделирование энергетических систем, их подсистем и элементов. 
Навыки: работа в программной среде AnyLogic, разработка моделей в MatLab, работа с программными библиотеками, реализующими обучение с подкреплением
',
            'product_result' => 'Мультиагентная система для моделирования интеллектуальных интегрированных энергетических систем при решении задач их управления',
            'state_id' => '1',
            'supervisors' => 'Барахтенко Евгений Алексеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка программы "Информационно-аналитическая платформа по решению транспортно-логистической задачи”',
            'places' => '15',
            'goal' => 'Создание программного решения для поддержки процесса распределения сырья и товаров для нормированного снабжения населения.',
            'description' => 'Информационно-аналитическая платформа предназначена для решения транспортно-логистической задачи, целью которой является расчет наиболее оптимальных маршрутов доставки (поставки) сырья и товаров (далее – грузы) для нормированного снабжения населения (далее – НСН) продовольственными и непродовольственными товарами в период мобилизации, период действия военного положения и военное время. Расчет стоимости перевозок (с учетом их объемов и периодичности доставки) с точки зрения минимизации между хозяйствующими субъектами, расположенными на территории Иркутской области (от поставщика до получателя) в объемах необходимой потребности для обеспечения бесперебойного НСН товарами первой необходимости (по заданной номенклатуре товаров) при минимально возможных сроках доставки и затратах на перевозку. Получать возможность анализа ритмичности поставок, наличия минимально необходимого остатка товаров, каждого вида, у конечного получателя и оперативное перераспределение поставок при возникновении угрозы снижения минимально необходимого остатка товаров для обеспечения бесперебойного НСН товарами первой необходимости (по заданной номенклатуре товаров), а также возможностей и особенностей транспортной инфраструктуры Иркутской области.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Администрация Иркутской области',
            'study_result' => 'Знания: принципы работы защищенного автономного приложения, основы программирования, нотация Чена, стандарты описания UML, IDEF0, математические модели транспортных задач.
Умения: читать и составлять техническую документацию с использованием стандартов UML, IDEF0, моделирование данных, составление SQL-запросов, 
Навыки: проведения предпроектного обследования, работа с СУБД PostgreSQL, администрирование Windows,  Linux, работа с пакетами программированияl
',
            'product_result' => 'Программа должна обеспечивать возможность выполнения перечисленных ниже функций.
- Разделение прав пользователей, использующих программу:
- Возможность корректировки баз данных с условно постоянной информацией (сведения о субъектах региона, транспортной доступности, нормах обеспечения регионов).
- Возможность диалогового ввода и корректировки исходных данных для расчета планов поставок.
- Возможность расчета оптимальных маршрутов доставки грузов с точки зрения минимизации стоимости перевозок (с учетом их объемов и периодичности доставки) между хозяйствующими субъектами, расположенными на территории Иркутской области, а также возможностей и особенностей транспортной инфраструктуры Иркутской области.
- Возможность получать результаты расчетов, оформленными в соответствии с существующими формами отчетов.
- Обеспечение хранения исходных данных для расчетов и результатов расчетов в базе данных.
',
            'state_id' => '1',
            'supervisors' => 'Бахвалов Сергей Владимирович , Маланова Татьяна Валерьевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка антивирусного программного обеспечения',
            'places' => '15',
            'goal' => 'Разработка методики сравнительного тестирования антивирусных продуктов и разработке примитивного антивирусного программного обеспечения (антивирусного сканера).',
            'description' => 'Знакомство со средой разработки и работа над проектом.
В проекте мы познакомимся с использованием электронных ресурсов компании Microsoft (выбор версии Visual Studio, создание учетной записи, работа с установочным файлом, запустить программы). 
 Начало работы над проектом (запустить Visual Studio), выбрать тип проекта Windows Form С#.
 Размещение элементов форм, указать необходимые свойства.
 Знакомство с сигнатурами, анализ вирусных сигнатур (работа над созданием таблиц в которой содержатся: название вируса, вирусные сигнатуры, краткое описание вируса).
 Написание программного кода. Загрузка вирусных сигнатур в коллекцию, обработка событий.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Курсы для специалистов ИБ «Доктор Веб»
https://training.drweb.ru/courses/admins/

Обучение KasperskyOS
https://os.kaspersky.ru/development/education
',
            'study_result' => 'Знания: Виды уязвимостей информационной системы, согласно ГОСТ Р 56546-2015 (защита информации, уязвимости информационных систем).
Умения: Возможность проводить работы с исследованиями (существующими методиками), формирование списка критериев, выбор продуктов тестирования, проведение эксперимента,  проверке  эффективности ПО в реальных условиях.
Навыки: Работа с кодом вируса (или его часть), влияние на работу других программ. Работа с загрузочной записью (boot record) и системным загрузчиком (master boot record), драйверами.
',
            'product_result' => 'Написание программного кода. Загрузка вирусных сигнатур в коллекцию, обработка событий.
Дальнейшая работа (более глубокая и детальная) над проектом предполагает  разработку компонентного базового программно-инструментального средства для построения антивирусных программных комплексов.
',
            'state_id' => '1',
            'supervisors' => 'Маринов Александр Андреевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Программное обеспечение для автоматической оценки стабильности особо ответственных технологических процессов (ООТП) изготовления авиационных деталей',
            'places' => '15',
            'goal' => 'Создание программного модуля, предназначенного для автоматической оценки стабильности ООТП на основе анализа объективных параметров, полученных при выполнении технологических операций',
            'description' => 'При контроле качественного выполнения ООТП используются нормативные параметры, заданные в определенном диапазоне. Повышения стабильности достигается сужением такого диапазона и требует непрерывного улучшения по результатам контроля. В процессе работы необходимо разработать математический аппарат и программное обеспечение для контроля стабильности. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ИАЗ',
            'study_result' => 'Знать: основы разработки и контроля технологической документации при изготовлении деталей на машиностроительных предприятиях
Уметь: использовать инструменты разработки ПО.
Владеть: навыками программирования
',
            'product_result' => 'Программный модуль',
            'state_id' => '1',
            'supervisors' => 'Мироненко Владимир Витальевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Поиск применения камеры с аппаратным распознавание государственных регистрационных номеров',
            'places' => '15',
            'goal' => 'Создание комплексного решения для поддержки и реализации проекта дополнительного обучения «Академия ИТ»',
            'description' => 'В распоряжении ООО «ИНК» имеется несколько десятков Ethernet камер с аппаратный распознавание номер машин, данные камеры сняты с автоматических шлагбаумов. В результате реализации проекта необходимо определить места установки камер на объектах ООО «ИНК» и как использовать данные получаемые с камер для процессов цифровизации перемещения автотранспортных средств',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО «ИНК»',
            'study_result' => 'Знания: принципы работы с Ethernet камерами, принципы запроса информации с камер, маршрутизация данных с использование различных протоколов.
Умения: читать и составлять техническую документацию с использованием стандартов UML, работать с get и post запросами, работа с API и базами данных
Навыки: работа  администрирование Linux, работа с IDE, разработка back и front
',
            'product_result' => 'Определение мест установки камер, определение параметров необходимой инструкторы (питание, канал связи), реализации программного обеспечения для взаимодействия с камерами',
            'state_id' => '1',
            'supervisors' => 'Кононенко Роман Владимирович ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка системы учета посещения занятий студентами',
            'places' => '15',
            'goal' => 'Разработка и интеграция автоматической системы учета посещаемости студентами занятий',
            'description' => 'Разработка системы учета посещения занятий студентами, способной в автоматическом режиме согласно существующей БД используя карту-пропуск студента идентифицировать ФИО студента время входа и время выхода студента из аудитории, сопоставлять расписание с ФИО студента',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Дирекция института ИТиАД',
            'study_result' => 'Знания: принципы работы с модулями RFID, Wi-FI, Bluetooth, принципы запроса информации с сервера, маршрутизация данных с использование различных протоколов.
Умения: читать и составлять техническую документацию, работать с get и post запросами, работа с API и базами данных, работа с Arduino
Навыки: работа администрирование Linux, работа с IDE, разработка принципиальной схемы устройства, пайка, коркусирование устройства
',
            'product_result' => 'Автономное устройство считывание карт-пропусков в возможность подключения к локальной сети ИРНИТУ и работой с сервером.',
            'state_id' => '1',
            'supervisors' => 'Кононенко Роман Владимирович ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Система трекинга руководства компаний на удаленных промышленных объектах',
            'places' => '15',
            'goal' => 'Создание программно-аппаратного комплекса для отслеживания положения людей (10-15 человек) на удаленных промышленных объектах.',
            'description' => 'При посещении удаленных промышленных объектах (на объектах отсутствует покрытие сети сотовой связи) руководящим составом компании, необходимо отслеживать положение каждого участника группы на объекте. Так как между объектами группа перемещается на вертолете, то время сбора всех участников группы возле вертолета является критически важным, так как вертолет следует согласно полетному расписанию. Знание местонахождения каждого участника группы на промышленном объекте позволяет сопровождающему группы оперативно находить их на объекте',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО «ИНК»',
            'study_result' => 'Знания: GPS, Bluetooth, Wi-Fi, LoRa, построение беспроводной сети передачи данных
Умения: читать и составлять техническую документацию, проектирование и разработка печатных плат, разработка Android приложений.
Навыки: работа администрирование Android, работа с IDE, программирование микроконтроллеров
',
            'product_result' => 'Носимое устройства трекинга и мобильный пост отображение положения трекеров.',
            'state_id' => '1',
            'supervisors' => 'Кононенко Роман Владимирович ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Система, уменьшая очереди на заправочных пунктах ООО "ИНК"',
            'places' => '15',
            'goal' => 'Создание цифрового продукта, который позволит уменьшит очереди на заправочных пунктах ООО «ИНК»',
            'description' => 'В результате не рационального распределения автотранспортных средств по времени заправки, на заправочных пунктах возникают очереди на заправку или отсутствие машин для заправки. Необходим спроектировать и создать цифровой продукт который позволит избежать пиков заправки и выровнять в течении дня нагрузку на заправочный пункт.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО «ИНК»',
            'study_result' => 'Знания: GPS, Bluetooth, Wi-Fi, LoRa, построение беспроводной сети передачи данных
Умения: читать и составлять техническую документацию, проектирование и разработка печатных плат, разработка Android приложений.
Навыки: работа администрирование Android, работа с IDE, программирование микроконтроллеров
',
            'product_result' => 'Прототип программного продукта для выравнивания загрузки заправочного пункта.',
            'state_id' => '1',
            'supervisors' => 'Кононенко Роман Владимирович ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Экосистема для клиентов IT-компании',
            'places' => '15',
            'goal' => 'Разработка цифрового сервиса для клиентов IT-компании',
            'description' => 'Требуется создать единый цифровой сервис – экосистему - для взаимодействия клиентов с IT-компанией, с помощью которого будут реализованы внешний документооборот, учет наработки, доп. продажи, интеграция сторонних сервисов и систем',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Институт информационных технологий и анализа данных',
            'study_result' => 'Знания: Языки программирования JavaScript, HTML, CSS, PHP 
Умения: Разработка fronend и backend 
Навыки: Тестирование цифрового продукта , его отладка и запуск
',
            'product_result' => 'Личный кабинет клиента на цифровом сервисе, SPA приложение',
            'state_id' => '1',
            'supervisors' => 'Говорков Алексей Сергеевич ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => ' Автоматизация и цифровизация процесса учета выпущенной продукции мукомольного производства',
            'places' => '15',
            'goal' => 'Подсчет количества выбоя муки и цифровизация процесса складского учета',
            'description' => 'Требуется автоматизировать процессы взвешивания и распределения сырья (зерно) на мукомольном производстве в г.Улан-Удэ (Бурятия), а также систему их контроля. Интегрировать систему складского учета с ПО установленного оборудования. С помощью цифровой технологии – интернет вещей – оптимизировать указанные процессы.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Институт информационных технологий и анализа данных',
            'study_result' => 'Знания: языки программирования JavaScript, HTML, CSS, PHP 
Умения: Разработка fronend и backend 
Навыки: Тестирование программного продукта , его отладка и запуск
',
            'product_result' => 'ПО для подсчета количества выбоя муки',
            'state_id' => '1',
            'supervisors' => 'Говорков Алексей Сергеевич ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Система учета активности абитуриентов ИРНИТУ',
            'places' => '15',
            'goal' => 'Разработка программы сопровождения профориентационных активностей  школьников до потенциального абитуриента ИРНИТУ',
            'description' => 'Разработка БД школьников для приемной кампании ИРНИТУ получает и видит их выбор направлений подготовки по заинтересованности и активности участия. 

Данные на вход:
1. При регистрации каждый школьник записывает:
- ФИО;
- контактные данные;
- образовательную организацию;
- класс;
- школьник выбирает мероприятия/курсы/программы.

Необходимо получить на выходе:
- Личный кабинет у каждого школьника;
- Списки школьников, зарегистрированных на мероприятия/курсы/программы с возможностью выгрузки;
- Список школьников, окончившие курсы/программы, посетившие мероприятия по направлениям подготовки с индивидуальными бонусами с возможностью выгрузки;
- Рейтинг школьников с их бонусами по направлениям подготовки;
- Создание/добавление новых мероприятий в течение года;
- Школьник и администратор в любой момент могут видеть список пройденных мероприятий/курсов/программ с полученными бонусами;
- Афиша предстоящих мероприятий для школьников в хронологии с бонусами за их посещение;
- Афиша предстоящих мероприятий для школьников по форматам работы (например, курсы, день открытых дверей, профессиональные пробы, летние школы)  и направлениям подготовки (траекториям) с бонусами за их посещение;
- постоянно видимые ссылки на сайт ИРНИТУ, группу VK, телеграмм чат-бот, техподдержку.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'УМОУ и РОП, ЦПК',
            'study_result' => '',
            'product_result' => 'Программа - web-сайт и БД, в которой школьники регистрируются на разные профориентационные активности и программы довузовской подготовки ИРНИТУ и "зарабатывают" активностью бонусы. Бонусы переводятся в баллы индивидуальных достижений для поступления в наш университет по программе "Успешный абитуриент". ',
            'state_id' => '1',
            'supervisors' => 'Шведина Светлана Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Электронный учебный журнал образовательных курсов программы «Сетевой лицей ИРНИТУ',
            'places' => '15',
            'goal' => 'Разработка программы сопровождения учебного процесса профильной сетевой образовательной программы ИРНИТУ и партнерских школ «Сетевой лицей ИРНИТУ»',
            'description' => 'Web-сайт и БД, в которой администратор вводит данные о школьниках и преподавателях с их предметами. У преподавателей есть доступ к журналам с учебными группами, в которых они имеют возможность проставлять посещение учеников и оценки за работу на занятии.
Администратор должен иметь возможность получения журнала посещаемости по каждой школе по-отдельности.
Данные на вход
Администратор изначально заполняет данные по школьникам и преподавателям, в соответствии с таблицами:
id ФИО Школа Класс Предмет по выбору №1 Предмет по выбору №2
           
 
id ФИО Наименование предмета Уровень Время Количество (человек в классе)
           
Выходные документы
Решение должно иметь возможность формирования отчёта в приведённом виде:
id ФИО учеников Наименование предмета Посещение/ Оценка Дата
         
Также формирование ведомости, по успеваемости школьников, просмотр домашних заданий по нажатию на кнопку «Просмотреть ДЗ» с возможностью добавлять темы занятий и прикрепление файлов (ссылок) на материалы занятий.
Работать в программе могут преподаватели и администратор.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'УМОУ и РОП, Центр довузовской подготовки и профориентационной работы',
            'study_result' => '',
            'product_result' => 'Произвести разработку веб-сайта и БД для учета посещаемости школьников факультативных занятий по программе «Сетевой лицей ИРНИТУ», с возможностью получения отчётов посещаемости и успеваемости школьников по каждой школе и классу.',
            'state_id' => '1',
            'supervisors' => 'Шведина Светлана Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Система техподдержки сервисов ИРНИТУ',
            'places' => '15',
            'goal' => 'Разработка модулей обработки заявок на работы специалистов по вопросам электропитания, тепло и водоснабжения на основе информационной системы «Кампус» по адресу https://int.istu.edu/',
            'description' => 'Разработка инструмента для формирования, обработки и контроля исполнения  заявок на работы специалистов по вопросам электропитания, тепло и водоснабжения. 

Заказчик – все сотрудники ИРНИТУ, имеющие право на формирование  заявок для решения вопросов административно-хозяйственного характера:
Исполнители:
Служба главного инженера ИРНИТУ
Служба главного энергетика ИРНИТУ
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Служба главного инженера, Служба главного энергетика ИРНИТУ',
            'study_result' => 'Знания: язык программирования PHP
Умения: Формирование модуля на платформе «Битрикс»
Навыки: 
',
            'product_result' => 'Программа – подразделы модуля информационной системы «Кампус» по формированию заявок.',
            'state_id' => '1',
            'supervisors' => 'Жуков А.В.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка веб форм для Центра Карьеры ',
            'places' => '15',
            'goal' => 'Повышение управляемости и контроля изменений ИТ-инфраструктуры ИРНИТУ',
            'description' => 'Использование единой системы баз данных автоматизированной информационной системы ИРНИТУ позволит органично встроить информационную систему «Центра карьеры ИРНИТУ» в существующий комплекс автоматизированных систем подразделений и автоматизирует изменения взаимосвязанных используемых полей и таблиц. 
Что в свою очередь позволит автоматически контролировать:  
• Учет и изменение статуса заключенного договора с внешней организацией, обеспечивающей прохождение производственной и преддипломной практики; 
• прикрепления к нему перечня студентов 
• прикрепления к нему преподавателя – руководителя практики; 
• учет учебной нагрузки на преподавателя по руководству производственной/преддипломной практики;
дополнение рейтинга студента параметрами прохождения производственной и преддипломной практики.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Управление информатизации ИРНИТУ',
            'study_result' => 'Повышение уровня практических знаний по направлению «Вычислительные машины, комплексы, системы и сети».',
            'product_result' => 'Автоматический  контроль:  
• Учета и изменения статуса заключенного договора с внешней организацией, обеспечивающей прохождение производственной и преддипломной практики; 
• прикрепления к нему перечня студентов 
• прикрепления к нему преподавателя – руководителя практики; 
• учет учебной нагрузки на преподавателя по руководству производственной/преддипломной практики;
',
            'state_id' => '1',
            'supervisors' => 'Аношко Алексей Федорович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Академия IT',
            'places' => '100',
            'goal' => 'Обеспечить компании высококвалифицированными молодыми кадрами ИТ-направлений за счёт развития уникальных компетенций в соответствии с потребностью бизнеса в отрасли металлургии и энергетики',
            'description' => '«Академия IT» нацелена на подготовку IT-специалистов для энергетических и металлургических предприятий РУСАЛ и En+Group. Программа предполагает три этапа по проектным блокам Web, 1C, информационная безопасность или сетевая инфраструктура.

В первом туре (март-июнь) второкурсники узнают о деятельности компании, прослушают курс лекций, посетят мастер-классы, решат реальные производственные задачи. Студенты познакомятся с наставниками и менторами, которые в будущем могут стать коллегами.

Во втором этапе политеховцам предлагается заключить целевой договор с ежемесячной выплатой стипендии в размере пяти тысяч рублей. В течение двух месяцев студентам предстоит пройти производственную практику на базе предприятий.

В финальном туре эксперты оценят деятельность участников и отберут 30 четверокурсников. Студенты разработают проект, который будет засчитан как выпускная квалификационная работа. Кроме того, студенты могут совмещать учёбу и работу в компании.

Политеховцы, успешно окончившие курсы, получат сертификат и удостоверение международного образца. Компания гарантирует официальное трудоустройство в подразделения РУСАЛ и En+Group, достойную заработную плату и карьерный рост.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'En+ digital',
            'study_result' => ' ',
            'product_result' => ' ',
            'state_id' => '2',
            'supervisors' => 'Говорков А.С.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проект "Форсайт"',
            'places' => '100',
            'goal' => 'Возможность реализации тем проектов, предложенных студентами в инициативном порядке в рамках проектной форсайт-игры ',
            'description' => 'Центр проектного обучения проводит проектную форсайт-игру в целях выявить инициативные темы проектов студентов или тематики, предложенные наставниками, и вовлечь активных студентов и наставников в их реализацию в рамках «Проектной деятельности» в 2022 - 2023 учебном году. Реализация проекта позволит поддержать студенческие проектные инициативы и активных студентов, а также способствует развитию образовательных форматов, направленных преимущественно на формирование soft skills у студентов в проектной деятельности.
Контакт для связи по проекту https://t.me/tuymada ',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Центр проектного обучения',
            'study_result' => ' ',
            'product_result' => ' ',
            'state_id' => '2',
            'supervisors' => 'Чимитов П.Е.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Газпром Инвест',
            'places' => '100',
            'goal' => 'Получение навыков проектной работы при постоянном взаимодействии с проектным офисом компании в процессе решения кейсов из реального производства  ',
            'description' => 'ООО «Газпром инвест» — единый технический заказчик по реализации инвестиционных проектов ПАО «Газпром», в том числе по геолого-разведочным работам, строительству, реконструкции, капитальному ремонту объектов добычи, транспорта, подземного хранения, переработки газа, объектов газификации и гражданского назначения.

Проектная команда будет работать со специалистами компании в городе Иркутске.
Из числа участников команды формируется «копия» проектной команды Филиала для решения актуальных задач компании в области  проектирования, строительства и ввода в эксплуатацию объектов газовой отрасли промышленного и гражданского назначения на Ковыктинском ГКМ. 
В рамках работы над проектом вы получите навыки работы в реальной компании над актуальной проблемой отрасли
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Филиал ООО «Газпром инвест» Иркутск',
            'study_result' => 'Знания: матричной структуры управления, планирования и управления проектами. Предметные знания в области геолого-разведки, строительства, проектного управления, добычи и транспортировки газа. 
Умения: работы в команде, построенной по принципам матричного управления. Взаимодействия со специалистами  отрасли строительства и газодобычи
Навыки: работы в кооперации с представителями реальной компании, междисциплинарного взаимодействия с целью решения реальных задач, навыки планирования и управления реальными проектам

',
            'product_result' => 'Проектное предложение',
            'state_id' => '2',
            'supervisors' => '',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка проекта мониторинга транспортного поведения населения на примере г. Иркутска',
            'places' => '15',
            'goal' => 'Повышение качества транспортного обслуживания населения на основе учета количественных и качественных параметров транспортного поведения населения',
            'description' => 'Транспортное поведение — это совокупность сценариев подвижности, характеризующихся способом передвижения и величинами, которые могут быть измерены количественно: длительность поездки (корреспонденции), пройденное расстояние и др. Изменение транспортного поведения, свойственного городским сообществам, происходит под влиянием многих факторов: демографических сдвигов, смены экономических условий, эволюции городской формы и транспортного обеспечения.
Удовлетворить спрос на перемещение от одной точки города до другой можно с помощью личного автотранспорта, общественного транспорта, велосипеда или пешком. Однако при значительном расстоянии между пунктом возникновения потребности в перемещении и пунктом назначения наибольшая часть потребности будет реализована с помощью транспорта
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания характеристик транспортного поведения населения г. Иркутска, инструментария мониторинга транспортного поведения населения. Умения анализировать количественные параметры транспортного поведения населения. Навыки обработки результатов исследования',
            'product_result' => 'Рекомендации для управления и методологического сопровождения процессов администрирования транспортного комплекса для муниципальных властей',
            'state_id' => '1',
            'supervisors' => 'Бутузова А.Б.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка проекта введения на улично-дорожной сети приоритетного движения городского маршрутного пассажирского транспорта общего пользования на примере г. Иркутска',
            'places' => '15',
            'goal' => 'Повышение качества транспортных услуг для населения города за счет приоритетного комплексного развития транспорта общего пользования (снижение затрат времени на совершение ежедневных регулярных поездок пассажиров маршрутного транспорта за счет предоставления ему приоритета при движении по улично-дорожной сети и стимулирования отказа от использования индивидуальных автомобилей)',
            'description' => 'Высокий в настоящее время и продолжающий увеличиваться уровень автомобилизации (количество автомобилей на 1 тысячу жителей) приводит к возникновению транспортных проблем для жителей и гостей крупных городов. Это прежде всего возникновение заторов (пробок), что приводит к увеличению времени и затрат на поездки, транспортной усталости, снижает безопасность дорожного движения, обуславливает повышенные выбросы вредных веществ. Это усугубляется еще и отставанием развития транспортной инфраструктуры: улицы, дороги, остановочные пункты, транспортно-пересадочные узлы и т.п. В этих условиях в крупных городах необходимо разработать мероприятия по решению вышеуказанных проблем. Среди большого комплекса мер важнейшее значение будет иметь предоставление приоритета на улицах городов для маршрутного пассажирского транспорта общего пользования. Очень важно проводить это в сочетании с политикой стимулирования отказа от использования индивидуального транспорта для ежедневных поездок прежде всего по трудовым целям',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: инструменты поиска информации по теме исследования; основные требования к представлению результатов проекта; особенности основных и смежных ролевых позиций.
Умения: формулировать цели и задачи исследования; планировать и организовывать свою деятельность на основе приоритетов и поставленных целей; использовать инструменты поиска информации; выделить из массива информации ключевые моменты; решать задачи в соответствии с ролевой позицией, переключиться на свою смежную ролевую позицию.
Навыки: формулирования запроса на поиск новых знаний и информации; анализа информации с целью выделения требуемого знания и формирования комплексного понимания предмета изучения; выполнения системного анализа информации по теме проекта, выделения «дефицитов» знаний и формулирования запроса на поиск новой информации; презентации результатов проекта; самоанализа и оценки личного вклада в достигнутые результаты; социального взаимодействия как с членами команды, так и с внешними стейкхолдерами
',
            'product_result' => 'Предложения для городских властей по введению приоритетного движения на улично-дорожной сети для маршрутного пассажирского транспорта общего пользования, основанные на исследовании характеристик транспортных и пассажирских потоков',
            'state_id' => '1',
            'supervisors' => 'Колганов С.В.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка цифровых моделей транспортной инфраструктуры города и агломерации',
            'places' => '15',
            'goal' => 'Повышение качества транспортного планирования городских агломераций на основе разработки цифровых моделей транспортной инфраструктуры',
            'description' => 'Одной из основных проблем формирования устойчивых городов и их агломераций является отсутствие качественного транспортного планирования в связке с территориальным планированием. В связи с этим необходимо решение ряда комплексных задач, связанных с освоением современных инструментов в области транспортного планирования и технологий учета влияния характеристик использования городских территорий на формирование транспортного спроса. Рассматриваемый проект на целен на разработку подходов по повышению скорости и качества задач интегрированного территориального и транспортного планирования с применением транспортного моделирования',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Разработка транспортной модели Иркутска и Иркутской агломерации (хоз. договорные работы в области транспортного планирования и организации дорожного движения)',
            'study_result' => 'Знания: инструменты поиска информации по теме исследования; основные требования к представлению результатов проекта; особенности основных и смежных ролевых позиций.
Умения: формулировать цели и задачи исследования; планировать и организовывать свою деятельность на основе приоритетов и поставленных целей; использовать инструменты поиска информации; выделить из массива информации ключевые моменты; решать задачи в соответствии с ролевой позицией, переключиться на свою смежную ролевую позицию.
Навыки: формулирования запроса на поиск новых знаний и информации; анализа информации с целью выделения требуемого знания и формирования комплексного понимания предмета изучения; выполнения системного анализа информации по теме проекта, выделения «дефицитов» знаний и формулирования запроса на поиск новой информации; презентации результатов проекта; самоанализа и оценки личного вклада в достигнутые результаты; социального взаимодействия как с членами команды, так и с внешними стейкхолдерами
',
            'product_result' => 'Предложения по развитию подходов к оценке транспортного моделирования и оценке транспортного спроса',
            'state_id' => '1',
            'supervisors' => 'Левашев А.Г.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка проекта совершенствования методики расчета цены муниципального контракта при осуществлении закупок в сфере регулярных перевозок пассажиров на примере г. Иркутска',
            'places' => '15',
            'goal' => 'Совершенствование методики расчета начальной (максимальной) цены контракта (НМЦК), а также цены контракта, заключаемого с единственным поставщиком (подрядчиком, исполнителем), для закупок в сфере регулярных перевозок пассажиров на основе учета технико-эксплуатационных параметров маршрутов перевозчика, а также создание соответствующего программного продукта',
            'description' => 'Начальная (максимальная) цена контракта (НМЦК) — это предельное значение цены, которое указывается в извещении и документации о проведении закупки с приглашением принять в ней участие. Заказчик обязан в полной мере обосновать цену, чтобы провести закупку. Менять условия уже заключенного контракта в большинстве случаев нельзя. Но очень часто при проведении расчета НМЦК возникают проблемы. Первое, цена может быть занижена. Это может привести к тому, что процедура закупки просто не состоится, так как никто не будет заключать контракт себе в убыток. Если такой контракт все-таки будет заключен, то это будет недобросовестный перевозчик, который не выполнит условия контракта по заявленной цене, либо будет занижено качество поставляемого товара, или предоставляемых услуг. Второе, может возникнуть ситуация, когда НМЦК, наоборот, будет завышена. Это в свою очередь приведет к неэффективному расходу средств бюджета. Третье, стоимость устанавливается некорректно, из-за технических проблем (ошибок в расчетах; неправильном использовании положений методических рекомендаций; ошибок при анализе рынка, когда он проанализирован не полностью; использовании некорректных исходных данных)',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: характеристик подвижного состава и методики расчета и технико-эксплуатационных показателей на регулярных маршрутах.
Навыки: проведения обследования пассажиропотоков и расчёта технико-эксплуатационных показателей на регулярных маршрутах; владения методикой обработки результатов исследования; составления базы данных по результатам обследования пассажиропотоков и разработки программного продукт; владения методикой расчёта НМЦК
',
            'product_result' => 'Отчет и программный продукт с исходными данными по регулярным маршрутам для муниципальных властей по расчету начальной (максимальной) цены контракта, а также цены контракта, заключаемого с единственным поставщиком, для закупок в сфере регулярных перевозок пассажиров',
            'state_id' => '1',
            'supervisors' => 'Яценко С.А.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Повышение углеродной нейтральности автомобилей с дизельными двигателями и их эксплуатационные свойства',
            'places' => '15',
            'goal' => 'Снижение выбросов вредных веществ и диоксида углерода с выбросами автомобильных двигателей',
            'description' => 'Снижение выбросов вредных веществ и диоксида углерода с отработавшими газами является серьезной проблемой современности. Переход на электротранспорт в целом в настоящий момент не решает проблему снижения выбросов диоксида углерода, т.к. многие станции по выработке электроэнергии являются тепловыми, работающими на углеводородном топливе или каменном угле. Одним из путей снижения техногенной нагрузки в переходном периоде является применение возобновляемых топлив, которые могут быть растительного происхождения, а также являются продуктом утилизации бытовых отходов и др. При этом углеродный баланс нарушается меньше, а экологическая составляющая повышается.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: методики выполнения расчетов двигателей внутреннего сгорания; влияния рабочих процессов на динамику двигателя и на технико-экономические показатели работы
Умения: проводить испытания двигателей и автомобилей; проводить экспериментальные исследования
Навыки: расчета параметров технического состояния транспортных средств и сравнение их с требованиями нормативных правовых документов в отношении технического состояния транспортных средств; определения качества технологических жидкостей и эксплуатационных материалов
',
            'product_result' => 'Топливные композиции (состав возобновляемых топлив); экспериментальные данные в виде отчета и статьи с полученными результатами ',
            'state_id' => '1',
            'supervisors' => 'Кривцов Сергей Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка конструкции стенда для исследования характеристик шин в дорожных условиях',
            'places' => '15',
            'goal' => 'Разработка конструкции стенда для исследования характеристик шин в дорожных условиях для создания алгоритма управления антиблокировочной системой (АБС) колёсных транспортных средств (КТС).',
            'description' => 'Безопасность КТС во многом определяется сложными электронными и мехатронными системами, которые широко используются в современных автомобилях. Одной из таких систем является АБС, принцип работы которой построен на поддержании допустимого скольжения колеса в области максимального коэффициента сцепления шины автомобильного колеса с поверхностью дороги без его снижения в область неустойчивости КТС. Изменение коэффициента сцепления шины с опорной поверхностью от изменения проскальзывания колеса является основной зависимостью, в соответствии с которой осуществляется управления АБС. Однако, эта зависимость в значительной степени меняется от типа опорной поверхности, формы протектора шины, её материала и т.п. Применение аналитических методов для синтеза алгоритма управления АБС весьма проблематично, в связи с тем, что объект управления в точке экстремума теряет устойчивость, таким образом правее максимума управление в обычном смысле становится невозможным. В процессе движения КТС невозможно точно определить линейную скорость его кузова, а соответственно и проскальзывание колёс, что затрудняет определение коэффициента сцепления. Если довести колесо до момента предблокирования, возникнет существенное снижение бокового коэффициента сцепления, и, как следствие, потеря устойчивости КТС. Особенно это опасно на покрытии с различным коэффициентом сцепления по боковым колёсам КТС. Всё это приводит к тому, что возникает необходимость разработки алгоритма распознавания типа опорной поверхности под каждым колесом КТС и его управления. Компания Bosch, являющаяся лидером в разработке мехатронных систем, ведут работы по созданию алгоритма действий по калибровке систем АБС без изучения непосредственно взаимодействия шины, используя какие-то пороговые коэффициенты. Отечественными компаниями, такими, как Группа ГАЗ, АвтоВАЗ, и научными организациями ведутся работы по исследовании процесса взаимодействия автомобильного колеса с эластичной шиной на различных опорных поверхностях (сухой асфальт, мокрый, лед, снег и т.п). Результаты этих исследований позволят построить математический аппарат алгоритма адаптивного управления АБС с поддержанием удовлетворительной управляемости КТС. Для решения этой задачи необходимо разработать стенд для исследования характеристик шин в дорожных условиях.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Ориентировочно грант РНФ, заявка № 22-79-00166, зарегистрирована: 09.03.2022 г.; электронный документ подписан: 10.03.2022 г. Совместно с кафедрой «Автомобили и тракторы» Института Транспортных систем, НГТУ им. Р.Е. Алексеева',
            'study_result' => 'Знания: устройства и принципа работы современных мехатронных систем активной безопасности КТС; устройства и принципов работы дополнительного технологического и испытательного оборудования;
рациональных методов эффективной эксплуатации, а также технологических процессов поддержания и восстановления работоспособности подвижного состава автотранспортных средств, их агрегатов, механизмов, узлов.
Умения: разрабатывать структурные и кинематические схемы систем технологического и испытательного оборудования; проводить диагностирование и контроль технического состояния мехатронных систем подвижного состава автотранспортных средств.
Навыки: проведения испытаний электронных систем КТС; проведения контроля технического состояния и диагностики подвижного состава автотранспортных средств, их агрегатов, механизмов, узлов.
',
            'product_result' => 'Комплект конструкторской документации для создания опытного образца стенда для исследования характеристик шин в дорожных условиях',
            'state_id' => '1',
            'supervisors' => 'Яньков Олег Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка программного комплекса для управления диагностическим гибридным стендом с беговыми барабанами',
            'places' => '15',
            'goal' => 'Разработка программного комплекса (ПК) для регистрации, контроля, обработки и сохранения диагностической информации, полученной при испытании колёсных транспортных средств(КТС) на стенде с беговыми барабанами, а также для управления электронными системами стенда.',
            'description' => 'В настоящее время диагностику и контроль технического состояния как традиционных, так и беспилотных КТС, в том числе с электрическими и гибридными силовыми установками, с автоматизированными агрегатами и интеллектуальными системами осуществляют при помощи сканеров и, как правило, в дорожных условиях. Однако, исследования, проведённые ранее, убедительно показывает наличие системных проблем при определении их технического состояния. Обусловлено это во многом тем, что уровень конструктивной сложности традиционных и беспилотных КТС непрерывно растет. При этом требования к безопасности КТС постоянно ужесточаются. Поэтому качество контроля технического состояния КТС во многом определяет безопасность автомобильного транспорта. Для контроля технического состояния КТС давно уже недостаточно применения электронных сканеров, поскольку они не дают полного объема необходимой информации: о безопасности, о техническом состоянии их агрегатов и систем, о мощностных характеристиках, о техническом состоянии ходовой части и подвески, а также об эффективности работы их интеллектуальных систем.
Для эффективного контроля современных КТС требуется наукоемкое оборудование, способное обеспечивать контролируемым КТС заданные тестовые режимы – «разгон», «торможение», «боковой занос», «движение под нагрузкой» и пр. Использовать для этих целей современные стенды нет возможности по причине того, что они морально устарели, либо имеют очень высокую стоимость. К тому же практически все современные стенды являются зарубежными. Существующие стенды для контроля КТС имеют ограниченный функционал. Для качественного контроля КТС измерение силовых и кинематических параметров необходимо проводить индивидуально на каждом колесе колёсных транспортных средств с достаточной точностью. Для этого необходимо создать корректные тестовые воздействия, при которых колёсное транспортное средство на стенде будет функционировать как в реальных дорожных условиях. Для решения вышеперечисленных проблем на кафедре Автомобильного транспорта был разработан и изготовлен опытный образец стенда, представляющий собой диагностическое стендовое оборудование, которое способно реализовать высокоэффективные методы контроля технического состояния современных КТС. Опытный образец имеет сложные механические, электрические и пневматические системы, электронные системы измерения контролируемых параметров и системы управления стендом. Функционирование стенда сопровождается большим количеством контролируемых, измеряемых и управляющих параметров процесса испытания автомобиля, которые должны быть обработаны одновременно. Поэтому для его полноценной эксплуатации остро стоит вопрос о разработке ПК, способного управлять стендом, а также регистрировать, контролировать, обрабатывать и сохранять диагностическую и контрольную информацию, полученную при испытании КТС.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Ориентировочно грант РНФ, заявка № 22-79-00166, зарегистрирована: 09.03.2022 г.; электронный документ подписан: 10.03.2022 г.',
            'study_result' => 'Знания: устройства и принципа работы средств технического диагностирования; устройства и принципов работы дополнительного технологического оборудования; рациональных методов эффективной эксплуатации, а также технологических процессов поддержания и восстановления работоспособности подвижного состава автотранспортных средств, их агрегатов, механизмов, узлов.
Умения: разрабатывать структурные, электрические и кинематические схемы систем технологического оборудования; проводить диагностирование и контроль технического состояния подвижного состава автотранспортных средств.
Навыки: проведения испытаний электронных систем технологического оборудования; проведения контроля технического состояния и диагностики подвижного состава автотранспортных средств, их агрегатов, механизмов, узлов.
',
            'product_result' => 'Комплекс программ (ПК), входящий в состав диагностического оборудования.',
            'state_id' => '1',
            'supervisors' => 'Яньков Олег Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка стенда и методики для исследования смазывающих свойств нефтепродуктов',
            'places' => '15',
            'goal' => 'Изучение смазывающих свойств нефтепродуктов и разработка методики исследования смазывающих свойств нефтепродуктов',
            'description' => 'Все знают, что смазочные материалы изменяют свои характеристики в процессе работы, так как оно подвергается высокому давлению, температуре и многим другим факторам. На сегодняшний день производство смазочных материалов происходит одновременно с совершенствованием машин. В связи с современной тенденцией понижения выбросов вредных веществ в окружающую среду, а также экономии смазочных материалов выдвигают жесткие требования к качеству смазочных материалов.
Смазочные материалы в машинах выполняют множество ролей: уменьшение и защиту от сухого трения, защита от возникновения коррозии, за счет антикоррозионных присадок, охлаждение трущихся деталей и вывод продуктов износа.
В наше время, существует множество различных брендов смазочных материалов, обладающих различными противозадирными и противоизносными свойствами. Поэтому для различных типов машин с различными свойствами среды, подходят разные виды смазочных материалов с разными присадками.
Поэтому существует проблема – снижение износа поверхностей, подвергающихся трению и нагрузкам. Это позволит продлить срок эксплуатации деталей механизмов, сделает их более долговечными и надежными. В ряде случаев смазки применяются не только для снижения износа, но  и для предотвращения трения и заклинивания смежных поверхностей. Благодаря своей пластичности и составу эти мазки защищают от проникновения агрессивных веществ, газов и паров. Также практически все консистентные смазки отличаются антикоррозионными свойствами и т.д. Необходимо расширять сырьевую базу и увеличивать рабочий диапазон применения пластичных смазок.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО «ПолитехГидравлика»',
            'study_result' => 'Знания: методология исследования
Умения: исследовать свойства нефтепродуктов
Навыки: правильно подходить к выбору гсм
',
            'product_result' => 'Масла, пластичные смазки, топлива с заданными смазывающими свойствами. Позволит расширить характеристики данных нефтепродуктов.',
            'state_id' => '1',
            'supervisors' => 'Стрельников Александр Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Изучение свойств  материалов масляных фильтров
Изучение свойств  фильтрующих материалов применяемых в масляных фильтрах
',
            'places' => '15',
            'goal' => 'Разработка методики исследования свойств материалов и определение (Изучение) качеств материалов масляных фильтров',
            'description' => 'В рамках международных стандартов к масляным фильтрам предъявляется немало требований: Фильтрующие элементы к ним должны соответствовать требованиям настоящего стандарта и конструкторской документации (КД), утвержденной в установленном порядке. Полнота отсевов фильтров и фильтрующих элементов должна быть не менее 25 %. Зависимость тонкости отсева от полноты ГОСТ Р 53844—2010 4.3 Ресурс фильтрующего элемента до замены (для 1 категории условий эксплуатации) по ГОСТ 21624 устанавливают в руководстве (инструкции) по эксплуатации автомобиля, при этом он должен быть не менее 250 ч работы двигателя. Гидравлическое сопротивление фильтрующего элемента и перепускного клапана, определяемое из их гидравлических характеристик при заданном расходе масла, должно быть не больше значения, указанного в КД. Фильтрующий элемент должен выдерживать без разрушения повышенный перепад давления (АР), равный не менее 2,0 АР начала открытия перепускного клапана фильтра. Фильтры должны выдерживать без нарушения давление не менее 3 Рном. Давление начала открытия перепускного клапана должно находиться в пределах, установленных требованиями КД. Фильтрующие элементы должны быть вибростойкими к пульсации давления и сохранять работоспособность при температурах от минус 50 °С до плюс 135 °С. Фильтрующие элементы, их уплотнения и другие детали должны быть масло-, бензо-, водостойкими. Материалы, используемые для изготовления фильтров и их элементов, не должны выделять в поток фильтруемого масла составляющих компонентов. 
В наше время, существует множество различных брендов фильтрующих материалов, обладающих различными свойствами, но не все отвечающие определенным требованиям. Поэтому для различных типов машин работающих в различными средах и на различных режимах, требуются фильтрующие элементы отвечающие определенным требованиям
Поэтому существует проблема- подбор фильтрующего элемента отвечающего определенным требованиям
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО «Тимбермаш Байкал»',
            'study_result' => 'Знания: методология исследования
Умения: исследовать совйства фильтрующего материала
Навыки: правильно подходить к выбору фильтрующего элемента
',
            'product_result' => 'Полученные результаты исследования позволят правильно подбирать фильтрующий элемент для определенного вида оборудования',
            'state_id' => '1',
            'supervisors' => 'Стрельников Александр Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка резонансного виброгрохота',
            'places' => '15',
            'goal' => 'Повышение энергоэффективности виброгрохота',
            'description' => 'В сырьевых и перерабатывающих отраслях промышленности для транспортирования и переработки различных сыпучих и кусковых материалов широко применяются вибрационные транспортно-технологические машины (ВТТМ). Самой представительной группой ВТТМ являются вибрационные грохоты. Традиционные виброгрохоты с дебалансным, кинематическим и электромагнитным приводами имеют невысокие технические и эксплуатационные показатели. Значительная часть вибрационного оборудования, выполняющего данные технологические операции, требует больших затрат энергии. Кроме этого имеется ряд проблем с самой обработкой материалов, в частности разделение и сортировка труднопросеиваемых материалов, самоочистка сит, дезинтеграция агломератов.
Большинство конструкций современных вибрационных грохотов для возбуждения колебаний используют дебалансные вибраторы и зарезонансный режим работы. В колебательной системе таких машин циркулирует большая реактивная мощность, необходимая для преодоления инерционных сил, что снижает их энергетическую эффективность.
 Повышение производительности и снижения энергетических затрат вибрационного грохота возможно благодаря явлению резонанса. В резонансном режиме работы вибрационной машины упругие и инерционные силы взаимно уравновешиваются, при этом энергия вибровозбудителя расходуется только на преодоление диссипативных сил, а рабочий орган совершает движение, близкое к собственному. 
Основной трудностью практического использования резонансных вибрационных машин является высокая чувствительность к изменению технологической нагрузки и параметров колебательной системы. Нелинейность технологической нагрузки препятствует решению проблемы стабилизации резонансного режима работы машин при вынужденных колебаниях даже при помощи средств автоматической подстройки. 
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: расширенные знания в области вибрационной техники
Умения: умение реализовать теоретические знания в конкретном проекте
Навыки: навыки работы в творческом коллективе 
',
            'product_result' => 'Физическая модель резонансного виброгрохота. Результаты экспериментальных исследований. Методики расчета резонансного виброгрохота. ',
            'state_id' => '1',
            'supervisors' => 'Зедгенизов В.Г.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Исследование проблем прочности деталей, изготовленных с применением цифровых производственных технологий',
            'places' => '15',
            'goal' => '1)Разработать образцы для исследования проблем прочности деталей, выполненных с помощью 3D – печати. 2)Сформировать корректные расчётные схемы авиационного узла в цифровом формате, позволяющие получить достоверную оценку параметров прочности и жёсткости узла ',
            'description' => 'Передовые технологии производственных процессов невозможны без их цифровизации. Это актуально для авиастроения, автомобилестроения, энергетической отрасли, приборостроения, медицины и др. Многие задачи в этих случаях позволяют решить аддитивные технологии (3d-печать). Они позволяют получать детали практически любой геометрической формы и габаритов. Появилась возможность трансформации сборочной единицы в деталь. В противовес традиционным вычитающим и формообразующим технологиям с помощью 3d-печати деталь «выращивают». Весь этот процесс определяется цифровой моделью изготавливаемой детали. Одной из наиболее привлекательных технологий 3d-печати является FDM-печать. Она применяется как в прототипировании, так и при изготовлении рабочих деталей. Однако, чтобы получить несущую деталь с помощью FDM-печати, нужно суметь рассчитать её на прочность. А для этого необходимо знать как на прочность влияют свойства материала печати, параметры печати, шаблон печати, процент заполнения детали и т.д. Ответы на эти вопросы можно получить, научившись работать на 3D-принтере; изучив поведение деталей, изготовленных на нём, под действием нагрузок. Для изучения поведения деталей нужны натурные и численные эксперименты. Натурные эксперименты, как правило, проводят на образцах. Значит надо изготовить с помощью FDM-печати образцы и провести их испытание на специальном оборудовании. Как правило, в качестве материала для FDM-печати применяют термопластики, композитные термопластики. Поскольку, требований к форме таких образцов пока нет, их надо разработать. Численные эксперименты требуют формирования адекватных моделей в CAD/CAE – системах (Femap, ANSYS, FIDESYS, Siemens NX, КОМПАС-3D, и др.). Под «адекватными моделями» понимаются модели, которые достоверно отображают в цифровой среде поведение реальной детали под действием реальной нагрузки. В частности, необходимо построить в цифровой среде модель натурных испытаний FDM-образцов.
Однако, исследование прочности деталей, изготовленных с помощью традиционных технологий, не утратило своей актуальности. Основная часть конструкции самолёта образована деталями, изготовленными с помощью таких технологий. Конструкция самолёта представляет собой весьма сложную и многокомпонентную структуру, взаимное влияние между её элементами (деталями) непростое и меняется в зависимости от изменения режима работы конструкции (режима полёта, наземного режима). При этом должна обеспечиваться их прочность. Случаев нагружения одной и той же детали несколько и не все они являются явными. Следовательно, без применения цифровизации процессов исследования в сочетании с натурными испытаниями получить ответы на вопросы о причинах разрушения такой детали и разработке рекомендаций для её оптимизации очень сложно или невозможно. Под цифровизацией процессов исследования понимается применение CAD/CAE – систем. В частности, необходимо построить в цифровой среде достоверную модель реального объекта исследования; на основе её анализа сделать заключение о причинах потери прочности и дать рекомендации об устранении этих причин.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Иркутский авиационный завод',
            'study_result' => 'Знания: об аддитивных технологиях применительно к изготовлению несущих деталей, с заданными механическими характеристиками; о методах расчёта авиационных деталей на прочность
Умения: работать на 3d-принтере; определять значения параметров напряжённо-деформированного состояния реальных деталей
Навыки: проведения натурных экспериментов для определения характеристик прочности и жёсткости; построения цифровых моделей исследуемых деталей
',
            'product_result' => '1. Образцы для экспериментальных исследований характеристик прочности и жёсткости деталей, изготовленных с применением FDM-печати. 2. Формирование электронной модели узла, позволяющей системно оценить параметры прочности и жёсткости с целью оптимизации конструкции узла. Фиксация материала осуществляется в форме электронной модели, сформированной в автоматизированной среде инженерного анализа и соответствующей пояснительной записке с соответствующими описаниями',
            'state_id' => '1',
            'supervisors' => 'Распопина Вера Борисовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Анализ инноваций проектирования и производства беспилотных систем.',
            'places' => '15',
            'goal' => 'Проектирование и анализ технологических процессов производства БПЛА',
            'description' => 'В настоящее время в мире в различные производства внедряется большое количество инноваций. В России внедрение осложняется необходимостью импортозамещения. К различным российским компаниям, в основном связанным с оборонным и ресурсодобывающим секторами применяются санкции, причем по продуктам, на которых в компаниях реализованы различные технологические процессы основной деятельности, В частности, это касается систем инженерного анализа и технически сложного оборудования и комплектующих. На все это накладывается  необходимость завершения текущих проектов в приемлемые сроки.
К подобным инновациям можно отнести:
Новые производственные технологии, к которым, например можно отнести моделирование, аддитивные технологии, которые  позволяют сократить время от идеи до реального моделирования, сократить стоимости изготовление деталей.
Внедрение новых материалов (композиционные материалы) которые зачастую требуют создания новых специфических технологических процессов и уникального оборудования.
Внедрение элементов искусственного интеллекта, работы с большими данными и облачные сервисы влекут за собой повышение эффективности эксплуатации изделий и производственного оборудования, повышение производительности труда, сокращение времени на поиск нужных решений
Виртуальная и дополненная реальность позволяет на этапе электронного моделирования улучшить структурирование и качество производственных операций, сократить количество 
дефектов за счет предварительной проработки производственных процессов
Робототехника, сенсорика и автоматизация проектирования и проведения технологических процессов  позволяют сократить, временя производства изделий, получать стабильные результаты выполняемых операций без присутствия человека.
Таким образом, в  рамках проекта, в зависимости от состава команды и ее возможностей будут реализовываться следующие направления:
беспилотные системы;
аддитивные технологии;
оборудование инновационных технологических процессов;
технология композиционных материалов;
робототехника;
автоматизированные системы;
контроллеры и их программирование. 
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: основы  принципов построения технологических процессов основных производств и изделий и тенденции их развития; основные программные продукты подготовки и разработки технологических процессов и изделий. 
Уметь: проводить анализ перспективных технологических процессов и изделий
Владеть навыками работы в программных продуктах, достаточных для проведения работ по анализу и подготовке технологических процессов и разработке изделий. 
',
            'product_result' => 'Подготовленная заявка участия в конкурсе на получение финансирования. ',
            'state_id' => '1',
            'supervisors' => 'Дебердеев Евгений Масутович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка воздухо-воздушного теплообменника СКВ современного самолета',
            'places' => '15',
            'goal' => 'Разработка рекомендаций по совершенствованию конструкции воздухо-воздушных теплообменников СКВ на основе инженерных расчетов теплообменных аппаратов с целью повышения их  эффективности,  надежности и эксплуатационного ресурса',
            'description' => 'В настоящее время вопросам теплообмена и его интенсификации в теплообменниках посвящены многие теоретические и экспериментальные работы. Однако усовершенствованные конструкции новых поколений авиационных турбин требуют поиска новейших более конструктивных решений, которые обеспечивали бы увеличение ресурса существующих двигателей и улучшение характеристик перспективных двигателей новых поколений.
В процессе проектирования рассчитывают массовые расходы теплоносителей, определяют температуры нагревающей и охлаждающей среды, коэффициенты теплопередачи и поверхность теплообмена и эффективность данного теплообменного аппарата, рассчитываются потери давления в аппарате. 
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Иркутский авиационный завод',
            'study_result' => 'Знать: основные понятия и определения тепломассообмена; методы проведения инженерных расчётов теплообменных аппаратов.
Уметь: формулировать математические задачи для теплообменных аппаратов в дифференциальной и интегральной формах.
Владеть навыками и методами расчетов теплообменных аппаратов.
',
            'product_result' => 'Проект воздухо-воздушного теплообменника СКВ на основе инженерных расчетов теплообменных аппаратов',
            'state_id' => '1',
            'supervisors' => 'Молокова Светлана Васильевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Прогнозирование времени задержки прибытия авиационных рейсов с помощью машинного обучения',
            'places' => '15',
            'goal' => 'Разработка математической, обучаемой предиктивной модели, позволяющей по различным данным о текущей погоде, состоянию и загруженности аэропорта, и др. предсказать возможную задержку прибытия авиационного рейса и причины ее возникновения. ',
            'description' => 'В настоящее время ведутся активные работы по части применения методов машинного обучения и искусственного интеллекта для различных задач предсказательной аналитики. Крупный международный аэропорт в год может принять до 15 миллионов пассажиров, обслужить до 160 тысяч взлетно-посадочных операций. В таких условиях особенно остро стоит вопрос автоматизации процессов распределения воздушного и наземного трафика, регламентных работ и прочих функций с целью повышения эффективности и снижения аварийности. Генерирующиеся в процессе работы аэропорта массивы данных могут стать базой для построения различных предиктивных моделей, которые обладают высокой предсказательной силой. Результаты работы этих моделей могут быть в свою очередь использованы для информирования персонала аэропорта о возможных проблемах, пассажиров о возможных неудобствах и для понимания необходимых путей для решения данных проблем',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Международный Аэропорт Иркутск',
            'study_result' => 'Знать: основные модели машинного обучения, методы их построения и валидации результатов
Уметь: работать с большими данными (Big Data) и применять полученную в ходе анализа информацию для решения прикладных инженерных задач
Владеть навыками и методами создания и тренировки различных моделей машинного обучения 
',
            'product_result' => 'Математическая модель прогнозирования времени задержки прибытия авиационных рейсов ',
            'state_id' => '1',
            'supervisors' => 'Груздев Александр Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оборудование для наземной эксплуатации авиационной техники (только для ЭЛб19)',
            'places' => '15',
            'goal' => 'Разработка аванпроекта оборудования для наземной эксплуатации авиационной техники (авиационных систем) с применением методов и средств инженерного анализа',
            'description' => 'Данный проект направлен на совершенствование технологии эксплуатации авиационной техники. частности, предполагается разработка проекта средств наземной эксплуатации (гидростендового и иного оборудования) с улучшенными характеристиками. Наземное оборудование – неотъемлемая часть комплекса для эксплуатации любого воздушного судна. От того, насколько наземное оборудование будет соответствовать современным требованиям по функциональности, эргономике, стоимости, и ряду других параметров, зависит в конечном счёте и стоимость эксплуатации самой авиационной техники, и, как следствие, её конкурентность на авиационном рынке. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО «Авиакомпания «Ангара»',
            'study_result' => 'Знания: о методах анализа систем по различным критериям
Навыки: выполнения схем  и моделей систем.
',
            'product_result' => 'Модель или схема наземного оборудования (гидростенда или иного оборудования).',
            'state_id' => '1',
            'supervisors' => 'Бобарика Игорь Олегович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оптимизация авиационных гидросистем с учётом технологии их обслуживания при эксплуатации',
            'places' => '15',
            'goal' => 'Обоснование необходимости и определение путей модернизации авиационных систем с учётом эксплуатационной истории с применением современных средств инженерного анализа и предиктивной аналитики',
            'description' => 'Данный проект направлен на совершенствование авиационной техники, характеристик её бортовых систем. В частности, рассматривается возможность оптимизации разветвлённых трубопроводных систем, а это все гидравлические, топливные, пневматические системы, без которых не может существовать ни один современный самолёт. Все системы тесно сплетены между собой, а их характеристики обеспечивают характеристики всего самолёта в целом. Знать бортовые системы, принципы их работы, видеть возможности для их совершенствования и модернизации, разрабатывать и предлагать конкретные решения – значит быть настоящим авиационным инженером!',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО «Авиакомпания «Ангара»',
            'study_result' => 'Знания: о методах анализа систем по различным критериям
Навыки: выполнения многофакторной оптимизации систем.
',
            'product_result' => 'Модель бортовой системы с элементами многофакторной оптимизации.',
            'state_id' => '1',
            'supervisors' => 'Бобарика Игорь Олегович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Цифровой двойник цеха агрегатно-сборочных работ',
            'places' => '15',
            'goal' => 'Создание твердотельных 3D моделей, предназначенных для создания виртуальной модели цеха агрегатно-сборочных работ, используемых для изготовления авиационных деталей',
            'description' => 'Создание цифрового двойника производственного помещения в образовательном сегменте позволит обеспечить доступные инструменты для пользователей и дополнить обучающие программы интерактивным визуальным контентом. Погружение студентов в производственную атмосферу, без физического присутствия на производстве.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать основные технологические процессы изготовления авиационных деталей
Уметь составлять технологические процессы
Знание основ конструкции сборочных приспособлений

Знать основные инструменты создания 3D моделей в системе NX
Уметь использовать инструменты моделирования с заданием физико-механических свойств материала 
',
            'product_result' => 'Электронные модели авиационных узлов собираемые в сборочных приспособлениях, которые в дальнейшем будут интегрированы в программный модуль цифрового двойника',
            'state_id' => '1',
            'supervisors' => 'Фокин Игорь Владимирович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Конструкция и система управления навесными модулями настольного станка с ЧПУ',
            'places' => '15',
            'goal' => 'Разработка навесного модуля для работы тангенциальным ножом илт терморезака/нихромового ножа резки композитных материалов и системы управления ими при реализации программы импортозамещения',
            'description' => 'Разработанный проект должен предполагать получение новых возможностей для существующего средства технологического оснащения - настольного станка. Это возможность установить новый инструмент, разработать систему для его управления.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Проект "Твой ход", направление "Двигаю прогресс"',
            'study_result' => 'Знания: основы проектирования типовых узлов и систем для станков с ЧПУ
Умения: выполнять конструирование узлов механических приводов и электрических плат, в том числе и с помощью ЭВМ
Навыки: прототипирования и моделирования
',
            'product_result' => 'Модель, макет',
            'state_id' => '1',
            'supervisors' => 'Казимиров Денис Юрьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Предварительная оценка машинного времени обработки заготовительно-штамповочной оснастки',
            'places' => '15',
            'goal' => 'Создание классификатора изделий по геометрическим особенностям, влияющим на машинное время обработки заготовительно-штамповочной оснастки, и вычисление соответствующих поправочных коэффициентов',
            'description' => 'Заготовительно-штамповочное производство в авиационной промышленности имеет немаловажное значение, так как листовая штамповка используется для изготовления многих деталей. Оснастка заготовительно-штамповочного производства уникальная для каждого изделия. Внесение изменений в конструкцию детали требует изменения модели оснастки и изготовления нового образца, часто в кратчайшие сроки. Внесение нового приоритетного изделия в цеховое расписание требует его перестроения, для чего необходимо знать машинное время. Традиционно, машинное время вычисляется при помощи встроенных функций Unigraphics NX, но для этого требуется написание управляющей программы, что занимает значительное время. Для повышения гибкости производства целесообразно применить метод предварительной оценки машинного времени на основе скорости удаления материала. Для более точного приближения результата к реальному необходимо ввести коэффициенты, учитывающие геометрические особенности изделия и динамические характеристики оборудования, что требует проведения экспериментальных исследований.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Конкурс «Твой Ход», направление «Двигаю прогресс».
https://tvoyhod.online/
',
            'study_result' => 'Знания: виды продукции, выпускаемой в цехах изготовления заготовительно-штамповочной оснастки, методики оценки машинного времени.
Умения: работа в среде Unigraphics NX, анализ геометрической информации.
Навыки: поиск информации, анализ информации с целью выделения требуемого знания, формирование комплексного понимания предмета изучения на основе полученной информации, системный анализ полученной информации, выделение «дефицитов» знаний и формулирование запроса на поиск новой информации.
',
            'product_result' => 'Методика оценки машинного времени на основе классификатора изделий и скорости удаления материала, позволяющая в краткие сроки позволить предоставить данные по машинному времени для перестроения цехового расписания',
            'state_id' => '1',
            'supervisors' => 'Исаченко Алексей Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Лопасти воздушного винта из композиционного материала',
            'places' => '15',
            'goal' => 'Разработка технологии изготовления лопасти воздушного винта из композиционного материала для водной техники (аэролодка)',
            'description' => 'Исследование и анализ существующих геометрий лопастей для водной техники (аэролодка). Разработка геометрии лопасти в программной среде Siemens NX. Проектирование специализированной оснастки для изготовления прототипа лопасти из композиционных материалов методом вакуумной инфузии. Изготовление и подготовка оснастки. Создание прототипа лопасти из композиционного материала.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО «ИРКУТ – АЭРО»',
            'study_result' => 'Знания: основы проектирования типовых узлов и деталей машин; основы проектирования типовых узлов и деталей машин
Умения: выполнять конструирование типовых узлов и деталей машин, в том числе и с помощью CAD-технологий
Навыки: выполнения инженерных и компьютерных расчётов, способами представления и анализа результатов; 
',
            'product_result' => 'Прототип лопасти воздушного винта из композиционного материала',
            'state_id' => '1',
            'supervisors' => 'Чащин Николай Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка и изготовление лабораторного комплекса и исследование процесса комбинированного формообразования подкреплённых панелей самолётов',
            'places' => '15',
            'goal' => 'Опытная отработка импортонезависимой технологии формообразования крупногабаритных панелей сложной формы  ',
            'description' => 'Панели крыла представляют собой обводообразующие детали с гладкой наружной (аэродинамической) поверхностью. Внутренний набор деталей типа панелей содержит такие конструктивные элементы как карманы, люки с окантовками и подкрепляющие рёбра различных сечений, расположенные в продольном или в поперечном направлениях. 
По геометрической форме панели и обшивки представляют собой совокупность линейчатых поверхностей с направляющими переменной кривизны, участков двойной и знакопеременной кривизны (зон перегиба) с закруткой сечений.
Основными технологическими операциями получения требуемой формы деталей является дробеударное формообразование с последующей зачисткой, а так же раскатка и посадка ребер.
В рамках проектных работ будет разработано, изготовлено и испытано следующее оборудование:
- лабораторная установка для обработки методами раскатки роликами и посадки;
- лабораторная установка для дробеударного формообразования и зачистки абразивными лепестковыми кругами.
Также планируется проведение опытных работ на образцах с целью отработки технологии формообразования подкреплённых панелей
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ПАО «Электромеханика»',
            'study_result' => 'Знать: основные технологические процессы формообразования и правки крупногабаритных маложестких деталей.
Уметь: проектировать специальное оборудование для реализации технологии формообразования и правки крупногабаритных маложестких деталей.
Навыки: проектирование в Siemens NX; слесарные и сборочные работы.
',
            'product_result' => 'Лабораторные стенды для отработки технологии формообразования деталей пита подкреплённых панелей из алюминиевых сплавов',
            'state_id' => '1',
            'supervisors' => 'Пашков Александр Андреевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Изготовление корпусных деталей беспилотных летательных аппаратов',
            'places' => '15',
            'goal' => 'Разработка технологии изготовления корпусных деталей беспилотных летательных аппаратов',
            'description' => 'Исследование и анализ существующих корпусных деталей беспилотных летательных аппаратов. Разработка модели корпуса в программной среде Siemens NX. Проектирование специализированной оснастки для изготовления прототипа деталей корпуса из композиционных материалов методом вакуумной инфузии. Изготовление и подготовка оснастки. Создание прототипа детали корпуса.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: основы проектирования типовых узлов и деталей машин; основы проектирования типовых узлов и деталей машин
Умения: выполнять конструирование типовых узлов и деталей машин, в том числе и с помощью CAD-технологий
Навыки: выполнения инженерных и компьютерных расчётов, способами представления и анализа результатов; 
',
            'product_result' => 'Прототип детали корпуса беспилотных летательных аппаратов',
            'state_id' => '1',
            'supervisors' => 'Иванов Юрий Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка оптимальных характеристик конструкции механизма перемещения садовых и строительных грузов весом до 250 кг. ',
            'places' => '15',
            'goal' => 'Разработка работающего устройства перемещения грузов',
            'description' => 'Изготовленное устройство перемещения грузов должно облегчить труд пожилого контингента на дачном участке или строителей при ремонтных и строительных работах с небольшими объёмами работ. Изготовлению должно предшествовать комплекс расчетных и технологических задач, позволяющие обеспечить точное воспроизведение в действующем образце всех заложенных параметров. В рамках проекта будут освоены CAD системы, позволяющие обеспечить точное воспроизведение рассчитанного изделия. Полученные чертежи, с трёхмерной модели, позволят изготовить в металле детали на станках токарно-фрезерной группы. Для этого будет изучен инструмент и станки, подобран материал для изготовления деталей. Изучены критерии и приборы для оценки качества деталей ( шероховатость, размерных допусков и погрешностей формы, определение твёрдости, методы закалки и т.д.).',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: Изучение CAD системы трёхмерного моделирования. Систему допусков и посадок. Методы определения твёрдости материалов и пути их достижения. Знать устройство и возможности металлорежущих станков, методы обработки материалов.
Умения :Работать в CAD системе трёхмерного моделирования, уметь создавать детали и сборочные единицы. На основе 3D модели создавать чертежи деталей. Для изготовления деталей подбирать необходимое оборудование, инструмент и режимы резания.
Навыки: Рациональная работа CAD системе. Работа на металлорежущих станках. Работа с приборами оценивающие  качество поверхности.
',
            'product_result' => 'Готовое изделие для перемещения грузов',
            'state_id' => '1',
            'supervisors' => 'Дрожжин Сергей Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка и изготовление  опытной партии многофункциональных пильных станков на модульном принципе',
            'places' => '15',
            'goal' => 'Разработка рабочей и эксплуатационной документации многофункциональных пильных станков,  организация производства ',
            'description' => 'Многофункциональность станков обеспечивается за счет быстрой смены режущего инструмента (пильные диски для разных материалов), изменение режимов резания, наличие  сменных контейнеров для сбора разных отходов и использования специальных сменных модулей. Модульный принцип реализован в разделении конструкции станка на отдельные модули по технологическим и конструктивным свойствам. Разделение на модули является важной задачей и решается синтезом сложных систем, определения числа оптимальных функций каждого модуля. 
Производство пильных станков не требует сложных технологий и дорогостоящего оборудования, высокой квалификации рабочих, что подтверждается изготовлением 4х станков силами студентов в рамках выпускной работы. Модульный принцип позволяет распределить изготовление модулей на небольших предприятиях и среди индивидуальных предпринимателей, а общую сборку и испытание проводить на базе лабораторий ИрНИТУ. Расчетная стоимость производства пильного станка составляет на 2021г. 16363руб., что позволяет говорить об возможном получении прибыли при условии стоимости подобных станков на рынке 20-40тыс. руб.. Потребителями станка на рынке в первую очередь являются индивидуальные предприниматели, строительные фирмы, малые предприятия и др.. Для повышения качества, производительности и обеспечения взаимозаменяемости модулей в лаборатории спроектированы и изготовлены специальные сборочные приспособления для каждого модуля.
Технические решения заложенные в конструкции пильного станка имеют большой потенциал при его использовании и совершенствовании конструкции самого станка
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Патент ИрНИТУ на изобретение №2709064 «Модульный многофункциональный пильный станок» 2019г',
            'study_result' => 'Знать: основы проектирования станочного оборудования на модульном принципе, технологические процессы изготовления деталей, сборки узлов( модулей) и общей сборки станков.
Уметь: проектировать станочное оборудование, приспособлений разного назначения.
Навыки: проектирование в Siemens NX; слесарные и сборочные работы.
',
            'product_result' => 'Рабочая конструкторская документация, технология изготовления и готовые станки для реализации',
            'state_id' => '1',
            'supervisors' => 'Москвитин Виктор Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка эскизного проекта СВП «Марс 7000», проектирование отдельных узлов и элементов ',
            'places' => '15',
            'goal' => 'Создание судов на воздушной подушке для использования в условиях крайнего Севера для нужд нефтегазовой добывающей отрасли ',
            'description' => 'В ОКБ имени Алексеева г.Нижний Новгород разработаны и изготовлены суда на воздушной подушке разных типов и грузоподъемности. Наиболее эффективным является «Марс2000и3000» Данные аппараты рассчитаны на перевозку 20 или 30 человек. Аппараты в теплое время эксплуатируют на водных акваториях, а в зимнее время на льду и снежном покрове. Они оснащены двумя дизельными двигателями, которые обеспечивают скорость движения 50- 70 км/час.
Для повышения грузоподъемности и скорости необходимо снижение массы конструкции корпуса и двигателей, а также повышение мощности привода. Важным фактором эффективного использования в условиях крайнего севера возможность эксплуатации при температурах минус 40-50град. Требования заказчика иметь разные модификации аппаратов: пассажирский, грузовой и грузо-пассажирский с грузовой нагрузкой более 5-10Тс.
В 2021-2022г. автором разработаны два проекта в виде технического предложения «Марс300» и «Марс7000» с турбо вальными газотурбинными двигателями, которые позволяют в два раза увеличить мощности привода, уменьшить массу конструкции, увеличить скорость до 90 км/час, поднять грузоподъемность до 7000кг. Важным достоинством ГТД малый вес, долговечность и высокая надежность при эксплуатации при низких температурах. Конструкция аппаратов относится к сложными ответственным транспортным средствам, включает в себя множество уникальных устройств(редукторы, силовые передачи, системы управления и т.д.). 
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ОКБ имени Алексеева г.Нижний Новгород',
            'study_result' => 'Знать: основы проектирования сложных и ответственных конструкций транспортных систем, технологические процессы изготовления деталей, сборки узлов( модулей) и общей сборки.
Уметь: Разрабатывать  сборочные и деталиировочные чертежи, строить КЭМ 
Навыки: проектирование в Siemens NX;.
',
            'product_result' => 'Рабочая конструкторская документация, технология изготовления элементов конструкций и систем',
            'state_id' => '1',
            'supervisors' => 'Москвитин Виктор Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Снежный 3Д принтер',
            'places' => '15',
            'goal' => 'Разработка и сборка 3Д принтера способного печатать снегом',
            'description' => 'В зимний период в Иркутской области выпадает много снега, разработка устройства которое позволит печатать из снега различные объекты практического и художественного смысла',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ИРНИТУ ректорат',
            'study_result' => 'Знания: системы ЧПУ, шаговые двигателя
Умения: Конфигурация систем с ЧПУ
Навыки: подготовка моделей к 3Д печати, физика процесса 3Д печати
',
            'product_result' => 'Прототип 3Д принтера, печатающего снегом',
            'state_id' => '1',
            'supervisors' => 'Кононенко Роман Владимирович ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка бобинной технологии сварки с перемешиванием',
            'places' => '15',
            'goal' => 'Опытная отработка технологии сварки трением с перемешиванием с использованием бобинного инструмента (инструмента с двумя заплечиками)  ',
            'description' => 'Традиционные технологические процессы сварки обладают целым рядом недостатков, которые в свою очередь отсутствует при использовании сварки с трением с перемешиванием (СТП). Особый интерес вызывают современные способы СТП, которые позволяют повысить качество соединений, получаемых с применением этой технологии. Одним из таких способов расширения технологических возможностей СТП является сварка с использованием бобинного инструмента (инструмента с двумя заплечиками).  
В рамках проектных работ будет спроектированы, изготовлены и испытаны средства технологического оснащения процесса: сварочные приспособления, сварочный инструмент.
В рамках проекта также планируется проведение опытных работ на образцах с целью отработки технологии бобинной сварки трением с перемешиванием.
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: основные технологические особенности сварки трением с перемешиванием
Уметь: проектировать специальное технологическое оборудование для реализации технологии СТП.
Навыки: проектирование с использованием программных продуктов САD, CAE; слесарные и сборочные работы.
',
            'product_result' => 'Приспособления и инструмент для реализации исследуемой технологии бобинной сварки трением с перемешиванием',
            'state_id' => '1',
            'supervisors' => 'Тютрин Николай Орестович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка технологии изготовления алюминиевых труб с внутренним антифрикционным покрытием',
            'places' => '15',
            'goal' => 'Опытная отработка импортозамещающей технологии производства алюминиевых труб для производства гильз пневмоцилиндров с повышенными эксплуатационными свойствами рабочей поверхности   ',
            'description' => 'Алюминиевые трубы для производства гильз пневмоцилиндров используются российскими производителями пневмооборудования, а также приобретаются эксплуатирующими организациями в ремонтных целях. При этом в Российской Федерации такая продукция не производится и приобретается за рубежом (производители – предприятия европейских стран и КНР). Традиционная технология изготовления труб для изготовления гильз пневмоцилиндров – прессование. Она отличается высокой себестоимостью, приводящей к завышенной цене готового продукта. Кроме того, изготовленные таким способом гильзы не имеют износостойкого слоя. В этой связи проект, направленный на создание технологии производства импортозамещающей продукции с повышенным ресурсом путём её изготовления центробежным литьём, является актуальным.
В рамках работ будет спроектированы, изготовлены и испытаны средства технологического оснащения процесса: вращающаяся изложница, плавильно-разливочный модуль.
В рамках проекта также планируется производство опытных образцов и испытание их эксплуатационных свойств.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: основные технологические особенности литейных и сварочно-наплавочных технологий
Уметь: проектировать специальное технологическое оборудование для реализации технологии СТП.
Навыки: проектирование с использованием программных продуктов САD, CAE; слесарные и сборочные работы.
',
            'product_result' => 'Опытная технологическая оснастка для реализации технологии производства алюминиевых труб методом центробежного литья с нанесением антифрикционных покрытий',
            'state_id' => '1',
            'supervisors' => 'Тютрин Николай Орестович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Определение показателей качества металлоконструкций, изготавливаемых аддитивными комбинированными технологиями ',
            'places' => '15',
            'goal' => 'Опытная отработка  методик и технологий определения показателей качества изделий, изготавливаемых аддитивными методами',
            'description' => 'Изготовленные с применением аддитивных технологий металлические детали и изделия  могут обеспечить значительное снижение веса и повышение производительности в различных отраслях промышленности. Внедрению аддитивных технологий в производство должно предшествовать решение комплекса технологических задач, позволяющих обеспечить точные и воспроизводимые характеристики изделий. В рамках проекта будут освоены различные методики определения характеристик изделий, а также  основы технологии  их аддитивного производства',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: показатели качества металлоконструкций, изготавливаемых аддитивными технологиями и методы их определения
Уметь: проводить комплекс необходимых исследований для  определения основных характеристик  изделий, полученных 
Навыки: работ с использованием САПР, приборами и оборудованием для исследований 
',
            'product_result' => 'Методики оценки качества изделий при послойном аддитивном выращивании',
            'state_id' => '1',
            'supervisors' => 'Астафьева Наталья Анатольевна ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Обработка поверхности изделий из конструкционных материалов концентрированными источниками нагрева ',
            'places' => '15',
            'goal' => 'Получение особых свойств поверхностных слоёв изделий из конструкционных материалов при воздействии концентрированными источниками нагрева',
            'description' => 'Проблема совершенствования технологических методов упрочнения конструкционных материалов является  актуальной  на сегодняшний день. Данный проект направлен на исследование фазовых и структурных превращений в конструкционных материалах после воздействия концентрированных источников нагрева и разработка комбинированных технологий поверхностного упрочнения с использованием плазменного и лазерного источника, обеспечивающих высокий уровень физико-механических свойств поверхностного слоя. Для этого необходимо провести комплексные исследования взаимосвязи структуры и свойств исследуемых материалов  с различной исходной микроструктурой в зонах лазерного и плазменного воздействия, сформированных при различных вариантах, условиях и энергетических параметрах непрерывного излучения, используемого с целью достижения термического упрочнения, легирования и наплавки.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: методы обработки поверхности изделий из конструкционных материалов концентрированными источниками нагрев, методы исследования структуры и свойств матеоиалов;
Уметь: проводить комплекс необходимых исследований для  установления взаимосвязей структуры и свойств исследуемых материалов  с различной исходной микроструктурой в зонах лазерного и плазменного воздействия, сформированных при различных вариантах, условиях и энергетических параметрах непрерывного излучения;
Навыки: работы с  приборами и оборудованием для исследований, оборудованием для упрочнения, легирования и наплавки .
',
            'product_result' => 'Комбинированная технология поверхностного упрочнения ( легирования, наплавки)',
            'state_id' => '1',
            'supervisors' => 'Астафьева Наталья Анатольевна ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка методологии реверс- инжиниринга деталей ',
            'places' => '15',
            'goal' => 'Создание методологии разработки электронных моделей изделий методом обратного (реверсного) инжиниринга.',
            'description' => 'Под реверс-инжинирингом понимают процесс создания конструкторской документации на основе снятия данных с реального изделия.  В отличие от традиционных методов, метод обратного сканирования позволяет значительно сократить сроки разработки и удешевить процесс. 
В условиях, когда предприятия столкнулись с необходимостью импортозамещения, разработка электронных моделей изделий, полностью подходящих под требования заказчика, весьма актуальна. 
В настоящее время в ИрНИТУ поступают заказы от предприятий различного профиля на создание графического пакета документации на детали. 
Обучающиеся, решившие принять участие в данном проекте,  на реальных заказах от АО «АНХК» пройдут весь путь от трехмерного сканирования деталей  до создания  рабочей документации.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО «АНХК»',
            'study_result' => 'Знания: методов снятия  и обработки графической информации с образца изделия
Умения: продумывать последовательность обработки графической информации об объекте с целью максимально эффективного создания его модели
Навыки: работы с 3d сканером, обработки результатов сканирования, работы с графическим ПО для создания электронной модели изделия 
',
            'product_result' => 'Создание электронных моделей деталей методом реверс-инжиниринга',
            'state_id' => '1',
            'supervisors' => 'Клименкова Светлана Богдановна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проектирование кулисно-рычажных механизмов убирающегося шасси самолета.',
            'places' => '15',
            'goal' => 'Разработать методику расчета механизма с качающимся гидроцилиндром.',
            'description' => 'Механизмы убирающегося шасси самолета представлены структурными схемами в сборнике механизмов Артоболевского И.И. «Механизмы в современной технике» , 1352-1375, в количестве 23 вариантов. Данные схемы включают в свою конструкцию гидроцилиндры, что классифицирует их как механизмы второго типа. Механизм качающегося гидроцилиндра должен быть адаптирован к различным видам расчета через преобразование его в кулисно-рычажный механизм. 
Структурный, кинематический и кинетостатический расчет таких механизмов отличается от исследования рычажных механизмов первого типа. Рабочие учебные программы по дисциплинам «Механика», «Теория механизмов и машин» охватывают изучение только механизмов первого типа, что не позволяет углубиться в изучение механизмов, использующихся в конкретном направлении подготовки специалистов в области конструирования и проектирования машин и механизмов. Данный проект является логическим продолжением изучения механики, устанавливающим взаимосвязь между общетехническими и  специальными дисциплинами. 
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: конструкций убирающихся шасси самолета; ЕСКД.
Умения: проводить проектировочные расчеты; анализировать конструкцию механизма;  выбора рациональной структурной схемы механизма для возможности использования его в проектируемом сборочном узле, агрегате. 
Навыки: конструирования, проектирования, выполнения чертежей и расчетных схем с использованием CAD/CAM/CAE систем проектирования; систематизирования и анализа информации для дальнейшего продвижения, реализации полученных результатов  в конкретных методиках расчета.
',
            'product_result' => 'Методические рекомендации расчета механизмов второго типа. Комплект конструкторской документации.',
            'state_id' => '1',
            'supervisors' => 'Шматкова Анна Викторовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка, проектирование механизмов поворота планетарного типа.',
            'places' => '15',
            'goal' => 'Разработать пакет конструкторской документации',
            'description' => 'Механизмы поворотного типа это планетарные механизмы, применяющиеся в различных технологических и транспортных машинах. Планетарные редукторы имеют целый ряд достоинств перед обычными редукторами с неподвижными осями. Мощность передаётся через несколько шестерён, следовательно, уменьшается нагрузка на зубья, выше надёжность и срок службы. Ведущий и ведомый валы соосны, это очень удобно с точки зрения компоновки. Планетарная передача более компактна, чем простой редуктор с тем же передаточным числом.
Исследование области применения и подробное изучение особенностей конструкций планетарных механизмов в качестве поворотных механизмов, позволяет получить дополнительные компетенции в проектировании, конструировании деталей машин и механизмов.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Шифр 17866827
Механизм поворота планетарного типа
АО "Клинцовский автокрановый завод"
',
            'study_result' => 'Знания: кинематического и силового расчета механизмов передач графическими и аналитическими методами, ЕСКД.
Умения: проводить кинематический расчет сложных многоступенчатых зубчатых передач с подвижными осями, 
Навыки: в работе с графическими редакторами, проектирования с применением CAD/CAM/CAE системами, в работе над проектом от «схемы» до «чертежа».
',
            'product_result' => 'Комплект конструкторской документации.',
            'state_id' => '1',
            'supervisors' => 'Шматкова Анна Викторовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка автоматизированной «дорожной карты» подготовки и проведения мероприятий в ИРНИТУ',
            'places' => '15',
            'goal' => 'Автоматизированная «дорожная карта» подготовки и проведения мероприятий в ИРНИТУ',
            'description' => 'Проводимые в ИРНИТУ мероприятия различаются продолжительностью времени, необходимого для их подготовки, и пакетом оформляемых документов. На этапе подготовки мероприятия организаторы иногда упускают из вида некоторые факторы, значимые при составлении сметы и формирования других документов, необходимых для беспроблемного проведения мероприятия. Разработанная «дорожная карта» должна давать организаторам исчерпывающую информацию о каждом шаге подготовки мероприятия',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Институт информационных технологий и анализа данных',
            'study_result' => 'Знания: эффективное делопроизводства в современных условиях функционирования организации
Умения: отладка процессов эффективного движения документов внутри организации
Навыки: грамотного распределения времени и ресурсов для нормального функционирования организации
',
            'product_result' => 'Автоматизированная «дорожная карта» подготовки и проведения мероприятий в ИРНИТУ, адаптированная под разные их виды',
            'state_id' => '1',
            'supervisors' => 'Чернышенко Марина Сергеевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Профиль потребителя энергоресурсов.',
            'places' => '15',
            'goal' => 'На основе данных ИЭСБК создать профиль потребителя энергоресурсов',
            'description' => 'проанализировать базу данных параметров потребителя, которую собирает ИЭСБК, оценить, какими данными еще стоит ее наполнить и из каких источников (внешних/внутренних); разработать методику формирования профиля потребителя; сформировать типы профилей и их характеристики; провести сегментацию всех потребителей по профилям; разработать методику/набор инструментов для взаимодействия (в части контроля и взыскания задолженности) с потребителем в зависимости от его профиля',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО «Эн+ Диджитал»',
            'study_result' => 'Знать: особенности потребителя энергетической продукции, причины недополучения платы за энергоуслуги.
Уметь: анализировать базы данных, синтезировать информацию
Владеть навыками командной работы при решении проблемных ситуаций 
',
            'product_result' => 'разработан набор характеристик каждого профиля, алгоритм дополнения БД недостающими характеристиками, критерии кластеризации потребителей по профилям',
            'state_id' => '1',
            'supervisors' => 'Осипова Ирина Михайловна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание корпоративной программы благополучия сотрудников «Well-being» (мобильная версия)',
            'places' => '15',
            'goal' => 'Применение знаний и получение навыков в организации работы предприятия',
            'description' => 'Забота о благополучии сотрудников – это выгодные инвестиции в управление производительностью, повышение конкурентоспособности и корпоративной культуры компании. Подобные стратегии полезны для крупного, малого и среднего бизнеса, который нацелен привлекать и удерживать ценные кадры, а также максимально раскрывать их потенциал в работе на благо компании.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО «ЭнСер»',
            'study_result' => 'Знания: знать методы сбора, анализа, систематизации, хранения информации предприятия
Умения: уметь, в соответствии с поставленной задачей, выявлять критерии оценки и отбора информации
Навыки: владеть способами получения информации из различных источников
',
            'product_result' => 'Создание мобильного приложения по Well-being в стиле Agile, с возможностью дополнения инициатив в виде конструктора',
            'state_id' => '1',
            'supervisors' => 'Наумова Татьяна Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Предпринимательские качества у научных работников',
            'places' => '15',
            'goal' => 'Исследование влияния предпринимательских качеств на профессиональные достижения, финансовое вознаграждение и нематериальную «выгоду» научных работников',
            'description' => 'Проблема заключается в противоречии между возрастающим значением инновационных технологий и сохраняющейся слабостью механизмов коммерциализации знаний и инновационных разработок в России. Образовательные и научные организации чаще всего сталкиваются с низким уровнем обладания предпринимательскими способностями, которые к тому же неравномерно распределены среди научных работников. В этих условиях важно оценить влияние предпринимательских качеств на профессиональные достижения, финансовое вознаграждение и нематериальную «выгоду» научных работников',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Проректор по научной работе Кононов А.М.',
            'study_result' => 'Знания: методов проведения исследований, понятий предмета и объекта исследования
Умения: постановка цели и задач исследования, определение предмета и объекта, актуальности темы исследования, выдвижение и проверка гипотезы исследования
Навыки: подбор и изучение источников, обработка и анализ полученной информации, формирование результата исследования
',
            'product_result' => 'Практические рекомендации по развитию определённых soft skills у различных категорий научных работников',
            'state_id' => '1',
            'supervisors' => 'Чернышенко Марина Сергеевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Стратегическое управление ключевыми потенциалами развития территориальных социально-экономических систем ',
            'places' => '15',
            'goal' => 'Стратегическое управление ключевыми потенциалами развития территориальных социально-экономических систем ',
            'description' => 'Стратегия необходима, поскольку будущее в основном непредсказуемо, абсолютной определенности относительно будущего нет. Современный темп изменений во внешней среде, увеличение количества знаний и информационных потоков настолько велики, что планирование стратегии представляется единственным способом формального прогнозирования будущих проблем и возможностей. 
Основой развития территориальной социально-экономической системы выступает ее потенциал, представляющий собой совокупные возможности, способности, скрытые не реализованные резервы экономической системы. При этом стратегическое управление предполагает выбор из всей совокупности структурных составляющих потенциала развития территориальной социально-экономической системы ключевых, концентрация на которых позволит достичь максимальных долгосрочных результатов с учетом ограниченных ресурсов территории
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: знать основные цели, задачи и функции стратегического планирования и управления.
Умения: сопоставлять потенциальные возможности развития территориальных социально-экономических систем.
Навыки: навыки использования методов разработки и принятия управленческих решений.
',
            'product_result' => 'Стратегия развития территориальной социально-экономической системы',
            'state_id' => '1',
            'supervisors' => 'Баяскаланова Туяна Александровна ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => '«Продвижение ИРНИТУ в социальных сетях»',
            'places' => '15',
            'goal' => 'Продвижение социальных сетей ИРНИТУ среди потенциальной (абитуриентов) и существующей (студентов) целевой аудитории',
            'description' => 'Разработка развлекательных, познавательных и научных материалов в социальных сетях ИРНИТУ. ',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: получает новые знания о сути и ходе реализации проекта, о его специфических свойствах и способах работы с видеоматериалом. 
Умения: использовать полученные навыки в ходе обучения для создания качественного видеоконтента;
Навыки: Способен создавать  качественный развлекательный или образовательный продукт, востребованный обществом и индустрией. 
',
            'product_result' => 'Короткометражные повторяющиеся и не повторяющиеся видеопередачи (выпуски), юмористического и познавательного содержания, призванные привлекать внимание целевых и потенциальных целевых групп. ',
            'state_id' => '1',
            'supervisors' => 'Другова Елена Сергеевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Зеленый университет',
            'places' => '15',
            'goal' => '',
            'description' => 'Путем информирования, практических действий, журналистских расследований, других форм привлечения внимания к экологическим проблемам и практикам экоповедения, формировать у студентов и преподавателей осознанные действия, направленные на сохранение окружающей среды',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Министерство по молодежной политике в Иркутской области',
            'study_result' => 'Знания: практическое освоение предметных дисциплин по основам журналистской деятельности, операторского мастерства,  сценарного и режиссерского мастерства и др.; новые знания о сути и ходе реализации проекта, о его специфических свойствах и способах работы с видеоматериалом. 
Умения: использовать полученные навыки в ходе обучения для создания журналистских продуктов:
специальное событие для СМИ; проведение пресс-конференций, круглых столов; создание  видеосюжетов и роликов.
Навыки: способность формировать образ и осознанно внедрять его в реальную жизнь с помощью медийных инструментов. 
',
            'product_result' => 'Проведение 1 флэшмоба, 1 экологической акции, не менее 5 освещений в СМИ, 3 показов кинопрограмм, 2 расследования экологических практик',
            'state_id' => '1',
            'supervisors' => 'Бельская Ольга Герасимовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание периодического еженедельного студенческого видеоконтента «InfoHours» в соцсетях',
            'places' => '15',
            'goal' => '',
            'description' => 'Сформулировать взгляд молодежи на актуальные события/явления и представить его ьв виде регулярных еженедельных выпусков коротких видео в соцсетях',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Министерство по молодежной политике в Иркутской области',
            'study_result' => 'Знания: практическое освоение предметных дисциплин по основам журналистской деятельности, операторского мастерства,  сценарного и режиссерского мастерства и др.; новые знания о сути и ходе реализации проекта, о его специфических свойствах и способах работы с видеоматериалом. 
Умения: использовать полученные навыки в ходе обучения для создания качественного видеоконтента.
Навыки: способность создавать качественный содержательный и развлекательный продукт, востребованный обществом и индустрией. 
',
            'product_result' => 'Размещение студенческого видеоконтента в соцсетях не менее 2 выпусков в неделю с количеством подписчиков не менее 300 человек и количеством просмотров каждого ролика не менее 50. ',
            'state_id' => '1',
            'supervisors' => 'Бельская Ольга Герасимовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание лонгрида',
            'places' => '15',
            'goal' => 'Научить студентов работать в формате лонгридов, создавать объемные тексты с использованием «сквозных технологий».',
            'description' => 'Знания: практическое освоение предметных дисциплин по основам журналистской деятельности, операторского мастерства,  сценарного и режиссерского мастерства и др.; новые знания о сути и ходе реализации проекта, о его специфических свойствах и способах работы с видеоматериалом. 
Умения: использовать полученные навыки в ходе обучения для создания журналистских продуктов:
специальное событие для СМИ; проведение пресс-конференций, круглых столов; создание  видеосюжетов и роликов.
Навыки: способность формировать образ и осознанно внедрять его в реальную жизнь с помощью медийных инструментов
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Министерство по молодежной политике в Иркутской области',
            'study_result' => 'Знания: практическое освоение предметных дисциплин по основам журналистской деятельности, операторского мастерства,  сценарного и режиссерского мастерства и др.; новые знания о сути и ходе реализации проекта, о его специфических свойствах и способах работы с видеоматериалом. 
Умения: использовать полученные навыки в ходе обучения для создания журналистских продуктов:
специальное событие для СМИ; проведение пресс-конференций, круглых столов; создание  видеосюжетов и роликов.
Навыки: способность формировать образ и осознанно внедрять его в реальную жизнь с помощью медийных инструментов. 
',
            'product_result' => 'Создание 3 лонгридов с темами определенными вместе с партнерами проекта.',
            'state_id' => '1',
            'supervisors' => 'Бельская Ольга Герасимовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Социальный студенческий проект «Вам не стыдно?»',
            'places' => '15',
            'goal' => 'Привлечение внимания представителей общественности (молодежи и взрослой аудитории) к актуальным проблемам общества.',
            'description' => 'Создание короткометражных видеосюжетов посвященных острым социальным проблемам современного общества всех возрастов.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: получает новые знания о сути и ходе реализации проекта, о его специфических свойствах и способах работы с видеоматериалом. 
Умения: использовать полученные навыки в ходе обучения для создания качественного видеоконтента;
Навыки: Способен создавать  качественный развлекательный или образовательный продукт, востребованный обществом и индустрией. 
',
            'product_result' => 'Короткометражные  выпуски на социальную тему, призванные привлекать внимание целевых и потенциальных целевых групп. ',
            'state_id' => '1',
            'supervisors' => 'Другова Елена Сергеевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Современное уголовное судопроизводство: проблемы и перспективы развития',
            'places' => '15',
            'goal' => 'Целью проекта является: привлечь внимание к уголовному судопроизводству, установить проблемы уголовно-процессуального права и предложить пути решения, проанализировать деятельность по расследованию и разрешению уголовных дел в современных условиях, в том числе в условиях цифровизации',
            'description' => 'Проект «Современное уголовное судопроизводство: проблемы и перспективы развития» представляет собой углубленное изучение уголовного судопроизводства, проблем современного состояния норм уголовно-процессуального права, совершенствование правовой регламентации отдельных институтов уголовно-процессуального права в современных условиях, в том числе в условиях цифровизации',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: 
В ходе выполнения проекта студенты получат знания в сфере уголовно-процессуального права, расследования и разрешения уголовных дел по существу
Умения:
В ходе работы над проектом студенты приобретут умения планирования и контроля личного времени, составления содержания научно-исследовательской работы, формулирования проблемы
Навыки:
В ходе работы над проектом студенты приобретут навыки работы в команде, анализа и подбора научной литературы, анализа судебной практики
',
            'product_result' => 'Или статья (опубликованная или подготовленная к публикации), или тезисы конференции (защищенные на конференции, опубликованные или подготовленные к публикации) по теме проекта. ',
            'state_id' => '1',
            'supervisors' => 'Днепровская Марина Анатольевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Защита трудовых прав граждан',
            'places' => '15',
            'goal' => 'Совместная реализация задач защиты трудовых прав и интересов работников организаций',
            'description' => 'В ходе проекта студенты будут участвовать в интервьюировании, консультировании граждан. В подготовке методических, информационных документов, в размещении их на сайте Государственной инспекции труда Иркутской области',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Государственная инспекция труда Иркутской области',
            'study_result' => 'Знает инструменты поиска информации.
Умеет использовать инструменты поиска информации.
Владеет навыками поиска информации.
Умеет выделить из массива информации ключевые моменты.
Владеет навыками анализа информации с целью выделения требуемого знания.
Умеет использовать различные инструменты поиска и анализа информации.
Владеет навыками на основе полученной первичной информации сформировать комплексное понимание предмета изучения.
Владеет навыками выполнения системного анализа полученной информации, выделения  «дефицитов» знаний  и формулирования  запроса   на поиск новой информации.
',
            'product_result' => 'Сайт Государственной инспекции труда Иркутской области, консультирование граждан',
            'state_id' => '1',
            'supervisors' => 'Красноярова Елена Викторовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Подготовка хрестоматии по трудовому праву',
            'places' => '15',
            'goal' => 'Подготовка учебного пособия в помощь студентам – бакалавров ',
            'description' => 'В ходе проекта студенты будут участвовать в сборе информации. В подготовке методических, учебных, информационных документов, в размещении их на сайте  электронного обучения',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знает инструменты поиска информации.
Умеет использовать инструменты поиска информации.
Владеет навыками поиска информации.
Умеет выделить из массива информации ключевые моменты.
Владеет навыками анализа информации с целью выделения требуемого знания.
Умеет использовать различные инструменты поиска и анализа информации.
Владеет навыками на основе полученной первичной информации сформировать комплексное понимание предмета изучения.
Владеет навыками выполнения системного анализа полученной информации, выделения  «дефицитов» знаний  и формулирования  запроса   на поиск новой информации.
',
            'product_result' => 'Хрестоматия по курсу Трудовое право',
            'state_id' => '1',
            'supervisors' => 'Красноярова Елена Викторовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Совершенствование законодательства и юридической практики в сферах геологоразведки, добычи полезных ископаемых, вторичного использования ресурсов',
            'places' => '15',
            'goal' => 'Обобщение правового регулирования и результатов правоприменительной деятельности, выработка научно-практических рекомендаций по совершенствованию законодательства и юридической практики в сферах геологоразведки, добычи полезных ископаемых, вторичного использования ресурсов, в том числе в интересах субъектов малого и среднего предпринимательства , осуществляющих (намеревающихся осуществлять) деятельность по разработке техногенных месторождений, вторичного использования ресурсов, а также юниорных компаний',
            'description' => 'Проект имеет междисциплинарный характер, направлен на формирование у обучаемых 3 и 4 курса навыков самостоятельного решения отдельной прикладной юридической задачи, выделенной в рамках общей обширной темы, над которой работает весь проектный коллектив. Тренируется умение правильно определять межпредметные связи, увязывать теоретические аспекты юриспруденции с потребностями правовой практики, работать в команде, ориентироваться в сложном комплексном массиве нормативных правовых актов для поиска путей совершенствования правового регулирования и правоприменения. Сопутствующее умение: формулировать полученный результат в тексте – а) нормативно-правовом; б) научном.
Проект имеет смысловые и компетенционные связи со стратегическим проектом i.GeoDesign, реализуемым ИРНИТУ в рамках программы "Приоритет 2030" (юридическое обеспечение умной цифровой геологии, вторичного использования природных ресурсов, формирования юниорного бизнеса).
Можно выделить следующие основные проблемы, задачи по разрешению которых ставятся перед участниками проектной группы:
1) Проблема внесения изменений и дополнений в ФЗ «О недрах» и ряд смежных с ним нормативных правовых актов с целью создания правовых условий для разработки техногенных отложений;
2) Проблема совершенствования законодательства, стимулирующего предпринимательскую активность в рассматриваемой сфере и создающего условия для вторичного использования ресурсов, в том числе добычи и использования мореной древесины, использования отходов горно-промышленного производства в качестве вторичных минеральных ресурсов, использования шлако-зольных отходов энергетики, использования отходов лесопереработки, использования вторичного сырья в производстве строительных материалов.
3) Проблема развития правовой базы создания и деятельности юниорных компаний (малых геологоразведовательных компаний с элементом рискового бизнеса, работающих в сфере поиска и освоения малых месторождений полезных ископаемых).
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: 
– современных инструментов поиска информации;
– сущности проекта и его основных этапов;
– основных требований  к представлению результатов проекта;
– норм и способов осуществления социального взаимодействия;
– основных принципов планирования и организации своей деятельности.
Умения: 
– использовать инструменты поиска информации, прежде всего справочные правовые системы, базы судебных решений, базы статистических данных, системы геологической информации, официальные информационные системы органов государственного управления, каталоги научных библиотек; 
– выделить из массива информации ключевые моменты, необходимые для решения конкретной задачи, разрешения проблемы;
– предварительно спланировать проект и заполнить паспорт, отражающий ключевые этапы жизненного цикла проекта;
– спланировать и реализовать проект с учетом ресурсных ограничений и требований к результату  проекта;
– подготовить результаты исследования, осуществленного в рамках проекта;
– критически оценивать полученные результаты;
– определять круг задач и решать их в соответствии с ролевой позицией в проектной группе;
– формулировать личные цели;
– осуществлять самооценку, выполнять критический анализ и формулировать перечень недостающих  знаний, необходимых для достижения целей.

Навыки:
– поиска необходимой для решения практических задач информации в справочных правовых системах, базах судебных решений, системах геологической информации, официальных информационных системах органов государственного управления; научных библиотеках; базах статистических данных и иных источниках;
- анализа информации, обнаружения и использования ее элементов, необходимых для решения конкретной задачи, разрешения проблемы;
– формирования комплексного понимания предмета изучения на основе полученной первичной информации;
– системного анализа полученной информации, выделения и восполнения «дефицитов» знаний, формулирования  запросов  на поиск новой информации в соответствии с поставленной задачей;
– презентации проекта и его результатов;
– самоанализа, адекватной оценки личного вклада в достигнутые результаты;
– определения и постановки задач, их решения в соответствии с ролевой позицией в проектной группе;
– социального взаимодействия как с членами команды, так и с внешними стейкхолдерами;
– рефлексии;
– четкого формулирования запроса на поиск новых знаний;
– итоговой оценки своего вклада в реализованный проект, работы над недостатками.
',
            'product_result' => '1) Проекты федеральных законов и иных нормативных правовых актов – могут быть внесены в качестве законотворческих инициатив в соответствующие органы государственной власти. На первоначальном этапе могут быть представлены для участия в ежегодном конкурсе «Моя законотворческая инициатива», проводимом Государственной Думой ФС РФ совместно с НС «Интеграция». Решают практические задачи совершенствования законодательства в сферах геологоразведки, добычи полезных ископаемых, вторичного использования ресурсов, повышения эффективности правового регулирования, в том числе в интересах субъектов малого и среднего предпринимательства , осуществляющих (намеревающихся осуществлять) деятельность по разработке техногенных месторождений, использованию вторичных ресурсов, а также юниорных компаний.
2) Научно-практические рекомендации по юридическому стимулированию предпринимательской активности, а также по совершенствованию правоприменительной  практики органов государственного управления. Могут быть представлены в виде: 1)  серии выступлений на научных форумах и научных публикаций студентов – участников проекта; 2) итогового обзора научно-практических  результатов проекта, направленного в заинтересованные органы исполнительной власти. Решают практические задачи поддержки малого и среднего предпринимательства, а также совершенствования правоприменительной (в том числе разрешительно-лицензионной и контрольно-надзорной) практики в сферах геологоразведки и добычи полезных ископаемых, повышения ее эффективности, в том числе в интересах субъектов малого и среднего предпринимательства , осуществляющих (намеревающихся осуществлять) деятельность по вторичному использованию ресурсов, разработке техногенных месторождений, юниорных компаний.
',
            'state_id' => '1',
            'supervisors' => 'Мушинский Михаил Адеилович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проблемы применения гражданского законодательства',
            'places' => '15',
            'goal' => 'Отработка практических навыков толкования и применения норм гражданского законодательства в области вещного, обязательственного и корпоративного права',
            'description' => 'Выработка навыков правовой оценки ситуаций и практического применения гражданского законодательства, а также использования материалов судебной практики;  выработка навыков составления гражданско-правовых документов; формирование навыков подготовки квалификационных и научных работ по цивилистической тематике',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: закономерностей гражданско-правового регулирования в Российской Федерации и в зарубежных странах; правил применения нормативных правовых актов и реализации норм материального права, правил подготовки юридических документов;
Умения: правильно определять факты, события и обстоятельства с целью их квалификации; использовать различные способы толкования норм гражданского законодательства; анализировать и правильно применять гражданско-правовые нормативные акты;
Навыки: владения юридической терминологией; методикой анализа правоприменительной практики; методикой разрешения правовых проблем и коллизий; самостоятельной научной работы и овладение методикой проведения исследований при решении правовых вопросов
',
            'product_result' => 'Опубликование научных статей 
Выступление на научных конференциях
Разработка практического пособия по актуальным вопросам применения гражданского законодательства
',
            'state_id' => '1',
            'supervisors' => 'Пахаруков Александр Анатольевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Сравнительно-правовое исследование законодательства о банкротстве стран ближнего зарубежья',
            'places' => '15',
            'goal' => 'Проведение индивидуальных углубленных сравнительных исследований цивилистической доктрины и законодательства о банкротстве стран ближнего зарубежья',
            'description' => 'В настоящее время институт несостоятельности (банкротства) является неотъемлемым элементом рыночной экономики. Современное состояние экономики невозможно представить без этого динамично развивающегося института. Развитие самой экономики и хозяйственной деятельности предопределяет изменение и совершенствование законодательства, регулирующего рыночные отношения в целом и законодательства о несостоятельности (банкротстве) в частности. Требуется обобщить практику применения законодательства о банкротстве различных государств с целью выявления закономерностей правового регулирования соответствующей области общественных отношений. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: основные направления и тенденции развития законодательства о банкротстве, учения и концепции в этой научной сфере, их преемственность и эволюцию, содержание работ наиболее известных юристов;  основные закономерности возникновения, функционирования и развития конкурсных правоотношений;
Умения: оперативно разрешать правовые проблемы, возникающие при реализации процедур банкротства;
Навыки:  методологией разрешения правовых коллизий и пробелов в нормах права и нормативно - правовых актах.
',
            'product_result' => 'Опубликование научных статей 
Выступление на научных конференциях
Разработка практического пособия по актуальным вопросам применения законодательства о банкротстве
',
            'state_id' => '1',
            'supervisors' => 'Пахаруков Александр Анатольевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Правоохранительная деятельность в информационном пространстве ',
            'places' => '15',
            'goal' => 'Выявление и анализ проблем правового регулирования в сфере использования информационных технологий, а также информационный сетей (Интернет, социальные сети и др.) правоохранительными органами при выявлении административных правонарушений и преступлений, а также иных нарушений законности  ',
            'description' => 'В деятельности правоохранительных органов актуальность приобретает мониторинг социальных сетей на предмет выявления преступлений и правонарушений в различных сферах жизнедеятельности общества. Данная деятельность может являться эффективной в области борьбы с преступлениями и правонарушениями. Однако большие вопросы вызывает законодательное закрепление такой деятельности. Федеральные законы и иные нормативные акты, регламентирующие деятельность правоохранительных органов, в частности, полиции, ФСБ России, Прокуратуры, не содержат норм, которые позволяли бы осуществлять мониторинг социальных сетей на предмет выявления преступлений и административных правонарушений. Необходимо подготовить предложения для законодателя по внесению изменений в Федеральные законы «О полиции», «О прокуратуре Российской Федерации», «О Федеральной службе безопасности» и др. Только внесение изменений в части применения информационных технологий в указанной сфере позволит на законных основаниях использовать мониторинг в социальных сетях в практической деятельности правоохранительных органов. Таким образом, необходимо чтобы такая деятельность осуществлялась в строгом соответствии законодательству',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ВС ЛУ МВД России на транспорте (консультации и оценка результата проекта), 
Всероссийский конкурс «Моя законотворческая инициатива», участие  в конкурс е, представление и защита промежуточных итогов проекта 
',
            'study_result' => 'Знать: об имеющихся информационных ресурсах и  технологиях, которые используются в разных видах юридической деятельности;
Уметь:  работать с официальным интернет-порталом правовой информации pravo.gov.ru, с СПС «Гарант», СПС «Консультант Плюс», ГАС «Правосудие», с официальными сайтами органов государственной власти, с библиотечными юридическими ресурсами, пользоваться полученной с их помощью информацией;
Владеть: навыками работы с различными информационными ресурсами.
',
            'product_result' => 'Конкретные предложения, которые будут выработаны в процессе реализации проекта, направлены на эффективное осуществление деятельности правоохранительных органов в сфере мониторинга социальных сетей для выявления преступлений и административных правонарушений.',
            'state_id' => '1',
            'supervisors' => 'Самусевич Алексей Геннадьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Защита прав потребителей',
            'places' => '15',
            'goal' => 'Совершенствование законодательства в сфере защиты прав потребителей',
            'description' => 'Многочисленные цели государственной политики в сфере защиты прав потребителей определены Правительством Российской Федерации в Стратегии государственной политики РФ в области защиты прав потребителей на период до 2030 года и включают в себя помимо традиционных и инновационные направления, например, электронная торговля. Российская Федерация и другие страны усиливает правовое обеспечение прав потребителя, которое для бизнеса между тем выступает в качестве одного из серьезных пределов свободы профессиональной экономической деятельности. Потребительский договор коррелирует как с традиционной для коммерческого (торгового) права категорией «односторонней торговой сделкой», так и современным выделением b2c-договоров. Одновременно с этим отношения с участием потребителя подвержены сильному публичному регулированию, а устанавливаемые правила становятся неотъемлемой частью государственной регуляторной политики во всем мире, взаимодействующей не только с договорным правом, но и с антимонопольным законодательством и актами технического регулирования. В соответствии со Стратегией развития информационного общества в РФ на 2017 – 2030 гг., утвержденной Президентом страны и соответствующим распоряжением Правительства РФ от 28.07.2017 №1632-р, она затрагивает все сферы экономической жизни, в том числе и сферу потребления. В связи с вышеизложенным, отмечаются значительные пробелы в законодательстве в части правового регулирования отношений с участием потребителей.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: 
Знает инструменты поиска информации. 
Знает основные требования  к представлению результатов проекта.
Умеет подготовить результаты.
Знает основные ресурсные ограничения проекта.
Знает нормы и способы социального взаимодействия.
Знает основные принципы планирования и организации своей деятельности. 

Умения:
Умеет выделить из массива информации ключевые моменты.
Умеет использовать различные инструменты поиска и анализа информации.
Умеет использовать основные инструменты планирования и реализации проекта с учетом основных этапов  жизненного цикла проекта.
Умеет спланировать и реализовать проект с учетом ресурсных ограничений и требований к результату  проекта.
Умеет критически оценивать полученные результаты.
Умеет решать задачи в соответствии с ролевой позицией.
Умеет формулировать личные цели.
Умеет планировать и организовывать свою деятельность на основе приоритетов и поставленных целей.
Умеет выполнять критический анализ и сформулировать перечень недостающих  знаний, необходимых для достижения целей.
Умеет пользоваться основными инструментами организации рефлексии.

Навыки:
Владеет навыками поиска информации.
Владеет навыками анализа информации с целью выделения требуемого знания.
Владеет навыками на основе полученной первичной информации сформировать комплексное понимание предмета изучения.
Владеет навыками  выполнения системного анализа полученной информации, выделения  «дефицитов» знаний  и формулирования  запроса   на поиск новой информации.
Владеет навыками презентации результатов проекта.
Владеет навыками самоанализа и может оценить личный вклад в достигнутых результатах.
Владеет навыками определения и постановки задач.
Владеет навыками рефлексии.
Владеет навыками четкого формулирования запроса на поиск новых знаний.
',
            'product_result' => 'Научная статья, рекомендации для потребителей',
            'state_id' => '1',
            'supervisors' => 'Степаненко О.Г',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Цифровые криминалистические лаборатории',
            'places' => '15',
            'goal' => 'Применение теоритических знаний в практической деятельности',
            'description' => 'Цифровая криминалистика широко используется в уголовном праве, уголовном процессе, криминалистике, гражданском процессе, судебной медицине и психиатрии, теории судебных экспертиз. Создание криминалистического полигона с минилабораториями, в которых, будет происходить моделирование преступной ситуации, проведение анализа места преступления, выявление фактов и обстоятельств, сбор доказательств, исследование доказательств и т.д. В том числе возможность ознакомления абитуриентов с направлением юриспруденции (профориентационная школа), проведение мастер-классов.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'грант ИРНИТУ',
            'study_result' => 'Умеет выделить из массива информации ключевые моменты.
Владеет навыками анализа информации с целью выделения требуемого знания.
',
            'product_result' => 'Криминалистическая лаборатория',
            'state_id' => '1',
            'supervisors' => 'Туркова Валентина Николаевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Осуществление права государственной и муниципальной собственности  в условиях развития современного гражданского законодательства',
            'places' => '15',
            'goal' => 'Повышение уровня профессиональной грамотности в  сфере осуществления права государственной и муниципальной собственности  в условиях современного гражданского законодательства',
            'description' => 'Проводимая реформа гражданского законодательства позволила выявить целый ряд проблем, как теоретического, так и  правоприменительного характера, непосредственно связанных с институтом публичной собственности. Наметившаяся трансформация вещных правоотношений является, в том числе  результатом развития и модернизации  экономических отношений с участием государства и муниципальных образований. Вступившие в силу изменения Гражданского Кодекса Российской Федерации   заметно актуализировали вопросы, связанные с осуществлением права публичной собственности: иначе сформулированы правила в отношении неделимых и сложных вещей, в гражданский оборот введен новый объект в виде единого недвижимого комплекса, который, обладая признаками непотребляемости и неделимости способен увеличить доходную часть государственных и муниципальных бюджетов. Появление новых механизмов призвано обеспечить провозглашенную законодателем самостоятельность муниципальных образований, и как следствие, эффективное осуществление права муниципальной собственности. Вместе с тем, изменение структурных элементов возникающих при этом вещных правоотношений, вызывает потребность в дальнейшем их исследовании с целью разработки теоретических предложений, направленных на совершенствование норм гражданского законодательства и правоприменительной практики. 
Являясь гражданско-правовым институтом, публичная собственность регулируется нормами различной отраслевой принадлежности, в совокупности составляющими комплексный законодательный институт. Особенность правовой регламентации неизбежно влечет за собой  возникновение коллизий, устранение которых требует теоретического осмысления и, как результата – научно обоснованных рекомендаций по совершенствованию действующего законодательства. При всей важности прочих отраслевых научных изысканий наиболее плодотворный результат исследования может быть получен путем изучения данных отношений через призму гражданского права в виду содержательного их наполнения и правовой природы.
Более того, ВУЗ, в котором обучаются студенты по своей организационно-правовой форме является учреждением, а это именно тот субъект имущественных отношений, который наделяется публичной собственностью. 
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: Знать инструменты поиска информации. 
Умения: Уметь использовать инструменты поиска информации, выделить из массива информации ключевые моменты.
Навыки: Владеть навыками анализа информации с целью выделения требуемого знания, навыками на основе полученной первичной информации сформировать комплексное понимание предмета изучения, навыками  выполнения системного анализа полученной информации, выделения  «дефицитов» знаний  и формулирования  запроса   на поиск новой информации
',
            'product_result' => 'Учебное пособие, научная статья',
            'state_id' => '1',
            'supervisors' => 'Чердакова Лариса Анатольевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оценка эффективности инвестиционного проекта для развития туристического бизнеса  в регионе(на примере строительства базы отдыха с агронаправленностью)',
            'places' => '15',
            'goal' => 'Оценки эффективности инвестиционного проекта  в целях привлечения банковского кредитования для развития туристического бизнеса региона (на примере строительства базы отдыха  с агронаправленностью)',
            'description' => 'В условиях экономической нестабильности и недостаточности собственных финансовых ресурсов у многих экономических субъектов возникает необходимость увеличения объёмов банковского кредитования для развития туризма в Иркутской области. Со стороны бизнеса и кредитных организаций для развития   туристического бизнеса и привлечения кредитных ресурсов необходимо выявление особенностей расчёта эффективности инвестиций в туристическом бизнесе',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: понятие и основные этапы процесса инвестиционного банковского кредитования
Умения: выявлять инвестиционные риски с учетом особенностей развития региона
Навыки:  навыками анализа экономической эффективности инвестиционного проекта с учетом региональных рисков
',
            'product_result' => 'Продуктовым результатом проекта должен стать документ, содержащий  информационный обзор рынка туристических услуг и  оценки эффективности инвестиций с целью привлечения банковского кредитования для  развития туристической отрасли региона',
            'state_id' => '1',
            'supervisors' => 'Репинский Олег Дмитриевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Сравнительный анализ деятельности страховых компаний на рынке страховых услуг',
            'places' => '15',
            'goal' => 'Проведение анализа рынка страховых услуг с использованием комплекса показателей деятельности страховых компаний для определения результативности их деятельности.',
            'description' => 'В ходе осуществления проектной деятельности обучающиеся проводят мониторинг рынка страховых услуг; отбирают несколько страховых компаний для проведения сравнительного анализа; изучают и практически применяют систему показателей для выявления слабых и сильных сторон участников выборки; разрабатывают мероприятия для преодоления проблем и определения направлений дальнейшего развития страховых компаний.',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: особенности страхового рынка; основные направления анализа страховой деятельности
Уметь: проводить мониторинг рынка страховых услуг; определять и рассчитывать основные показатели деятельности страховщиков  
Владеть: приемами сравнительного; анализа основами принятия эффективных решений, направленных на развитие страхового бизнеса
',
            'product_result' => 'Продуктовым результатом проекта должен стать документ, содержащий характеристику страхового рынка региона; комплекс количественных и качественных показателей, используемых для сравнительного анализа нескольких страховых компаний, работающих на территории Иркутской области; мероприятия по преодолению возникших проблем и совершенствованию деятельности страховщиков на рынке страховых услуг. Документ может быть использован страховыми компаниями и их внутренними структурными подразделениями, предпринимательскими структурами и т.п.
В документе должны быть подробно изложены характеристики рынка страховых услуг в регионе; определены главные игроки; определены и представлены направления,  также система показателей, используемых при анализе; проведены расчеты на примере деятельности нескольких страховых компаний.
',
            'state_id' => '1',
            'supervisors' => 'Юшина Юлия Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оценка эффективности инвестиционного проекта для развития туристического бизнеса  в регионе (на примере строительства горнолыжного курорта)',
            'places' => '15',
            'goal' => 'Оценки эффективности инвестиционного проекта  в целях привлечения банковского кредитования для развития туристического бизнеса региона (на примере строительства горнолыжного курорта)',
            'description' => 'В условиях экономической нестабильности и недостаточности собственных финансовых ресурсов у многих экономических субъектов возникает необходимость увеличения объёмов банковского кредитования для развития туризма в Иркутской области. Со стороны бизнеса и кредитных организаций для развития   туристического бизнеса и привлечения кредитных ресурсов необходимо выявление особенностей расчёта эффективности инвестиций в туристическом бизнесе',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: понятие и основные этапы процесса инвестиционного банковского кредитования
Умения: выявлять инвестиционные риски с учетом особенностей развития региона
Навыки:  навыками анализа экономической эффективности инвестиционного проекта с учетом региональных рисков
',
            'product_result' => 'Продуктовым результатом проекта должен стать документ, содержащий  информационный обзор рынка туристических услуг и  оценки эффективности инвестиций с целью привлечения банковского кредитования для  развития туристической отрасли региона',
            'state_id' => '1',
            'supervisors' => 'Репинский Олег Дмитриевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка продуктовой линейки для страховой компании',
            'places' => '15',
            'goal' => 'Проведение модернизации продуктового ряда страховых услуг для повышения конкурентоспособности и эффективности деятельности страховой компании',
            'description' => 'В ходе осуществления проектной деятельности обучающиеся проводят мониторинг и сегментацию рынка страховых услуг РФ и региона; изучают ассортиментные предложения страховых компаний; определяют достоинства и недостатки действующей системы маркетинга конкретной страховой компании; проводят модернизацию продуктового ряда и формируют ассортиментное предложение с целью повышения результирующих показателей деятельности страховщика',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: теоретические основы маркетинга; основные виды и характеристики страховых продуктов; основные условия страхового договора; показатели деятельности страховой компании и страховых операций;  
Уметь: проводить мониторинг страхового рынка и его составляющих; проводить анализ эффективности деятельности страховых компаний и страховых операций (по видам страхования); 
Владеть: приемами маркетинговых исследований; навыками составления страховых договоров и разработки практических рекомендаций для принятия эффективных решений на уровне страховой компании
',
            'product_result' => 'Продуктовым результатом проекта должен стать документ, содержащий анализ рынка страховых продуктов и ассортиментных предложений страховщиков, а также  конкретные предложения по модернизации продуктового ряда страховой компании. Документ может быть использован страховыми компаниями и другими экономическими субъектами региона (банками, заемщиками, сопряженными предпринимательскими структурами).
В документе должна быть подробно изложена формализованная процедура реализации модернизированных страховых продуктов в виде базовых существенных условий (потенциальных клиентов, объектов страхования, страховых случаев, страховых сумм, тарифных условий и т.д.)
',
            'state_id' => '1',
            'supervisors' => 'Юшина Юлия Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оценка делового климата Китайской Народной Республики',
            'places' => '15',
            'goal' => 'Создание информационного контента о деловом климате КНР, с целью разработки рекомендаций для экспортеров по доступу на рынок Китая. ',
            'description' => 'Оценка возможностей и перспектив внешнеэкономических связей России с Китайской Народной Республикой во многом зависит от наличия и анализа информации об особенностях ведения бизнеса в стране, её рынков, товаров, услуг, обычаев, законодательства. Для эффективности внешнеэкономической деятельности, необходима характеристика делового климата Китая. Проблема состоит в том, что информация для анализа делового климата Китая находится в разных источниках и постоянно меняется в соответствии с современными условиями, требует знаний китайского языка для доступа к первичной информации.
Данный проект направлен на создание информационного контента, включающего: обзор нормативно-правовой базы в области государственного регулирования внешнеэкономической и инвестиционной деятельности в КНР; информации о защите прав экспортеров;  рекомендации по доступу на рынок Китая; о возможностях проверки деловой репутации китайских компаний; специфические особенности ведения бизнеса в Китае, включая культурные аспекты и деловые обычаи. Анализ данной информации позволит оценить деловой климат Китайской Народной Республики, с целью принятия решений о возможностях и перспективах внешнеэкономической деятельности для российских контрагентов.
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: основы внешнеэкономической деятельности, нормативные документы её регламентирующие и формы расчетов по международным сделкам;
Умения: использовать нормативно-правовые акты для составления внешнеэкономических контрактов;
Навыки: подбора в интересах клиентов условий договоров по внешнеэкономическим контрактам и обоснования форм расчетов по международным сделкам.
',
            'product_result' => 'Публикация статей о деловом климате Китайской Народной Республики.',
            'state_id' => '1',
            'supervisors' => 'Гафарова Елена Владиславовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Деятельность банков и их структурных подразделений, действующих на территории Иркутской области, по привлечению вкладов населения в условиях стабилизации российской экономики',
            'places' => '15',
            'goal' => 'Проанализировать стратегию работы кредитных организаций, действующих на территории Иркутской области, по привлечению вкладов населения в условиях санкций со стороны стран Запада после начала специальной военной операции российских вооруженных сил на территории Украины',
            'description' => 'При реализации студентами третьего курса, группы ФКБ-19-1 Института экономики, управления и права проекта «Модернизация продуктового ряда вкладов граждан, привлекаемых коммерческим банком (структурным подразделением) на территории Иркутской области» были собраны и проанализированы  данные по условиям привлечения вкладов на селения по состоянию на 1 октября 2021 года, на 1 января 2022 года и 1 апреля 2022 года. За указанный период процентные ставки в банках на территории Иркутской области выросли с 6-7 % до 20 % годовых. Столь резкий рост процентных ставок привел к значительному увеличению расходов коммерческих банков. В новом проекте нами предлагается проанализировать работу коммерческих банков по привлечению вкладов населения по мере нормализации ситуации в российской экономике',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Филиал «Иркутский» АО КБ «Солидарность». Управляющий филиалом Сергей Александрович Кошкин',
            'study_result' => 'Знания: основные виды и характеристики банковских продуктов и услуг.
Умения: рассчитывать основные показатели, характеризующие эффективность депозитных и кредитных операций, проводить мониторинг банковских продуктов и услуг.
Навыки: владеть приемами маркетинговых исследований и принятия эффективных решений, направленных на развитие коммерческого банка, овладеть навыками установления конструктивных отношений со специалистами и руководителями курируемых членами проектной группы банков или их структурных подразделений.
',
            'product_result' => 'Продуктовым результатом проекта должны стать три отчета о деятельности коммерческих банков и их структурных подразделений по привлечению вкладов населения на три отчетные даты: 1 октября 2022 года, 1 января 2023 года и 1 апреля 2023 года. Два отчета по состоянию на1 октября 2022 года, 1 января 2023 года будут носить промежуточный характер, а в отчете по состоянию на 1 апреля 2023 года будут подведены итоги работы проектной группы в течение года. Предполагается, что участники проекта в ходе его реализации будут участвовать в научно-практических конференциях, писать статьи в научные журналы. ',
            'state_id' => '1',
            'supervisors' => 'Шаламов Георгий Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Анализ реализации внешнеэкономической деятельности России в условиях санкций и перспективы её развития.',
            'places' => '15',
            'goal' => 'Исследовать состояние и перспективы развития внешнеэкономической деятельности Российской Федерации в период после введения экономических санкций ЕС и США.',
            'description' => 'Одним из самых жестких видов контрмер, применяемых во внешнеэкономической деятельности, являются экономические санкции. Они являются огромной угрозой безопасности станы, поскольку при их введении, сокращаются объемы экспортных и импортных поставок, рушатся логистические цепочки, закрываются производства, сужаются транспортные коридоры для международных грузов. Всё это приводит к снижению притока валютной выручки в страну и сокращению её экономического потенциала. Ограничения во внешней торговле приводят к поиску альтернативных решений во внешнеэкономической деятельности, так как внутренний межсубъектный обмен товарами и услугами не способен обеспечить оптимальных экономических показателей. Принципиально важной становится адекватная оценка разрывов спроса, производства и потенциальные способности российского бизнеса реагировать на изменение конъюнктуры отечественного и внешнего рынков. Различия в технологиях производства, структуре промежуточного и конечного потребления ресурсов, объемах создания добавленной стоимости, разветвленности и длине производственных цепочек становятся значимыми факторами как скорости выхода конкретных видов экономической деятельности на внешние рынки, так и формирования целевой поддержки конкретных видов внешнеэкономической деятельности со стороны государства. Данный проект направлен на формирование комплексного понимания современных реалий, происходящих во внешнеэкономической деятельности России в условиях санкций.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: организацию и технику внешнеэкономических операций, показатели оценки экономической деятельности контрагентов, их продукции на внешнем рынке.
Умения: анализировать экономическую деятельность контрагентов, учитывая базы данных внешних рынков
Навыки: владеть методами оценки состояния товарно-сырьевых и финансовых рынков.
',
            'product_result' => 'Публикация статей о перспективах внешнеэкономической деятельности России в условиях санкций.',
            'state_id' => '1',
            'supervisors' => 'Гафарова Елена Владиславовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оценка бюджетной самостоятельности муниципальных образований Иркутской области',
            'places' => '15',
            'goal' => 'Разработка предложений по повышению бюджетной самостоятельности муниципальных образований Иркутской области',
            'description' => 'На современном этапе значительная часть муниципальных бюджетов, образующих финансовую основу местного самоуправления не располагают достаточным для полноценного финансирования предусмотренных расходов объемом финансовых ресурсов. Основными причинами являются неравномерное распределение источников бюджетных поступлений по уровням власти, диспропорции межбюджетных отношений в стране. В то же время местные бюджеты являются одним из главных каналов доведения конечных результатов производства до населения. Через них осуществляется распределение общественных фондов между отдельными группами населения, финансирование непроизводственной и производственной сфер. Все эти мероприятия можно реализовывать лишь при  достаточном объеме финансовых средств.',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания:
тенденции и проблемы формирования доходов и расходов муниципальных бюджетов
Умения:
рассчитывать основные экономические показатели,   характеризующие исполнение бюджетов по доходам и расходам                              
Навыки: 
владеть приемами  анализа  основных экономических показателей бюджетов с точки зрения достижения целевых показателей
',
            'product_result' => 'Информационный отчет, презентация',
            'state_id' => '1',
            'supervisors' => 'Антипин Дмитрий Алексеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Бизнес-модель открытых инноваций',
            'places' => '15',
            'goal' => 'Создание бизнес-модели открытых инноваций в ТЭК',
            'description' => 'Анализ состояния проблемы развития инновационной деятельности ТЭК. Формирование организационного плана создания проекта. Разработка финансово-экономической модели проекта',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: инструментов поиска информации, норм и способов социального взаимодействия, основных принципов планирования и организации своей деятельности
Умения: выделить из массива информации ключевые моменты, спланировать и реализовать проект с учетом ресурсных ограничений и требований к результату проекта, решать задачи в соответствии с ролевой позицией, формулировать личные цели
Навыки: на основе полученной первичной информации сформировать комплексное понимание предмета изучения, определить задачи, четко формулировать запрос на поиск новых знаний 
',
            'product_result' => 'Анализ программ инновационного развития с определением приоритетных направлений развития крупнейших компаний  топливно-энергетического комплекса',
            'state_id' => '1',
            'supervisors' => 'Перфильева Юлия Владимировна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Формирование и развитие системы оценки эффективности управления местными бюджетами',
            'places' => '15',
            'goal' => 'Развитие теоретических и методических основ оценки эффективности управления бюджетами муниципальных образований для разработки комплексной системы оценки, имеющей существенное значение для развития механизма управления местными бюджетами',
            'description' => 'Проект нацелен на разработку системного подхода к формированию оценки эффективности управления местными бюджетами, основанного на уточненных теоретических положениях, учитывающих особенности управления бюджетами муниципальных образований и методического инструментария оценки эффективности управления местными бюджетами',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: 
Знать основные ресурсные ограничения проекта
Знать основные требования к представлению результатов проекта
Умения: 
Уметь выполнять критический анализ и сформулировать перечень недостающих знаний, необходимых для достижения целей
Уметь использовать различные инструменты поиска и анализа информации
Уметь критически оценивать полученные результаты
Уметь определять внутренний и внешний круг стейкхолдеров для проектной команды
Уметь определять круг задач и решать их в соответствии со своей ролевой позицией
Уметь подготовить результаты
Уметь пользоваться основными инструментами организации рефлексии
Уметь спланировать и реализовать проект с учетом ресурсных ограничений и требований к результату проекта
Навыки: 
Владеть навыками на основе полученной первичной информации сформировать комплексное понимание предмета изучения
Владеть навыками презентации результатов проекта
Владеть навыками определения задач и соотнесения их с ролевыми позициями
Владеть навыками четкого формулирования запроса на поиск новых знаний.
Владеть навыками выполнения системного анализа полученной информации, выделения «дефицитов» знаний и формулирования запроса на поиск новой информации
Владеть навыками самоанализа и может оценить личный вклад в достигнутых результатах
Владеть навыками социального взаимодействия как с членами команды, так и с внешними стейкхолдерами
',
            'product_result' => 'Разработка методики оценки эффективности управления бюджетами муниципальных образований, системы показателей оценки эффективности, предложений по совершенствованию системы оценки эффективности управления местными бюджетами, направленных на повышение эффективности управления местными бюджетами',
            'state_id' => '1',
            'supervisors' => 'Бацюн Наталья Владимировна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Государственные программы как инструмент стратегического управления региональным развитием',
            'places' => '15',
            'goal' => 'Диагностика причин низкой результативности программно-целевого стратегического управления региональным развитием и разработка соответствующих практических рекомендаций',
            'description' => 'Проект нацелен на анализ основных подходов государственного программно-целевого стратегического управления региональным развитием и оценку  качественного содержания и роли действующих и принимаемых расходных обязательств в системе межбюджетных отношений «центр – регионы». ',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: 
Знать основные ресурсные ограничения проекта
Знать основные требования к представлению результатов проекта
Умения: 
Уметь выполнять критический анализ и сформулировать перечень недостающих знаний, необходимых для достижения целей
Уметь использовать различные инструменты поиска и анализа информации
Уметь критически оценивать полученные результаты
Уметь определять внутренний и внешний круг стейкхолдеров для проектной команды
Уметь определять круг задач и решать их в соответствии со своей ролевой позицией
Уметь подготовить результаты
Уметь пользоваться основными инструментами организации рефлексии
Уметь спланировать и реализовать проект с учетом ресурсных ограничений и требований к результату проекта
Навыки: 
Владеть навыками на основе полученной первичной информации сформировать комплексное понимание предмета изучения
Владеть навыками презентации результатов проекта
Владеть навыками определения задач и соотнесения их с ролевыми позициями
Владеть навыками четкого формулирования запроса на поиск новых знаний.
Владеть навыками выполнения системного анализа полученной информации, выделения «дефицитов» знаний и формулирования запроса на поиск новой информации
Владеть навыками самоанализа и может оценить личный вклад в достигнутых результатах
Владеть навыками социального взаимодействия как с членами команды, так и с внешними стейкхолдерами
',
            'product_result' => 'Разработка методического подход к оценке структурной сбалансированности государственных программ регионального развития. Указанное исследование является определенным вкладом в развитие теории государственного управления экономикой региона',
            'state_id' => '1',
            'supervisors' => 'Богатырева Марина Валерьевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Влияние энергетического перехода на эффективность работы предприятий ТЭК',
            'places' => '15',
            'goal' => 'Разработка и практическое освоение методики оценки эффективности работы предприятий ТЭК в условиях энергетического перехода',
            'description' => 'Проект включает в себя теоретические и практические занятия, посвящённые энергетическому переходу и его влиянию на эффективность предприятий в сфере традиционного ТЭК',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: 
Знать основные ресурсные ограничения проекта
Знать основные требования к представлению результатов проекта
Умения: 
Уметь выполнять критический анализ и сформулировать перечень недостающих знаний, необходимых для достижения целей
Уметь использовать различные инструменты поиска и анализа информации
Уметь критически оценивать полученные результаты
Уметь определять внутренний и внешний круг стейкхолдеров для проектной команды
Уметь определять круг задач и решать их в соответствии со своей ролевой позицией
Уметь подготовить результаты
Уметь пользоваться основными инструментами организации рефлексии
Уметь спланировать и реализовать проект с учетом ресурсных ограничений и требований к результату проекта
Навыки: 
Владеть навыками на основе полученной первичной информации сформировать комплексное понимание предмета изучения
Владеть навыками презентации результатов проекта
Владеть навыками определения задач и соотнесения их с ролевыми позициями
Владеть навыками четкого формулирования запроса на поиск новых знаний.
Владеть навыками выполнения системного анализа полученной информации, выделения «дефицитов» знаний и формулирования запроса на поиск новой информации
Владеть навыками самоанализа и может оценить личный вклад в достигнутых результатах
Владеть навыками социального взаимодействия как с членами команды, так и с внешними стейкхолдерами
',
            'product_result' => 'Методика определения количественного влияния энергетического перехода на эффективность работы предприятий ТЭК',
            'state_id' => '1',
            'supervisors' => 'Колмаков Александр Евгеньевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Формирование системы стратегического партнёрства России и Китая.',
            'places' => '15',
            'goal' => 'Проведение исследования по выявлению основных целей и направлений  формирования стратегического партнерства Российской Федерации и Китайской Народной республики в различных сферах',
            'description' => 'Экономическое положение любой страну мира во многом определяется объемом и структурой ее внешнеэкономических связей. Развитие независимой России объективно требует вхождения ее в мировое хозяйство на принципах равноправия и взаимной выгоды в сотрудничестве. Ее современное положение в современном экономическом мировом пространстве требует немедленного улучшения ситуации. Одним из основных направлений решения этой проблемы является расширение и укрепление внешнеэкономических связей с другими странами. 
В качестве одного из ключевых партнеров для России является Китай, который в сложной современной экономической ситуации проявляет стремление к укреплению сотрудничества. К факторам, определяющим заинтересованность Китая в России, является укрепление его позиций в мировой экономике. Формирование стратегического партнёрства с Россией позволит сформировать баланс сил для выстраивания отношений с США и другими ведущими мировыми державами. Кроме того, Россия располагает значительными природными ресурсами. Это естественное преимущество, которое через механизмы эффективной финансовой и инвестиционной политики может быть использовано для модернизации российской экономики и укрепления   экономических отношений с Китаем.
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: основных методов сбора и обработки информации с использованием современных информационных технологий.
Умения: выполнять поиск, критический анализ и синтез информации.
Навыки: выполнение системного анализа полученной информации, определение задач и соотнесение их с ролевыми позициями.
',
            'product_result' => 'Научная публикация, аналитический обзор.',
            'state_id' => '1',
            'supervisors' => 'Литвинцев Алексей Вячеславович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Анализ политики импортозамещения в России в современных условиях.',
            'places' => '15',
            'goal' => 'Проведение исследования по выявлению возможности создания импортозамещающих производств в различных отраслях экономики России с целью снижения технологической и товарной зависимости от импорта',
            'description' => '',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: основных методов сбора и обработки информации с использованием современных информационных технологий.
Умения: выполнять поиск, критический анализ и синтез информации.
Навыки: выполнение системного анализа полученной информации, определение задач и соотнесение их с ролевыми позициями
',
            'product_result' => 'Научная публикация, аналитический обзор.',
            'state_id' => '1',
            'supervisors' => 'Литвинцев Алексей Вячеславович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Система автоматизированного модуля для САПР предназначенного для построения технологических схем работы драглайнов',
            'places' => '15',
            'goal' => 'Создание программного модуля для САПР предназначенного для построения технологической схемы работы экскаваторов драглайнов с учетом конкретных горно-геологических условий.',
            'description' => 'При проектировании и разработке месторождений открытым способом применяется бестранспортная технология ведения вскрышных и добычных работ с использование экскаваторов драглайнов. Особенностью применения бестранспортной технологии является построение технологических схем работы экскаваторов драглайнов в конкретных горно-геологических условиях. В настоящее время построения технологических схем осуществляется в основном с применением программного продукта AutoCAD, при этом пользователь производит построение в ручном режиме, затрачивая на это существенное количество рабочего времени.
Таким образом, для ускорения процесса проектирования и разработки технологических схем при бестранспортной технологии рациональнее перенести большую часть операций при проектировании и моделировании технологической схемы в среду автоматизированной системы, с возможностью использования в учебном процессе и на производстве.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: теоретические основы при планировании проектов с учетом ограничений ресурсов.
Умения: реализовывать проект с учётом ограничений ресурсов и представить полученные результаты проекта.
Навыки: Владеть методами и способами планирования проектов с учетом ограничений ресурсов, а также вариантами представления результатов проекта.
',
            'product_result' => 'Программный модуль для САПР предназначенный для построения технологической схемы работы экскаваторов драглайнов с учетом конкретных горно-геологических условий.',
            'state_id' => '1',
            'supervisors' => 'Нечаев Константин Борисович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Решение проектных задач недропользования',
            'places' => '15',
            'goal' => 'Умение решать реальные проблемы горного предприятия в сфере недропользования',
            'description' => 'Решение реальных проблем горного предприятия с учетом специфики организации работ при разработке твердых месторождений полезных ископаемых.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'CASE-IN',
            'study_result' => 'Знает: особенности хозяйственной деятельности предприятий горного производства и сущность их производства, основные  модели доступа к базам данных в сети Internet, технологию автоматизации проектных работ,  административной  и  управленческой деятельности недропользования.
Умеет: применять основные информационные технологии для проектирования, управления, связи,  поиска информации для решения прикладных задач. 
Владеет:  основными приемами  применения стандартных  программных  комплексов,  составляющих  основу  информационных технологий, в том числе самостоятельно создавать техническую документацию по решению проектных задач, с учетом всех нормативных и законодательных документов
',
            'product_result' => 'Развитие компетенций проектной деятельности в недропользовании с возможностью обосновывать и принимать самостоятельное решение в области добычи твердых полезных ископаемых в недропользовании',
            'state_id' => '1',
            'supervisors' => 'Васильев Денис Сергеевич, Гущенко Виталий Викторович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка бизнес-планов для недропользования',
            'places' => '15',
            'goal' => 'Умение определять возможности малых предприятий сферы недропользования в существующих региональных социально-экономических условиях.',
            'description' => 'Создание бизнес-плана с учетом специфики организации работ при разработке месторождений твердых полезных ископаемых для получения внешнего финансирования: кредит в банке, государственные гранты и субсидии, инвесторы',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'знает формы предпринимательского дела в сфере недропользования и основы маркетинга и ценообразования продукции горного производства;
умеет использовать информацию по правовым вопросам недропользования;
имеет представление о возможности реализации прав гражданина РФ в формировании экономического потенциала государства, а также методику оценки эффективности работы малого предприятия.
',
            'product_result' => 'Возможность обосновать и получить внешнее финансирование (кредит в банке, государственные гранты и субсидии, инвесторы) недропользователю или помочь принять решение об инвестировании (покупке лицензий) в недропользование',
            'state_id' => '1',
            'supervisors' => 'Рославцева Юлия Геннадьевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка типовых технологических схем горных работ',
            'places' => '15',
            'goal' => 'Умение разрабатывать технологические схемы горных работ для различных горно-геологических условиях.',
            'description' => 'Создание типовых технологических схем ведения горных работ, позволяющих повысить эффективность использования горной и транспортной техники на открытых горных работах и оптимизации режимов ее работы в период эксплуатации.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'знает основные типы, характеристики и условия применения горного оборудования на разных видах работ;
умеет устанавливать нормы выработки выемочного, транспортирующего и отвального оборудования; разрабатывать технологические схемы работы горного оборудования на основе требований правил безопасности и технической эксплуатации;
владеет принципами обоснования применения горного оборудования для вскрышных, добычных работ и переработки полезного ископаемого.
',
            'product_result' => 'Пояснительная записка с разработанными технологическими схемами для различных горногеологических условий , позволяющая  повысить эффективность использования горной и транспортной техники и оптимизировать режимы ее работы в период эксплуатации.',
            'state_id' => '1',
            'supervisors' => 'Рославцева Юлия Геннадьевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Исследования Глазковского некрополя различными методами съемки и создание трехмерной модели',
            'places' => '15',
            'goal' => 'На основе использования различных методов дистанционного зондирования, геофизики и наземной геодезической съемки составить трехмерную модель Глазковского некрополя.',
            'description' => 'Проект будет реализован в несколько этапов: съемка поверхностей некрополя, анализ полученных результатов, геофизическая съемка с использованием электроразведки, создание трехмерной модели.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать.
Методы наземной и дистанционной геодезической съемки.
Уметь. 
Анализировать полученные данные различных типов съемок местности
Владеть. 
Способами обработки полевых измерений
Знать.
Методы геофизической съемки
Уметь.
Проводить геофизическую съемку (электроразведку)
Владеть.
Методами интерпретации данных геофизической съемки и создания трехмерных моделей объекта
',
            'product_result' => '3D модель Глазковского некрополя',
            'state_id' => '1',
            'supervisors' => 'Рупосов В.Л.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Построение алгоритмов определения объемов горных работ с применением методов цифрового моделирования',
            'places' => '15',
            'goal' => 'Разработка математического аппарата для моделирования подсчета запасов и геометризации недр, составление алгоритмов решения данных задач.',
            'description' => 'Подсчет запасов может содержать высокую ошибку, связанную с интерпретацией данных, для снижения разброса нужно проводить моделирование, которое позволит проводить сложные расчеты в цифровом виде.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать.
Методы подсчета запасов полезны ископаемых.
Уметь. 
Анализировать геометрические составляющие расположения рудных залежей
Владеть. 
Алгоритмами анализа горно-геологических условий
Знать.
Методы определения геометрии залегания
Уметь.
Определить геометрические параметры рудных залежей
Владеть.
Математическим методами расчета геометрических параметров месторождений
',
            'product_result' => 'Программное обеспечение',
            'state_id' => '1',
            'supervisors' => 'Рупосов В.Л.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Картографо-геодезическое сопровождение проектирования объектов социальной инфраструктуры г. Иркутска',
            'places' => '15',
            'goal' => 'Подготовка топографо-геодезической и картографической основы для проектирования объектов социальной инфраструктуры г. Иркутска. Визуализация пространственных данных на завершающей стадии проектирования объекта.',
            'description' => 'При разработке проектов размещения объектов социальной инфраструктуры необходим сбор и анализ имеющихся картографических материалов, кадастровой и градостроительной информации на территорию планируемого строительства. Для этого проводится комплекс дорогостоящих инженерно-геодезических изысканий, средства на который, должны быть запланированы в бюджете города заранее. Таким образом, начало работы над проектом может отодвинуться на 2-3 года. Выполнение данных работ силами студенческой проектной команды при формировании земельных участков и проведении изысканий под строительство детской и взрослой поликлиник в Свердловском округе г. Иркутска значительно ускорит начало работ по проектированию и сэкономит средства городского бюджета.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ОГБУЗ «Иркутская городская больница № 5»',
            'study_result' => 'Знания: процедура формирования земельных участков под строительство; программные средства для обработки инженерно-геодезических данных
Умения: работа с градостроительной и кадастровой документацией; составление топографических планов и тематических карт-схем
Навыки: разработка схем вертикальной планировки и проектов организации рельефа застраиваемых территорий; подсчет объемов земляных работ.
',
            'product_result' => 'Картографическая основа (топографический план, план поверхности), на которой при проектировании будет фиксироваться геопространственная информация.',
            'state_id' => '1',
            'supervisors' => 'Клевцов Евгений Валерьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Картографо-аэрокосмическое обеспечение проектов по землеустройству городских территорий (на примере территорий г. Иркутска)',
            'places' => '15',
            'goal' => 'Разработка проекта землеустройства городской территории (микрорайона) по данным беспилотной аэросъемки, космического мониторинга и топографического картографирования. ',
            'description' => 'Методы аэрокосмического мониторинга и цифровой картографии применяются в земельно-кадастровых съемках. Аэрокосмические снимки позволяют определить границы территорий и произвести учет имущества. Благодаря сверхвысокому разрешению снимков можно произвести инвентаризацию небольших объектов: оборудования, инженерных сооружений и т.д. На основе полученных данных можно создать геоинформационную систему для управления земельно-кадастровыми  работами. Регулярный аэрокосмический мониторинг позволяет контролировать процесс освоения и обустройства территорий на всех этапах.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: методика и технология создания ГИС в решении земельно-кадастровых задач, 
Умения: методы обработки аэрокосмических снимков в среде ГИС-программ.
Навыки: работа в профессиональных ГИС-программах.
',
            'product_result' => 'Цифровые землеустроительные карты городских территорий.',
            'state_id' => '1',
            'supervisors' => 'Олзоев Борис Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Дистанционное картографирование снежного покрова в горных районах (на примере хребта Кодар)',
            'places' => '15',
            'goal' => 'Разработка и апробация алгоритмов автоматизированного дешифрирования снежного покрова на космических снимках различного пространственного разрешения',
            'description' => 'Снежный покров является важной частью климатической системы Земли, оказывая существенное влияние на её тепловой и водный баланс. Снег в горных районах средних и высоких широт имеет важное гидрологическое значение, определяя характеристики речного стока и их зависимость от метеорологических условий конкретного года. В наиболее снежные годы весенне-летнее таяние снежного покрова в горах может вызывать катастрофические паводки на предгорных и равнинных территориях, где, как правило, сосредоточены населенные пункты и важные объекты инфраструктуры. В аридных областях (например, в Средней Азии) снег в горах является важнейшим источником пресной воды для населения и развития орошаемого земледелия.  Поэтому ежегодный мониторинг снежного покрова в горах является актуальной задачей, стоящей перед многими заинтересованными организациями федерального и регионального уровня (Росгидромет, МЧС, Минприроды и др.).
В последнее время, с развитием спутниковых и компьютерных технологий задача мониторинга снежного покрова сводится к его автоматическому распознаванию (дешифрированию) на космических снимках и картированию. Для этого часто используются многоканальные спутниковые изображения с различным пространственным и временным разрешением (например, MODIS, Landsat TM, Landsat +ETM, Sentinel-2). Однако картографирование снежного покрова в горных районах с использованием многоканальных космических снимков требует разработки надежных алгоритмов его идентификации (дешифрирования), включая выявление ложных, но визуально и оптически схожих объектов (например, облачный покров, выходы определенных типов горных пород и др.),  которые могут приводить к ошибочному картированию. Кроме того, здесь необходимо учитывать влияние факторов существенно затрудняющих автоматическое картирование, но которые являются характерными для горных территорий (крутые склоны, затенённость, горные озера и др.).
Проект направлен на разработку оптимального алгоритма картографирования снежного покрова в горах с использованием многоканальных космических изображений и ГИС-технологий на примере хребта Кодар. Хребет Кодар является наиболее высоким хребтом, расположенным на северо-восточном фланге Байкальской рифтовой зоны.  С южной стороны Кодар граничит с суходольной Чарской впадиной, вдоль которой проходит железнодорожная трасса Байкало-Амурской магистрали (БАМ). В последние годы БАМ активно используется для грузоперевозок и модернизируется (например, строится второй путь). Для безопасной эксплуатации участка БАМ в пределах Чарской впадины необходимо уметь прогнозировать паводковые явления, вызванные резким таянием снега в горах Кодара. Таким образом,  картирование снежного покрова Кодарского хребта в рамках данного проекта является не только актуальной методической задачей, но и имеет большую практическую значимость для развития крупных инфраструктурных проектов Российской Федерации.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Федеральное государственное бюджетное учреждение науки Лимнологический институт Сибирского отделения Российской академии наук',
            'study_result' => 'Знания: Основные характеристики снежного покрова, характеристики многоканальных космических снимков, методы и технологии автоматического дешифрирования снежного покрова на многоканальных снимках;
Умения: Выполнение комплекса работ по анализу растров и автоматическому дешифрированию космических снимков;
Навыки: Дешифрирование снежного покрова, владение методами ГИС-технологий по созданию и оформлению карт снежного покрова.
',
            'product_result' => 'Методика автоматического мониторинга снежного покрова на космических изображениях. Карты многолетних изменений снежного покрова хребта Кодар.',
            'state_id' => '1',
            'supervisors' => 'Осипов Эдуард Юрьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка методов распознавания топографических образов на аэрофотоснимках сделанных с небольших высот с помощью БПЛА для создания цифровых карт',
            'places' => '15',
            'goal' => 'Разработка программного продукта для распознавания топографических образов на аэрофотоснимках сделанных с небольших высот с помощью БПЛА для создания цифровых карт',
            'description' => 'Аэрофотосъемка проводится, на данный момент, постоянно и является основным инструментом съемки местности с высокой детализацией. Обработка снимков является более трудоемкий процесс, чем сама съемка. Наибольшее внимание уделяется оцифровки зданий и сооружений. Данный проект направлен на автоматизацию процесса оцифровки жилых и нежилых объектов. В результате будут получатся объекты в цифровой векторной карты.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать.
Методы создания, обучения и верификации искусственных нейронных сетей.
Уметь. 
Создавать алгоритм обработки полученных результатов после работы искусственных нейронных сетей.
Владеть. 
Методами алгоритмизации процессов и методов программирования сложных программных кодов.
',
            'product_result' => 'Программное обеспечение для распознавания объектов.',
            'state_id' => '1',
            'supervisors' => 'Рупосов В.Л.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Ранняя диагностика возникновения критического дисбаланса вала электроагрегата для предотвращения
критического изгиба.
',
            'places' => '15',
            'goal' => 'Раннее оповещение машиниста экскаватора о предельном значении вибрации вала (якоря) электроагрегатов главных приводов (механизм тяги, подъёма, поворота), остановка экскаватора и предаварийное обслуживание оборудования в целях снижения затрат.',
            'description' => 'Входе работы необходимо разработать самописец для регистрации параметров электрической цепи электроагрегатов главных приводов. Самописец изготавливается на базе программируемого логического контроллера. Самописец совместим с картой памяти и регистрирует данные в текстовый файл. Перед отказом электроагрегата осциллограммы токов и напряжений должны принципиально менять форму. Для анализа формы сигнала разрабатывается алгоритм управления предупредительной звуковой сигнализацией.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Список кейсов акселерационной программы «Лаборатория энергетики 2022»
ООО "Компания "Востсибуголь". Тема №35.
',
            'study_result' => 'Знания: проблем эксплуатации горных машин с электрическим приводом. 
Умения: анализировать информацию полученную в ходе промышленного эксперимента.
Навыки: программирования логических контроллеров и изготовления на их базе измерительных устройств.
',
            'product_result' => 'Разработаны:
1. Расчёт экономической эффективности разработки и внедрения системы онлайн диагностики вибрации вала (якоря) и оповещения оператора.
2. Система работает с минимальной погрешностью.
3. Оборудование системы износостойкое,
ударопрочное, адаптировано к работе в жёсткой среде,
диапазон температуры от +40 до -50С, сильная
вибрация.
',
            'state_id' => '1',
            'supervisors' => 'Долгих Евгений Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Точное определение веса загруженного угля в полувагон железнодорожного состава экскаватором 
ЭКГ-5А, исключение недогруза/перегруза, увеличение грузооборота полувагонов ООО "Разрез
"Черемховуголь".
',
            'places' => '15',
            'goal' => 'Исключить недогруз/перегруз полувагонов при погрузке угля экскаватором ЭКГ-5А со штабелей участка горных работ No1 ООО "Разрез "Черемховуголь", сократить время на маневровые работы локомотивами связанных с дозированием угля.',
            'description' => 'Входе работы необходимо выполнить моделирование электромеханической системы привода подъема карьерного экскаватора. Получить характеристику зависимости тока якорной цепи от веса груза. Разработка экспериментального макета для оценки эффективности и достоверности устройства взвешивания. Разработать электронное устройство бортового взвешивания горной массы в ковше экскаватора ЭКГ-5А. Выполнить экспериментальную проверку разработанного устройства. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Список кейсов акселерационной программы «Лаборатория энергетики 2022»
ООО "Компания "Востсибуголь". Тема №34.
',
            'study_result' => 'Знания: проблем эксплуатации горных машин с электрическим приводом. 
Умения: анализировать информацию полученную в ходе промышленного эксперимента.
Навыки: программирования логических контроллеров и изготовления на их базе измерительных устройств.
',
            'product_result' => 'Разработаны:
1. Расчёт экономической эффективности разработки и внедрения системы бортового взвешивания горной массы в ковше экскаватора ЭКГ-5А.
2. Система работает с погрешностью не более (+/-100кг).
3. Оборудование системы износостойкое, ударопрочное, адаптировано к работе в жёсткой среде, диапазон температуры от +40 до -50С, сильная вибрация.
',
            'state_id' => '1',
            'supervisors' => 'Долгих Евгений Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка эффективных средств защиты поверхностей емкостей транспортного и перегрузочного оборудования от прилипания и примерзания горной массы',
            'places' => '15',
            'goal' => 'Примерзание пород вскрыши и угля к поверхностям транспортных сосудов (ковш экскаватора, кузов автосамосвала, ж.д. полувагон) является серьёзной проблемой для большинства горнодобывающих предприятий. Целью проекта является проведение анализа существующей ситуации: период действия проблемы, характеристики грузов и поверхностей. Предложить практические способы, позволяющие исключить примерзание вскрышных пород и угля к поверхностям транспортных сосудов.',
            'description' => 'В зимний период года происходит примерзание вскрышных пород к ковшам экскаваторов и кузовам автосамосвалов, что снижает производительность оборудования и приводит к простоям высокопроизводительного оборудования. Также, в указанный период происходит примерзание готовой продукции (угля) к стенкам и днищу ж.д. полувагонов. Данный фактор приводит к необходимости привлечения дополнительных ресурсов на очистку ж.д. полувагонов, увеличивает время оборота ж.д. полувагонов.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО "Компания "Востсибуголь "',
            'study_result' => 'Знания: формирование у будущих электромехаников теоретических знаний по процедурным и организационным аспектам выполнения проектов в горной сфере деятельности.
Умения: способность осуществлять критический анализ проблемных ситуаций на основе системного подхода, вырабатывать стратегию действий; управлять проектом на всех этапах его жизненного цикла, вырабатывая командную стратегию для достижения поставленной цели.
Навыки: приобретение участниками проекта практических навыков по анализу и синтезу поиска информации; предлагать варианты альтернативных решений поставленной задачи и оценивать их достоинства и недостатки.
',
            'product_result' => 'Предложить не менее трех способов/методов решения проблемы. Провести технико-экономическое сравнение предложенных вариантов.',
            'state_id' => '1',
            'supervisors' => 'Храмовских Виталий Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Организация ремонта техники в зимнее время непосредственно на горных работах.',
            'places' => '15',
            'goal' => 'Улучшение качества проводимых ремонтов. Улучшение культуры производства и условий труда. Обеспечить минимальны капитальные затраты. Разработать пошаговое выполнение операций по организации ремонтного места (возведение, использование, демонтаж, хранение). Произвести технико-экономическое сравнение на рынке предлагаемых укрытий и тепловых источников. Основные требования: Создать приемлемые условия для персонала при проведении ремонта. Обеспечить оптимальный температурный режим для возможности проведения сварочных, монтажных и демонтажных работ. Обеспечить мобильность и быстровозводимость ремонтных шатров. Обеспечить оптимальную вместимость шатров для техники.',
            'description' => 'В связи с отсутствием вместительных боксов на предприятии компании, в том числе и приближенных к горным работам, самоходную технику при проведении аварийных ремонтов приходится ремонтировать на пром. площадках под открытым небом.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО "Компания "Востсибуголь "',
            'study_result' => 'Знания: формирование у будущих электромехаников теоретических знаний по процедурным и организационным аспектам выполнения проектов в горной сфере деятельности.
Умения: способность осуществлять критический анализ проблемных ситуаций на основе системного подхода, вырабатывать стратегию действий; управлять проектом на всех этапах его жизненного цикла, вырабатывая командную стратегию для достижения поставленной цели.
Навыки: приобретение участниками проекта практических навыков по анализу и синтезу поиска информации; предлагать варианты альтернативных решений поставленной задачи и оценивать их достоинства и недостатки.
',
            'product_result' => 'Предложены, конкретные решения с учетом перечисленных целевых показателей.
Определена стоимость решения.
',
            'state_id' => '1',
            'supervisors' => 'Храмовских Виталий Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проекты Сибирской школы геонаук 
1 - Моделирование и интерпретация данных магнитных съемок
2 - Построение трехмерных геоэлектрических моделей на основе данных импульсной электроразведки',
            'places' => '15',
            'goal' => '1. Разработка элементов компьютерных интерактивных технологий интерпретации данных наземных, беспилотных и аэромагнитных съемок.
2. Выделение рудных структур по данным трехмерного моделирования нестационарных электромагнитных полей в комплексе с априорной геологической информацией.',
            'description' => '1. Использование детальных наземных, беспилотных и аэромагнитных съемок при поисках различных полезных ископаемых, решении задач геологического картирования и изучении археологических объектов приводит к получению больших массивов данных, характеризующих магнитные поля на участке съемки. По этим данным необходимо уметь выделять магнитные аномалии различного ранга, определять геометрические и магнитные параметры магнитных объектов, обусловливающих эти аномалии, и визуализировать результаты с использованием современных возможностей компьютерной 3D графики. Совокупность этих приемов определяет существо геологической интерпретации данных магнитных съемок, каждый этап которой требует совершенствования существующих приемов и элементов, их адаптации к геолого-геофизическим особенностям изучаемого объекта.
Интерпретация магнитных данных является высокотехнологичным процессом, основанным на использовании возможностей компьютерного моделирования, математического аппарата решения прямых (определение магнитных эффектов по заданным параметрам объектов) и обратных (определение параметров объектов по зарегистрированными над ними магнитными эффектами) задач магниторазведки.
Участие в проекте подразумевает: освоение современных программных продуктов для визуализации данных и результатов интерпретации магнитных съемок; формирование синтетических моделей и исследование на них возможностей тех или иных элементов решения обратных задач; освоение и разработка способов получения и учета априорной информации, позволяющей снизить неоднозначность решения обратной задач магниторазведки
2. Построение трехмерных геоэлектрических моделей по параметрам удельного электрического сопротивления и поляризуемости. 
Реализуется конечноэлементное 3D моделирование геоэлектромагнитных полей с учетом разномасштабных, контрастных и, при необходимости, криволинейных (рельеф дневной поверхности) структурных частей геоэлектрической модели и геометрическую 3D инверсию, которая в ходе решения трехмерной обратной задачи позволяет определять электрофизические параметры (проводимость, поляризуемость) структурных частей геоэлектрической модели и размеры этих структурных частей. Данные для расчетов берутся из реальных производственных проектов, выполняемых сотрудниками и студентами ИРНИТУ в рамках хоз. договорных работ. 
Участие в проекте подразумевает: освоение современного программного обеспечения для расчета трехмерной инверсии и построения геоэлектрических моделей; освоение способов учета априорной информации, позволяющей снизить неоднозначность решения обратной задачи электроразведки; получение квалификации обработчика и интерпретатора данных импульсной электроразведки современного уровня.

',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Сибирская школа Геонаук ',
            'study_result' => 'Знать основы теории и практики интерпретации данных магнитных съемок;
Уметь использовать программные продукты и методические приемы при решении задач моделирования и интерпретации данных магнитных съемок;
Владеть способами визуализации данных и результатов интерпретации, основами программирования и использования программных продуктов при интерпретации данных магниторазведки. 
Знания: теоретико-методологические основы импульсной электроразведки, основы теории и практики интерпретации данных импульсной электроразведки
Умения: использование современных программных продуктов для расчета трехмерной инверсии
Навыки: владение приемами обработки и анализа электроразведочных данных, приемами обработки и анализа геологической и геофизической информации.

',
            'product_result' => '1. Обоснование, разработка и реализация законченного фрагмента технологической цепочки интерпретации данных магнитной съемки
2. Построение трехмерных геоэлектрических моделей по реальным данных производственных проектов',
            'state_id' => '1',
            'supervisors' => 'Давыденко Александр Юрьевич, Шкиря Михаил Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Анализ палеогеографических условий осадконакопления с целью оценки возможности обнаружения вторичных коллекторов алмазов',
            'places' => '15',
            'goal' => 'Провести анализ палеогеографических условий осадконакопления с целью оценки возможности обнаружения вторичных коллекторов алмазов для заданной территории',
            'description' => 'По оценкам многих производственников (АЛРОСА, РОСГЕО) и исследователей, в частности научного руководителя Института геологии и минералогии им. В.С. Соболева СО РАН академика Н.П. Похиленко (Новосибирск) добыча алмазов в России к 2040 году сократится в разы. При этом разработка россыпных месторождений полностью прекратится к 2026 году. Оценка перспектив открытия крупных месторождений алмазов в коренном залегании на территории Иркутской области пока дает отрицательные результаты (ревизионные работы института Земной коры СО РАН. ИРКУТСК 2020-2021 гг.).
В то же время остается возможность нахождения алмазоносных россыпей за счет формирования переотложенных коллекторов, сложенных продуктами разрушения кимберлитовых тел в пределах южной и центральной частей Сибирской платформы. Традиционно россыпные месторождения считаются более легкими и рентабельными с точки зрения их эксплуатации.
Для оценки возможности обнаружения таких коллекторов необходимо создание базы данных по имеющимся стратиграфическим разрезам с последующим их анализом и построение палеографических карт на определенные отрезки геологического времени. 
Для реализации проекта предусматривается использование традиционных методик палеогеографического анализа. В то же время необходимо провести комплексирование, и использовать не только геологические, но и геохимические данные, которые на сегодняшний день эффективно позволяют проводить разбраковку минералов из группы спутников алмазов
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: Методики и основных приемов анализа палеографической обстановки
Умения: Составления базы данных для проведения палеотектонического анализа
Навыки: Составление и анализ палеографических схем
',
            'product_result' => 'Верифицированные экспериментальные данные анализа палеогеографической обстановки (с фиксацией в формате пояснительной записки и графических приложение - палеогеографических схем)',
            'state_id' => '1',
            'supervisors' => 'Иванова Раиса Николаевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Инженерная геофизика',
            'places' => '15',
            'goal' => 'Проведение инженерно-геофизических работ между корпусами Б и В',
            'description' => 'Получение геолого-геофизической информации по распределению физических свойств верхней части геологического разреза. Построение на ее основе цифровой модели изучаемого участка.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Распоряжение по ИРНИТУ №5 от 18.02.2022г',
            'study_result' => 'Знания: методов получения и обработки геофизических данных 
Умения: применения геофизических методов для изучения геологического разреза
Навыки: работы с геофизической аппаратурой и программными средствами обработки
',
            'product_result' => 'Цифровая геолого-геофизическая модель участка исследований',
            'state_id' => '1',
            'supervisors' => 'Мироманов Андрей Викторович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Обработка данных эколого- геохимических исследований в ГИС-приложениях',
            'places' => '15',
            'goal' => 'Создание цифровых карт, необходимых для информационного обеспечения и прогнозирования экологического состояния урбанизированной территории на основе данных  эколого-геохимических исследований.',
            'description' => 'Идеология использования геохимических методов исследования для выявления и картирования очагов и источников техногенного загрязнения окружающей среды возникла в середине 1970-х годов на основе опыта поисковой геохимии.
Для получения целостной картины состояния, функционирования, динамики и эволюции окружающей среды эти исследования должны носить системный характер.
Результатом этих исследований обычно является оценка совместимости или несовместимости природных условий и техногенных геохимических потоков, степени изменчивости и устойчивости природных систем к техногенезу. Следует отметить, что в техногенно измененных ландшафтах, особенно в промышленных и урбанизированных зонах, применение традиционных ландшафтно-геохимических подходов сталкивается со значительными методическими трудностями.
За последние десятилетия накоплены огромные массивы эколого-геохимических данных, характеризующих состояние окружающей среды. По разным причинам эти данные разобщены. Использование геоинформационных технологий для обработки эколого-геохимических данных позволяет создать единое информационное пространство. Интеграционный характер геоинформационных систем (ГИС) позволяет создать на их основе мощный инструмент для сбора, хранения, систематизации, анализа и представления эколого-геохимической информации
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать теоретико-методологические основы создания и использования цифровых геоизображений в региональных эколого-геохимических исследованиях;
Уметь использовать инструментарий ГИС- приложений для обработки полевых, картографических, дистанционных материалов и данных эколого - геохимических исследований и представления их в виде  цифровых тематических карт природных условии и геохимического загрязнения территорий;
Владеть приемами обработки и анализа геоэкологической и картографической информации, включая рекомендации по средствам и практическим способам создания цифровых оценочных эколого-геохимических  карт. 
',
            'product_result' => 'Создание с применением ГИС цифровых карт, необходимых для оценки экологического состояния урбанизированных территорий на основе данных эколого-геохимических исследований',
            'state_id' => '1',
            'supervisors' => 'Ланько Анна Викторовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проекты сибирской школы Геонаук. 
1. Разработка методики геоархеологических исследований и решение археологических задач с помощью методов разведочной геофизики.',
            'places' => '15',
            'goal' => '1. Разработать и апробировать методику решения археологических задач с помощью методов разведочной геофизики.
2. Апробирование методики измерения поляризационных свойств образцов горных пород необходимой для классификации аномалиеобразующих объектов изучаемой среды',
            'description' => '1. Археологические исследования являются основным способом изучения древней истории человечества, выявления памятников древней истории, составляющих историко-культурное наследие государства. Современная археология базируется на широком использовании естественно-научных методов. Одними из таких методов являются методы разведочной геофизики, которые позволяют не только намного быстрее и эффективнее выявлять археологические памятники, но и изучать их особенности и характеристики. Способность геофизических методов выявлять и локализовать археологические объекты без проведения раскопочных работ делают эти методы обязательным элементом комплексных археологических исследований.
Главной проблемой применения методов разведочной геофизики является их адаптация для изучения самой верхней части геологического разреза и поиск эффективного по информативности и быстродействию комплекса методов. Кроме того, геофизические исследования должны носить системный характер решения археологических задач в совокупности с геолого-геохимическими и петрофизическими исследованиями.
За последние десятилетия накоплен большой опыт применения геофизики археологических исследованиям, который свидетельствует о том, что не может существовать единого комплекса методов, а требуется его методическая адаптация для конкретных археологических памятников для определенных территорий. Планируемые в рамках данного проекта исследования направлены на поиск эффективного комплекса геофизических методов при изучении археологических памятников Прибайкалья.
2. При решении задачи интерпретации геоэлектрических моделей с целью локализации рудных объектов, представленных обычно вкрапленной сульфидизацией, необходимо провести классификацию рудопроявлений и получаемых в ходе измерений характеристик.
Качественная классификация руд строится на петрофизических исследованиях образцов горных пород, отобранных с изучаемой среды.
Лабораторные исследования поляризационных свойств образцов горных пород в решении задач для рудной геофизики могут существенно улучшить качество прогноза и формирования более точной ФГМ.
Однако сейчас несмотря на большой объём литературы, публикаций и общей истории методики исследования поляризационных свойств пород – в производственных работах почти не используется.
Использование модифицированной поляризационной модели Cole-Cole позволяет увеличить количество петрофизических параметров среды двух (УЭС и поляризуемость) до четырех: УЭС, стационарная поляризуемость, время релаксации и показатель степени. Полученные параметры необходимы для построения ФГМ, анализа трехмерных поляризующихся моделей и заложения скважин разведочного бурения.
Разработанная лабораторная установка и методика измерений поляризационных свойств образцов горных пород нуждается в апробации результатов.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Лаборатории археологии, полеоэкологии и систем жизнедеятельности ИрНИТУ, Геоархеологические исследования лаборатории геоархеологии ИГУ, Всероссийская научная конференция с международным участием имени В.В. Зайкова «Геоархеология и археологическая минералогия» г.Миасс 
Сибирская школа геонаук',
            'study_result' => 'Знать методы формирования комплекса геофизических исследований при решении нетрадиционных задач;
Уметь использовать геофизические методы при решении сложных, нетрадиционных задач;
Владеть приемами обработки и анализа геологической, петрофизической и геофизической информации. 
Знания в области петрофизических исследованиях, многомерном анализе данных.
Умения Построение ФГМ на основе полученных данных
Навыки работы в программах обработки сигналов, построения графиков и анализа исходных данных
',
            'product_result' => '1) Разработка эффективного комплекса геофизических методов при изучении археологических памятников Прибайкалья.
2) Выявление и изучение объектов историко-культурного наследия в Прибайкалье.
',
            'state_id' => '1',
            'supervisors' => 'Снопков Сергей Викторович, Бухалов Сергей Владимирович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Методика прогноза изменения уровня подземных вод при строительстве инженерных сооружений с перезаглубленными фундаментами',
            'places' => '15',
            'goal' => 'Разработка методики оперативного прогноза изменения гидродинамического режима грунтовых вод в результате барражного эффекта, создаваемого сооружениями с фундаментами глубокого заложения для принятия инженерных решений на начальных стадиях разработки архитектурно-строительных проектов.',
            'description' => 'На территориях с незначительной глубиной положения уровня грунтовых вод (УГВ) строительство зданий, имеющих фундаменты глубокого заложения, в результате «барражного» эффекта приводит к повышению риска подтопления смежных участков с находящимися на них сооружениями. Барражный эффект – это подъем УГВ перед преградой по потоку и его снижение за ней вследствие перекрытия фильтрационного потока подземных вод (ПВ). В зависимости от гидрогеологических характеристик перекрытого водоносного горизонта и габаритов инженерного сооружения величина подпора может изменяться от нескольких сантиметров до метров и может приводить к деформациям грунтового массива, подтоплению территории и расположенных рядом зданий и сооружений, а также другим неблагоприятным последствиям. 
Подтопление, связанное с барражным эффектом, широко развито на территориях современных городов, где застраиваются не только окраинные площади, но и историко-культурные зоны, от чего страдают фундаменты старых зданий и часто разрушаются исторические постройки.
Проект направлен на выделение основных причин изменения гидрогеологических условий городских территорий (на примере центральной части г.Иркутска), а также факторов, определяющих формирование техногенного гидродинамического режима.
Сложность геолого-гидрогеологических условий и разноплановость задачи предопределяет необходимость использования современных технологий хранения и обработки информации
',
            'difficulty' => '0',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать теоретические основы геофильтрации подземных вод
Уметь использовать основные приемы схематизации фильтрационных потоков
Владеть навыками  решения задач, работы с учебной, нормативной и справочной литературой
Знать задачи и специфику методов математической обработки гидрогеологических данных
Уметь использовать первичные методы цифровой обработки гидрогеологической информации
Владеть первичными методами цифровой обработки информации
',
            'product_result' => 'Методика прогноза подтопления, базирующаяся на использовании методов цифровой обработки исходных данных, позволит при минимальных затратах осуществлять оперативный прогноз подъема уровня подземных вод на участках сооружения фундаментов глубокого заложения',
            'state_id' => '1',
            'supervisors' => 'Аузина Л.И.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Моделирование гидродинамической системы пласт-скважина',
            'places' => '15',
            'goal' => 'Создание программного модуля IPR-VLP, используемого для оптимизации работы нефтяных скважин ',
            'description' => 'Для определения оптимальной рабочей точки нефтяных скважин сопоставляют работу нефтеносного коллектора с используемым скважинным оборудованием. Известно, что приток к скважине должен соответствовать отбору жидкости из скважины.  Учитывая, что скин-эффект величина переменная, она значительное влияет на смещение рабочей точки а, следовательно, требует регулирования рабочих уставок УЭЦН.  Таким образом, рабочая зона IPR-VLP требует постоянного контроля и регулирования.  Предлагается автоматизировать процесс оптимизации технологических параметров работы УЭЦН, в частности создать предпосылки для создания интеллектуальной СУ.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Иркутская нефтяная компания',
            'study_result' => 'Знания: основные гидродинамические процессы, сопровождающие приток жидкости к скважине; 
Умения: моделировать работу системы приток-отток 
Навыки: навыками применения Simulink
',
            'product_result' => 'Приложение (программный модуль) ',
            'state_id' => '1',
            'supervisors' => 'Лагерев Роман Юрьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оптимизация технологии строительства скважин в сложных горно-геологических условиях (3 курс)',
            'places' => '15',
            'goal' => 'Целью проекта является повышение технико-экономической эффективности строительства разведочных и эксплуатационных скважин на месторождениях углеводородов',
            'description' => 'В результате составления проекта планируется решить следующие актуальные проблемы строительства скважин на месторождениях углеводородов:
строительство скважин в условиях прихватов колонн бурильных и обсадных труб вследствие различных геологических, технических и технологических причин;
строительство скважин в условиях возможности возникновения газонефтеводопроявлений;
строительство скважин в интервалах многолетнемерзлых горных пород;
строительство скважин в условиях вероятности полного и катастрофического поглощения бурового раствора;
строительство скважин в интервалах трапповых отложений;
строительство скважин в интервалах соленосных (рапоносных) горизонтов.
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: особенности технологии бурения глубоких скважин в сложных горно-геологических условиях.
Уметь: подобрать соответствующие технико-технологические решения для конкретных горно-геологических условий.
Владеть: методиками проектирования технологии бурения глубоких скважин в условиях возможных осложнений и аварий.
',
            'product_result' => 'Формой продуктового результата является проект, содержащий рекомендации по оптимизации технологии бурения глубоких скважин в сложных горно-геологических условиях.',
            'state_id' => '1',
            'supervisors' => 'Пушмин Павел Сергеевич, Романов Григорий Радионович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Методы увеличения нефтеотдачи МУН',
            'places' => '15',
            'goal' => 'Целью проекта является повышение технико-экономической эффективности добычи
Углеводородов
',
            'description' => 'В процессе выполнения проекта , будет предложен и обоснован выбор методов увеличения нефтеизвлечения МУН (выбор агента вытеснения, способ доставки, метод закачивания, оптимальная схема размещения скважин для реализации воздействия)',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Case-in ',
            'study_result' => 'Знания: будут получены знания в области разработки и эксплуатации нефтяных месторождений
Умения: получены умения поиска реализуемых на практике способов повышения эффективности МУН
Навыки: в области управления добычей углеводородов на завершающих стадиях эксплуатации с применением современных технологий
',
            'product_result' => 'Разработка МУН с оптимальными характеристиками',
            'state_id' => '1',
            'supervisors' => 'Четверикова Валентина Валерьевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Сибирская нефть',
            'places' => '15',
            'goal' => 'Сформировать группу лидеров в создании нового научного знания, технологий и разработок для внедрения в промышленность нефтегазового сектора.  Приобретение компетенций в области системы сбора и подготовки скважинной продукции, нефтепромысловой химии. Достижение научно-технического превосходства в научных и образовательных школах. Изучение ESG принципов и методик в нефтегазовой отрасли.',
            'description' => 'Проект «Сибирская нефть» направлен на изучение нефтей  месторождений Восточной Сибири, на исследование имеющихся методик лабораторных работ, изучение особенностей месторождений региона. Решение актуальных задач нефтегазовой отрасли по ESG принципам. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Договор №758/91-02/22 на проведение лабораторных исследований проб нефти
Case-in , Международный нефтегазовый, кейс ESG 
',
            'study_result' => 'Знания: будут получены знания в области сбора и подготовки нефтяных месторождений;
Умения: подбирать нефтепромысловую химию под конкретную задачу;
Навыки: умение работать на лабораторном оборудовании и подбирать методики для исследований и их проводить.
',
            'product_result' => 'Изучены физико-химические свойства нефтей региона, разработаны рекомендации по применению нефтепромысловой химии для конкретных месторождений региона. Предложены свои технические решения. Решение кейсов по тематикам ESG для нефтегазовых компаний.',
            'state_id' => '1',
            'supervisors' => 'Шакирова Эльвира Венеровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка автоматических способов ликвидации аварий в скважине в период её бурения',
            'places' => '15',
            'goal' => 'Создание методики автоматических действий ликвидации аварий в скважине в период её бурения',
            'description' => 'В период бурения скважины возможны многочисленные аварии, которые ликвидируются специальной службой. На ликвидацию аварии уходит много времени и средств. Иногда приходится бросать скважину и забуривать новую. Очень важно быстро остановить развитие осложнения. Поэтому разработка способов ликвидации аварии и восстановление скважины является важной задачей.',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: технологические процессы при бурении скважин.                                                                                   Уметь: использовать оборудование для ликвидации аварий.                                                                        Владеть: владеть математическим аппаратом для аналитических расчётов',
            'product_result' => 'Разработка методики действий при авариях при бурении скважины',
            'state_id' => '1',
            'supervisors' => 'Зайцев Виталий Иванович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка автоматизированного метода ликвидации гидроразрыва пласта при бурении скважин на шельфе',
            'places' => '15',
            'goal' => 'Создание методики автоматической ликвидации гидроразрыва стенки скважины при бурении на шельфе',
            'description' => 'В процессе бурения гидроразрыв скважины нежелателен, т.к. это приводит к потере бурового раствора, иногда катастрофическому. Поэтому разработка метода определения давления гидроразрыва скважины прибурении на шельфе аналитическим способом является важной задачей.',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: технологических процессов бурения скважин на шельфе.
Умения: использовать оборудование для ликвидации гидроразрыва пласта.
Навыки: владения математическим аппаратом для аналитических расчётов
',
            'product_result' => 'Предварительное определение давления гидроразрыва стенки скважины аналитическим методом.
Методика действий при ликвидации гидроразрыва
',
            'state_id' => '1',
            'supervisors' => 'Зайцев Виталий Иванович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оценка стоимости трубопровода по ГИС параметрам',
            'places' => '15',
            'goal' => 'Создание методики оценки стоимости трубопровода в зависимости от рельефа местности',
            'description' => 'Предварительная оценка инвестиционной привлекательности разработки месторождений нефти и газа.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знает - состав и принципы работы  автоматизированных информационных систем, применяемых в  нефтегазовом деле, как для проектирования, так и для эксплуатации,  основные  модели 
доступа к базам данных в сети Internet, технологию автоматизации проектных работ,  административной  и  управленческой деятельности.
программное  обеспечение  применяемой в нефтегазовом  производстве; 
Умеет: применять основные информационные технологии для проектирования, управления, связи,  поиска информации для решения прикладных задач. 
Владеет:  основными приемами  применения стандартных  программных  комплексов,  составляющих  основу  информационных технологий в том числе для целей ГИС и ГДИС
',
            'product_result' => 'Развитие компетенций проектной деятельности в нефтегазовой и транспортной отраслях',
            'state_id' => '1',
            'supervisors' => 'Зедгенизов Антон Викторович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оценка стоимости строительства трубопровода по критериям логистических издержек',
            'places' => '15',
            'goal' => 'Создание методики оценки стоимости трубопровода в зависимости от рельефа местности',
            'description' => 'Предварительная оценка инвестиционной привлекательности разработки месторождений нефти и газа.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знает - состав и принципы работы автоматизированных информационных систем, применяемых в нефтегазовом деле, основные схемы доставки грузов и расходных материалов, требуемых при строительстве трубопроводного транспорта.
Умеет: применять основные информационные технологии для проектирования, управления, связи, поиска информации для решения прикладных задач в области логистических решений доставки грузов в районы строительства трубопроводного транспорта.
Владеет: основными приемами применения стандартных программных комплексов, составляющих основу информационных технологий в том числе для целей ГИС и ГДИС.
',
            'product_result' => 'Развитие компетенций проектной деятельности в нефтегазовой и транспортной отраслях',
            'state_id' => '1',
            'supervisors' => 'Зедгенизов Антон Викторович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Математическое моделирование параметров промывочной жидкости для условий наклонно направленного бурения скважин',
            'places' => '15',
            'goal' => 'Создание математических моделей потока промывочной жидкости для условий наклонно направленного бурения скважин',
            'description' => 'Предварительная оценка существующих моделей потоков промывочной жидкости с учетом ее свойств в условиях направленного бурения скважин.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знает –назначение и условия применения промывочных жидкостей для бурения наклонно направленных скважин, математический аппарат составления  моделей, теоретические положения реологии жидкостей.
Умеет: применять основные информационные технологии для проектирования, управления, связи,  поиска информации для решения прикладных задач. 
Владеет:  основными приемами  применения стандартных  программных  комплексов,  составляющих  основу  информационных технологий в том числе для целей бурения
',
            'product_result' => 'Развитие компетенций проектной деятельности в бурении нефтегазовых скважин ',
            'state_id' => '1',
            'supervisors' => 'Ламбин Анатолий Иванович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Усовершенствование исследовательского бурового стенда',
            'places' => '15',
            'goal' => 'Модернизация учебно-исследовательского стенда в буровой лаборатории для решения современных задач на более высоком с точки зрения качества уровне',
            'description' => 'Существует потребность в испытании буровых долот и другого породоразрушающего инструмента в стендовых условиях, прежде чем запускать полевые испытания и массовое производство. В 2016 году сотрудниками ИРНИТУ [https://www.istu.edu/news/22230/] были разработаны буровые долота, способные повысить эффективность проведения буровых работ. Подобные работы ведутся регулярно. Имеющееся в ИРНИТУ оборудование обладает рядом недостатков, в том числе аналоговыми приборами контроля и измерения параметров режима бурения. Необходимо соответствовать современным тенденциям и требованиям. Актуальность поставленной проблемы обоснована потребностью в полигоне для испытаний инновационных технических средств – породоразрушающего инструмента (долот, коронок и др.).',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: Способы совершенствования исследовательских буровых стендов для обеспечения соответствия современному уровню развития науки и техники
Умения: Оценивать текущее состояние буровых установок и предлагать варианты усовершенствования
Навыки: Обеспечивать монтаж, испытание и обслуживание контрольно-измерительного оборудования на исследовательских установках
',
            'product_result' => 'Буровой исследовательский стенд, способный на современном уровне проводить эксперименты с последующим подбором оптимальной технологии бурения скважин',
            'state_id' => '1',
            'supervisors' => 'Романов Григорий Радионович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оптимизация технологии строительства скважин в сложных горно-геологических условиях (4 курс)',
            'places' => '15',
            'goal' => 'Целью проекта является повышение технико-экономической эффективности строительства разведочных и эксплуатационных скважин на месторождениях углеводородов',
            'description' => 'В результате составления проекта планируется решить следующие актуальные проблемы строительства скважин на месторождениях углеводородов:
строительство скважин в условиях прихватов колонн бурильных и обсадных труб вследствие различных геологических, технических и технологических причин;
строительство скважин в условиях возможности возникновения газонефтеводопроявлений;
строительство скважин в интервалах многолетнемерзлых горных пород;
строительство скважин в условиях вероятности полного и катастрофического поглощения бурового раствора;
строительство скважин в интервалах трапповых отложений;
строительство скважин в интервалах соленосных (рапоносных) горизонтов.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: особенности технологии бурения глубоких скважин в сложных горно-геологических условиях.
Уметь: подобрать соответствующие технико-технологические решения для конкретных горно-геологических условий.
Владеть: методиками проектирования технологии бурения глубоких скважин в условиях возможных осложнений и аварий.
',
            'product_result' => 'Формой продуктового результата является проект, содержащий рекомендации по оптимизации технологии бурения глубоких скважин в сложных горно-геологических условиях.',
            'state_id' => '1',
            'supervisors' => 'Пушмин Павел Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Исследование влияния свойств и состава бурового раствора на процесс разрушения горных пород в буровой лаборатории ИРНИТУ',
            'places' => '15',
            'goal' => 'Повысить эффективность бурения твердых горных пород путем подбора оптимальных составов буровых растворов',
            'description' => 'Траппы Сибирской платформы, при условии их монолитности, являются серьезным осложнением с точки зрения бурения. Необходимо подбирать такие буровые растворы, которые будут способствовать повышению производительности бурения и снижать затраты энергии и ресурсов на строительство скважин в условиях трапповых интрузий. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: Способы совершенствования технологии бурения нефтяных и газовых скважин путем подбора оптимальных рецептур буровых растворов
Умения: Оценивать влияние определенных реагентов на производительность и ресурсоемкость буровых работ
Навыки: Подбирать рецептуру и приготавливать на их основе буровые растворы для бурения твердых горных пород
',
            'product_result' => 'Рецептуры буровых растворов, предназначенных для бурения траппов Сибирской платформы',
            'state_id' => '1',
            'supervisors' => 'Романов Григорий Радионович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Технология рудоподготовки и обогащения апатит-нефелиновых руд',
            'places' => '15',
            'goal' => 'Разработка технологии обогащения апатит-нефелиновых руд',
            'description' => 'Апатит-нефелиновые руды являются основным источником получения минеральных удобрений. Мировые запасы и ресурсы апатитовых руд на 60% сосредоточены в России, при этом две трети сконцентрированы на Кольском полуострове. Исходное содержание минерала апатита и нефелина 30,67 и 30,88% соответственно. Для получения готового продукта руда из карьера должна пройти стадии дезинтеграции  классификации и обогащения для получения готового продукта. Для понимания данного процесса, требуется провести натурные лабораторные испытания. Проект направлен на получение обучающимися компетенций в области профессиональной деятельности, а именно в рудоподготовки и основных методов обогащения. В процессе реализации проекта обучающиеся получат навыки проведения экспериментов по пробоподготовке, изучению физико-механических свойств проб руды, разработке технологии дробления, измельчения и классификации руд и исследований на обогатимость различными методами.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ПАО «Ковдорский горно-обогатительный комбинат»  ',
            'study_result' => 'Знать: методы обогащения и переработки апатит-нефелиновых руд;
Уметь: проводить инженерный анализ существующей и разрабатываемой проектной документации  строительства и  эксплуатации горно-обогатительного комплекса;
Владеть: методами обогащения и переработки технологического и техногенного сырья.
',
            'product_result' => 'Научно-исследовательская работа по разработке технологии обогащения апатит-нефелиновых руд',
            'state_id' => '1',
            'supervisors' => 'Бурдонов Александр Евгеньевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Переработка крупнотоннажного техногенного сырья с получением композиционных материалов',
            'places' => '15',
            'goal' => 'Переработка промышленных крупнотоннажных минеральных тонкодисперсных отходов с получением товарной продукции – полимерных композиционных материалов для различного применения',
            'description' => 'Разрабатываются рецептуры новых огнестойких
и высокопрочных, изготовленных из промышленных отходов
(золошлаковой смеси - ЗШС ТЭЦ, ГОСТ 25818-91- наполнитель, пыль газоочистки металлургии, пыль горнодобывающих предприятяий и др. ) и термопластичных полимеров.
На базе ИРНИТУ имеется цех по производству инновационных строительных материалов, а также термопластавтомат для литья изделий из пластических масс.
Разрабатываемый материал будет превосходить аналоги из других полимерных композитов и натуральную древесину по химической стойкости, биологической стойкости, огнестойкости и долговечности. Кроме того, материал абсолютно гидрофобен. 
Применение нового материала -  строительные и конструкционные материалы, детали машин и механизмов, корпуса электроники, др.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО «Байкальская энергетическая компания», АО «Кремний»',
            'study_result' => 'Знания: способы переработки полимерных материалов
Умения: подбора технологических параметров для переработки определенного вида термопласта
Навыки: работы на оборудовании по переработке пластических масс в изделия
',
            'product_result' => 'Композиционные материалы с набором свойств для различного применения',
            'state_id' => '1',
            'supervisors' => 'Барахтенко Вячеслав Валерьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Технология извлечения редких металлов из литиевых рассолов Сибирской платформы',
            'places' => '15',
            'goal' => 'Выбор и обоснование технологии извлечения редких металлов из высококонцентрированных рассолов ',
            'description' => 'Подземные высокоминерализованные воды (рассолы), вскрывающиеся при отработке месторождений твердых полезных ископаемых, нефти и газа, насыщенные различными микро- и макроэлементами, представляют собой потенциальное гидроминеральное сырье и являются крупнейшим источником товарных продуктов, таких как соли лития, бромиды, йод и др. Фактически же они превращаются в отходы- сбрасываются на поверхность либо закачиваются в подземные горизонты, что требует дополнительных затрат, а также наносит огромный ущерб окружающей среде. Задача проекта заключается в обосновании выбора и разработке эффективных технологических схем селективного выделения промышленно ценных компонентов из природных рассолов. На основании полученных результатов можно обосновывать и разрабатывать комплексные технологические схемы извлечения ценных компонентов, которые возможно реализовать в Иркутской области и соседних с ней регионах (Якутия, Бурятия)',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'НОЦ «Байкал»',
            'study_result' => 'Знания: особенности свойств высококонцентрированных рассолов, технологии извлечения ценных компонентов
Умения: проводить исследования свойств высококонцентрированных растворов, выбирать технологические решения
Навыки: обоснование технологии, расчеты эффективности, доказательство перспективности проекта 
',
            'product_result' => 'Технология для извлечения солей лития и стронция ',
            'state_id' => '1',
            'supervisors' => 'Зелинская Елена Валентиновна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Исследование эффективности расслоения суспензии продуктов обогащения минерального сырья',
            'places' => '15',
            'goal' => 'Проведение комплекса исследований по установлению скорости осаждения твердых частиц в жидкой среде с учетом концентрации твердых частиц и влияния флокулянтов',
            'description' => 'В настоящее время сгущение является неотъемлемым процессом в технологической цепи обогащения полезных ископаемых, который требует постоянного изучения и совершенствования технологии по подбору и применению различных реагентов для увеличения эффективности процесса сгущения.
Проект направлен на получение обучающимися компетенций в области профессиональной деятельности, а именно в области сгущения и обезвоживания продуктов обогащения. В процессе реализации проекта обучающиеся получат навыки проведения экспериментов по определению скорости осаждения частиц в жидкой среде, научатся проводить подбор органических и неорганических флокулянтов, для повышения эффективности разделения пульп, а так же производить расчет удельной поверхности осаждения твердых части и конструкционных параметров сгустительного оборудования.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО «ИЗТМ-Инжиниринг»  ',
            'study_result' => 'Знания: 
- методики расчета основного и вспомогательного оборудования для обезвоживанияи сгущения пульп на обогатительных фабриках;
- конструкции и принцип действия сгустителя и осветлителя;
- методы очистки сточных вод обогатительных фабрик.
Умения: 
- расчёт параметров работы сгустителя;
- расчет показателей водношламовой схемы;
Навыки: 
Владение технической терминологией в области производства работ по обезвоживанию, пылеулавливанию и очистке сточных вод;
Владение методами расчета схем по обезвоживанию.
',
            'product_result' => 'Методика проведения исследований в области сгущения пульп и осветления технологических сливов.
Конструкционные параметры сгустительного оборудования.
',
            'state_id' => '1',
            'supervisors' => 'Бурдонов Александр Евгеньевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка технологий биоремедиации объектов окружающей среды и нормализации санитарно-гигиенических условий в производственных и административных помещениях',
            'places' => '15',
            'goal' => 'Разработка технологий и технических устройств для очистки объектов окружающей среды от загрязнений',
            'description' => 'Масштабы загрязнения антибиотиками, используемыми в сельском хозяйстве весьма значительны, что приводит к возникновению антибиотикорезистентности у бактерий и вирусов. Данной проблеме не уделяется должного внимания ни со стороны властей, ни со стороны производителей, поэтому поиск новых и адаптация традиционных методик очистки объектов окружающей среды от антибиотиков является инновационным решением для проблемы ',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Грант ИРНИТУ',
            'study_result' => 'Знания: основные показатели качества окружающей среды и современные экологические проблемы Байкальского региона
Умения: анализировать и интерпретировать информацию о количественных и качественных показателях окружающей среды
Навыки: создания рабочих прототипов оборудования для очистки окружающей среды
',
            'product_result' => 'Создание установок биоочистки почв и водных объектов от антибиотиков (пятый / шестой семестр). Создание фитокомплексов для очистки воздуха в помещениях (шестой семестр)',
            'state_id' => '1',
            'supervisors' => 'Тимофеева Светлана Семёновна, Тюкалова Ольга Васильевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Профессиональные риски на объектах экономики Иркутской области
Профессиональные риски в структурных подразделениях  ИРНИТУ
',
            'places' => '15',
            'goal' => 'Управление профессиональными  рисками в структурных подразделениях ИРНИТУ',
            'description' => 'Создание безопасных и благоприятных условий труда, является одной из основных задач  для работодателя. Трудовой кодекс РФ предусматривает наличие в организации системы  управления охраной труда, создание и функционирование системы оценки профессиональных рисков. Для этого необходимо провести процедуру оценки профессиональных рисков на каждом рабочем месте, территории предприятия, местах общего использования и в других зонах ответственности работодателя за безопасность сотрудников. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Управление по работе с персоналом и обучающимися, служба охраны труда',
            'study_result' => 'Знания: методик оценки профессиональных рисков
Умения: выявлять и идентифицировать опасности, выполнять инструментальные измерения
Навыки: работы с нормативно-правовыми актами в области безопасности и охраны труда; локальными актами организации
',
            'product_result' => 'Карты оценки профессиональных рисков; комплекс мероприятий по устранению рисков или снижению их уровня',
            'state_id' => '1',
            'supervisors' => 'Никитина О.И.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Снижение углеродного следа на предприятиях по добыче и обогащению рудных полезных ископаемых',
            'places' => '15',
            'goal' => 'Создать углеродного следа добывающего предприятия',
            'description' => 'Недропользователи заинтересованы в оценке и снижении углеродного следа своей продукции. Нам предстоит исследовать источники образования оксидов углерода на всех этапах жизненного цикла добывающего предприятия. Предложить решения для его снижения.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Форсайтная группа НТИ по рынку EcoNet',
            'study_result' => 'Знания: экологического законодательства; основ ESG – управления рисками
Умения: представления сложной мультидисциплинарной информации в доступном виде
Навыки: анализа жизненного цикла предприятия
',
            'product_result' => 'Визуализация (в формате презентации) углеродного следа добывающего предприятия (пятый семестр). Поиск решений для его снижения (шестой семестр)',
            'state_id' => '1',
            'supervisors' => 'Шевченко Елена Ивановна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Эргодизайн рабочих помещений',
            'places' => '15',
            'goal' => 'Приобретение навыков практического применения нормативно-правовой документации в области эргономики при проектировании рабочих мест для улучшения условий труда работающих в конкретном помещении',
            'description' => 'В настоящее время в ИРНИТУ существуют учебные и рабочие помещения, не отвечающие нормативным эргономическим требованиям (например, количество рабочих мест в помещении превышает допустимое количество, а их организация неэффективна). Эта ситуация делает некомфортными условия работы студентов и ППС в таких помещениях, что опосредовано может сказываться на качестве образовательного процесса. ',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ИРНИТУ',
            'study_result' => 'Знания: знать нормативно-правовую документацию в области эргономических требований организации рабочих мест. 
Умения: уметь собирать, анализировать и оценивать информацию об условиях организации рабочего пространства  в рабочих помещениях различного назначения. 
Навыки: владение навыками проектирования рабочего пространства и рабочих мест в помещении с учетом требований действующей нормативно-правовой базы
',
            'product_result' => 'Разработка электронной модели (возможно - плана-схемы) эргодизайна отдельных рабочих помещений (учебных аудиторий)  с пояснительной запиской',
            'state_id' => '1',
            'supervisors' => 'Иванова Светлана Владимировна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Профессиональные риски на объектах экономики Иркутской области
Культура безопасности как элемент снижения уровня профессиональных рисков
',
            'places' => '15',
            'goal' => 'Разработка практических процедур, которые помогут сформировать осознанное и ответственное отношение к вопросам безопасности и охраны труда ',
            'description' => 'Культура безопасного труда – это часть общей организационной культуры, такой набор характеристик и особенностей деятельности организации и поведения отдельных лиц, который устанавливает, что проблемы безопасности являются высшим приоритетом. Для формирования ответственного и осознанного отношения к вопросам безопасности и охраны труда необходимо повысить мотивацию и вовлеченность сотрудников в формирование культуры безопасности, что в конечном итоге приведет к снижению уровней профессиональных рисков. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Управление по работе с персоналом и обучающимися, служба охраны труда',
            'study_result' => 'Знания: требований безопасности и охраны труда при выполнении работ
Умения: заинтересовать работников, мотивировать их на безопасное выполнение работ; использовать современные формы предоставления информации по охране труда 
Навыки: работы с инструкциями, нормативно-правовыми актами в области безопасности и охраны труда; локальными актами организации
',
            'product_result' => 'Проект локального нормативного акта «Положение о культуре безопасности в ИРНИТУ»',
            'state_id' => '1',
            'supervisors' => 'Никитина О.И.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Исследование возможностей использования долерита в ювелирном и камнерезном дизайне',
            'places' => '15',
            'goal' => 'Расширить сферы применения долерита в ювелирном и камнерезной дизайне',
            'description' => 'Изготовление художественных изделий из долерита расширит сферы сбыта и повысит рентабельность производства, а разработка актуального современного дизайна повысит спрос на подобную продукцию',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "СПЕЦКАМЕНЬСИБИРИ"',
            'study_result' => 'Знания: основные принципы планирования и организации своей деятельности
Умения: формулировать личные цели; планировать и организовывать свою деятельность на основе приоритетов и поставленных целей
Навыки: навыки рефлексии
',
            'product_result' => 'Дизайн-проект коллекции из долерита',
            'state_id' => '1',
            'supervisors' => 'Буйволова М.А., Бирюкова И.П',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Идентификация турмалинов и оценка их состава методом конфокальной Рамановской спектроскопии',
            'places' => '15',
            'goal' => 'Создание базы данных Рамановских спектров минералов группы турмалина для эталонной коллекции',
            'description' => 'Наиболее эффективные в настоящее время методы диагностики ювелирных камней основаны на использовании наукоемкого оборудования в условиях современной лаборатории. Одним из таких методов недеструктивного локального микроанализа минералов является конфокальная Рамановская спектроскопия, объединяющая конфокальный микроскоп и метод Рамановской спектроскопии в одной системе. Для этого метода нет необходимости в специальной пробоподготовке и ювелирные камни могут быть диагностированы в изделиях. Спектрометр оснащен программным обеспечением, позволяющим производить экспрессную идентификацию минералов путем автоматического сравнения полученного спектра образца со спектрами в базе данных. Однако существующая библиотека спектров нуждается в пополнении данными о российских минералах, в том числе о турмалинах Восточно-Сибирского региона.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Институт земной коры СО РАН',
            'study_result' => 'Знания: теоретических основ метода конфокальной Рамановской спектроскопии
Уметь: проводить пробоподготовку, анализ образцов и интерпретировать полученные результаты
Владеть: навыками работы с конфокальным Рамановским спектрометром WITec alpha 300R
',
            'product_result' => 'Создание библиотеки спектров турмалинов Восточно-Сибирского региона для пополнения базы данных конфокального Рамановского спектрометра WITec alpha 300R',
            'state_id' => '1',
            'supervisors' => 'Анисимова Александра Алексеевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка камнерезного цеха по обработке долерита для получения готового художественного продукта',
            'places' => '15',
            'goal' => 'Разработать современный камнерезный цех для художественной обработки долерита',
            'description' => 'Правильно организованный камнерезный цех позволит изготавливать современную актуальную художественную продукцию из долерита без значительных потерь материала',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "СПЕЦКАМЕНЬСИБИРИ"',
            'study_result' => 'Знания: основные принципы планирования и организации своей деятельности
Умения: формулировать личные цели; планировать и организовывать свою деятельность на основе приоритетов и поставленных целей
Навыки: навыки рефлексии
',
            'product_result' => 'Проект камнерезного цеха',
            'state_id' => '1',
            'supervisors' => 'Буйволова М.А, Бирюкова И.П.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка коллекции ювелирных изделий на основе оберегов народов Сибири',
            'places' => '15',
            'goal' => 'Разработать современный дизайн коллекции ювелирных изделий на тему оберегов',
            'description' => 'Современный рынок ювелирной продукции перенасыщен однообразными изделиями не привлекательными для современного покупателя. Одним из решений этой проблемы является разработка актуального дизайна ювелирных на основе оберегов народов Сибири. Их использование в дизайне ювелирной продукции повысит ее привлекательность.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО «Алмаз»',
            'study_result' => 'Знания: основные принципы планирования и организации своей деятельности
Умения: формулировать личные цели; планировать и организовывать свою деятельность на основе приоритетов и поставленных целей.
Навыки: навыки рефлексии
',
            'product_result' => 'Дизайн-проект коллекции ювелирных изделий',
            'state_id' => '1',
            'supervisors' => 'Сорокина Вера Евгеньевна, Берман Елена Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка сувенирной продукции на основе уникальных особенностей флоры и фауны Байкальского региона',
            'places' => '15',
            'goal' => 'Разработать современный дизайн сувенирной продукции на основе уникальных особенностей флоры и фауны Байкальского региона',
            'description' => 'Современный рынок ювелирной и камнерезной продукции Байкальского региона перенасыщен однообразными изделиями не привлекательными для современного покупателя. Одним из решений этой проблемы является разработка актуального дизайна сувенирных изделий на основе особенностей природы Байкальского региона с учетом географического положения и уникальной флоры и фауны Байкала. Их использование в дизайне сувенирной продукции повысит ее привлекательность.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО "Байкалкварцсамоцветы»',
            'study_result' => 'Знания: основные принципы планирования и организации своей деятельности
Умения: формулировать личные цели; планировать и организовывать свою деятельность на основе приоритетов и поставленных целей.
Навыки: навыки рефлексии
',
            'product_result' => 'Дизайн-проект коллекции изделий',
            'state_id' => '1',
            'supervisors' => 'Войтюк Алена Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Вовлечение техногенного сырья в производство цветных металлов',
            'places' => '15',
            'goal' => 'Разработать технологические рекомендации и стратегию переработки техногенного сырья и расширения сырьевой базы металлургического производства за счет разработки новых месторождений',
            'description' => 'На территории России сосредоточено почти 30% мировых разведанных запасов никеля, 28% – железа, 10% – меди, по запасам других видов металлов, страна входит в число ведущих горнодобывающих государств. Ресурсная обеспеченность России определяется исходя из необходимости удовлетворения текущих и перспективных потребностей экономики, в соответствии с уровнем экономического развития страны. Однако Россия отстает от большинства стран мира по уровню вовлечения минерально-сырьевой базы в экономический оборот, по уровню обеспечения народнохозяйственных потребностей в ресурсах и по темпам роста горноперерабатывающей и металлургической промышленности. Отставание от среднемирового уровня свидетельствует о проблемах вовлечения природных ресурсов в производство, о трудностях с воспроизводством материально-технической базы страны.
Вместе с тем металлургические предприятия являются одним из основных источников загрязнения окружающей среды. Выбросы вредных веществ на конкретных промышленных предприятиях зависят от объема производства, структуры предприятия, оснащенности газоочистным оборудованием, технологических особенностей и других причин. В связи со всевозрастающим негативным воздействием производственной деятельности металлургических предприятий на состояние окружающей среды наибольшую важность приобретают технологии, обеспечивающие устойчивое развитие за счет повышения энергоэффективности, комплексного использования сырья, снижения экологической нагрузки и производственных издержек. Как показывает практика, переработка многих видов отходов металлургического производства экономически выгодно и технически осуществимо.
Основными направлениями расширения сырьевой базы являются разработка новых месторождений и переработка уже накопленных и вновь образующихся отходов.
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания:
Принципы рационального природопользования в области металлургии.
Умения:
Уметь применять принципы рационального природопользования для энерго- и ресурсосбережения технологических процессов в металлургии 
Навыки:
Владеть навыками использования принципов рационального природопользования для энерго- и ресурсосбережения технологических процессов в металлургии.
',
            'product_result' => 'Технологические рекомендации, включающие анализ образующихся отходов металлургических предприятий и существующих запасов минерального сырья, а также конкретные технологические решения по вовлечению и переработке минерального и техногенного сырья',
            'state_id' => '1',
            'supervisors' => 'Тютрин Андрей Александрович, Зайцева Анна Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оптимизация процесса переработки техногенного и минерального сырья',
            'places' => '15',
            'goal' => 'Разработать технологические рекомендации по переработки отходов вторичной металлургии свинца и оптимизации процесса производства первичного алюминия',
            'description' => 'Проблема накопления отходов в процессе переработки свинцовых аккумуляторных батарей встречается на большинстве заводов данной отрасли. Самым ярким примером являются накопленные отходы в г. Свирске, объем которых составляет 3500-4500 т. Данный отход относится к третьему классу опасности, но также представляет собой ценный продукт для доизвлечения свинца, которого в отходах содержится до 30 мас. %. Разработанное технологическое решение может быть использовано и на других предприятиях перерабатывающих аккумуляторные батареи.
При производстве алюминия электролизом криолит-глиноземного расплава возникает ряд проблем. При повышении амперной нагрузки повышается температура электролита, поэтому необходимо организовать эффективный отвод тепла от поверхностей электролизера и уменьшить потери тепла. Увеличение засыпки и размеров электролизера способствуют уменьшению тепловых потерь за счет снижения отношения их поверхности к объему. 
Увеличение силы тока на электролизной серии выше нормативного значения приводит к ряду расстройств на электролизере: увеличению сопротивления токопроводящих элементов ванны, нарушению теплового баланса, повышению выбросов газообразных веществ. Поэтому проработка инновационных решений для компенсации амперной нагрузки является не простой и важной задачей.
Потери анодного напряжения связаны в первую очередь с конструкцией анодного узла, составом и качеством материала анода. Важную роль в перепаде напряжения в анодном массиве играет токораспределение по анодам. Известно, что оно может быть крайне неравномерно, в результате чего возникают конусы, приводящие к замыканию электродов.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания:
Принципы рационального природопользования в области металлургии.
Конструкция электролизеров для получения алюминия; основные параметры, оказывающие влияние на эффективность металлургических процессов производства алюминия электролитическим способом и диапазоны их оптимальных значений.
Умения:
Уметь применять, совершенствовать или разрабатывать методы переработки отходов металлургического производства.
Уметь применять полученные знания о строении криолит-глиноземных расплавов на практике; уметь проводить анализ влияния различных факторов на основные показатели электролиза
Навыки:
Владеть навыками разработки предложений по переработке отходов металлургического производства и оптимизации процесса производства алюминия. 
',
            'product_result' => 'Технологические рекомендации, включающие анализ образующихся отходов вторичной металлургии свинца, а также конкретные технологические решения по вовлечению и переработке техногенного сырья. 
Технологические рекомендации, включающие анализ проблем возникающих при производстве первичного алюминия, а также конкретные технологические решения по их решению
',
            'state_id' => '1',
            'supervisors' => 'Тютрин Андрей Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Расширение сырьевой базы металлургического производства',
            'places' => '15',
            'goal' => 'Разработать технологические рекомендации и стратегию расширения сырьевой базы металлургического производства за счет разработки новых месторождений и переработки техногенного сырья',
            'description' => 'На территории России сосредоточено почти 30% мировых разведанных запасов никеля, 28% – железа, 10% – меди, по запасам других видов металлов, страна входит в число ведущих горнодобывающих государств. Ресурсная обеспеченность России определяется исходя из необходимости удовлетворения текущих и перспективных потребностей экономики, в соответствии с уровнем экономического развития страны. Однако Россия отстает от большинства стран мира по уровню вовлечения минерально-сырьевой базы в экономический оборот, по уровню обеспечения народнохозяйственных потребностей в ресурсах и по темпам роста горноперерабатывающей и металлургической промышленности. Отставание от среднемирового уровня свидетельствует о проблемах вовлечения природных ресурсов в производство, о трудностях с воспроизводством материально-технической базы страны.
Вместе с тем металлургические предприятия являются одним из основных источников загрязнения окружающей среды. Выбросы вредных веществ на конкретных промышленных предприятиях зависят от объема производства, структуры предприятия, оснащенности газоочистным оборудованием, технологических особенностей и других причин. В связи со всевозрастающим негативным воздействием производственной деятельности металлургических предприятий на состояние окружающей среды наибольшую важность приобретают технологии, обеспечивающие устойчивое развитие за счет повышения энергоэффективности, комплексного использования сырья, снижения экологической нагрузки и производственных издержек. Как показывает практика, переработка многих видов отходов металлургического производства экономически выгодно и технически осуществимо.
Основными направлениями расширения сырьевой базы являются разработка новых месторождений и переработка уже накопленных и вновь образующихся отходов.
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания:
Принципы рационального природопользования в области металлургии.
Умения:
Уметь применять принципы рационального природопользования для энерго- и ресурсосбережения технологических процессов в металлургии 
Навыки:
Владеть навыками использования принципов рационального природопользования для энерго- и ресурсосбережения технологических процессов в металлургии.
',
            'product_result' => 'Технологические рекомендации, включающие анализ образующихся отходов металлургических предприятий и существующих запасов минерального сырья, а также конкретные технологические решения по вовлечению и переработке минерального и техногенного сырья',
            'state_id' => '1',
            'supervisors' => 'Зайцева Анна Александровна, Тютрин Андрей Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка технологии переработки золотосодержащих руд',
            'places' => '15',
            'goal' => 'Разработать технологию по переработке золотосодержащего сырья и расширить сырьевую базу путем вовлечения в переработку упорного, бедного, забалансового, комплексного сырья',
            'description' => 'В России в золотых рудах коренных месторождений заключено 61,1% разведанных запасов. В комплексных рудах – 25,5%, в россыпях – 13,4%. Прогнозные ресурсы коренных месторождений 38,8 тыс. т, россыпей 2,8 тыс. т. Однако Россия отстает от большинства стран мира по уровню вовлечения минерально-сырьевой базы в экономический оборот, по уровню обеспечения народнохозяйственных потребностей в ресурсах и по темпам роста горноперерабатывающей и металлургической промышленности. На сегодняшний день Россия занимает третье место по добыче золота (282-300 тонн/год). Лидерами являются Китай (400 тонн/год) и Австралия (315 тонн/год). Легких для переработки руд в России и мире осталось крайне мало. Все чаще золотодобытчикам приходится работать с упорным рудами. Традиционного цианирования в условиях переработки упорных руд недостаточно. Такие руды требуют обогатительных процессов прежде, чем их будет целесообразно подвергать цианированию. Так же следует отметить, что в настоящее время особый интерес представляют и комплексные руды, содержащие благородные металлы. Переработка комплексных руд позволяет повысить экономические показатели производства. 
Основным направлением в золотодобыче является выбор наиболее рентабельной технологии по переработке золотосодержащих руд. 
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания:
Принципы рационального природопользования в области металлургии.
Умения:
Уметь применять принципы рационального природопользования для энерго- и ресурсосбережения технологических процессов в металлургии 
Навыки:
Владеть навыками использования принципов рационального природопользования для энерго- и ресурсосбережения технологических процессов в металлургии.
',
            'product_result' => 'Технологические рекомендации, включающие анализ существующих схем переработки золотосодержащих руд, а также конкретные технологические решения по расширению сырьевой базы путем вовлечения в переработку упорного, бедного, забалансового, комплексного сырья',
            'state_id' => '1',
            'supervisors' => 'Шипнигов Антон Андреевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проектирование, монтаж и наладка учебно-исследовательских стендов на базе оборудования для автоматизации ПГ ОВЕН (3й курс)',
            'places' => '15',
            'goal' => 'Дать обучающимся возможность приобрести практические знания, умения, навыки работы с оборудованием для автоматизации в процессе проектирования, монтажа, наладки учебно-исследовательских стендов и исследования систем автоматического регулирования.',
            'description' => 'Основной задачей учебных стендов является обучение студентов основам автоматизации технологических процессов, демонстрация работы средств автоматического управления и регулирования. Внедрение в процесс обучения стендов поможет учащимся детально изучать процессы автоматического управления и регулирования, а разработка методических пособий по работе с ними, получать практические навыки в проектировании систем автоматизации. Работа на стендах знакомит будущих специалистов в области автоматизации с условиями максимально приближенными к производственным. 
Вследствие этого, задачи разработки устройств данного класса являются актуальными
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Институт высоких технологий ИРНИТУ
Региональный учебный центр «ОВЕН-ИРНИТУ»
',
            'study_result' => 'Знания: знать основные принципы организации своей работы, требования к представлению результатов, инструменты поиска информации,  нормы и способы социального взаимодействия.
Умения: формулировать цели и задачи; творчески и критически мыслить, решать задачи в соответствии с ролевой позицией.
Навыки: работа в команде, получение первичной информации, навыками определения и постановки задач.
',
            'product_result' => '1.Проект учебно-исследовательских стендов.
2.Разработка технической документации:
-схема электрическая принципиальная;
-схема внешних проводок;
-схема питания;
-монтажная схема;
-методические указания к лабораторным и практическим работам;
-программное обеспечение и т.д.
3. Изготовленный учебно-исследовательский стенд.
',
            'state_id' => '1',
            'supervisors' => 'Ершов П.Р., Подкорытов А.А.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проектирование, монтаж и наладка учебно-исследовательских стендов на базе оборудования для автоматизации ПГ ОВЕН (4й курс)',
            'places' => '15',
            'goal' => 'Дать обучающимся возможность приобрести практические знания, умения, навыки работы с оборудованием для автоматизации в процессе проектирования, монтажа, наладки учебно-исследовательских стендов и исследования систем автоматического регулирования',
            'description' => 'Основной задачей учебных стендов является обучение студентов основам автоматизации технологических процессов, демонстрация работы средств автоматического управления и регулирования. Внедрение в процесс обучения стендов поможет учащимся детально изучать процессы автоматического управления и регулирования, а разработка методических пособий по работе с ними, получать практические навыки в проектировании систем автоматизации. Работа на стендах знакомит будущих специалистов в области автоматизации с условиями максимально приближенными к производственным. 
Вследствие этого, задачи разработки устройств данного класса являются актуальными
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Институт высоких технологий ИРНИТУ
Региональный учебный центр «ОВЕН-ИРНИТУ
',
            'study_result' => 'Знания: знать основные принципы организации своей работы, требования к представлению результатов, инструменты поиска информации,  нормы и способы социального взаимодействия.
Умения: формулировать цели и задачи; творчески и критически мыслить, решать задачи в соответствии с ролевой позицией.
Навыки: работа в команде, получение первичной информации, навыками определения и постановки задач.
',
            'product_result' => '1.Проект учебно-исследовательских стендов.
2.Разработка технической документации:
-схема электрическая принципиальная;
-схема внешних проводок;
-схема питания;
-монтажная схема;
-методические указания к лабораторным и практическим работам;
-программное обеспечение и т.д.
3. Изготовленный учебно-исследовательский стенд.

',
            'state_id' => '1',
            'supervisors' => 'Ершов П.Р.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка элементов  автоматических устройств контроля физико-химических параметров гидрометаллургических процессов переработки минерального сырья',
            'places' => '15',
            'goal' => 'Разработка технических и программных составляющих устройств автоматического контроля таких параметров как: концентрация растворенного золота, цианида натрия  в технологических растворах гидрометаллургических отделений при переработке минерального сырья',
            'description' => 'Аналитический контроль играет важную роль  для успешного ведения технологических процессов. В большинстве случаев измерения проводятся либо в лабораторных условиях и соответственно данные  могут потерять свою актуальность из-за достаточно большого времени проведения анализов, либо существующие устройства  имеют высокую стоимость. Вследствие этого, задачи разработки устройств данного класса являются актуальными. В рамках данного проекта  предлагается рассматривать отдельные задачи для достижения общей цели проекта, такие как разработка отдельных алгоритмов,  разработка  отдельных технических узлов.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: метрологические и эксплуатационные характеристики, особенности монтажа, погрешности, состояние и перспективы и тенденции современного приборостроения, классификацию, назначение, особенности применения, устройство и принцип действия приборов и устройств качественного анализа (газоанализаторов, рН- метров, концентратомеров и пр.).
Уметь: проводить декомпозицию общей задачи измерения, с выделением отдельных подсистем 
Владеть: навыками работы с анализаторами: подготовки проб, проведения измерений, оценки и обработки    результатов, в том числе с применением специализированного программного обеспечения
',
            'product_result' => 'Алгоритмы реализации отдельных подсистем
Структурные схемы отдельных технических решений
',
            'state_id' => '1',
            'supervisors' => 'Овсюков Александр Евгеньевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка системы управления лабораторной информацией',
            'places' => '15',
            'goal' => 'Разработка структуры',
            'description' => 'Система управления лабораторной информацией – программное обеспечение, предназначенное для управления лабораторными потоками работ и документов. Позволяет оптимизировать сбор, анализ, возврат и отчетность лабораторных данных. Часто применяется вместе с MES-системами. Задачами данного проекта является рассмотрение существующих систем данного класса, рассмотрение направления движения потоков информации, выделение основных функций которые реализуются, разработка структуры, описание функций, составление алгоритмов обработки информации.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: международную систему единиц физических величин, методы измерений, метрологические показатели средств измерений, метрологические характеристики средств измерения, погрешности  измерений, причины возникновения погрешностей,  методику обработки результатов наблюдений и оценивание погрешностей измерений, поверку и калибровку средств измерений, методы поверки (калибровки) 
Уметь: обоснованно применять методы метрологии и стандартизации,  проводить простейшую обработку результатов многократных измерений.
Владеть: методами метрологии и стандартизации, достаточным творческим мышлением и способностью самостоятельно принимать решения.
',
            'product_result' => 'Структура программного комплекса
Описание функций реализуемых данным комплексом
Описание графического интерфейса
Алгоритмы обработки  информации
',
            'state_id' => '1',
            'supervisors' => 'Овсюков Александр Евгеньевич, Колодин Алексей Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Формирование компетенции персонала высокотехнологичного предприятия как инструмент обеспечения его конкурентоспособности. Разработка веб-приложения «Система адаптации персонала».
   3-й КУРС
',
            'places' => '15',
            'goal' => 'Разработать веб-приложение, построенного по типу «Электронное обучение» на базе CMS Wordpress, с применением стека технологий HTML/CSS/JS',
            'description' => 'Актуальной задачей обеспечения конкурентоспособности высокотехнологичного предприятия является формирование компетенции персонала. Одним из важнейших ресурсов достижения результативности процессов является подготовка компетентного персонала. При найме новых сотрудников в штат организации происходит процесс их адаптации. В рамках адаптационного периода новоприбывший сотрудник ознакамливается с необходимой нормативно-правовой документацией и внутренними регламентами компании. К таким регламентам могут относиться как требования федерального уровня, например инструктаж о соблюдении мер по защите и охране труда, так и внутренние условия нахождения на режимных объектах, правила пожарной безопасности, и иные требования.
Создание веб-приложения по типу «Электронное обучение» позволит не только собрать все необходимые для адаптации сотрудников документы на единой площадке, но и даст возможность сотрудникам удаленно проходить адаптационные мероприятия в части ознакомления и прохождения тестирования в рамках тех или иных требований, заявленных руководством. Кроме того, введение системы электронного обучения позволит унифицировать процесс управления обучающими материалами, необходимых для адаптации персонала
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Иркутская Нефтяная Компания. 
Газпром добыча Иркутск.
ВСЖД – филиал РЖД
',
            'study_result' => 'Знать: основные понятия и методы риск-менеджмента; правовые, нормативно-технические и организационно-правовые основы обеспечения безопасности и менеджмента риска на
предприятиях;
Уметь: выявлять риски и оценивать степень риска при управлении качеством; вести документацию по разработке и внедрению систем менеджмента риска;
Владеть: навыками применения инструментов и методов риск-менеджмента по снижению степени риска в системах качества
',
            'product_result' => 'Веб-приложение, запускаемое на сервере организации, дающее возможность организации электронного обучения в рамках процесса адаптации персонала',
            'state_id' => '1',
            'supervisors' => 'Лонцих Павел Абрамович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Формирование компетенции персонала высокотехнологичного предприятия как инструмент обеспечения его конкурентоспособности.  Проектирование UX (пользовательского опыта) и UI (интерфейса) для web-приложения «Система адаптации персонала».
     4-Й КУРС
',
            'places' => '15',
            'goal' => 'Спроектировать интерфейс web-приложения, построенного по типу «электронное обучение» на основе CJM',
            'description' => 'Актуальной задачей обеспечения конкурентоспособности высокотехнологичного предприятия является формирование компетенции персонала. Проблема конкурентоспособности предприятия определяется его ресурсами, и, прежде всего, компетентностью персонала. Это требует формирования СМК, выявление бизнес-процессов, оценку рис-ориентированной деятельности и разработку мер по совершенствованию и улучшению результативности процессов.  Предварительное UX/UI проектирование web-приложения необходимо для сокращения временных издержек при внедрении системы адаптации новых сотрудников высокотехнологичного предприятия и повысит качество разрабатываемого web-приложения. Проектирование интерфейса в соответствии с картой пользовательского пути и учетом достоинств/недостатков аналогичных систем. ',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Иркутская Нефтяная Компания. 
Газпром добыча Иркутск.
ВСЖД – филиал РЖД 
',
            'study_result' => 'Знать: основные понятия и методы риск-менеджмента; правовые, нормативно-технические и организационно-правовые основы обеспечения безопасности и менеджмента риска на
предприятиях;
Уметь: выявлять риски и оценивать степень риска при управлении качеством; вести документацию по разработке и внедрению систем менеджмента риска;
Владеть: навыками применения инструментов и методов риск-менеджмента по снижению степени риска в системах качества
',
            'product_result' => 'Интерфейс web-приложения, готовый для передачи в разработку. Спроектирован с помощью методологии CJM, обоснованы возможные пользовательские цели и пути их решения.',
            'state_id' => '1',
            'supervisors' => 'Лонцих Павел Абрамович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Информационная система Байкальского региона',
            'places' => '15',
            'goal' => 'Создание информационной системы Байкальского региона',
            'description' => 'Целью проекта является создание прототипа интернет-сервиса с картой по Байкалу для российских и иностранных туристов, отличительными особенностями которого будут:
• Контент для туриста – предоставление информации для планирования отдыха по виду, времени, месту, стоимости и способу проезда.
• Единая автоматизированная площадка для турбизнеса – возможность для продвижения своих услуг.
• Интерактивная карта
Создание подобного ресурса создаст возможности для увеличения известности и доступности региона  для туристов, привлечет туристов, сделает местный туристический рынок более открытым, гибким, конкурентным.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Администрация п.Хужир',
            'study_result' => 'Уметь: анализировать и обобщать информацию в сфере маркетинга при управлении проектом;
Владеть: навыками анализа и обобщения информацию в сфере маркетинга при управлении проектом.
Уметь: использовать современные информационные технологии для сбора, анализа и обобщения информации; 
Владеть: Навыками использования современных информационных технологий для сбора, анализа и обобщения информации
',
            'product_result' => 'Прототип информационной системы Байкальского региона',
            'state_id' => '1',
            'supervisors' => 'Куклина Мария Владимировна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка 3D моделей для рынка Healthnet',
            'places' => '15',
            'goal' => '1) Совершенствование оказания медицинской помощи онкологическим пациентам. 
2) Улучшение качества обучения специалистов эндоскопии.
',
            'description' => 'Злокачественные новообразования (ЗНО) стоят на третьем месте по причинам смерти населения в Российской Федерации, после заболеваний сердечно-сосудистой системы и внешних причин.
В ходе проекта будет разработана 3D-модель, созданная на основе механических свойств нормальной и опухолевой тканей, а также программа, благодаря которой улучшится визуализация слабо-контактируемых злокачественных опухолей по МРТ/МСКТ-снимкам. 
Проект позволит с помощью данных технологий воспроизводить высокоточные трехмерные модели человеческих органов в реальном времени.  К аддитивным технологиям относится биомоделирование — создание точной виртуальной или реальной модели интересующей области человеческого организма на основе данных лучевой диагностики, как правило, компьютерной томографии (КТ). Также позволит усовершенствовать диагностику и планирование лечения онкологических пациентов, в том числе хирургическое, злокачественных опухолей.
3D-печать имеет огромный потенциал в медицине. С помощью этих технологий можно воспроизводить высокоточные трехмерные модели человеческих органов, а также некоторые имплантаты. Разработчики подобных технологий стремятся к созданию органов в реальном времени.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ГБУЗ Иркутский областной онкологический диспансер',
            'study_result' => 'В результате реализации проекта у студентов должна быть сформирована способность обеспечения практического применения результатов научного исследования:
ПКР-4. Способность определять стоимостную оценку основных ресурсов и затрат по реализации проекта ПКР-5. Способность организовать работу исполнителей в коллективе, находить и принимать управленческие решения в области организации работ по проекту и нормированию труда
ПКР-7. Способность обеспечить практическое применение результатов научного исследования
ПКР-11. Способность спланировать необходимый эксперимент, получить адекватную модель и исследовать ее 
',
            'product_result' => 'Главная ценность продукта заключатся снизить риски для здоровья пациента. 3D-печать в медицине позволяет с высокой точностью моделировать и создавать стоматологические имплантаты, протезы, прототипы органов. Также 3D-печать помогает уже работающим специалистам и медикам эффективнее учиться и повышать квалификацию, практиковаться и составлять точные планы хирургических операций',
            'state_id' => '1',
            'supervisors' => 'Конюхов Владимир Юрьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка модели коммерциализации результатов проекта «Исследование противокоррозионных свойств эпоксидных композиций, допированных ингибиторами коррозии',
            'places' => '15',
            'goal' => 'Создание эффективной модели продвижения на рынок результатов НИОКР ВУЗа на примере проекта «Исследование противокоррозионных свойств эпоксидных композиций, допированных ингибиторами коррозии»',
            'description' => '    При реализации НИОКР в рамках ВУЗов одной из основных задач является продвижение их результатов на рынок, а именно: поиск схем и возможностей коммерциализации, привлечение инвесторов, организация высокотехнологичного бизнеса, создание конкурентной среды технологического предпринимательства. Именно при разработке инновационного проекта, решающее значение имеют возможности коммерциализации результатов НИОКР, основанные на проведенных маркетинговых исследованиях. В рамках данного проекта (техническая аспект) исследуются способы защиты металлических конструкций от коррозийных процессов и разрабатывается модель продвижения на рынок результатов исследования (предпринимательский аспект).
      Коррозия металлов наносит значительный ущерб народному хозяйству нашей страны. Потери от коррозии металлов весомы, они складываются из стоимости изготовления металлических конструкций, пришедших в негодность вследствие коррозии, из безвозвратных потерь в виде продуктов коррозии и из косвенных убытков. В настоящее время большая часть нефтегазовых месторождений находится в поздней стадии разработки, когда снижается добыча и резко возрастает обводненность нефти. Такие месторождения характеризуются значительными осложнениями в процессах добычи, сбора и подготовки нефти, связанными с образованием стойких нефтяных эмульсий, отложениями АСПО, неорганических солей, наличием механических примесей, коррозионным разрушением оборудования и нефтепроводов.Увеличение коррозионной активности, добываемой совместно с нефтью воды на данном этапе является серьезной проблемой. Наиболее эффективным и технологически несложным защитным мероприятием является ингибиторная защита. 
     Именно поэтому исследования способов защиты металлических конструкций от коррозийных процессов и создание эффективной модели бизнеса на основе этих исследований являются крайне актуальными. 
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'соискатель ИрНИТУ (сотрудник ИАЗ)',
            'study_result' => 'В результате реализации проекта у студентов должна быть сформирована способность обеспечения практического применения результатов научного исследования (ПКР-7, в части ПКР-7.3, ПКР-7.4) и: 
знания основных способов коммерциализации результатов НИОКР;
умения обеспечения практического применения результатов научного исследования;
навыки осуществления деятельности по продвижению на рынок результатов НИОКР. 
',
            'product_result' => 'Практические рекомендации (алгоритм) по продвижению на рынок результатов НИОКР, осуществляемых в ИрНИТУ',
            'state_id' => '1',
            'supervisors' => 'Уразова Нина Геннадьевна ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка рецептур продуктов питания функционального назначения на основе плодоовощного растительного сырья Иркутской области и организация их безопасного производства ',
            'places' => '15',
            'goal' => 'Дать обучающимся возможность приобрести востребованные практико-ориентированные знания, умения, навыки в экспериментальной отработке рецептур функциональных пищевых продуктов и подготовки документации для обеспечения качества, и безопасности их производства.  ',
            'description' => 'Продукты функционального питания и их компоненты могут модифицировать метаболизм в организме человека и играть важную роль в предотвращении возникновения различных заболеваний. При создании безопасного производства продуктов функционального питания необходимо знать химический состав сырья, пищевую ценность, специальные приемы технологической обработки.
Для обеспечения качества и безопасности продуктов питания необходимо знать и уметь определять факторы, оказывающие негативное влияние на безопасность готовой продукции, зависимость этих факторов от применяемого сырья, технологии, оборудования и упаковки. Применение специальных систем качества и безопасности пищевой продукции позволяет управлять рисками внутри производства и обеспечивать сохранение здоровья потребителя. 
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: знать основные принципы организации своей работы, требования к представлению результатов, инструменты поиска информации
Умения: формулировать цели и задачи; творчески и критически мыслить
Навыки: работа в команде, получение первичной информации
',
            'product_result' => '1.Разработана рецептура функционального пищевого продукта, проведены эксперименты применения рецептуры с отработкой параметров процесса производства, получен лабораторный образец. 
2.Определены этапы построения системы безопасности пищевой продукции, разработаны обязательные мероприятия для обеспечения безопасности производства, определены возможные риски пищевой безопасности для готовой продукции
3. Проведены исследования на соответствие показателей качества лабораторного образца требованиям ГОСТ, подтверждено функциональное назначение. Разработана технологическая документация и рекомендации по применению.
',
            'state_id' => '1',
            'supervisors' => 'Куприна О.В.       , Евстафьева О.А.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка рецептур продуктов питания функционального назначения на основе растительного сырья Иркутской области и организация их безопасного производства ',
            'places' => '15',
            'goal' => 'Дать обучающимся возможность приобрести востребованные практико-ориентированные знания, умения, навыки в экспериментальной отработке рецептур функциональных пищевых продуктов и подготовки документации для обеспечения качества, и безопасности их производства',
            'description' => 'Продукты функционального питания и их компоненты могут модифицировать метаболизм в организме человека и играть важную роль в предотвращении возникновения различных заболеваний. При создании безопасного производства продуктов функционального питания необходимо знать химический состав сырья, пищевую ценность, специальные приемы технологической обработки.
Для обеспечения качества и безопасности продуктов питания необходимо знать и уметь определять факторы, оказывающие негативное влияние на безопасность готовой продукции, зависимость этих факторов от применяемого сырья, технологии, оборудования и упаковки. Применение специальных систем качества и безопасности пищевой продукции позволяет управлять рисками внутри производства и обеспечивать сохранение здоровья потребителя. 
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: знать основные принципы организации своей работы, требования к представлению результатов, инструменты поиска информации
Умения: формулировать цели и задачи; творчески и критически мыслить
Навыки: работа в команде, получение первичной информации
',
            'product_result' => '1.Разработана рецептура функционального пищевого продукта, проведены эксперименты применения рецептуры с отработкой параметров процесса производства, получен лабораторный образец. 
2.Определены этапы построения системы безопасности пищевой продукции, разработаны обязательные мероприятия для обеспечения безопасности производства, определены возможные риски пищевой безопасности для готовой продукции
3. Проведены исследования на соответствие показателей качества лабораторного образца требованиям ГОСТ, подтверждено функциональное назначение. Разработана технологическая документация и рекомендации по применению.
',
            'state_id' => '1',
            'supervisors' => 'Гусакова Г.С., Евстафьева О.А.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Организация безопасного производства экологически чистых продуктов питания на основе растительного сырья Иркутской области',
            'places' => '15',
            'goal' => 'Дать обучающимся возможность приобрести востребованные практико-ориентированные знания, умения, навыки в подготовки документации для обеспечения качества, и безопасности их производства',
            'description' => 'Для обеспечения качества и безопасности продуктов питания необходимо знать и уметь определять факторы, оказывающие негативное влияние на безопасность готовой продукции, зависимость этих факторов от применяемого сырья, технологии, оборудования и упаковки. Применение специальных систем качества и безопасности пищевой продукции позволяет управлять рисками внутри производства и обеспечивать сохранение здоровья потребителя. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: знать основные принципы организации своей работы, требования к представлению результатов, инструменты поиска информации
Умения: формулировать цели и задачи; творчески и критически мыслить
Навыки: работа в команде, получение первичной информации
',
            'product_result' => '1.Определены этапы построения системы безопасности пищевой продукции, разработаны обязательные мероприятия для обеспечения безопасности производства, определены возможные риски пищевой безопасности для готовой продукции',
            'state_id' => '1',
            'supervisors' => 'Евстафьева О.А.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Спортивные напитки на основе растительного сырья Иркутской области',
            'places' => '15',
            'goal' => 'Дать обучающимся возможность приобрести востребованные практико-ориентированные знания, умения, навыки в подготовки документации для обеспечения качества, и безопасности их производства',
            'description' => 'Продукты функционального питания и их компоненты могут модифицировать метаболизм в организме человека и играть важную роль в предотвращении возникновения различных заболеваний. При создании безопасного производства продуктов функционального питания необходимо знать химический состав сырья, пищевую ценность, специальные приемы технологической обработки',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: знать основные принципы организации своей работы, требования к представлению результатов, инструменты поиска информации
Умения: формулировать цели и задачи; творчески и критически мыслить
Навыки: работа в команде, получение первичной информации
',
            'product_result' => '1.Разработана рецептура функционального пищевого продукта, проведены эксперименты применения рецептуры с отработкой параметров процесса производства, получен лабораторный образец. ',
            'state_id' => '1',
            'supervisors' => 'Гусакова Г.С.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка технологии получения пектинового экстракта на основе растительного сырья Иркутской области и организация их безопасного производства',
            'places' => '15',
            'goal' => 'Дать обучающимся возможность приобрести востребованные практико-ориентированные знания, умения, навыки в подготовки документации для обеспечения качества, и безопасности их производства.  ',
            'description' => 'Продукты функционального питания и их компоненты могут модифицировать метаболизм в организме человека и играть важную роль в предотвращении возникновения различных заболеваний. При создании безопасного производства продуктов функционального питания необходимо знать химический состав сырья, пищевую ценность, специальные приемы технологической обработки.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: знать основные принципы организации своей работы, требования к представлению результатов, инструменты поиска информации
Умения: формулировать цели и задачи; творчески и критически мыслить
Навыки: работа в команде, получение первичной информации
',
            'product_result' => '1.Разработана ТИ функционального пищевого продукта, проведены эксперименты применения с отработкой параметров процесса производства, получен лабораторный образец. 
2.Определены этапы построения системы безопасности пищевой продукции, разработаны обязательные мероприятия для обеспечения безопасности производства, определены возможные риски пищевой безопасности для готовой продукции
3. Проведены исследования на соответствие показателей качества лабораторного образца требованиям ГОСТ, подтверждено функциональное назначение. Разработана технологическая документация и рекомендации по применению.
',
            'state_id' => '1',
            'supervisors' => 'Гусакова Г.С.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Переработка пластиковых отходов.',
            'places' => '15',
            'goal' => 'Исследовать возможности переработки бытовых пластиковых отходов.',
            'description' => 'В рамках проекта изучить существующие способы переработки пластиковых отходов, определить наиболее перспективный  способ, провести эксперимент с разными видами пластиков. Исследовать полученные материалы.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: способы переработки различных видов пластика,  и методики определения свойств готовых продуктов.
Умения: подбирать технологию переработки к определенному сырью.
Навыки: работы с сырьем в лаборатории.
',
            'product_result' => 'Получение синтетического  топлива и определение его свойств. ',
            'state_id' => '1',
            'supervisors' => 'Оборина М.А.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Масла  ',
            'places' => '15',
            'goal' => 'Изучение свойств масел разной основы и разного состава',
            'description' => 'При производстве товарных масел, разной масляной основы, необходимо введение различных групп присадок (депрессорных, смазывающих, диспергирующих и др.). отвечающих за эксплуатационные характеристики качества товарной продукции. Базы данных на содержание и состав присадок по маслам закрыты, поэтому введение присадок в базовую нефтяную основу и анализ изменения свойств, а также сравнение с товарными производителями, для учебного процесса является актуальной задачей.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Кафедра СДМ (получение образцов для дальнейшего исследования)',
            'study_result' => 'Знания: технологических процессов и основного оборудования производства нефтяных масел; основных параметров химмотологии смазочных материалов
Умения: выявления возможных причин, вызывающих отклонения от норм качества готовой продукции
Навыки: работы с маслами, а также технических требований к нефтяным маслам и их примения
',
            'product_result' => 'Получение масляной основы с заданными свойствами в соответствие с нормативной документацией и существующими аналогами товарной продукции.  ',
            'state_id' => '1',
            'supervisors' => 'Подгорбунская Татьяна Анатольевна, Белозерова Ольга Викторовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Пластичные смазки',
            'places' => '15',
            'goal' => 'Получение пластичных смазок ',
            'description' => 'В настоящее время промышленность стремительно развивается и характеризуется созданием высокопроизводительных машин и механизмов, генерирующих и передающих большие мощности. По мере распространения технического прогресса усиливается энергонапряженность множественных узлов трения и, соответственно, возрастает роль смазочного материала как наиболее значимого элемента техники, повышаются и становятся разнообразнее требования к его качеству. Работоспособность техники, развитие автомобилестроения и других видов транспортного машиностроения, а, следовательно, и эффективность функционирования народного хозяйства серьезно зависят от их обеспеченности высокоэффективными смазочными материалами – пластичными смазками.
Проблема – снизить износ поверхностей, подвергающихся трению и нагрузкам. Это позволит продлить срок эксплуатации деталей механизмов, сделает их более долговечными и надежными. В ряде случаев смазки применяются не только для снижения износа, но и для предотвращения трения и заклинивания смежных поверхностей. Благодаря своей пластичности и составу эти мазки защищают от проникновения агрессивных веществ, газов и паров. Также практически все консистентные смазки отличаются антикоррозионными свойствами и т.д. Необходимо расширять сырьевую базу и увеличивать рабочий диапазон применения пластичных смазок
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: основные параметры химмотологии смазочных материалов, технологические процессы и основное оборудование производства масел
Уметь: обосновывать технические требования к пластичным смазкам для обеспечения их рационального применения в современной технике 
Владеть основными требованиями предъявляемые к пластичным смазкам, и научными и практическими достижениями в области химмотологии смазок. 
',
            'product_result' => 'Пластичные смазки с заданными свойствами. Позволит расширить ассортимент данных нефтепродуктов.',
            'state_id' => '1',
            'supervisors' => 'Белозерова Ольга Викторовна, Подгорбунская Татьяна Анатольевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Малотоннажная химия',
            'places' => '15',
            'goal' => 'Разработать технологическую концепцию переработки пластиковых отходов',
            'description' => 'Самые распространенные способы переработки пластика – это механический и термический. При механическом способе пластиковые отходы подвергают дроблению, измельчению и перетиранию до получения порошка, который далее добавляют в расплав при получении нового материала. А самый распространенный термический способ – это сжигание, при котором происходят выбросы оксида углерода в атмосферу. Данный проект посвящен переработке пластиковых отходов с целью получения исходных мономеров, продуктов имеющих высокую стоимость и востребованность на рынке химических продуктов.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Ангара-Реактив, ООО зарегистрирована по адресу 665809, Иркутская обл., г. Ангарск, тер. Первый промышленный массив, кв-л 7, стр. 22, ОФИС 20. Директор организации ООО "Ангара-Реактив" Шатохина Валентина Александровна. Основным видом деятельности компании является Производство прочих химических продуктов, не включенных в другие группировки. Также Ангара-Реактив, ООО работает еще по 25 направлениям.
ООО "Ангара-Реактив" присвоен ИНН 3801059241, КПП 380101001, ОГРН 1023800520501, ОКПО 55573556
Действует с 10.07.2001
',
            'study_result' => 'Знать сырье органического синтеза, основные процессы органического синтеза, способы оценки качества целевого продукта, достоверные источники информации и базы данных в области химии.
Уметь искать информацию о химических соединениях по формульным указателям и ключевым словам, составлять химическую схему получения целевого продукта из доступного сырья.
Владеть критериями выбора оптимальной схемы химической схемы синтеза целевого продукта
',
            'product_result' => 'Удобный, безопасный и дешевый способ переработки пластиковых отходов',
            'state_id' => '1',
            'supervisors' => 'Боженков Георгий Викторович, Чайка анна Анатольевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Изучение влияния углеводородного состава высокооктановых бензинов на его эксплуатационные характеристики',
            'places' => '15',
            'goal' => 'Изучить влияние углеводородного состава высокооктановых бензинов  производства АО «АНХК» на его эксплуатационные характеристики.',
            'description' => 'Важной задачей российской нефтепереработки, повышающей ее конкурентоспособность, является доведение эксплуатационных и экологических свойств автомобильных бензинов до требований мирового уровня. Растет потребность в моторных топливах с октановым числом 95 и выше.  Использование в составе бензинов различного рода добавок и присадок, обеспечивает повышение октанового числа, но при этом необходимо знать какое влияние они окажут на углеводородный состав и как следствие на эксплуатационные характеристики топлива. Поэтому изучение влияния углеводородного состава высокооктановых бензинов  производства АО «АНХК» на его эксплуатационные характеристики является актуальной задаей.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО «АНХК»',
            'study_result' => 'Знания: основные постулаты эффективности добавок и присадок, применяемых для улучшения эксплуатационных характеристик автобензинов
Умения: на основании теории объяснить эффективность действия октаноповышающих добавок и присадок
Навыки: владеть навыками оценки влияния углеводородного состава высокооктановых бензинов на его эксплуатационные характеристики.
',
            'product_result' => 'Изучено влияние углеводородного состава высокооктановых бензинов  производства АО «АНХК» на его эксплуатационные характеристики.',
            'state_id' => '1',
            'supervisors' => 'Ганина Анна Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Изучение влияния соотношения депрессора и дисперганта в присадке, применяемой для улучшения низкотемпературных характеристик тяжелых компонентов топлива судового маловязкого',
            'places' => '15',
            'goal' => 'Подбор оптимального соотношения депрессора и дисперганта в присадке, применяемой для улучшения низкотемпературных характеристик компонентов топлива судового маловязкого производства АО «АНХК»',
            'description' => 'Эффективность нефтеперерабатывающих заводов в России напрямую зависит от глубины переработки нефти, именно поэтому модернизация в этом направление является приоритетной задачей. Одним из направлений увеличения глубины переработки является снижения выработки тяжелых топлив за счет использования современных методов компаундирования. Так, применение компонентов тяжелых топлив в приготовлении топлива судового маловязкого с использованием правильно подобранных присадок позволит использовать их в составе светлых нефтепродуктов, тем самым увеличить глубину переработки. Так как эффективность присадок зависит от соотношения в ней депрессора и дисперганта, а чаще всего это соотношение является Ноу-Хау производителя, поэтому подбор оптимального соотношения составных частей присадки для улучшения низкотемпературных характеристик тяжелых компонентов топлива судового маловязкого производства АО «АНХК» является актуальной задачей.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО «АНХК»',
            'study_result' => 'Знания: основные постулаты эффективности присадок, применяемых для улучшения низкотемпературных свойств
Умения: на основании теории объяснить эффективность действия депрессорно-диспергирующих присадок
Навыки: владеть навыками оптимизации и выбора наиболее эффективного соотношения депрессора и дисперганта в составе депрессорно-диспергирующей присадки.
',
            'product_result' => 'Подбор оптимального соотношение депрессора и дисперганта в присадке, применяемой для улучшения низкотемпературных характеристик компонентов топлива судового маловязкого производства АО «АНХК»',
            'state_id' => '1',
            'supervisors' => 'Ганина Анна Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Полифункциональные (нано)композиты – молекулярный дизайн, структурные особенности, фундаментальные свойства.',
            'places' => '15',
            'goal' => 'Создание  новых полифункциональных композитов с целенаправленно формируемой структурой и свойствами для водородной энергетики.',
            'description' => 'Полимерные композиты, сформированные в результате комбинации компонентов различной химической природы, представляют собой новый класс композиционных материалов с характеристиками, превосходящими аналогичные показатели отдельно взятых составляющих. В результате композиционного эффекта они проявляют уникальные механические, магнитные, оптоэлектронные и др. свойства, обладают высокой химической и термической стабильностью, а также устойчивостью к УФ-излучению. Существенное влияние на свойства таких композитов оказывает переход к нанометровому диапазону размеров индивидуальных компонентов системы. Обширную группу органо-неорганических композитов составляют структуры на основе диоксида кремния, полученные в результате золь-гель процесса с участием тетралкоксисиланов в присутствии высокомолекулярных соединений. Основная роль кремнийорганического прекурсора в таких системах сводится к регулированию процесса структурообразования композита, возможности управления размерами наночастиц и физико-техническими характеристиками материала. При этом кремниевый компонент композита - диоксид кремния, не содержит функциональных групп. В качестве носителя химически-активных фрагментов выступают функциональные высокомолекулярные соединения. Строение функциональных групп предшественников композитов позволит регулировать особенности их структуры и комплекс физико-химических свойств. В результате проведенных исследований будет установлена принципиальная возможность использования предлагаемых полифункциональных композитов при конструировании топливных элементов.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: Способы и лабораторные методы получения полимерных мембран.
Умения: Выбирать рациональную схему получения полимерной мембраны для топливных элементов с заданными эксплуатационными свойствами.
Навыки: Синтезировать полимерной мембраны для топливных элементов с заданными эксплуатационными свойствами
',
            'product_result' => 'Полимерные мембраны для топливных элементов, обладающие протонной проводимостью. Физический прототип.',
            'state_id' => '1',
            'supervisors' => 'Шаглаева Нина Савельевна, Баяндин Виктор Владимирович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Статистическая обработка эксперимента  ',
            'places' => '15',
            'goal' => 'Анализ экспериментальных данных, способность обсуждать полученные результаты и предвидеть течение эксперимента в перспективе ',
            'description' => 'Проведение эксперимента - это только часть научной задачи. Главная роль исследователя планирование процесса заранее (предвидеть разные направления) и умение интерпретировать полученные данные, которые в дальнейшем должны реализоваться в научной публикации. ',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать принципы измерения и аппаратурное оформление, возможности и ограничения каждого метода
Уметь обобщать полученные результаты Владеть методами планирования и проведения эксперимента и оценки полученных результатов
',
            'product_result' => 'не указан',
            'state_id' => '1',
            'supervisors' => 'Айзина Юлия Александровна, Подгорбунская Татьяна Анатольевна ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Браслеты с GPS-трекерами для контроля за состоянием здоровья, подключением техники безопасности и улучшением производственного травматизма.',
            'places' => '15',
            'goal' => 'оснащение производственных рабочих браслетами с GPS-трекерами для контроля за состоянием здоровья, подключением техники безопасности и улучшением производственного травматизма.',
            'description' => 'ввиду удаленности большинства ремонтных участков Группы Компаний от специалистов по охране труда существует потребность в удаленном мониторинге соблюдения техники безопасности и состояния здоровья рабочих. В рамках проекта предлагается разработать прототип, основанный на измерении показателей состояния сотрудников с возможностью геопозиционирования и разграничения рабочих и опасных зон.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Лаборатория энергетики Акселерационная программа, реализуемая ГК «ЕвроСибЭнерго» на базе ИРНИТУ



конкурс научно-исследовательских проектов "Авангард науки"

Лаборатория энергетики:
“Оснащение производственных рабочих браслетами с GPS-трекерами для контроля за состоянием здоровья, подключением техники безопасности и улучшением производственного травматизма.”
',
            'study_result' => 'Знать виды, функциональное назначение, свойства беспроводных персональных сетей 
Уметь составлять алгоритм работы устройства для конкретного назначения.
Владеть навыками использования программных продуктов, предназначенных для программирования миниатюрных вычислительных устройств
',
            'product_result' => 'Определен оптимальный функционал, заданы ключевые параметры отслеживания.
Разработано техническое решение. Проработаны возможные поставщики оборудования, программного обеспечения.
',
            'state_id' => '1',
            'supervisors' => 'Губин Никита Андреевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Наблюдение измеряемых параметров физических сред и предметов с использованием  децентрализованных самоорганизующихся сетей',
            'places' => '15',
            'goal' => 'Формирование знаний о структуре сети, основных протоколах и порядке передачи данных, удаленном мониторинге и измерении физических величин, перспективных способах измерений и передачи данных нового поколения.',
            'description' => 'Глобализация рынков, конкуренция, стремительное развитие технологий и наукоемких инноваций, появление сверхсложных научно-технических проблем требует от промышленности гораздо более быстрых темпов развития, предельно коротких циклов контроля и измерения физических характеристик в процессе разработки и производства продукции высокого качества. 
Спрос на сложные многофункциональные инженерные изделия стимулирует процесс постоянных модификаций как самих устройств так и способов их взаимодействия.
Перспективным трендом является создание беспроводных децентрализованных самоорганизующихся сенсорных сетей, состоящих из беспроводных сенсоров и управляющих устройств способных к самоорганизации с помощью интеллектуальных алгоритмов,
В рамках проекта студентам предлагается провести анализ новых способов удаленного мониторинга и контроля, получить общие навыки по измерениям и мониторингу состояния  здоровья человека, окружающей среды, функционирования производственных и транспортных систем, учета различных ресурсов и др. 
Знания, которые будут получены учащимися в ходе проектной работы, могут быть применены в их дальнейшей научно-исследовательской деятельности.   
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Лаборатория энергетики Акселерационная программа, реализуемая ГК «ЕвроСибЭнерго» на базе ИРНИТУ



конкурс научно-исследовательских проектов "Авангард науки"

Лаборатория энергетики:
1)интеллектуальная система смазки подшипников электромашин постоянного тока.
2)система централизованной смазки стрелы и находящейся на ней элементов.
',
            'study_result' => 'Знать виды, функциональное назначение, свойства беспроводных персональных сетей 
Уметь составлять алгоритм работы устройства для конкретного назначения.
Владеть навыками использования программных продуктов, предназначенных для программирования миниатюрных вычислительных устройств
',
            'product_result' => 'Разработка лабораторного стенда, с сетью взаимосвязанных заменяемых беспроводных датчиков.',
            'state_id' => '1',
            'supervisors' => 'Губин Никита Андреевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Система контроля целостности металлоконструкции стрелы экскаватора марки ЭШ',
            'places' => '15',
            'goal' => 'Разработка системы контроля целостности металлоконструкции стрелы экскаватора марки ЭШ',
            'description' => 'Измерение целостности металлоконструкции стрелы эксковатора',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Лаборатория энергетики Акселерационная программа, реализуемая ГК «ЕвроСибЭнерго» на базе ИРНИТУ



конкурс научно-исследовательских проектов "Авангард науки"

Лаборатория энергетики:
“ Система контроля целостности металлоконструкции стрелы экскаватора марки ЭШ.”
',
            'study_result' => 'Знать виды, функциональное назначение, свойства датчиков угла наклона 
Уметь составлять алгоритм работы программы. 
Владеть навыками использования программных продуктов, предназначенных для программирования микроконтроллеров
',
            'product_result' => 'Система контроля целостности металлоконструкции стрелы экскаватора марки ЭШ',
            'state_id' => '1',
            'supervisors' => 'Ченский Дмитрий Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Вибродиагностика сороудерживающих решеток',
            'places' => '15',
            'goal' => 'Разработка системы мониторинга уровня вибрации сороудерживающих решёток братской ГЭС с целью выявления предельных нагрузок.',
            'description' => 'Вибродиагностика сороудерживающих решёток братской ГЭС с целью выявления предельных нагрузок.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Лаборатория энергетики Акселерационная программа, реализуемая ГК «ЕвроСибЭнерго» на базе ИРНИТУ



конкурс научно-исследовательских проектов "Авангард науки"

Лаборатория энергетики:
“ Вибродиагностика сороудерживающих решеток.”
',
            'study_result' => 'Знать виды, функциональное назначение, свойства датчиков вибрации  
Уметь составлять алгоритм работы устройства для конкретного назначения.
Владеть навыками использования программных продуктов, предназначенных для программирования микроконтроллеров
',
            'product_result' => 'Система мониторинга уровня вибрации сороудерживающих решёток',
            'state_id' => '1',
            'supervisors' => 'Ченский Дмитрий Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'влияние  пористых  алюмосиликатных  матриц  на свойства протон-проводящих мембран  для топливных элементов',
            'places' => '15',
            'goal' => 'Изучить влияние различных пористых алюмосиликатных матриц, в частности, цеолитов разных структурных типов на характеристики протон-проводящих мембран для топливных элементов.',
            'description' => 'Ионообменные мембраны на основе поливинилового спирта (ПВС) представляют собой перспективную группу материалов для применения в тведополимерных топливных элементах (ТПТЭ) благодаря высокой гидрофильности, способности к пленкообразованию, низкой стоимости, хорошим механическим свойствам и возможности сшивания ПВС различными химическими реагентами. Для улучшения технических характеристик таких мембран, используют керамические материалы на основе оксидов алюминия, кремния, титана, олова, циркония и др., которые способные повысить ионную проводимость, химическую и термическую стабильность, а также механическую прочность мембран. В настоящее время   большое внимание уделяется  получению новых биоразлагаемых протонообменных мембран для ТПТЭ, полученных на основе сшитого сульфоянтарной кислотой поливинилового спирта с добавлением в качестве кислотного компонента – цеолитов. В работе предлагается для получения таких мембран использовать цеолиты различных структурных типов и изучить влияние не только структурного типа цеолита, но и его содержания на характеристики мембран. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: углубленные знания золь-гель технологии; технологии синтеза цеолитных материалов, методов тестирования характеристик мембран для ТПТЭ; 
Умения: выбрать соответствующие методы и подходы для синтеза мембран для ТПТЭ;
Навыки: использования методов синтеза протон-проводящих мембран и тестирования их рабочих характеристик.
',
            'product_result' => 'Предполагается получение протон-проводящих мембран на основе цеолитов разных структурных типов и изучение их характеристик. ',
            'state_id' => '1',
            'supervisors' => 'Скорникова Светлана Афанасьевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'влияние  модифицирования  алюмосиликатов  на  их  физико-химические характеристики',
            'places' => '15',
            'goal' => 'Исследовать влияние различных способов модифицирования синтетических алюмосиликатов, в том числе цеолитов, на их физико-химические характеристики. ',
            'description' => 'Цеолиты находят широкое применение в нефтехимии и нефтепереработке. Кроме этого в последнее время возрос интерес к цеолитам и в качестве уникальных адсорбентов, которые нашли применение и в медицине. С этой целью возрос интерес исследователей к разработке нетрадиционных способов их модифицирования для получения новых характеристик, таких как микро-мезопористая структура, магнитные характеристики, кислотные свойства и др. В связи с этим целью данного проекта является  изучение влияние различных способов модифицирования цеолитов на их физико-химические свойства.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: получены углубленные знания в области поверхностных явлений в дисперсных системах и физико-химии наноразмерных систем; 
Умения: выбрать оптимальные способы модифицирования цеолитов; 
Навыки: использовать их для получения соответствующих характеристик цеолитов
',
            'product_result' => 'Получены модифицированные образцы цеолитов, изучены их характеристики. ',
            'state_id' => '1',
            'supervisors' => 'Скорникова Светлана Афанасьевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'синтез  магнитоуправляемых композитов на основе цеолитов и магнитных наночастиц',
            'places' => '15',
            'goal' => 'Целью проекта является создание наноразмерных магнитных цеолитов путем добавления магнитных F3O4 частиц в процессе кристаллизации, для получения кристаллов цеолита с магнитным ядром внутри структуры.',
            'description' => 'Получение магнитных нанокомпозитов на основе пористых носителей является одним из возможных способов разработки систем адресной магнитоуправляемой доставки лекарственных препаратов. Определенный интерес вызывает получение композитных материалов на основе цеолитов и наночастиц магнетита. Цеолиты - это микропористые кристаллические вещества. Кристалличность обеспечивает механическую и химическую стабильность цеолитов, одинаковый и контролируемый размер пор, каналов, полостей. Это свойство определяет использование цеолитов в качестве молекулярных сит, адсорбентов, детергентов. Благодаря своим ионообменным и сорбционным свойствам, широко применяются для химической, нефтехимической и нефтеперерабатывающей промышленности, экологии и медицины.  Цеолиты благодаря особенностям своей структуры являются уникальными сорбентами, позволяющими осуществлять эффективную адсорбцию и высвобождение лекарственных препаратов в физиологической среде организма, при этом они являются нетоксичными и биоразлагаемыми материалами. Модифицирование цеолитов магнитными наночастицами позволяет придать им магнитные свойства',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: дополнительные знания в области нанохимии магнитных материалов;
Умения: применять методы соосаждения, золь-гель методы и гидротермальный синтез для получения магнитных композитов на основе цеолитов;
Навыки: гидротермального синтеза цеолитов с магнитным ядром, позволяющие получить материалы с магнитными свойствами и высокой адсорбционной способностью.
',
            'product_result' => 'Планируется получить магнитоуправляемый композитов на основе цеолитов и магнитных наночастиц. Данный нанокомпозит будет иметь уникальные свойства цеолита и обладать магнитными свойствами, что позволит увеличить области возможного его применения.  ',
            'state_id' => '1',
            'supervisors' => 'Скорникова Светлана Афанасьевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Выполнение планировочного раздела проектной документации',
            'places' => '15',
            'goal' => 'разработка раздела проектной документации - Генеральный План',
            'description' => 'Ознакомление с функциями архитектора,  главного архитектора проекта и главного инженера проекта, организация процесса проектирования.
Состав проектной документации «П» и объем выполнения рабочей документации «Р»
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: основные требования к выполнению раздела проектной документации. 
Умения: обосновывать принятые проектные решения
Навыки: оформления проекта
',
            'product_result' => 'Комплект чертежей',
            'state_id' => '1',
            'supervisors' => 'Иванова Анастасия Сергеевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Малоэтажный жилой дом',
            'places' => '15',
            'goal' => 'Создание эскизного концептуального проекта малоэтажного жилого дома',
            'description' => 'Определения понятия предмета проектирования - (малоэтажный жилой дом: типология, эволюция, современные тенденции).  Определение композиционно-образного решения жилого дома;  анализ градостроительных условий, определение функциональной структуры и объемно - планировочной композиции жилого дома:  (план фундамента, поэтажные планы, план крыши, узлы, детали, разрезы, спецификации). Эскизы фрагментов, планировка, этажей и уровней. ',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: Основы взаимодействия со специалистами смежных областей. Основа архитектурно-строительного проектирования
Умения: Взаимодействовать со специалистами смежных областей входе разработки жилых объектов. Участвовать в разработке проектной документации. Грамотно представлять проектный замысел, передавать идеи средствами компьютерной графики
Навыки: Работы в творческом коллективе; Навыки участия в разработки проектной документации
',
            'product_result' => 'Эскизный концептуальный проекта малоэтажного жилого дома',
            'state_id' => '1',
            'supervisors' => 'Дайнеко Виктория Владимировна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Реновация общественного здания',
            'places' => '15',
            'goal' => 'Цель продукта: Усовершенствование дизайна городской архитектурной среды, профессиональное применение современных материалов.
Образовательная цель:  формирование у студентов соответствующих  знаний, навыков, мотивации  и ответственности
',
            'description' => 'Предполагаемая организация делает запрос на выполнение реновации с возможной с архитектурной реконструкцией общественного здания, включая интерьер, экстерьер и благоустройство',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Предприятие, сторонняя организация',
            'study_result' => 'Знания:    принимать объемно-пространственные, конструктивные, художественные, инженерные решения, понимать эксплуатационные качества объектов проектирования
Умения:  учитывать взаимосвязь всех этих компонентов - объемно-пространственных, художественных, конструктивных, инженерных, эксплуатационных качеств объектов проектирования
Навыки:  формировать объемно-пространственную среду, учитывая ее художественные, конструктивные, инженерные и эксплуатационные особенности
',
            'product_result' => 'Стильное современное общественное пространство здания и его окружения с индивидуальной концепцией, с разработанными эксклюзивными авторскими предметами и малыми архитектурными формами.',
            'state_id' => '1',
            'supervisors' => 'Глебова Наталья Моисеевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Интерьер музея. «Концепция Школьного музея МБОУ «Буретская СОШ».',
            'places' => '15',
            'goal' => 'Реализовать умение выполнять поиск, критический анализ и синтез информации, применять системный подход для решения задач, разработать проект на основе оценки требований, ресурсов и ограничений, работать в команде, управлять своим временем, выстраивать и реализовывать траекторию создания целостного, насыщенного многофункциональной инфраструктурой пространства',
            'description' => 'Проект музея направлен на сохранение исторической памяти и наследия; развитие интереса к истории, углубление знаний по истории и формирование на конкретном историческом материале гражданско – патриотических чувств и убеждений, утверждение значимости таких ценностей. Воспитание у учащихся стремления к овладению глубокими знаниями, высоконравственными качествами в процессе изучения истории, культуры родного края. Основные  задачи программы-проекта: Через краеведческий материал осуществлять связь с окружающей обстановкой, воспитания патриотического чувства, любви к Родине, к родному городу, своему поселку. Для архитектурно-дизайнерской классификации существенное значение имеет комплексный характер экспозиции; развитый состав помещений, включающий зоны для постоянной экспозиции, временных выставок и лекций, фондохранилища, мастерские и лаборатории, административные, подсобные и хозяйственные помещения. представляющие сочетание новых пространств с существующими. Общепринятое понимание музея как хранителя подлинных экспонатов и место их показа уходит на второй план: на первое место выделяется не показ музейными средствами, а создание пространства архитектурно-художественными средствами. Важную роль в архитектурно-пространственном формировании интерьера имеет существующее окружение, сохраняемая или создаваемая среда, в которую включается комплекс. Учитывая ярко выраженную специфику, музеи школ могут быть выделены по пространственным решениям в самостоятельную группу.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'МБОУ «Буретская СОШ», Иркутская обл., директор Серова С.В.',
            'study_result' => 'Знания: основные принципы планирования и организации своей деятельности, инструменты поиска информации, основные стратегии поиска информации, требования и ресурсные ограничения  к представлению результатов проекта, основные приемы управления.
Умения: использовать различные инструменты поиска и анализа информации, критически оценивать и подготовить полученные результаты, выполнять критический анализ и сформулировать перечень недостающих  знаний, организовывать работы команды (коллектива) для достижения поставленных целей.
Навыки: поиска и анализа информации, определения и постановки задач,  организации работы команды, четкого формулирования запроса на поиск новых знаний, на основе полученной первичной информации сформировать комплексное понимание предмета изучения, разработки стратегии разработки проекта  на основе сформулированного запроса, презентации результатов проекта,навыками командной работы и управления коллективом.
',
            'product_result' => '«Концепция Школьного музея» (альбом чертежей)',
            'state_id' => '1',
            'supervisors' => 'Хохрин Евгений Викторович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Интерьер музея. «Разработка интерьера Школьного музея МБОУ «Буретская СОШ».',
            'places' => '15',
            'goal' => 'Реализовать умение выполнять поиск, критический анализ и синтез информации, применять системный подход для решения задач, разработать проект на основе оценки требований, ресурсов и ограничений, работать в команде, управлять своим временем, выстраивать и реализовывать траекторию создания целостного, насыщенного многофункциональной инфраструктурой пространства.',
            'description' => 'Категория музея определяется величиной фондов и количеством посещений. Музеи подразделяются по организационному признаку на центральные, осуществляющие научно-методическое руководство своей группой; появились музеи, представляющие собой концептуальный литературный художественный образ. Изменилась стилевая характеристика зданий, вызванная свободным решением разверток стен  и планов. Как и другие типы пространств, музеи проектируются вразличных стилях. Стилевая направленность часто совпадает с профилем музея. Известны такие как: краеведческие, региональные, мемориальные, в память исторических событий, современного искусства, промышленности и техники, частных коллекций, города и др. Музей характеризуется для городов и населённых мест с учётом различных концепций развития комфортной социальной среды. Поиск архитектурно-художественного образа музейного здания является одной из первостепенных задач проектирования. Специальное внимание уделяется художественному, эмоциональному, выразительному решениюпространства музея.
Интерьер музея проектируется из расчёта единовременного пребывания в нём 15 и более посетителей
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'МБОУ «Буретская СОШ», Иркутская обл.,
директор Серова С.В
',
            'study_result' => 'Знания: принципы формирования командной стратегии, нормы и способы социального взаимодействия, различные инструменты поиска и анализа информации, основные способы выражения авторского архитектурного замысла, технологии архитектурно-строительного проектирования, 
Умения: на основе синтеза и анализа информации получить представление о связях между составляющими предмета изучения, учитывать взаимосвязь объемно-пространственных, конструктивных, инженерных решений и эксплуатационных качеств объектов проектирования,
Навыки: уметь спланировать и реализовать проект с учетом ресурсных ограничений и требований к результату  проекта; презентации результатов проекта,
',
            'product_result' => '«Интерьер Школьного музея» (альбом чертежей)',
            'state_id' => '1',
            'supervisors' => 'Смольков Сергей Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Выполнение архитектурного раздела проектной документации',
            'places' => '15',
            'goal' => 'разработка раздела проектной документации марки «АР» - архитектурные решения',
            'description' => 'Создание проектной документации в соответствии с  действующими стандартами, комплекта чертежей ПЗУ (ГП) на основе предложенного объекта с посадкой его на топографической съёмке участка в составе: План благоустройства территории, План организации рельефа, План и конструкции дорожных одежд (покрытий)
Создание проектной документации в соответствии с действующими стандартами комплекта чертежей АР на основе предложенного проекта здания в составе: Планы, Разрезы, Фасады, Необходимые узлы и детали
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Проектные институты, 
частные проектные предприятия и фирмы
',
            'study_result' => 'Знания: Ознакомление и изучение действующих требований к комплектам проектных документов на различные здания и сооружения
Умения: Создание комплектов  рабочей документации для различных объектов
Навыки: Освоение профессионального языка и взаимоотношение со смежными специальностями
',
            'product_result' => 'Комплект чертежей марки «АР»',
            'state_id' => '1',
            'supervisors' => 'Жуковский Николай Леонидович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Многоэтажный общественный административный корпус ИРНИТУ',
            'places' => '15',
            'goal' => 'Улучшение пространственно - планировочных, эксплуатационных, функциональных, эстетических характеристик университета, значительное увеличение полезной рабочей площади, создание образа современного высокотехнологичного вуза и кампуса ИРНИТУ.',
            'description' => 'Многоэтажный общественный административный корпус ИРНИТУ предполагается разместить со стороны существующего главного входа в университет по ул. Лермонтова. В отдельно стоящем монолитно - каркасном блоке – многоэтажной башне помимо необходимых помещений для ректората и сопутствующих административных служб должны разместиться представительские помещения для переговоров, совещаний, конференций, просторные холлы, выставочные пространства с витринами для демонстраций ярких студенческих разработок: проектов и моделей. Башня соединяется с существующим зданием двухэтажным блоком, где возможно размещение просторного светлого входного вестибюля с гардеробом (в цоколе), кафе, второго спортзала, других общественных пространств и помещений. Башня должна быть доминантой в окружающей застройке, архитектура нового корпуса решается в современной стилистике, гармоничной и выразительной, и отражающей современные технологии и достижения в строительстве, технике и науке',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Ректорат ИРНИТУ ',
            'study_result' => 'Знания: современные тенденции в архитектуре, современные строительные конструкции и технологии строительства, инженерные коммуникации
Умения: проектировать общественное здание - образовательное учреждение со сложными функциональными зонами и связями между ними, передать молодежную атмосферу.
Навыки: разработка архитектурных, конструктивных, инженерных рабочих чертежей зданий, в том числе разделов ОВ, ВК, слаботочных и электрики, чертежей раздела генерального плана участка.
',
            'product_result' => 'Рабочий проект многоэтажного общественного административного корпуса ИРНИТУ, встроенно – пристроенного к существующему зданию',
            'state_id' => '1',
            'supervisors' => 'Дагданова Цыредарь Баторовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проектирование многоквартирного жилого здания (группы зданий) малой или средней этажности',
            'places' => '15',
            'goal' => 'Создание эскизного концептуального проекта жилого здания (группы зданий) малой или средней этажности',
            'description' => 'Проектирование жилого здания (группы зданий) малой или средней этажности имеет ряд требований: природно-климатические условия площадки проектирования, социально-демографические, градостроительные и экологические факторы, учет особенностей существующей застройки, в том числе исторически сложившейся среды (контекст среды), уклад жизни и национальные особенности людей. Для формирования уникального образа жилого здания (группы домов) малой или средней этажности необходимо знать особенности конструктивных решений жилых зданий, владеть знаниями о типологии квартир зданий малой или средней этажности, видах застройки и типах жилых зданий. Любое жилое здание оснащается инженерным оборудованием, имеющее свои особенности, требования и характеристики, которое может быть проработано в случае участия в проекте студентов смежных специальностей. 
Проект выполняется в два этапа (два семестра). На предварительной стадии анализируются примеры жилых зданий, изучается их типология, проводится поиск оригинальных решений планировок и образа жилого здания (группы домов) малой или средней этажности. Могут быть выполнены предварительные эскизы, черновые макеты и применены другие графические поиски в ручном исполнении или с помощью ПК. На следующем этапе командой студентов прорабатываются чертежи раздела АР и других при участии студентов других направлений. 
Таким образом, может быть выполнен комплексный концептуальный проект жилого здания (группы домов) на свободной от застройки площадке или с учетом контекста исторически сложившейся среды
',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Проектные мастерские, администрация города/ области, застройщики',
            'study_result' => 'Знания: основные требования  к представлению результатов проекта
Умения: обосновывать принятые проектные решения
Навыки: презентации результатов проекта
',
            'product_result' => 'Оформление поиска объемно-планировочных решений на планшет(ы), ПЗ и/ или альбом чертежей проекта жилого здания (группы зданий) малой или средней этажности',
            'state_id' => '1',
            'supervisors' => 'Дружинина Инна Евгеньевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проектирование общественного здания',
            'places' => '15',
            'goal' => 'Создание эскизного концептуального проекта общественного здания',
            'description' => 'Проектирование общественного здания имеет ряд требований: знание типологии общественных зданий, особенности их функционального зонирования и технологических процессов, размещение объектов общественного назначения в градостроительной ситуации, учет контекста среды, в том числе и исторической, а также природно-климатические условия, экологические факторы и многое другое. В зависимости от назначения общественного здания, формируется его объемно-планировочное решение и в целом архитектурный образ. 
Любое общественное здание имеет свою классификацию и в соответствии с типологическим рангом является второстепенным или доминирующим в градостроительной среде. Для создания уникального образа общественного здания необходимо знать особенности конструктивных решений, владеть знаниями о технологических процессах внутренней организации. Любое общественное здание оснащается инженерным оборудованием, имеющее свои особенности, требования и характеристики, которое может быть учтено в случае работы над проектом студентов смежных специальностей.
На предварительной стадии выполняется анализ примеров общественных зданий, изучается их типология, проводится поиск оригинальных решений планировок и образа здания общественного назначения. Могут быть выполнены предварительные эскизы, черновые макеты и применены другие графические поиски в ручном исполнении или с помощью ПК. 
Таким образом, может быть выполнен комплексный концептуальный проект общественного здания на свободной от застройки площадке или с учетом контекста исторически сложившейся среды.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Союз архитекторов РФ',
            'study_result' => 'Знания: Знать основные требования  к представлению результатов проекта
Умения: Уметь  обосновывать принятые проектные решения
Навыки: Владеть навыками презентации результатов проекта
',
            'product_result' => 'Планировка общественного здания с проработкой функционального зонирования здания, поиск образа, объемного решения',
            'state_id' => '1',
            'supervisors' => 'Селиванов Роман Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Конструктивные и технологические решения проектов реставрации объектов культурного наследия (памятников архитектуры)',
            'places' => '15',
            'goal' => 'Разработка проектов реставрации объектов культурного наследия и чертежей проектной документации, а также расчет строительных конструкций в программно-вычислительном комплексе.',
            'description' => 'Обзор и анализ имеющихся программных продуктов по моделированию и расчету зданий и сооружений. Изучение программных комплексов по моделированию и расчету строительных конструкций. Подбор и разработка оптимальных методик моделирования и расчета. Реализация практических расчетов и моделирования конструктивных систем. Подготовка и оформление разделов проектной документации в соответствии с действующей нормативно-правовой базой.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Иркутский областной историко-мемориальный музей декабристов',
            'study_result' => 'Знания: Знать нормативно-правовую базу в строительстве. Знать основные принципы и особенности расчета конструкций в особых условиях работы.

Умения: Уметь применять на практике полученные знания. Уметь учитывать специфику особых условий в составлении расчетных схем несущих и ограждающих конструкций. 

Навыки: Владеть современными информационными технологиями проектирования. Владеть навыками моделирования, расчета и конструирования строительных узлов, систем и деталей.
',
            'product_result' => 'Информационные модели зданий (сооружений); методики и технологии реставрационно-восстановительных работ; Отчет по результатам расчетов в программно-вычислительном комплексе.',
            'state_id' => '1',
            'supervisors' => 'Пинайкин Игорь Петрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Современные технологии исследования и проектирования объектов деревянного зодчества',
            'places' => '15',
            'goal' => 'Разработка проектной документации объектов деревянного зодчества, которая включает в себя текстовые и графических материалы, определяющие архитектурные, функционально-технологические, конструктивные и инженерно-технические решения. ',
            'description' => 'Проектная документация необходима для оценки соответствия принятых решений требованиям законодательства и нормативным правовым актам. В ходе прохождения курса необходимо выполнить подбор и разработку оптимальных методик моделирования и проектирования; подготовку и оформление разделов проектной документации в соответствии с действующей нормативно-правовой базой; обзор и анализ имеющихся программных продуктов по моделированию зданий и сооружений. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Экопарк "Озера на снежной"',
            'study_result' => 'Знания: Знать нормативно-правовую базу в строительстве. Знать основные принципы проектирования конструкций в особых условиях работы.
Умения: Уметь применять на практике полученные знания. 
Навыки: Владеть современными информационными технологиями проектирования. Владеть навыками моделирования и конструирования строительных узлов, систем и деталей.
',
            'product_result' => 'Информационные модели зданий (сооружений); методики и технологии реставрационно-восстановительных работ объектов деревянного зодчества; Текстовая и графическая часть проектной документации.',
            'state_id' => '1',
            'supervisors' => 'Пинайкин Игорь Петрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Методологические и экономические аспекты информационного моделирования объекта капитального строительства',
            'places' => '15',
            'goal' => 'Отработка процесса проектирования с использованием BIM-технологий на различных этапах жизненного цикла зданий и сооружений.',
            'description' => 'Создание информационной модели объекта капитального строительства (технопарк ИРНИТУ).',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: структура процесса информационного моделирования, состав проекта
Умения: работа в команде, проектное мышление
Навыки: моделирование в BIM программах
',
            'product_result' => 'Электронная модель сооружения',
            'state_id' => '1',
            'supervisors' => 'Созонов Павел Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Методологические и экономические аспекты информационного моделирования строительных процессов',
            'places' => '15',
            'goal' => 'Отработка процесса моделирования строительных процессов с использованием BIM-технологий на различных этапах жизненного цикла зданий и сооружений.',
            'description' => '',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: структура процесса информационного моделирования, состав процесса строительства
Умения: работа в команде, проектное мышление
Навыки: моделирование в BIM программах
',
            'product_result' => 'Электронная модель сооружения',
            'state_id' => '1',
            'supervisors' => 'Созонов Павел Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Прогрессивные технологии возведения зданий',
            'places' => '15',
            'goal' => 'Разработка новых конструктивных и технологических решений быстровозводимых зданий.',
            'description' => 'Обеспечение высоких технико-экономических показателей возводимых зданий.

• Обеспечение технологичности при строительстве быстровозводимых зданий;

• оптимизация конструктивных и технологических решений при строительстве быстровозводимых зданий
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => '',
            'product_result' => 'электронной модели изделия (сооружения)',
            'state_id' => '1',
            'supervisors' => 'Петунин Александр Геннадьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проектирование процессов восстановления работоспособности зданий и сооружений, отдельных элементов, конструкций, узлов по результатам обследования их технического состояния',
            'places' => '15',
            'goal' => 'Ознакомление с методикой и приобретение практических навыков при визуально-инструментальном обследовании технического состояния зданий и сооружений, систематизации фактического материала, анализа полученных результатов, формирования выводов, поиска технических решений проблемы и участия в проектировании ремонтно-восстановительных работ',
            'description' => 'Исключение аварийности зданий и сооружений и приведение объектов капитального строительства находящихся в неисправном или ограниченно-работоспособном состоянии в исправное техническое состояние.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать
Изучение методики и методов проведения обследования технического состояния зданий и сооружений, причин возникновения дефектов и деформации, назначение и порядок использования приборов и оборудования. Изучение нормативных документов регламентирующих требования к проведению обследований строительных объектов и работам по контролю за уровнем безопасности зданий и сооружений
Уметь
Применять на практике различные методики и методы обследования зданий и сооружений, используя действующие нормативные документы; выявлять, фиксировать дефекты и повреждения, анализировать причины их появления, оценивать техническое состояние объектов.
Владеть
Общими организационными вопросами обследования технического состояния зданий и сооружений, сбора материалов и необходимой технической информации для реализации проекта ремонтно-восстановительных работ.
Знать
Состав, содержание и требования к полноте разделов комплексной программы обследования технического состояния зданий и сооружений; требования к корректности и обоснованности выводов.
Уметь
Под руководством научного руководителя разрабатывать отдельные темы программы комплексных обследований конструкции зданий и сооружений; проводить обработку полученных данных.
Владеть
Навыками составления программ комплексного обследования зданий и сооружений; под руководством научного руководителя определять категорию технического состояния конструкций и сооружений; оценивать необходимый объем работ для включения в техническое задание для программы. 
',
            'product_result' => 'База данных полученных в составе коллектива исполнителей на реальных объектах капитального строительства, статистическая обработка, поверочные расчеты, формирование выводов, проектные решения.',
            'state_id' => '1',
            'supervisors' => 'Комаров Константин Андреевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка проекта капитального ремонта жилого дома с применением цифровых технологий',
            'places' => '15',
            'goal' => 'Создание проекта капитального ремонта жилого дома на основе визуального обследования и обмера с применением различных проектных программ',
            'description' => 'Капитальный ремонт жилых многоквартирных домов является острой проблемой, для решения которой в нашей стране были созданы фонды капитального ремонта многоквартирных домов. Для более качественного выполнения ремонтных работ и расчета сметной стоимости возникает необходимость в создание проектно-сметной документации. Студенты могут на основе реальных объектов выполнить ряд практических задач: визуальный осмотр, выявления дефектов, обмер здания, создание графических чертежей в цифровой среде, расчет объемов работ, описание технологии производства работ. По окончанию работы студенты представляют готовый проект',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать перечень работ входящих в состав капитального ремонта и технологию их выполнения уметь выполнять создавать проектную документацию в цифровой среде',
            'product_result' => 'Проект капитального ремонта многоквартирного жилого дома',
            'state_id' => '1',
            'supervisors' => 'Ефременко Антон Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Информационные технологии в дорожном строительстве',
            'places' => '15',
            'goal' => 'Разработка методических основ и прикладного инструментария по совершенствованию информационных технологий по проектированию, строительству, эксплуатации, мониторингу автомобильных дорог и искусственных сооружений.',
            'description' => ' Проект направлен на усовершенствование и систематизацию средств информационных систем, предназначенные для решения задач дорожного строительства.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Администрация города Иркутска',
            'study_result' => 'Знания: в области информационных технологий дорожного строительства.
Умения: использовать инструментарий информационных систем для достижения конкретных целей.
Навыки: осуществлять сбор и обработку исходной информации для определения использования информационных технологий
Управление проектом и моделирование строительного производства',
            'product_result' => 'Разработка  методических основ, механизмов, моделей и практических рекомендаций по применению эффективных инструментов для информационных систем, применимых в дорожном строительстве.',
            'state_id' => '1',
            'supervisors' => 'Мартьянов Владимир Иванович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проектирование инженерного комплекса горячего водоснабжения (ГВС) для рекреационных зон с использованием возобновляемых источников энергии',
            'places' => '15',
            'goal' => 'Обеспечение устойчивого горячего водоснабжения в рекреационных зонах на основе альтернативных источников энергии и очистка стоков с использованием энергосберегающих технологий',
            'description' => 'Получение устойчивых характеристик систем жизнеобеспечения (горячего водоснабжения, освещения, очистки сточных и природных вод) за счет оптимизации энергоэффективных параметров с использованием альтернативных источников энергии для удаленных селитебных территорий и рекреационных зон. 
Применение солнечных коллекторов для получения горячего водоснабжения, использование солнечных панелей для получения электрической энергии, применение энергоэффективных технологий для очистки природных и сточных вод позволит создать мобильный энергоконтейнер (комплекс из основных систем жизнеобеспечения) для удаленных селитебных территорий и рекреационных зон.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Тематика предприятия ООО «Инженерный  центр» в рамках корпоративного акселератора в 2019 году. Имеется опыт сотрудничества в проектной деятельности (приказ № 905-П от 03.12.2019 г.)',
            'study_result' => 'Знания: знать инновационные направления в области энергосбережения объектов строительства и их эксплуатации
Умения: уметь подбирать новейшие методы, сооружения и технологий для энергоэффективных объектов
Навыки: владеть основами подготовки документации для создания системы менеджмента качества на период жизненного цикла объектов строительства
',
            'product_result' => 'Проект приводит алгоритм подбора энергоэффективности систем и оборудования жизнеобеспечения, выполнение архитектурно-строительных и компоновочных решений',
            'state_id' => '1',
            'supervisors' => 'Толстой Михаил Юрьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проект энергоэффективности и оптимизации систем жизнеобеспечения населённого пункта',
            'places' => '15',
            'goal' => 'Повышение надежности, проектирование и расчет систем жизнеобеспечения для селитебных зон и промышленных предприятий на основе системного подхода.',
            'description' => 'Формирование оптимальных систем жизнеобеспечения селитебной зоны.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: правил проектирования энергоэффективных систем жизнеобеспечения, принципов их оптимизации.
Умения: использование теоретических знаний при проектировании сетей в конкретных условиях
Навыки: применения оптимизационных технологий к спроектированным системам
',
            'product_result' => 'Спроектированный полный набор систем жизнеобеспечения жилых и общественных зданий селитебной зоны  - наружные и внутридомовые сети.',
            'state_id' => '1',
            'supervisors' => 'Айзенберг И.И.',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка проекта систем водоснабжения и водоотведения здания',
            'places' => '15',
            'goal' => 'Формирование компетенции в области систем водоснабжения и водоотведения зданий и сооружений.',
            'description' => 'Системы жизнеобеспечения, обеспечивающие благоустройство и комфортность жилых, общественных и производственных зданий, представляют собой комплекс трубопроводов, сооружений, технических устройств, предназначенных для обеспечения комфортных условий быта и трудовой деятельности населения, коммунальных и промышленных предприятий.
Разработка проекта систем водоснабжения и водоотведения здания способствует подготовке специалистов в области проектирования, монтажа и эксплуатации внутренних систем холодного и горячего водоснабжения, а также систем канализации зданий различного назначения.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: нормативная база в области проектирования зданий, элементы и схемы систем водоснабжения и водоотведения зданий, методы проектирования систем.
Умения: использовать нормативные документы в своей деятельности; проводить выбор и расчетное обоснование решения при проектировании внутренних систем водоснабжения и водоотведения.
Навыки: проектирования систем внутреннего водоснабжения и водоотведения.
',
            'product_result' => 'Проект',
            'state_id' => '1',
            'supervisors' => 'Макотрина Людмила Викторовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Глубокая очистка сточных вод промышленного предприятия',
            'places' => '15',
            'goal' => 'Минимизировать антропогенную нагрузку на поверхностные водные источники.',
            'description' => 'Предлагает и обосновывает варианты наилучших доступных технологий и очистных сооружений для обеспечения инженерно-технической и экологической безопасности на промышленном предприятии и в регионе расположения предприятия.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Тематика сторонних организаций  - Сибирского проектного института. Г. Иркутск. ',
            'study_result' => 'Знания:  инновационные направления в очистке сточных вод и особенности организации производств такого уровня. 
Умения:  подбирать новейшие методы, сооружения и технологии очистки сточных вод 
Навыки:  по основами подготовки документации для создания системы менеджмента качества производственного подразделения очистки сточных вод
',
            'product_result' => 'Проект приводит алгоритм и технологию углублённой очистки промышленных стоков ',
            'state_id' => '1',
            'supervisors' => 'Кульков Виктор Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка проектов межевания для Байкальского района Иркутской области.',
            'places' => '15',
            'goal' => 'Актуализировать данные о земле и исправить выявленные ошибки для дальнейшего планирования территорий.',
            'description' => 'Проект предусматривает сбор первоначальных данных, анализ и актуализация материала о земельных ресурсах территорий.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'По заказу Администрации Иркутской области',
            'study_result' => 'Знания: принципов и метод работы с проектами межевания.
Умения: формировать проекты межевания.
Навыки: осуществлять сбор и обработку исходной информации для формирования проектов межевания, применять знания нормативно-правовой базы при работе с территориями. Навыки работы с ПО «ГИС Панорама».
',
            'product_result' => 'Актуализированные проекты межевания кадастровых кварталов территорий.',
            'state_id' => '1',
            'supervisors' => 'Бунеева Евгения Юрьевна, Безруких Ольга Андреевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка проектов межевания для Слюдянского Иркутской области.',
            'places' => '15',
            'goal' => 'Актуализировать данные о земле и исправить выявленные ошибки для дальнейшего планирования территорий.',
            'description' => 'Проект предусматривает сбор первоначальных данных, анализ и актуализация материала о земельных ресурсах территорий.',
            'difficulty' => '1',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'По заказу Администрации Иркутской области',
            'study_result' => 'Знания: принципов и метод работы с проектами межевания.
Умения: формировать проекты межевания.
Навыки: осуществлять сбор и обработку исходной информации для формирования проектов межевания, применять знания нормативно-правовой базы при работе с территориями. Навыки работы с ПО «ГИС Панорама».
',
            'product_result' => 'Актуализированные проекты межевания кадастровых кварталов территорий.',
            'state_id' => '1',
            'supervisors' => 'Бунеева Евгения Юрьевна, Безруких Ольга Андреевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оценка инвестиционной привлекательности проекта сетевых домостроительных комбинатов',
            'places' => '15',
            'goal' => 'Оценка инвестиционной привлекательности проекта сетевого ДСК с целью повышения уровня заводской готовности домокомплектов и модулей для снижения себестоимости и сроков строительства ',
            'description' => 'Проект направлен на создание на территории РФ сети мобильных гибких роботизированных производств строительных конструкций и компонентов для реализации градостроительных и инфраструктурных решений любой сложности на всей территории Российской Федерации. Переход на новый технологический уровень в области индустриального домостроения позволит улучшить качественные параметры архитектурно-планировочных и технических решений, снизить стоимость продукции и повысить производительность труда с использованием отечественного и мирового опыта',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО "ПОБЕДА"',
            'study_result' => 'Знания: 
 состава, структуры и назначения бизне-сплана инвестиционного проекта;
 методов оценки эффективности вложений в реальные и финансовые инвестиции;
 новых форм финансирования инвестиционных проектов в РФ;
 индустриальных методов возведения зданий и сооружений.
Умения: 
 проводить необходимые финансовые вычисления по оценке доходности инвестиций, рыночной стоимости финансовых инструментов;
 работать с законодательными и другими нормативными документами, статистическими материалами, технической и экономической литературой;
 применять методы математического анализа и моделирования, теоретического и экспериментального исследования для решения экономических задач.
Навыки: 
 методологии и методики экономического исследования; методами и приемами анализа экономических явлений и процессов;
 расчета основных критериев оценки инвестиционных проектов;
 оценки риска инвестиционной деятельности;
 составления бизнес-планов инвестиционных проектов.
',
            'product_result' => 'Инвестиционный проект «Сетевые домостроительные комбинаты»',
            'state_id' => '1',
            'supervisors' => 'Безруких Ольга Андреевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Новые форматы недвижимости: направления для стартапов ',
            'places' => '15',
            'goal' => 'Развитие теоретических и методических подходов к формированию и развитию рынка новых форматов недвижимости. ',
            'description' => 'Определение ключевых особенностей организации  рынка институционного арендного жилья и механизмы его функционирования, а также выявить особенности субъектов строительной отрасли заинтересованных в строительстве арендного жилья, в результате чего появляется возможность усовершенствовать организационно-экономический механизм развития и функционирования рынка арендного жилья.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: 
 новых форматов недвижимости;
 методов финансирования строительства арендного жилья.
Умения: 
 проводить оценку и выявлять проблемные области жилищного строительства с использованием различных методик;
Навыки: 
 определения капиталоемкости, эффективности вложений, срока окупаемости, механизмов финансирования, возможных рисков.
 проектирования модели развития рынка арендного жилья с учетом современных организационных форм.
',
            'product_result' => 'Модель развития рынка арендного жилья с учетом современных организационных форм (на примере г. Иркутск)',
            'state_id' => '1',
            'supervisors' => 'Безруких Ольга Андреевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Управление городскими агломерациями в рамках стандарта  комплексного развития территорий ',
            'places' => '15',
            'goal' => 'Разработка методических основ и прикладного инструментария по совершенствованию механизма управления реализацией индустриальных проектов малоэтажного жилищного строительства в системе городской агломерации с учетом стандарта комплексного развития территорий',
            'description' => 'Проект направлен на решение проблемы эффективности использования земель посредством реализации проектов комплексного развития территорий в разрезе городской агломерации. А также в процессе проведения исследований изучаются: 
- существующие проблемы комплексного развития территорий на примере г. Иркутск;
- подходы к формированию и реализации проектов комплексного развития территорий;
- формирование мероприятий по улучшению реализации комплексного развития пригородных территорий Иркутска за счет применения наиболее энергоэффективной, экологичной и доступной технологии малоэтажного домостроения. 
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Администрация города Иркутска',
            'study_result' => 'Знания: процесса развития агломераций муниципальных образований региона; технологий малоэтажного строительства.
Умения: Определить внешние региональные условия и внутренние закономерности функционально-пространственного развития городских агломераций.
Навыки: осуществлять сбор и обработку исходной информации для определения приоритетной технологии малоэтажного строительства отвечающую требованиям Национальных проектов, Стратегий РФ и стандартам КРТ. 
',
            'product_result' => 'Разработка  методических основ, механизмов, моделей и практических рекомендаций по эффективному воспроизводству объектов малоэтажного строительства направленного на стимулирование рынка малоэтажного жилья в агломерационной системе',
            'state_id' => '1',
            'supervisors' => 'Безруких Ольга Андреевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Мультиформатные загородные поселки, как тренд загородной недвижимости ',
            'places' => '15',
            'goal' => 'Разработка организационно-технологического программы развития мультиформатных загородных поселков',
            'description' => 'Проект направлен на разработку мероприятий для реализации целевых показателей паспорта федерального проекта «Жилье» до 2024 г., а также стимулирует развитие строительной отрасли региона, обеспечивая население комфортным и доступным жильем за счет реализации проектов мультиформатных загородных поселков',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО "ПОБЕДА"',
            'study_result' => 'Знания: 
 технологических процессов строительного производства мультиформатной застройки с учётом требований производственной и экологической безопасности;
 видов комплексной мультиформатной загородной застройки по 214 ФЗ;
 видов инфраструктурных вложений при комплексной загородной застройке.
Умения: организовать, планировать и управлять строительным производством на всех этапах жизненного цикла при реализации инвестиционно-строительных проектов мультиформатной застройки;
Навыки: 
 формирование дорожной карты по внедрению мультиформатной застройки;
 расчёта экономической эффективности.
',
            'product_result' => 'Программа развития (дорожная карта) мультиформатных загородных поселков в регионе',
            'state_id' => '1',
            'supervisors' => 'Безруких Ольга Андреевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Цифровые технологии для управления рисками и финансовым контролем строительного холдинга',
            'places' => '15',
            'goal' => 'Разработка методического аппарата для управления рисками и финансовым контролем строительного холдинга',
            'description' => 'Проект направлен на повышение экономической эффективности финансово-хозяйственной деятельности строительных организаций за счет внедрения цифровых технологий. Направлен на оценку целесообразности использования цифровых технологий в финансово-хозяйственной деятельности строительной организации и в процессах управления рисками. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: технологий цифровой трансформации для процессов управления рисками и финансовым контролем строительного холдинга.
Умения: анализировать  финансовую, бухгалтерскую и иную информацию, использовать методы сравнения и группировки влияния факторов, четко формулировать выводы  и предложения для разработки вариантов управленческих решений с учетом рисков и возможных социально-экономических последствий.
Навыки:  анализа адаптивности строительных организаций к реалиям цифровой экономики.
',
            'product_result' => 'Организационно-экономический механизм функционирования строительной организации при внедрении цифровых технологий в процессы управления рисками и финансовым контролем строительного холдинга',
            'state_id' => '1',
            'supervisors' => 'Безруких Ольга Андреевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка мероприятий по совершенствованию функционирования предприятия на основе анализа финансово-хозяйственной деятельности',
            'places' => '15',
            'goal' => 'Разработка рекомендаций по совершенствованию финансово-хозяйственной деятельности и оценка эффективности предлагаемых мероприятий по совершенствованию финансово-хозяйственной деятельности',
            'description' => 'В современных условиях развития экономики страны наиболее важную роль играют предприятия различных отраслей, которые поддерживают экономическую стабильность всего государства. При том, важную роль в данной системе занимают предприятия строительной отрасли. После перехода России в условия рыночной экономики появилось множество предприятий, которые не зависят от государственного регулирования и должны уметь самостоятельно проводить анализ своей деятельности, в первую очередь финансово-хозяйственной. Анализ финансово-хозяйственной деятельности является основным инструментом, позволяющим оценить финансово-хозяйственное положение предприятия. Наличие достаточного количества финансово-хозяйственных ресурсов и рациональное их использование позволяют предприятию функционировать и успешно осуществлять свою деятельность. 
По результатам анализа деятельности в динамике становится понятно, по каким направлениям необходимо проводить изменения. Также анализ позволяет определить слабые и сильные стороны предприятия. Совершенствование финансово-хозяйственной деятельности предприятия подразумевает под собой поиск новых путей развития предприятия посредством увеличения финансово-хозяйственных резервов и оптимизацию их использования. Предшествующими этапами совершенствования деятельности являются: анализ текущего состояния предприятия, разработка мероприятий по совершенствованию, оценка рисков внедрения мероприятий и прогноз развития предприятия. Разработка мероприятий по совершенствованию функционирования предприятия на основе анализа финансово-хозяйственной деятельности является неотъемлемой частью нормального функционирования предприятия, в условиях изменяющейся внутренней и внешней среды
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО «Иркутскгипродорнии»',
            'study_result' => 'Проведение оценки эффективности хозяйственной деятельности, на основании которой разрабатываются мероприятия по совершенствованию финансово-хозяйственной деятельности и дается оценка эффективности предлагаемых мероприятий',
            'product_result' => 'Комплексная оценка финансово-хозяйственного состояния в динамике, позволяющая осуществлять анализ и совершенствование деятельности предприятия с целью поиска новых путей развития предприятия посредством увеличения финансово-хозяйственных резервов и оптимизации их использования',
            'state_id' => '1',
            'supervisors' => 'Кудрявцева Вера Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка сметной документации на капитальный ремонт зданий и сооружений',
            'places' => '15',
            'goal' => 'Разработать сметную документацию на капитальный ремонт зданий и сооружений с применением современной сметно-нормативной базы на основе данных обследования текущего технического состояния объекта',
            'description' => 'В настоящее время значительное внимание уделяется капитальному ремонту зданий и сооружений, который производится при необходимости восстановления характеристик объекта до текущих нормативов, с восстановлением и (или) заменой любых частей объекта. Грамотно проведенная оценка технического состояния зданий и сооружений позволяет установить необходимость капитального ремонта, виды и объемы работ, проводимых при капитальном ремонте. Для качественного выполнения работ необходимо определить требуемый объем финансирования, который определяется путем разработки сметной документации и подтверждается сметной стоимостью, которая определяется сметой на реконструкцию, капитальный ремонт объекта капитального строительства, на работы по сохранению объектов культурного наследия, разрабатываемой в составе проектной документации. Особенно остро вопрос качественного определения стоимости строительно-монтажных работ стоит в период реформирования системы сметного ценообразования в целом. Оптимизация затрат на техническое обслуживание зданий во многом обусловлена рациональным планированием системы текущих и капитальных ремонтов. Качественное проведение капитального ремонта продлевает срок службы здания в несколько раз, а его своевременность снижает затраты непосредственно на ремонтные работы и последующие эксплуатационные затраты по зданию. Все это позволяет повысить надежность, безопасность и комфортность зданий и сооружений',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО «Иркутскгипродорнии»',
            'study_result' => 'Концептуальная (содержательная) проработка вопросов определения стоимости строительно-монтажных работ по капитальному ремонту на основе данных о техническом состоянии зданий и сооружений',
            'product_result' => 'Оценка технического состояния и разработка сметной документации на капитальный ремонт объектов',
            'state_id' => '1',
            'supervisors' => 'Кудрявцева Вера Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка мероприятий по совершенствованию функционирования предприятия на основе анализа финансово-хозяйственной деятельности',
            'places' => '15',
            'goal' => 'Разработка рекомендаций по совершенствованию финансово-хозяйственной деятельности и оценка эффективности предлагаемых мероприятий по совершенствованию финансово-хозяйственной деятельности',
            'description' => 'В современных условиях развития экономики страны наиболее важную роль играют предприятия различных отраслей, которые поддерживают экономическую стабильность всего государства. При том, важную роль в данной системе занимают предприятия строительной отрасли. После перехода России в условия рыночной экономики появилось множество предприятий, которые не зависят от государственного регулирования и должны уметь самостоятельно проводить анализ своей деятельности, в первую очередь финансово-хозяйственной. Анализ финансово-хозяйственной деятельности является основным инструментом, позволяющим оценить финансово-хозяйственное положение предприятия. Наличие достаточного количества финансово-хозяйственных ресурсов и рациональное их использование позволяют предприятию функционировать и успешно осуществлять свою деятельность. 
По результатам анализа деятельности в динамике становится понятно, по каким направлениям необходимо проводить изменения. Также анализ позволяет определить слабые и сильные стороны предприятия. Совершенствование финансово-хозяйственной деятельности предприятия подразумевает под собой поиск новых путей развития предприятия посредством увеличения финансово-хозяйственных резервов и оптимизацию их использования. Предшествующими этапами совершенствования деятельности являются: анализ текущего состояния предприятия, разработка мероприятий по совершенствованию, оценка рисков внедрения мероприятий и прогноз развития предприятия. Разработка мероприятий по совершенствованию функционирования предприятия на основе анализа финансово-хозяйственной деятельности является неотъемлемой частью нормального функционирования предприятия, в условиях изменяющейся внутренней и внешней среды
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'АО «Иркутскгипродорнии»',
            'study_result' => 'Проведение оценки эффективности хозяйственной деятельности, на основании которой разрабатываются мероприятия по совершенствованию финансово-хозяйственной деятельности и дается оценка эффективности предлагаемых мероприятий',
            'product_result' => 'Комплексная оценка финансово-хозяйственного состояния в динамике, позволяющая осуществлять анализ и совершенствование деятельности предприятия с целью поиска новых путей развития предприятия посредством увеличения финансово-хозяйственных резервов и оптимизации их использования',
            'state_id' => '1',
            'supervisors' => 'Кудрявцева Вера Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Техническая экспертиза объектов недвижимости:
1. Капитальный ремонт  крупнопанельного жилого дома по адресу: г. Иркутск, мкр. Первомай-ский, 23
1. Капитальный ремонт крупнопанельного  жилого дома  по адресу: г. Иркутск, мкр. Первомай-ский, 55
',
            'places' => '15',
            'goal' => 'Проведение технической экспертизы и оценка технического состояния объекта недвижимости, разработка комплекса ремонтно-восстановительных мероприятий',
            'description' => 'В процессе эксплуатации объектов недвижимости вследствие различных причин происходят физический износ строительных конструкций, возникновение и накопление повреждений,  снижение и потеря их несущей способности, деформации как отдельных элементов, так и здания в целом. Для разработки мероприятий по восстановлению эксплуатационных качеств конструкций, необходимо проведение их обследования (технической экспертизы) с целью выявления причин преждевременного износа и снижения их несущей способности. По результатам технической экспертизы выполняется оценка технического состояния, условий и возможности дальнейшей эксплуатации, разрабатывается комплекс требуемых ремонтно-восстановительных мероприятий.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'знать:
 требования современ-ных строительных норм и правил;
 методические особенности диагностики  и оценки технического состояния строительных кон-струкций.
 характеристики приме-няемых в регионе типо-вых проектов каменных и крупнопанельных зда-ний;
 основные конструктив-ные решения несущих и ограждающих конструк-ций;
уметь:
 выполнять диагностику технического состояния строительных конструк-ций;
 составлять отчеты по ре-зультатам исследований.
 выполнять анализ (экс-пертизу) проектного ре-шения.
владеть:
 методами   и средствами дефектоскопии   строи-тельных конструкций, контроля физико-механических свойств.
',
            'product_result' => 'Отчет по результатам обследования и оценки технического состояния объекта недвижимости',
            'state_id' => '1',
            'supervisors' => 'Журавлев Евгений Геннадьевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Повышение безопасности высотных объектов строительства за счет создания эффективных методов эвакуации и совершенствования систем вентиляции',
            'places' => '15',
            'goal' => 'Для стратегического развития отрасли Строительства и Жилищно-коммунального хозяйства необходимо изыскать возможности при требуемом уровне застройки наилучшим образом обеспечить устойчивый рост комфорта и безопасности среды жизнедеятельности (благоустройство, дороги, расположение объектов Строительства и т.д.). Исследование таких возможностей и выработка рекомендаций является целью данного проекта.',
            'description' => 'Согласно Стратегии развития строительной отрасли и жилищно-коммунального хозяйства Российской Федерации до 2035 года создание безопасной среды является важной задачей. Достижение соответствующего уровня безопасности может  достигаться засчет: разработки оптимальных путей эвакуации, своевременной эвакуации жителей с верхних этажей, совершенствовании систем вентиляции (возможность исключить перемещение воздуха из одного помещения в другое) при возникновении чрезвычайных ситуаций. Рассмотреть все представленные аспекты, проанализировать их влияние на среду жизнедеятельности человека, сделать соответствующие выводы и разработать рекомендации – основа представленного проекта.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: нормативно-законодательные аспекты отрасли Строительства, методы планирования, оптимизации, принятия решений
Умения: анализа нормативно-законодательной литературы в сфере Строительства, разработки и принятия решений
Навыки: исследования, анализа, планирования, оптимизации
',
            'product_result' => 'Разработка соответствующих рекомендаций.',
            'state_id' => '1',
            'supervisors' => 'Гребнева Оксана Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Исследование задач развития комфортной и безопасной среды при осуществлении требуемых объемов застройки',
            'places' => '15',
            'goal' => 'Для стратегического развития отрасли Строительства и Жилищно-коммунального хозяйства необходимо изыскать возможности при требуемом уровне застройки наилучшим образом обеспечить устойчивый рост комфорта и безопасности среды жизнедеятельности (благоустройство, дороги, расположение объектов Строительства и т.д.). Исследование таких возможностей и выработка рекомендаций является целью данного проекта.',
            'description' => 'Согласно Стратегии развития строительной отрасли и жилищно-коммунального хозяйства Российской Федерации до 2035 года создание безопасной и комфортной среды жизнедеятельности человека является важной задачей при обеспечении соответствующего уровня развития Строительства. Достижение соответствующего уровня комфортности и безопасности может  достигаться засчет: разумной подготовки территорий Строительства, рационального размещения объектов общественного питания, парковок, парковых зон и т.д., создания удобной и безопасной дорожной инфраструктуры и т.д. Рассмотреть все представленные аспекты, проанализировать их влияние на среду жизнедеятельности человека, сделать соответствующие выводы и разработать рекомендации – основа представленного проекта.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: нормативно-законодательные аспекты отрасли Строительства, методы планирования, оптимизации, принятия решений
Умения: анализа нормативно-законодательной литературы в сфере Строительства, разработки и принятия решений при решении задач Строительства с учетом всех ограничений и требований
Навыки: исследования, анализа, планирования
',
            'product_result' => 'Рекомендации по увеличению уровня комфортности при требуемом уровне застройки.',
            'state_id' => '1',
            'supervisors' => 'Гребнева Оксана Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Информационное моделирование инженерных систем и теплового узла объектов недвижимости с применения BIM-технологий при проведении капитального ремонта на примере нежилого здания по адресу Иркутская область, г. Иркутск, Игошина, 6-а.',
            'places' => '15',
            'goal' => 'Создание 3D-модели (виртуальной модели) инженерных систем здания: систем отопления, горячего и холодного водоснабжения, водоотведения, которая в дальнейшем позволяла бы получить визуализацию расположения систем внутри объекта капитального ремонта, информацию по элементам, оборудованию и их характеристикам, а также при необходимости вносить изменения и коррективы в процессе его жизненного цикла.',
            'description' => 'В результате выполнения проекта с использованием BIM-технологий на основе существующей проектной документации и результатов обследования будет выполнена визуализация систем отопления, горячего и холодного водоснабжения, водоотведения объекта капитального ремонта, расположенного по адресу Иркутская область, г. Иркутск, ул. Игошина, 6-а. Созданная информационная модель позволит осуществить планирование и координацию работ по замене элементов и оборудования инженерных систем, обеспечит сопровождение, расчет объемов,  составление смет, сроков, BIM-координацию различных этапов выполнения работ, контроль и обеспечение качества, выявление конфликтов, составление документации и т. д.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Фонд капитального ремонта ',
            'study_result' => 'Знания: по методам информационного моделирования и проектирования жизненного цикла инженерных систем и сооружений объектов недвижимости. 
Умения: владение системами 3d-моделирования и создание 3d-моделей инженерных систем объектов недвижимости.
Навыки: проектирования и моделирования.
',
            'product_result' => '3D-модель инженерных систем нежилого здания, расположенного по адресу Иркутская область, г. Иркутск, Игошина, 6-а.',
            'state_id' => '1',
            'supervisors' => 'Гребнева Оксана Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Информационное моделирование объектов недвижимости с применения BIM-технологий при проведении капитального ремонта на примере нежилого здания по адресу Иркутская область, г. Иркутск, Игошина, 6-а.',
            'places' => '15',
            'goal' => 'Создание 3D-модели (виртуальной модели), которая в дальнейшем позволяла бы получить графический вид объекта, информацию по дизайну, размерам, материалам и другим характеристикам объекта капитального ремонта, а также при необходимости вносить изменения и коррективы в процессе его жизненного цикла.',
            'description' => 'В результате выполнения проекта с использованием BIM-технологий на основе существующей проектной документации и результатов обследования конструкций здания будет выполнена визуализация объекта капитального ремонта, расположенного по адресу Иркутская область, г. Иркутск, ул. Игошина, 6-а (возможно с разработкой дизайн-проекта). Созданная информационная модель позволит осуществить планирование и координацию работ, обеспечит сопровождение, расчет объемов,  составление смет, сроков, BIM-координацию различных этапов выполнения работ, контроль и обеспечение качества, выявление конфликтов, составление документации и т. д.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Фонд капитального ремонта ',
            'study_result' => 'Знания: по методам информационного моделирования и проектирования жизненного цикла зданий. 
Умения: владение системами 3d-моделирования и создание 3d-моделей объектов недвижимости.
Навыки: проектирования и моделирования.
',
            'product_result' => '3D-модель нежилого здания, расположенного по адресу Иркутская область, г. Иркутск, Игошина, 6-а.',
            'state_id' => '1',
            'supervisors' => 'Гребнева Оксана Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание художественного произведения/творческой работы для участия в выставочных проектах Всероссийской творческой организации «Союз художников России»',
            'places' => '15',
            'goal' => 'Освоение методики последовательного ведения работы над созданием проекта. Создание художественно-выразительного произведения для последующего участия в выставочных и конкурсных проектах, организованных Всероссийской творческой организацией «Союз художников России»/Молодежным объединением ИРО ВТОО «Союз художников России»',
            'description' => 'Разработка концепции творческого проекта (художественной работы) под руководством преподавателя, с учетом данных обучающегося. Выполнение эскизов на тему, предложенную преподавателем, либо самим обучающимся, актуальную для тематики текущих выставок  Всероссийской творческой организации «Союз художников России»/Молодежного объединения ИРО ВТОО «Союз художников России». Проработка концепции графического/цветового решения, выбор техники исполнения произведения. Выполнение работы в материале.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Всероссийская творческая организация «Союз художников России», Молодежное объединение ИРО ВТОО «Союз художников России»',
            'study_result' => 'Знания:
Специфика проектной работы над созданием художественного произведения;
Особенности создания эскиза произведения, как составной части проекта; 
Основы композиционного, графического, цветового проектирования;
Основы академического рисунка и живописи.
Умения:
Организация поэтапной работы над созданием художественного произведения;
Работа с различными художественными материалами;
Идея и реализация творческого замысла;
Навыки: 
Владение  техниками и материалами изобразительного искусства;
Владение методами изобразительного языка
',
            'product_result' => 'Творческий вывод - художественное произведение: картина/ графический лист/ проект digital art  (печать)/ работа в любой из техник монументально-декоративного искусства (мозаика, витраж, панно из ткани, гобелен и т.д.)',
            'state_id' => '1',
            'supervisors' => 'Довнич Наталья Анатольевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Визуальное решение театральных и культурно массовых мероприятий (организация среды и систем айдентики)',
            'places' => '15',
            'goal' => 'Создание проектов сценографического решения мероприятий разного функционального назначения',
            'description' => 'Цель проекта: формирование компетенции в сценографии как объекта дизайн проектирования; исследование традиционного и современных подходов к визуальному оформлению культурно-массовых мероприятий; изучение способов воплощения художественного замысла средствами объемно пространственного моделирования.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Театры, коммерческие структуры г. Иркутска',
            'study_result' => 'Знать: типологию композиционных средств и их взаимодействие; основные приемы сценарного-проектирования среды и систем айдентики мероприятий разного функционального назначения
Уметь: решать основные типы проектных задач создания театральных и культурно-массовых мероприятий; учитывать при разработке художественного замысла особенности материалов и их формообразующих свойств;
Владеть приемами объемного и графического моделирования формы объекта, и соответствующей организацией проектного материала для передачи творческого художественного замысла;
компьютерным обеспечением дизайн-проектирования;
выполнением проекта в материале.
',
            'product_result' => 'Проекты организации среды и систем айдентики театральных и культурно массовых мероприятий разного функционального назначения.',
            'state_id' => '1',
            'supervisors' => 'Шолохов Андрей Викторович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проектирование мебели и оборудования как системы формирования комфортной среды',
            'places' => '15',
            'goal' => 'Создание проектов мебели и оборудования для сред разного функционального назначения: формообразование, конструирование и формулирование концепций рекламного продвижения',
            'description' => 'В современной ситуации становиться актуальным наличие на рынке функциональной, качественной, не дорогой мебели и оборудования, созданными с использованием современных отечественных материалов на актуальной производственной базе. Результатом данного курса будут проекты мебели и оборудования, на которые возможно получение патентов на промышленные образцы с дальнейшей возможной реализацией в материале, концепции формирования рекламно-информационных систем продвижения продуктов/изделий.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Мебельные фирмы г.Иркутска',
            'study_result' => 'Знать: основные способы дизайн-проектирования, специфику создания дизайна современной мебели и оборудования; базовые технологические процессы в мебельной промышленности
Уметь: разрабатывать обоснованную проектную идею с учетом формообразования и основ конструирования; проектировать системы визуальной информации, идентификации и коммуникации 
Владеть навыками проектирования мебели: конструирования предметов, товаров, промышленных образцов с учетом технологий изготовления; формирования рекламно-информационных комплексов 
',
            'product_result' => 'Проекты мягкой и корпусной мебели и оборудования; концепции продвижения созданных изделий',
            'state_id' => '1',
            'supervisors' => 'Шолохов Андрей Викторович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание художественного произведения/творческой работы для участия в ежегодной выставке-конкурсе, проходящей в рамках областного фестиваля «Студенческая весна в ИрНИТУ»',
            'places' => '15',
            'goal' => 'Освоение методики последовательного ведения работы над созданием проекта. Создание художественно-выразительного произведения для последующего участия в выставке-конкурсе областного фестиваля «Студенческая весна в ИрНИТУ», организованного  Центром  культурно-массовой и воспитательной работы ИРНИТУ (с возможностью дальнейшего участия произведения в других выставках /конкурсах).',
            'description' => 'Разработка концепции творческого проекта (художественной работы) под руководством преподавателя, с учетом данных обучающегося. Выполнение эскизов на тему, предложенную преподавателем, либо самим обучающимся, актуальную для общей тематики выставки. Проработка концепции графического/цветового решения, выбор техники исполнения произведения. Выполнение работы в материале.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Центр культурно-массовой и воспитательной работы ИРНИТУ. Дирекция ИАСиД. ',
            'study_result' => 'Знания:
Специфика проектной работы над созданием художественного произведения;
Особенности создания эскиза произведения, как составной части проекта; 
Основы композиционного, графического, цветового проектирования;
Основы академического рисунка и живописи.
Умения:
Организация поэтапной работы над созданием художественного произведения;
Работа с различными художественными материалами;
Идея и реализация творческого замысла;
Навыки: 
Владение  техниками и материалами изобразительного искусства;
Владение методами изобразительного языка.
',
            'product_result' => 'Творческий вывод - художественное произведение: картина/ графический лист/ проект digital art  (печать)/ работа в любой из техник монументально-декоративного искусства (мозаика, витраж, панно из ткани, гобелен и т.д.)',
            'state_id' => '1',
            'supervisors' => 'Свердлов Григорий Викторович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание художественного произведения/творческой работы для участия в ежегодной выставке-конкурсе, проходящей в рамках  Всероссийского фестиваля «Дни русской духовности и культуры «Сияние России».',
            'places' => '15',
            'goal' => 'Освоение методики последовательного ведения работы над созданием проекта. Создание художественно-выразительного произведения для последующего участия в выставке-конкурсе, проходящей в рамках Всероссийского фестиваля «Дни русской духовности и культуры «Сияние России» в ИрНИТУ, с возможностью дальнейшего участия произведения в других выставках /конкурсах.',
            'description' => 'Разработка концепции творческого проекта (художественной работы) под руководством преподавателя, с учетом данных обучающегося. Выполнение эскизов на тему, предложенную преподавателем, либо самим обучающимся, актуальную для общей тематики выставки. Проработка концепции графического/цветового решения, выбор техники исполнения произведения. Выполнение работы в материале.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Центр культурно-массовой и воспитательной работы ИРНИТУ. Дирекция ИАСиД.',
            'study_result' => 'Знания:
Специфика проектной работы над созданием художественного произведения;
Особенности создания эскиза произведения, как составной части проекта; 
Основы композиционного, графического, цветового проектирования;
Основы академического рисунка и живописи.
Умения:
Организация поэтапной работы над созданием художественного произведения;
Работа с различными художественными материалами;
Идея и реализация творческого замысла;
Навыки: 
Владение  техниками и материалами изобразительного искусства;
Владение методами изобразительного языка.
',
            'product_result' => 'Творческий вывод - художественное произведение: картина/ графический лист/ проект digital art  (печать)/ работа в любой из техник монументально-декоративного искусства (мозаика, витраж, панно из ткани, гобелен и т.д.)',
            'state_id' => '1',
            'supervisors' => 'Ижганайтене Анастасия Николаевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => '"Виртуальный тур по промышленным объектам Иркутской области. Памятники промышленного зодчества»',
            'places' => '15',
            'goal' => 'Создание виртуального тура с описанием объектов',
            'description' => 'В связи с возможностью обследования промышленных зданий и сооружений индустриального освоения Восточной Сибири, в том числе, заброшенных и исчезающих, существует необходимость провести 3d съемку объектов, собрать историческую справку и создать 3d тур. В проекте должно быть подробное описание, озвучивание и возможность рассмотрения объектов в деталях. Объект предназначен для сохранения информации об объектах, изучения конструкций и архитектуры зданий, истории объекта.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Ассоциация индустриального туризма, Благотворительный фонд Владимира Потанина
',
            'study_result' => 'Знания: в области истории архитектуры и конструкций промышленных объектов Восточной Сибири на территории Иркутской области
Умения: создавать 3d съемки, делать описание конструкций и создавать виртуальный тур.
Навыки: работа с ГЕО программным обеспечением
',
            'product_result' => 'Виртуальный тур, имеющий историческую значимость ',
            'state_id' => '1',
            'supervisors' => 'Черниговская Виктория Вячеславовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Оценка эффективности инвестиционного проекта',
            'places' => '15',
            'goal' => 'Постановка задач и их решение, необходимые содержательные и математические обоснования, изучение, разъяснение типовых ошибок, встречающиеся в практике расчёта. Изучение методов приспособленных как к стационарной рыночной, так и к современной нестационарной российской экономике. ',
            'description' => '1.Теоретические основы оценки инвестиционных проектов. 1.1. Что такое инвестиционный проект и зачем его оценивать. 1.2. Принципы и схема оценки инвестиционных проектов. 1.3. Система цен и налогов. 1.4. Измерение, планирование и проектирование затрат и результатов. 1.5. Оценка эффективности проекта в целом. 1.6. Оценка эффективности участия в проекте. 1.7. Неопределённость и риск: общие понятия и приближенные методы учета. 1.8. Расчёты ожидаемой эффективности проекта. 1.9. Оптимизация и рациональный отбор проектов. 2. Методические проблемы практической оценки инвестиционных проектов. 2.1. Оценка эффективности проектов при специфических условиях их реализации. 3. Примеры оценки инвестиционных проектов. 3.1. Предварительная аналитическая оценка проекта. 3.2. Пример полного расчета показателей эффективности инвестиционного проекта',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: основные понятия, общие положения, особенности расчётов.
Уметь: решать сложные методические и практические проблемы инвестиционных проектов.
Владеть навыками последовательного построения расчётов.
',
            'product_result' => 'Участие в конференции и написание статей по материалам  исследования.',
            'state_id' => '1',
            'supervisors' => 'Рябченкова Антонина Васильевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Контейнерное озеленение для зимнего города',
            'places' => '15',
            'goal' => 'Разработка методических рекомендаций по агротехнике и ассортименту растений для контейнерного озеленения (пристановочной культуры) зимнего города на примере Иркутска, проектирование архитектурно-технического оснащения для контейнерного растениеводства в зимнем городе.',
            'description' => 'С развитием технологий и прогрессом городских инженерных систем очень сложно вписать в озеленение исторических и деловых центров и жилых районов города растения с крупной корневой системой. Для зимних городов ситуация с подбором растений осложняется коротким вегетационным периодом и низкой суммой активных температур. Для формирования озеленения на территориях с плотной застройкой и расширения ассортимента растений перспективно контейнерное озеленение. Контейнеры для пристановочной культуры подразумевают возможность автономного выращивания (автополив, дренаж, защита от перегрева, аккумуляция тепла, возможность притенения), необходимы архитектурные элементы зданий для размещения контейнеров с растениями, малые архитектурные формы и т.д.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: ассортимент растений для озеленения зимнего города, требования безопасного размещения контейнеров.
Уметь: проектировать элементы архитектурно-технического оснащения контейнерного озеленения.
Владеть: навыками проектирования в  Autodesk 3ds Max или программах-аналогах
',
            'product_result' => 'Методические рекомендации по агротехнике и ассортименту растений для контейнерного озеленения зимнего города на примере Иркутска, проект архитектурно-технического оснащения для контейнерного растениеводства в зимнем городе.',
            'state_id' => '1',
            'supervisors' => 'Баяндина Елена Викторовна, Черниговская Виктория Вячеславовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Цифровой демонстрационно-исследовательский макет города с элементами дополненной реальности',
            'places' => '15',
            'goal' => 'Создание цифрового демонстрационно-исследовательского макета города с элементами дополненной реальности (далее - Проект), направленного на решение самых актуальных проблем и задач городского развития за счет возможности (наглядного) поведения проектных и исследовательских работ целого ряда специальностей ИРНИТУ задействованных в городском планировании.  ',
            'description' => 'На данный момент ИРНИТУ не достаточно участвует и тем более влияет на принятие важных решений городского развития в качестве одного из ключевых федеральных центров Знаний и исследований.
Проект направлен на решение следующих проблем:
В городе не создавался Макет для выполнения широко спектра городских задач для проектной и исследовательской деятельности, начиная от стратегического территориально планирования, заканчивая размещение рекламы.
По-сути, создание такого рода Макета позиционируется как базовая платформа для выполнения проектных и исследовательских работ различных специальностей ИРНИТУ, связанным с анализом функционирования существующей ситуации (систем), вопросами планирования объектов городской инфраструктуры и мн. др. Кроме того, макет должен выполнять демонстративные функции, поэтому должен выполняться из качественных материалов (пластик ПВХ и др.), по специальной технологии будет осуществляться технология дополненной реальности, кроме того параллельно будет выполняться цифровизация городской территории, с последующей возможностью 3D печати любого фрагмента Макета.
Учитывая различный спектр задач и функции Макета, ИРНИТУ как современный, исследовательский и инновационный ВУЗ может быть в постоянной повестке городского развития. 
Вот лишь некоторые проблемы, которые могут быть решены в проектной, исследовательской деятельности:
- стратегическое, территориальное планирования;
- документация по планировке территории;
- градостроительное зонирование;
- системы коммунального, транспортного и социального планирования;
- сохранение и развитие объектов культурного наследия;
- развитие систем рекреационного назначения;
-  размещение рекламы;
- размещение нестационарных торговых объектов и др.
Каждый из данных направлений представляет отдельный проект, спектр которых не ограничивается данным перечнем. 
Демонстрационные функции Макета, также выгодны для презентации деятельности ВУЗа, в частности: Возможность выгодно презентовать город на высоком, качественном уровне 
 представителям федеральных органов власти, министерствам и ведомствам, представителям бизнеса, зарубежным гостям и конечно жителям и обычным гостям города.
В частности, на данной платформе, можно очень наглядно проводить публичные и общественные слушания в рамках реальной подготовки одно из видов градостроительной документации.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Администрация города Иркутска',
            'study_result' => 'Знания: Методы и способы создания макета
Умения: самостоятельно выполнять задачи по макетированию в цифровом, а также использую специальные материалы такие как пеноплекс, возможности 3D - печати
Навыки: макетного проектирования с использованием традиционных и передовых цифровых технологий.
',
            'product_result' => 'Построение макета для отражения современного состояния, построение базовой основы для последующего проектирования и исследовании',
            'state_id' => '1',
            'supervisors' => 'Александров Сергей Анатольевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Транспортное планирование исторического центра города Иркутска ',
            'places' => '15',
            'goal' => 'Сбор, анализ и обобщение данных о пешеходно-транспортных потоках, характере функционального использования объектов и территории, выполнение предпроектных исследований по классификации улично-дорожной сети исторического центра, необходимых для совершенствования действующих нормативных документов и подготовки проектной документации.',
            'description' => 'Действующие нормативные документы, разработанные на федеральном уровне, классифицирует улично-дорожную сеть улиц и дорог в населенных пунктах. Действующее законодательство также позволяет уточнять классификацию данных улиц и дорог с учетом местных особенностей. Прежде всего, на основе вышеуказанных документов подготавливается градостроительная документация городских и сельских поселений, например, подготовка генеральных планов и проектов планировки. На основе градостроительных документов подготавливается проектно-сметная документация улиц и дорог, а также проекты благоустройства общественных пространств. 
На данный момент, (на федеральном уровне) подготавливают соответствующие стандарты в отношении городов федерального значения таких как Москва, а также подготавливаются стандарты благоустройства, которую пытаются адаптировать как основополагающие на местном уровнях. Однако, практика показывает, что данные нормативы не могут учитывать в полной мере:
- природно-климатические;
- историко-культурные;
- функционально-планировочные и иные особенности конкретных населенных пунктов и территории.
Проект содержит критический анализ нормативов транспортного планирования различных уровней регулирования, данные о местных особенностях использования исторического центра города Иркутска, а также данные о наблюдениях различных участков улично-дорожной сети, характере их использования, а также предложения по совершенствованию нормативов градостроительного проектирования.
Местные нормативы градостроительного проектирования позволят проектировать улицы и дороги более дифференцировано, учитывать функционально-планировочные и иные особенности города делая их более безопасными и комфортными для жизни.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Администрация города Иркутска, Публичное акционерное общество «Сбербанк России»
',
            'study_result' => 'Знания: Норм и особенностей регулирования объектов транспортной инфраструктуры на федеральном, региональном и местном уровнях в нормативах градостроительного проектирования
Умения: анализировать существующее состояние объектов транспортной инфраструктуры с точки зрения безопасности, комфорта использования и способности предлагать новые концептуальные решения
Навыки: критического мышления, способность выявлять сильные и слабые сторон объекта рассмотрения необходимые для формулирования запроса на новые знания и новые нормативы, в частности
',
            'product_result' => '1. Подготовка предложений по внесению изменений в:
- Местные нормативы градостроительного проектирования города Иркутска;
- Региональные нормативы градостроительного проектирования;
2. Подготовка предпроектных исследований по развитию и классификации улично-дорожной сети на основе которых могут быть внесены изменения в:
- проект планировки центральной исторической части города Иркутска;
3. Подготовка предпроектных исследований по развитию и классификации улично-дорожной сети на основе которых могут быть разработаны;
- новые стандарты благоустройства улиц и дорог города Иркутска, в части исторического центра;
- проекты благоустройства общественных пространств;
- проекты ремонта или реконструкции центральных исторических улиц;
- схемы размещения нестационарных торговых объектов, расположенных на территории общего пользования;
- схемы развития пешеходной и велосипедной инфраструктуры исторического центра;
- схемы развития платной парковочной политики;
- схемы озеленения исторического центра;
- схемы размещения рекламных конструкции;
- схемы размещения объектов информации и навигации.

*- Ожидаемый продуктовый результат в рамках работы учебного года, касается пункта 1, указанный в данном разделе. Пункты 2 и 3 касаются потенциала развития данного проекта.
',
            'state_id' => '1',
            'supervisors' => 'Александров Сергей Анатольевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => '"Сибирский тракт. Иркутская губерния».',
            'places' => '15',
            'goal' => 'Проведение анализа территорий поселений Иркутской области, исторически находившихся на пути Почтамтского тракта. Картирование территории. Создание информационной базы для дальнейшей реализации проекта',
            'description' => 'В процессе реализации проекта - восстановления верстовых столбов Почтамтского тракта в Иркутской области, возникают задачи по сбору информации исторических данных поселений, градостроительному анализу территории, а так же современной ситуации по культуре и быту населения. Для этого необходимо проведение научного исследования, итогом которого, станет информационная база по поселениям, картирование территорий',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ВСОРГО, «Фонд Тимченко», Культура гранты России
',
            'study_result' => 'Знания: основные способы выполнения градостроительного анализа территорий
Умения: систематизировать и обобщать информацию по территориям исторических поселений
Навыки: работы с архивами, электронными ресурсами, а так же работа в команде и с потенциальными потребителями продукта
',
            'product_result' => 'Информационная база. Картирование территорий.',
            'state_id' => '1',
            'supervisors' => 'Пуляевская Евгения Владимировна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Реновация архитектурно-градостроительной среды выхода ул. Нагорной к набережной р. Ангары
в п. Никола
',
            'places' => '15',
            'goal' => 'Создание комплексного проекта архитектурно-градостроительной организации и благоустройства регионального рекреационного и туристического объекта « Байкал-Никола»',
            'description' => ' Проектом необходимо предусмотреть:
- градостроительное зонирование реконструируемой территории; функциональное и технико-экономическое обоснование предлагаемых решений
- транспортно-пешеходную организацию движения, парковки и благоустройство общественных пространств: внешнее (дороги, набережная с общей прибрежной зоной  спорта и отдыха) и внутриквартальное благоустройство
- архитектурные решения планировки и застройки (гостинично - оздоровительный  комплекс) на участке по адресу: ул.Нагорная, 2;
- стилевые и колористические решения по объединению разрозненных существующих  объемно-архитектурных элементов застройки и спортивного корта и новых   проектируемых зданий и общественных зон в целостный средовой градостроительный  комплекс;
 Проектный коллектив: студенты старших курсов специальностей Гр, Ар, ДАС, ЭУН с  реализацией работы в:
 - учебная задача: специальный курсовой и дипломные проекты, разрабатываемые в  творческом коллективе специалистов (мастерской);
- участие в ежегодных творческих областных и межрегиональных конкурсах, Зимнем ГУ -  представление ИрНИТУ на общественных площадках и в социальных программах/сетях;
 публикации в межвузовских и профессиональных специализированных изданиях, на ТВ 
- практический результат: инициативные эскизные проработки (1 этап) с последующим  вхождением в областную программу благоустройства архитектурной среды Прибайкалья  и платной (гранты, участие в госпрограммах) разработкой проектной и рабочей  документации отдельных элементов среды и/или комплекса в целом  (заинтересованные стороны: собственники прилегающих усадебных участков и  туристических объектов; администрация поселка, МО и Иркутской области);
 Время и график выполнения работы - учебный год:
 Сентябрь-октябрь – комплектация коллектива, сбор исходных данных, социологические  исследования, форэскизы, предварительная работа с потенциальными заказчиками и 
 интересантами, прессой, административными и общественными структурами;  Ноябрь-декабрь – разработка концептуальных решений по площадке и  эскизных решений по различным фрагментам среды и разделам проекта; консультации  и предварительные обсуждения хода и направлений работы 
 Январь-февраль – сборка и оформление презентационных материалов проекта,  подготовка публикаций, показ промежуточных результатов, сбор замечаний,  предложений, рекомендаций; Март-апрель – доработка проекта и отдельных разделов до кондиционных показателей,
 Разработка нескольких вариантов презентационных материалов под специфику  представления и решения учебных и практических задач; Май-июнь – завершение 1-го этапа работы, организационные итоги, дипломы и заявки 
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Администрация п. Никола, частные собственники земельных участков, 
Всероссийский федеральный  конкурс создания лучших проектов комфортной городской среды',
            'study_result' => 'Знать: состав и содержание профессиональной проектной документации в соответствии с нормативными требованиями ПП РФ №87 и особенности разработки конкурсной архитектурно-проектной документации 
Уметь: комплексно реализовывать проектные идеи и решения в составе междисциплинарного творческого коллектива ; использовать профессиональные графические (компьютерные и ручные) инструменты, точно и адресно формулировать предпроектные задачи и описания результатов (ПЗ) 
Владеть навыками современного проектирования и оформления проектной документации:
',
            'product_result' => 'Профессиональный проектный продукт (комплексный проект комфортной архитектурной среды), пригодный для практической реализации, конкурсного представления и поэтапной публикации процесса и результатов в профессиональных и общественно-политических изданиях и сетях',
            'state_id' => '1',
            'supervisors' => 'Ашихмин Александр Викторович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Благоустройство территорий для маломобильных групп населения (МГН) в г. Иркутске',
            'places' => '15',
            'goal' => 'Проектирование объектов безбарьерной городской среды в г. Иркутске для МГН',
            'description' => 'Необходимо выполнить проектирование объектов городской среды для маломобильных групп населения (МГН) в соответствии с нормативными документами и правилами благоустройства территории. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Управление социальной защиты населения по г. Иркутску',
            'study_result' => 'Знания: о составе проектной и рабочей документации при проектировании объектов благоустройства городской среды для МГН 
Умения: составлять ТЗ, анализировать территорию, проводить оценку и обоснование обследований территории с позиции приспособленности среды к МГН, выполнять дизайн-проект, а так же рабочую документацию
Навыки: переговоров с заказчиком, с потребителями среды; проведения общественных слушаний, работы в графических редакторах и программах 3d моделирования, работы со смежными специалистами.
',
            'product_result' => 'Проекты благоустройства городской среды для маломобильных групп населения в г. Иркутске',
            'state_id' => '1',
            'supervisors' => 'Черниговская В.В. ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Цифровая модель объекта культурного наследия',
            'places' => '15',
            'goal' => 'Создание цифровой модели объекта культурного наследия',
            'description' => 'Для повышения качества реставрационно-реконструктивного проектирования и обеспечения сохранности объектов культурного наследия необходимо создание цифровой модели зданий.
Задачи:
1. Изучение программ для цифрового и информационного моделирования зданий
2. Разработка типовой цифровой модели здания
3. Сбор информации по конкретному ОКН (чертежи, фотофиксация, замеры)
4. Разработка цифровой модели конкретного ОКН, на основе собранных данных
5. Детальная проработка декоративных элементов ОКН
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Служба по охране объектов культурного наследия Иркутской области',
            'study_result' => 'Знать специфику ОКН; основные инструменты программ цифрового и информационного моделирования (BIM)
Уметь проектировать в программах цифрового и информационного моделирования зданий
Владеть технологиями цифрового и информационного моделирования зданий
',
            'product_result' => 'Цифровая модель объекта культурного наследия',
            'state_id' => '1',
            'supervisors' => 'Ларионов Никита Андреевич, Низамутдинова Зиля Фаритовна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Пространственная база данных ценной застройки г. Иркутска советского периода',
            'places' => '15',
            'goal' => 'Формирование базы данных  для поиска текстовой и графической информации об объектах архитектуры',
            'description' => 'При архитектурном проектировании в исторически сложившейся городской среде необходимы сведения о застройке различного характера. Информация может находиться в источниках, доступ к которым не всегда возможен и требует временных и прочих затрат. Кроме того, есть архивный материал, представленный только на бумажном носителе. Как проектировщикам, так и студентам архитектурного направления, для эффективного решения производственных и учебных задач нужен систематизированный оцифрованный материал в одном источнике.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Служба по охране объектов культурного наследия Иркутской области',
            'study_result' => 'Знать особенности застройки советского периода; инструменты оцифровки
Уметь систематизировать данные о застройке, выявлять критерии, оформлять результаты анализа
Владеть навыками работы в QGIS
',
            'product_result' => 'Пространственная база данных исторической застройки Иркутска, разработанная в программе QGIS',
            'state_id' => '1',
            'supervisors' => 'Прокудин Александр Николаевич, Сыроежкина Мария Александровна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Пространственная база данных исторической застройки Иркутска',
            'places' => '15',
            'goal' => 'Формирование базы данных  для поиска текстовой и графической информации об объектах архитектуры',
            'description' => 'При архитектурном проектировании в исторически сложившейся городской среде необходимы сведения о застройке различного характера. Информация может находиться в источниках, доступ к которым не всегда возможен и требует временных и прочих затрат. Кроме того, есть архивный материал, представленный только на бумажном носителе. Как проектировщикам, так и студентам архитектурного направления, для эффективного решения производственных и учебных задач нужен систематизированный оцифрованный материал в одном источнике.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Служба по охране объектов культурного наследия Иркутской области',
            'study_result' => 'Знать специфику исторической застройки; инструменты оцифровки
Уметь систематизировать данные о застройке, выявлять критерии, оформлять результаты анализа
Владеть навыками работы в QGIS
',
            'product_result' => 'Пространственная база данных исторической застройки Иркутска, разработанная в программе QGIS',
            'state_id' => '1',
            'supervisors' => 'Сыроежкина Мария Александровна, Шишканов Владимир Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'расчетное обоснование в проектировании высотных зданий с диафрагмами жесткости',
            'places' => '15',
            'goal' => 'Получение навыков расчетов высотных знаний с диафрагмами жесткости на статические и динамические воздействия с использованием специализированных программных средств',
            'description' => 'Проектирование высотных зданий сопряжено с рядом проблем, связанных с обеспечением требуемой жесткости и прочности конструкций, что приводит к неизбежному использованию диафрагм жесткости, которые в большинстве случаев должны иметь внутренние проемы (дверные, оконные и пр.) Наличие таких проемов, выполненных с применением традиционных для строительства прямоугольных форм, сопровождается возникновением особых точек, что в свою очередь порождает значительные затруднения в расчетах и проектировании конструктивных элементов.  Сочленения разнородных конструктивных элементов должно сопровождаться обеспечением их корректными расчетными обоснованиями в условиях нерегулярных граничных условий. Обеспечение таких расчетных мероприятий возможно только с использованием численных методов (например, методов конечного элемента) на основе специализированных программных комплексов, реализующих соответствующие алгоритмы.  
Традиционные для расчета строительных конструкций методы конечного элемента (КЭ), основанные на законах линейной теории упругости, не позволяют решать задачи получения корректных решений в окрестности точек, являющихся концентраторами напряжений и локализацией развития трещин, особенно при интенсивных воздействиях. По этой причине необходимы выполнения конструктивных мероприятий и их проектное обеспечение, связанное с уменьшением напряженного состояния в окрестности особых точек. Перечисленные обстоятельства создают необходимость формирования специализированного курса обучения
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'тематики предприятий, выполняющий расчетные обоснования проектов',
            'study_result' => 'Знания: Получение компетенций в области проектирования высотных зданий со стволами и дифрагмами жесткости с использованием цифровых и численных технологий.
Умения: выполнять расчетное обоснование проектов высотных знаний с диафрагмами жесткости на статические и динамические воздействия
Навыки: работа в специализированных программных комплексах
',
            'product_result' => 'Создание полноценных проектов высотных знаний с диафрагмами жесткости на статические и динамические воздействия в автоматизированных системах проектирования ',
            'state_id' => '1',
            'supervisors' => 'Соболев Владимир Иванович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Использование солнечной энергии для отопления и горячего водоснабжения потребителей в индивидуальном жилищном строительстве, на децентрализованных территориях ',
            'places' => '15',
            'goal' => 'Разработка проекта использования солнечной энергии для отопления и горячего водоснабжения зданий в удаленных территориях, а также создание программы для расчета параметров системы, использующей солнечные коллекторы',
            'description' => 'Проводится литературный обзор  и сравнение существующих видов солнечных коллекторов, применительно к рассматриваемой территории. Расчет экономической эффективности солнечной уста-
новки основан на оценке средних значений солнечной радиации в месте установки системы, а также на правильном определении требуемой производительности, схемно-структурного состава установки, и стоимости отдельных элементов в данной местности. Проводится расчет систем горячего водоснабжения и отопления с использованием солнечной энергии. Осваивается работа в программном комплексе Matlab (SimInTech) и других онлайн ресурсов для расчетов ВИЭ. Формируются универсальные математические модели и программы для расчета системы, использующей солнечные коллекторы. Анализируется экономическая эффективность применяемой системы солнечного теплоснабжения  и ГВС потребителя
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Прогноз топливно-энергетического комплекса от Фонда «Надежная смена», научная молодежная школа «Возобновляемые источники энергии и приоритеты научно-технологического развития»',
            'study_result' => 'Знания: нетрадиционные возобновляемые источники энергии, виды солнечных коллекторов
Умения: выполнять расчеты солнечных коллекторов, моделировать объекты в программных комплексах, работать в команде
Навыки: основы программирования в Matlab (SimInTech), защита результатов выполненной работы в виде публичного доклада
',
            'product_result' => 'Повышение  эффективности энергообеспечения удаленных территорий, снижение платы за отопление и ГВС у потребителя, универсальные математические модели и программы для расчета солнечных коллекторов',
            'state_id' => '1',
            'supervisors' => 'Петрова Анастасия Николаевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание системы мониторинга и накопительной базы данных для контроля и прогнозирования состояния теплоэнергетического оборудования на основе интерфейса, составленного на базе 3D модели узлов и агрегатов.',
            'places' => '15',
            'goal' => 'Улучшить эксплуатационные характеристики узлов и агрегатов теплоэнергетического оборудования, на основе накопленных сведений полученных в течении длительного периода времени, а также текущих параметров состоянии системы.',
            'description' => 'В настоящий момент для проведения эксплуатационного контроля металла и технического диагностирования, составляется значительный объем документации, связанной с ремонтами, контролем металла, инцидентами, а также заменами на техническом устройстве по отдельным разрозненным формулярам и документам. Для ускорения проведения данных работ, а также в целях исключения ошибок при формировании объемов, предлагается консолидировать исполнительную документацию по техническому состоянию оборудования и привязать полученную информацию к 3D модели технического устройства. В дополнении на 3D модель оборудования для улучшения эксплуатационных характеристик предлагается вывести текущие параметры состояние оборудования, полученные от систем мониторинга, датчиков. Предложенные решения позволяют создать автоматизированный планировщик для составления расписание плановых ремонтных работ, капитальных ремонтов, замены узлов и агрегатов. Предлагается создать систему сквозного мониторинга для разных уровней инженерно-технического персонала, а также разделить полномочия по конфигурированию и настройке.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Лаборатория энергетики
Акселерационная программа, реализуемая ГК «ЕвроСибЭнерго» на базе ИРНИТУ.
',
            'study_result' => 'Знания: свойства металлов и сплавов; марки материалов, используемых для элементов основного и вспомогательного оборудования теплоэнергетических станций, основы моделирования процессов и объектов теплоэнергетики с применением компьютерных технологий.
Умения:  подобрать марку металла для элементов котельных и турбинных установок; определить виды разрушения металла элемента оборудования в эксплуатации, применять методы математического моделирования при исследовании и проектировании теплотехнологических систем и их элементов; использовать пакеты прикладных программ для моделирования и оптимизации теплотехнологических процессов, установок и систем; выбирать эффективный численный метод для решения конкретной задачи, оценивать его точность и надежность.
Навыки: владение методами неразрушающего и разрушающего контроля металла при диагностировании оборудования, методами и приемами компьютерного моделирования процессов, аппаратов и систем теплоэнергетики с помощью прикладных программ
',
            'product_result' => 'Человеко-машинный интерфейс для взаимодействия накопительной базы данных и систем мониторинга отдельных элементов теплоэнергетического оборудования с его 3D моделью. Интерфейс должен отображать техническое состояние отдельных элементов оборудования с целью обеспечения реализации программы профилактического технического обслуживания различного оборудования, в частности, поверхностей нагрева котлоагрегатов, на основании обоснованной информации и экономически целесообразной базы для принятия решений',
            'state_id' => '1',
            'supervisors' => 'Самаркина Екатерина Владимировна        , Бублик Дмитрий Алексеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Повышение износо- и коррозионностойкости элементов систем пылеприготовления (СПП)',
            'places' => '15',
            'goal' => 'Разработка мероприятий, позволяющих защитить элементы СПП от коррозионного и абразивного износа и увеличивающих межремонтный период в 2 раза',
            'description' => 'Абразивные свойства угольной пыли приводят к повышенному износу мелющих органов мельниц (бил, билодержателей молотковых мельниц и мелющих лопаток мельниц-вентиляторов), защитной брони, пылепроводов и других элементов СПП. Их приходится довольно часто менять, что влечёт за собой рост издержек. Эффективность применяемых на сегодня методов защиты рабочей поверхности низка',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'Акселерационная программа «Лаборатория энергетики»
ООО «Байкальская энергетическая компания»
',
            'study_result' => 'Знания: строение материалов и общие закономерности формирования их структуры, эксплуатационные свойства материалов и их зависимость от строения, группы материалов, используемые в промышленности, в частности в сфере энергетики и основные способы переработки материалов в изделия. Основные технические характеристики топлив; принципы подготовки топлива к сжиганию в котельных агрегатах на объектах профессиональной деятельности.
Умения: оценка и прогнозирование поведения материалов и изменения их свойств в зависимости от обработки и эксплуатационных факторов. Проведение лабораторного анализа по определению технических характеристик топлива; планировать и выполнять виды работ по эксплуатации объектов теплоэнергетики.
Навыки: выбор материалов и назначения технологических процессов их переработки в изделия. Работы по подготовке топлива к сжиганию в котельных агрегатах; организация ремонтов технологического оборудования, монтажных, наладочных и пусковых работ
',
            'product_result' => 'Методика повышения износо- и коррозионностойкости элементов систем пылеприготовления (СПП)',
            'state_id' => '1',
            'supervisors' => 'Ощепков Василий Владимирович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Использование низкопотенциальной теплоты системы оборотного водоснабжения ТЭЦ. ',
            'places' => '15',
            'goal' => 'Разработка проекта использования низкопотенциальной теплоты в тепловой схеме ТЭЦ.',
            'description' => 'Обзор и поиск технических решений. Литературный обзор  и постановка задач. Выбор вариантов использования низкопотенциальной теплоты системы оборотного водоснабжения ТЭЦ. Технико-экономические расчеты принятых к рассмотрению вариантов использования низкопотенциальной теплоты системы оборотного водоснабжения ТЭЦ.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: Знает инструменты поиска информации. 
Умения: Умеет  выделить  из  массива  информации  ключевые  моменты; использовать инструменты поиска информации. 
Навыки: Планирует, выполняет, оформляет и представляет результаты проекта. 
',
            'product_result' => 'Повышение энергетической эффективности ТЭЦ.',
            'state_id' => '1',
            'supervisors' => 'Картавская Вера Михайловна ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Снижение потерь напряжения и электроэнергии в распределительных электрических сетях 6-10 кВ',
            'places' => '15',
            'goal' => 'Оценка эффективности мероприятий по снижению потерь напряжения и электроэнергии в распределительных электрических сетях 6-10 кВ электросетевой компании',
            'description' => 'На начальном этапе выполняется сбор информации о параметрах режима электрических сетей 6-10 кВ электросетевой компании. Составляются схемы замещения электрической сети, вводятся исходные данные в программу ПРРЭС, разработанную на кафедре электрических станций, сетей и систем. В программе выполняется расчёт максимальных режимов электрической сети, выявляются «очаги» потерь напряжения и электроэнергии. Проводится анализ структуры потерь в электрических сетях, оценка эффективности мероприятий по снижению потерь электроэнергии и напряжения.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: оборудование электрических сетей и систем: линии электропередачи, трансформаторы и др.; процессы, происходящие в электрических сетях
Умения: применять математический аппарат для исследования потерь в электрических сетях
Навыки: использование программного обеспечения для проведения расчётов установившихся режимов
',
            'product_result' => 'Технический отчёт о работе с отражением всех основных этапов проекта',
            'state_id' => '1',
            'supervisors' => 'Акишин Леонид Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Расширение функций интеллектуальной системы учета электроэнергии',
            'places' => '15',
            'goal' => 'Расширение функций интеллектуальной системы учета электроэнергии для ее пользователей',
            'description' => 'В соответствии с постановлением Правительства Российской Федерации от 19.06.2020 г. № 890:
• все приборы учета, вводимые в эксплуатацию энергоснабжающими организациями с 1 января 2022 г. в целях коммерческого учета электроэнергии на розничных рынках и предоставления коммунальных услуг, должны быть присоединены к интеллектуальной системе учета электроэнергии (ИСУЭ);
• пользователям ИСУЭ предоставляется доступ к минимальному набору функций ИСУЭ. 
В минимальном наборе функций ИСУЭ предусмотрен доступ к данным измерений интеллектуальных приборов, позволяющим расширить функции ИСУЭ для пользователей. Первоначально проектом предусматривается реализация следующих пяти функций:
для потребителей электроэнергии – 1) выбор экономически выгодного тарифа расчета за потребленную электроэнергию; 2) планирование энергоемких процессов хозяйствования с целью уменьшения размера платы за электроэнергию без снижения электропротребления;
для сетевых организаций – 3) определение топологии электрической сети; 4) выявление ненаблюдаемых отборов электроэнергии из электрических сетях, в том числе кражи электроэнергии; 5) балансировка нагрузки в распределительных сетях с целью снижения потерь электроэнергии. 
В дальнейшем планируется расширение функций для пользователей ИСУЭ (потребителей электроэнергии, гарантирующих поставщиков, энергосбытовых организаций, сетевых организаций, производителей электрической энергии, системного оператора и субъектов оперативно-диспетчерского управления, организаций коммерческой инфраструктуры) в соответствии с их потребностями. 
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знать: конструкции и характеристики интеллектуальных измерительных приборов и ИСУЭ; системы обмена данными между интеллектуальными приборами и ИСУЭ; методы обработки информации;  математическое моделирование и вычислительные методы.
Уметь: использовать методы обработки информации и вычислительные методы; интерпретировать информацию в виде схем, графов, диаграмм, графиков, таблиц.
Владеть: навыками обработки информации и применения вычислительных методов,  реализации прототипов программ.
',
            'product_result' => 'Прототипы программных комплексов для пользователей с расширенными функциями ИСУЭ.',
            'state_id' => '1',
            'supervisors' => 'Болоев Евгений Викторович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Энергетическая безопасность города Иркутска',
            'places' => '15',
            'goal' => 'Решение проблемы обеспечения энергетической безопасности города Иркутска',
            'description' => 'Решение проблемы обеспечения энергетической безопасности города Иркутска требует: трактовку понятия энергетическая безопасность; выбор путей ее обеспечения; выбор средств обеспечения  энергетической безопасности города Иркутска.',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: знать основные причины снижения энергетической безопасности
Умения: уметь выбирать средства повышения энергетической безопасности
Навыки: владеть навыками оценки энергетической безопасности
',
            'product_result' => 'Альтернативные проекты обеспечения  энергетической безопасности города Иркутска.',
            'state_id' => '1',
            'supervisors' => 'Дубицкий Михаил Александрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Определение текущих значений параметров электрооборудования и электрических сетей в нормальном и аварийном режимах по мгновенным цифровым данным',
            'places' => '15',
            'goal' => 'Разработка математических способов и алгоритмов определения текущих значений параметров электрооборудования и электрических сетей позволит создать комплекс программ и/или электронных блоков с целью их реализации на внутреннем и внешнем рынке для существующих и интеллектуальных энергосистем ближайшего будущего. Коммерческая реализация проекта требует наличия программистов и электронщиков.',
            'description' => 'Текущее значение параметров электрооборудования и энергосистемы в целом является случайным по целому ряду причин. К основным причинам относятся следующие:
- переменные погодные условия эксплуатации, которые изменяют проводимость грунта, проводов и тросов заземления, диэлектрическую и магнитную проницаемость среды, распределённую ёмкость и индуктивность ЛЭП и др.;
- постоянно изменяющийся характер нагрузки в процессе эксплуатации, что приводит к кратковременным перенапряжениям на линиях или к провалам напряжения, перегрузка ведёт к насыщению электротехнической стали магнитопроводов трансформаторов и изменению гармонического состава цепи и др.;
- включения и отключения мощных потребителей приводят к постоянным переходным процессам на линии;
- изменяющая со временем топология сети из-за подключения новых и/или отключения существующих потребителей электроэнергии.
В этой связи задача определения текущих значений параметров электрооборудования и сетей имеет существенное значение, так как наличие этих параметров позволяет установить место и причину возникновения аварийного режима
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: физико-математический аппарат, методы анализа и моделирования, теоретического и экспериментального исследования для определения текущих значений параметров электрооборудования и сетей
Умения: оформлять результаты научно-исследовательской работы в виде отчёта, реферата или публикации
Навыки: навыки публичной защиты результатов научно-исследовательской работы
',
            'product_result' => 'Методика, с обязательной фиксацией в одном из форматов: публикация, выпускная квалификационная работа, пояснительная записка или инструкции, а при наличии человеческих ресурсов (программистов и электронщиков) и финансовых ресурсов для оплаты их труда, приобретения оборудования и комплектующих деталей – создание конкурентных электронных блоков, защищённых патентами РФ',
            'state_id' => '1',
            'supervisors' => 'Муссонов Геннадий Петрович',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка и исследование методик определения мест повреждения в  электрических сетях с изолированной нейтралью.',
            'places' => '15',
            'goal' => 'Разработать и исследовать методику определения поврежденного присоединения при однофазном замыкании на землю (ОЗЗ) в электрических сетях с изолированной нейтралью. Исследовать методики определения места повреждения (ОМП) на поврежденной линии электропередачи.',
            'description' => 'Изучается методика расчета электрических режимов в  фазных координатах (ФК). Осваивается работа в программном комплексе «Расчет в ФК». Формируется модель электрической сети с изолированной нейтралью для проведения расчетов в ФК. Проводится серия расчетов режимов в ФК. Формируются рекомендации. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: По проблеме ОМП при ОЗЗ в сетях с изолированной нейтралью.  По расчету электрических режимов в ФК и работе в программном комплексе «Расчет в ФК»
Умения: Формировать модель электрической сети с изолированной нейтралью для проведения расчетов в ФК
Навыки: Расчета нормальных и аварийных режимов в ФК в сетях с изолированной нейтралью.
',
            'product_result' => 'Будет разработана методика определения поврежденного присоединения при ОЗЗ в электрических  сетях с изолированной нейтралью. Будет разработана релейная защита для отключения поврежденного присоединения с ОЗЗ. Будет разработана лабораторная работа по методике определения поврежденного присоединения при ОЗЗ в электрических  сетях с изолированной нейтралью. ',
            'state_id' => '1',
            'supervisors' => 'Тигунцев Степан Георгиевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка проектной документации и модернизация лабораторного оборудования кафедры электрических станций, сетей и систем',
            'places' => '15',
            'goal' => 'Разработка документации, модернизация и монтаж оборудования учебных лабораторий кафедры электрических станций, сетей и систем: аудитория В-212, аудитория В-016, учебный полигон – подстанция 110 кВ',
            'description' => 'Проектная документация на оборудование учебной лаборатории релейной защиты и автоматики (ауд. В-212) не везде соответствует фактической сборке стенда, что усложняет проведение лабораторных работ. В учебно-исследовательской лаборатории «Электрическая часть электростанций и подстанций» (ауд. В-016) в 2021 году восстановлена ячейка комплектного распределительного устройства 10 кВ, документация на которую отсутствует. Имеются отдельные цифровые терминалы релейной защиты и автоматики серии MiCOM, которые необходимо подключить к оборудованию учебного полигона – подстанции 110 кВ между корпусами В и Г. Некоторые стенды лабораторий требуют специального профилактического обслуживания.
При выполнении проекта будет сформировано 3-4 бригады по 3-4 студента, каждая из которых будет выполнять проверку, прозвонку и составление реальной электрической схемы закреплённого за ней лабораторного оборудования, формировать электрические схемы лабораторных стендов в цифровом виде при помощи систем автоматизированного проектирования и/или редакторов схем (nanoCAD, Компас, Visio). Под руководством наставника студенты проведут модернизацию лабораторного оборудования, выполнят монтаж дополнительных узлов и элементов схем лабораторных стендов, проведут пусконаладочные работы.
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: принципы работы первичного и вторичного электрооборудования, схемы управления и блокировок первичного электрооборудования, принципы действия различных типов релейной защиты электрооборудования от коротких замыканий
Умения: проверять электрические схемы, выполнять электромонтажные и профилактические работы электрооборудования, представлять результаты выполненной работы в виде пояснительной записки
Навыки: чтение электрических схем первичного и вторичного электрооборудования, работа в системах автоматизированного проектирования и/или редакторах схем, выполнение пусконаладочных работ электрооборудования, защита результатов выполненной работы в виде доклада
',
            'product_result' => 'Документация к лабораторным стендам в виде исполнительных электронных схем, модернизированные лабораторные стенды.',
            'state_id' => '1',
            'supervisors' => 'Федосов Денис Сергеевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Математическое моделирование фотоэлектрических систем и ветропарков большой мощности',
            'places' => '15',
            'goal' => 'Создание программы для расчета режимных параметров фотоэлектрических систем и ветропарков большой мощности ',
            'description' => 'Современный этап развития энергетических систем характеризуется глубокой интеграцией возобновляемых источников энергии. Наличие экологически чистых комплексов генерации наблюдается на всех уровнях напряжений, начиная с крупных системообразующих объектов и заканчивая мини- и микроустановками, расположенными непосредственно у потребителя. Главной задачей, возникающей при использовании возобновляемых источников энергии, является оптимизация состава оборудования и установленных мощностей. При этом в качестве целевой функции могут выступать различные критерии эффективности применения возобновляемых источников энергии. Например, в автономных энергетических системах целевая функция, как правило, представлена нормированной стоимостью энергии (руб./кВт∙ч), в системах резервного и аварийного (в т.ч. комбинированного) питания – максимизация количества часов автономного снабжения и минимизация недоотпуска электроэнергии, в комплексах генерации, реализующихся в рамках энергосервисного контракта – количество сэкономленного органического топлива и прибыль инвестора. Представленные критерии могут быть объединены и расширены в зависимости от условий поставленной задачи.
Определение численных значений критериев эффективности напрямую связанно с моделированием режимов работы энергетических систем, состоящих из элементов генерации, передачи, распределения, аккумулирования и потребления энергии. Цель данного исследования состоит в формировании ряда требований к математической модели фотоэлектрических преобразователей и демонстрации подходов, позволяющих моделировать все необходимые режимные параметры фотоэлектрических систем и ветропарков с учётом изменения метеоусловий.
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: теоретические основы электротехники, методы оптимизации, возобновляемые источники энергии
Умения: выполнять расчеты, моделировать технические объекты, работать в команде
Навыки: основы программирования в Matlab
',
            'product_result' => 'Универсальные математические модели и программы для расчета режимов фотоэлектрических систем и ветропарков',
            'state_id' => '1',
            'supervisors' => 'Карамов Дмитрий Николаевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Интеграция аккумулирующих устройств большой емкости в энергетические системы с возобновляемыми источниками энергии',
            'places' => '15',
            'goal' => 'Создание расчетного модуля для решения задач обоснования интеграции аккумулирующих устройств большой емкости в энергетические системы',
            'description' => 'При исследовании энергетических систем с возобновляемыми источниками энергии и аккумуляторными батареями важно учитывать процессы деградации и замены энергетического оборудования в течение всего срока эксплуатации. Это необходимо для точного определения дополнительных издержек на замену, влияющих на показатели экономической эффективности рассматриваемого состава оборудования. 
Аккумуляторные батареи являются стабилизирующим элементом автономной энергетической системы, работающий в циклическом режиме. Циклический режим характеризуется сменяющими друг друга процессы заряда и разряда в зависимости от генерации возобновляемых источников энергии и уровня электрической нагрузки. Стохастическая составляющая генерации существенно отражается на основных эксплуатационных показателях аккумуляторных батарей, таких как состояние заряда, падение напряжения, внутреннее сопротивление, а также химических процессах.
Аккумуляторные батареи имеют три важных показателя таких как максимальный срок службы, предельное количество циклов заряд/разряд в зависимости от глубины разряда и среднегодовое количество циклов заряд/разряд. 
',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: теоретические основы электротехники, методы оптимизации, возобновляемые источники энергии, 
Умения: выполнять расчеты, моделировать технические объекты, работать в команде
Навыки: основы программирования в Matlab
',
            'product_result' => 'Универсальные математические модели и программы для расчета режимов работы накопителей энергии и энергетических систем',
            'state_id' => '1',
            'supervisors' => 'Суслов Константин Витальевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Использование концепции энергетического хаба и потоковых методов в интегрированных энергетических системах ',
            'places' => '15',
            'goal' => 'Определить с помощью потоковых методов уровень структурной надежности интегрированных систем.  ',
            'description' => 'Энергетика является важнейшей отраслью, охватывающей добычу энергоресурсов, производство, преобразование, транспортировку и использование энергии потребителями. Энергоснабжение потребителей обеспечивается различными видами энергоресурсов, которые мало взаимосвязаны между собой. В качестве объединяющей системы выступает топливно-энергетический комплекс (ТЭК) России. ТЭК включает в себя основные три подсистемы: топливоснабжающие системы; системы электро– и теплоснабжения; система ядерной энергетики. На этапе планирования развития ТЭК рассматриваются все отрасли энергетики, но вопросам комплексного использования различных видов энергии не уделяется должного внимания.
Предлагается определить структурную надежность интегрированных систем энергоснабжения с использованием различных методов. 
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: 
– перспективы и возможности развития концепции интеллектуальных энергетических систем;
– технологический базис интеллектуальных энергетических систем;
Умения: 
– использовать методические, нормативные и руководящие материалы, касающиеся выполняемой работы;
– формулировать и решать задачи, возникающие в ходе производственно-технологической и научно-исследовательской деятельности и требующих углубленных профессиональных знаний;
– анализировать, структурировать и обобщать научно-исследовательские материалы
Навыки: 
– владеть терминологией в области интегрированных энергетических систем; 
– владеть навыками определения структурной надежности методом поиска путей и сечений. 
',
            'product_result' => 'Методика определения структурной надежности системы энергоснабжения.',
            'state_id' => '1',
            'supervisors' => 'Сердюкова Екатерина Владимировна ',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создания кибер-физической модели изолированных систем электроснабжения с возобновляемыми источниками энергии',
            'places' => '15',
            'goal' => 'Разработка и апробирование алгоритма создания цифровых двойников изолированных систем с ВИЭ на базе кибер-физической модели',
            'description' => 'Согласно концепции цифровой трансформации российской экономики и в частности трансформации российской ТЭК разработаны основные подходы для реализации данной программы. Один из элементов цифровой платформа является цифровой двойник энергетического объекта или системы. Существует два подхода для реализации  данного направления: цифровой двойник, в основе которого лежат нелинейные дифференциальные уравнения в частных производных; цифровая тень, в основе  которого лежат промышленный интернет вещей и большие данные.
Целью данных подходов является получение алгоритмов управления энергетическими объектами (системами) для которых невозможно реализовать типовые алгоритмы управления.
Для этих целей создается кибер-физическая модель, состоящая из реальных элементов энергетических систем: трансформатора, источника питания, физические модели линии передач, физические модели нагрузок. В дальнейшем в системе имитационного моделирования создается имитационная модель данной физической модели энергетической системы. Проводится верификация различных режимов работы физической модели и имитационной модели, на этом этапе уточняются алгоритмы расчета параметра блоков имитационной модели по номинальным (каталожным) данным реальных электротехнических объектов. В дальнейшем имитационная модель используется для получения большого объема статистической информации по различным режимам работы физической модели (BIG DATA). Эти данные лежат в основе создания различных алгоритмов управления с использования элементов искусственного элемента. Полученные алгоритмы управления проверяются на кибер-физические  модели. 
',
            'difficulty' => '2',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: принципы работы основного электрооборудования, трансформатора, линии передачи, нагрузки, принципы работы основных систем имитационного моделирования энергетическими объектами 
Умения: выполнение электромонтажных работ, снятие рабочих характеристик с основных электротехнических объектов     
Навыки:  чтение электрических схем первичного вторичного электрооборудования, работа в системах имитационного моделирования с защитой результатов выполненной работы
',
            'product_result' => 'Результатом проведенной работы являются различные алгоритмы и процедуры, позволяющие создать адекватную имитационную модель по параметрам реального энергетического объекта и будет проведена апробация различных алгоритмов управления на базе искусственного интеллекта с целью выбора наиболее оптимального варианта.   ',
            'state_id' => '1',
            'supervisors' => 'Шамарова Наталия Андреевна',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Разработка проектов систем автоматизации промышленных установок',
            'places' => '15',
            'goal' => 'Разработка технорабочих проектов автоматизированных систем управления (АСУ) объектов промышленного и энергетического оборудования. ',
            'description' => 'Выбор темы проекта и формулировка технических предложений по проекту. Изучение способов получения и обработки информации по проекту. За время обучения студенты получают опыт проектной работы по своей будущей профессии, лучше поймают взаимосвязь преподаваемых дисциплин с практикой и значимость командной работы, а также вырабатывают умение доводить дело до конца и в срок. Дополнительно к диплому каждый выпускник к окончанию университета может сформировать свое личное портфолио реализованных проектов с различными компаниями, что может помочь ему в трудоустройстве на более привлекательную работу и создаст предпосылки для образования в ИРНИТУ компаний-технологических стартапов, способных самостоятельно продолжать работу, начатую в рамках проектной деятельности в партнерстве с внешними заказчиками. ',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => 'ООО «Иркутский институт Гипрокоммунводоканал» 
664033, Россия, Иркутская область, г. Иркутск,
ул. Лермонтова, д. 257
Тел. +7(3952) 56-22-30
www.polyplastic.ru
',
            'study_result' => 'Знания: основ разработки проектной и рабочей документации автоматизированных систем управления объектов промышленного и энергетического оборудования.
Умения: рассчитывать необходимое количество средств измерений, управляющего и коммутационного оборудования, предлагаемого промышленностью.
Навыки: выбора необходимого типа и номенклатуры оборудования, изделий, материалов.
',
            'product_result' => 'Технический проект (ТП), Рабочий проект (РП). Обеспечение объекта проектной документацией, позволяющей реализовать автоматизированную систему управления.',
            'state_id' => '1',
            'supervisors' => 'Илющенко Владимир Васильевич',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Система инженерных электротехнических коммуникаций электрооборудования',
            'places' => '15',
            'goal' => 'Разработка системы электротехнических коммуникаций, предназначенных для создания внутренних инженерных сетей, используемых для электроснабжения и управления электрооборудованием',
            'description' => 'Для электроснабжения и управления электрооборудованием используются сети внутренних инженерных коммуникаций. В ходе проектирования требуется точно определить структуру сети, ее геометрические и электрические параметры, включающие планы оборудования, их мощность, требования по размещению, управлению и электроснабжению. 
При этом разрабатываемая система инженерных электротехнических коммуникаций электрооборудования уникальна для каждого объекта. Так же в случае внесения изменения в конструкторскую документацию системы требуется в кратчайшие сроки либо перепроектировать существующую, либо создать новую систему внутренних инженерных сетей. 
Большая часть требований к системам электротехнических коммуникаций имеет формализованный вид и описана в научной литературе, а трудоемкость их проектирования связана, в первую очередь, с выполнением большого числа рутинных операций конструктором. 
Таким образом, для ускорения процесса проектирования наиболее рационально перенести большую часть рутинных операций проектирования в среду автоматизированной системы, а так как в России широко используется система AutoCad, то автоматизированные процедуры проектирования можно реализовать посредством использования ее последних версий.',
            'difficulty' => '3',
            'date_start' => '2022-09-01',
            'date_end' => '2023-05-30',
            'requirements' => '',
            'customer' => '',
            'study_result' => 'Знания: основ разработки проектной документации внутреннего электроснабжения и электроосвещения.
Умения: рассчитывать необходимое количество осветительного и коммутационного электрооборудования.
Навыки: выбора необходимого типа и номенклатуры кабельных изделий.
',
            'product_result' => 'Проект внутреннего электроснабжения и электроосвещения заданных помещений',
            'state_id' => '1',
            'supervisors' => 'Дунаев Андрей Михайлович',
            'type_id' => '1',
        ]);











        DB::table('project_skill')->insert([
            'skill_id' => '1',
            'project_id' => '1',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '2',
            'project_id' => '1',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '3',
            'project_id' => '1',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '4',
            'project_id' => '1',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '1',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '3',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '6',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '7',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '8',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '9',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '10',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '11',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '12',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '13',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '14',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '2',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '3',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '16',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '17',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '18',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '6',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '7',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '19',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '8',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '9',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '10',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '20',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '21',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '11',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '12',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '22',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '23',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '3',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '3',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '16',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '17',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '18',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '6',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '7',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '19',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '8',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '9',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '10',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '20',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '21',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '11',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '12',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '22',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '23',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '4',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '24',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '25',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '26',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '27',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '28',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '29',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '6',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '12',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '7',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '30',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '31',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '32',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '33',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '34',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '23',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '5',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '35',
            'project_id' => '7',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '36',
            'project_id' => '7',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '37',
            'project_id' => '7',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '7',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '38',
            'project_id' => '8',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '8',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '23',
            'project_id' => '8',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '8',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '39',
            'project_id' => '9',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '24',
            'project_id' => '9',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '40',
            'project_id' => '9',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '9',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '41',
            'project_id' => '10',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '42',
            'project_id' => '10',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '43',
            'project_id' => '10',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '6',
            'project_id' => '10',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '7',
            'project_id' => '10',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '11',
            'project_id' => '10',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '10',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '10',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '44',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '45',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '3',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '17',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '8',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '9',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '10',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '20',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '21',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '11',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '12',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '22',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '23',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '46',
            'project_id' => '11',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '47',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '48',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '49',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '50',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '51',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '52',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '53',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '54',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '55',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '56',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '57',
            'project_id' => '12',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '6',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '7',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '9',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '10',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '20',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '41',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '42',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '24',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '58',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '12',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '59',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '60',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '61',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '62',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '13',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '6',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '7',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '9',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '10',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '20',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '41',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '42',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '24',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '58',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '12',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '59',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '60',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '61',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '62',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '63',
            'project_id' => '14',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '64',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '65',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '66',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '6',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '7',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '9',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '10',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '20',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '41',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '42',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '24',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '58',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '12',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '59',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '60',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '61',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '62',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '15',
            'project_id' => '15',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '64',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '65',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '66',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '6',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '7',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '9',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '10',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '20',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '41',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '42',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '24',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '58',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '12',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '5',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '59',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '60',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '61',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '62',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '67',
            'project_id' => '16',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '8',
            'project_id' => '17',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '9',
            'project_id' => '17',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '10',
            'project_id' => '17',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '3',
            'project_id' => '17',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '8',
            'project_id' => '18',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '9',
            'project_id' => '18',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '10',
            'project_id' => '18',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '3',
            'project_id' => '18',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '68',
            'project_id' => '19',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '69',
            'project_id' => '19',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '70',
            'project_id' => '19',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '71',
            'project_id' => '20',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '68',
            'project_id' => '21',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '72',
            'project_id' => '21',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '73',
            'project_id' => '21',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '3',
            'project_id' => '22',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '74',
            'project_id' => '22',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '75',
            'project_id' => '22',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '76',
            'project_id' => '25',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '77',
            'project_id' => '25',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '78',
            'project_id' => '25',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '79',
            'project_id' => '25',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '80',
            'project_id' => '31',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '81',
            'project_id' => '31',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '82',
            'project_id' => '31',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '83',
            'project_id' => '31',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '84',
            'project_id' => '31',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '85',
            'project_id' => '33',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '86',
            'project_id' => '33',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '87',
            'project_id' => '33',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '88',
            'project_id' => '33',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '89',
            'project_id' => '33',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '85',
            'project_id' => '34',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '86',
            'project_id' => '34',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '87',
            'project_id' => '34',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '88',
            'project_id' => '34',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '89',
            'project_id' => '34',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '85',
            'project_id' => '35',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '86',
            'project_id' => '35',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '87',
            'project_id' => '35',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '88',
            'project_id' => '35',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '89',
            'project_id' => '35',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '90',
            'project_id' => '36',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '91',
            'project_id' => '36',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '92',
            'project_id' => '36',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '93',
            'project_id' => '37',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '94',
            'project_id' => '38',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '95',
            'project_id' => '38',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '96',
            'project_id' => '38',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '94',
            'project_id' => '39',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '97',
            'project_id' => '39',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '98',
            'project_id' => '39',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '99',
            'project_id' => '40',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '100',
            'project_id' => '41',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '101',
            'project_id' => '41',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '102',
            'project_id' => '41',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '103',
            'project_id' => '41',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '104',
            'project_id' => '41',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '105',
            'project_id' => '46',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '106',
            'project_id' => '46',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '107',
            'project_id' => '47',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '108',
            'project_id' => '47',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '109',
            'project_id' => '48',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '110',
            'project_id' => '48',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '111',
            'project_id' => '48',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '112',
            'project_id' => '49',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '106',
            'project_id' => '49',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '113',
            'project_id' => '51',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '114',
            'project_id' => '51',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '115',
            'project_id' => '51',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '116',
            'project_id' => '51',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '117',
            'project_id' => '51',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '118',
            'project_id' => '52',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '119',
            'project_id' => '52',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '120',
            'project_id' => '52',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '118',
            'project_id' => '53',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '121',
            'project_id' => '53',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '120',
            'project_id' => '53',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '122',
            'project_id' => '54',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '123',
            'project_id' => '56',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '124',
            'project_id' => '57',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '124',
            'project_id' => '58',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '125',
            'project_id' => '60',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '126',
            'project_id' => '63',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '127',
            'project_id' => '64',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '128',
            'project_id' => '64',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '129',
            'project_id' => '64',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '130',
            'project_id' => '64',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '127',
            'project_id' => '65',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '128',
            'project_id' => '65',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '129',
            'project_id' => '65',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '130',
            'project_id' => '65',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '127',
            'project_id' => '66',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '128',
            'project_id' => '66',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '129',
            'project_id' => '66',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '130',
            'project_id' => '66',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '127',
            'project_id' => '67',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '128',
            'project_id' => '67',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '129',
            'project_id' => '67',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '130',
            'project_id' => '67',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '127',
            'project_id' => '68',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '128',
            'project_id' => '68',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '129',
            'project_id' => '68',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '130',
            'project_id' => '68',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '131',
            'project_id' => '79',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '132',
            'project_id' => '80',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '131',
            'project_id' => '81',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '132',
            'project_id' => '82',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '133',
            'project_id' => '83',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '134',
            'project_id' => '84',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '135',
            'project_id' => '86',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '136',
            'project_id' => '88',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '137',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '138',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '139',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '140',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '141',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '142',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '143',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '144',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '145',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '146',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '147',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '148',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '149',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '150',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '151',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '152',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '153',
            'project_id' => '89',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '154',
            'project_id' => '93',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '155',
            'project_id' => '94',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '86',
            'project_id' => '94',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '156',
            'project_id' => '94',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '157',
            'project_id' => '94',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '158',
            'project_id' => '97',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '159',
            'project_id' => '97',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '160',
            'project_id' => '97',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '161',
            'project_id' => '97',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '162',
            'project_id' => '97',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '163',
            'project_id' => '97',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '164',
            'project_id' => '98',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '165',
            'project_id' => '99',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '158',
            'project_id' => '102',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '166',
            'project_id' => '102',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '167',
            'project_id' => '102',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '168',
            'project_id' => '103',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '169',
            'project_id' => '107',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '170',
            'project_id' => '108',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '171',
            'project_id' => '113',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '172',
            'project_id' => '114',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '173',
            'project_id' => '114',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '174',
            'project_id' => '123',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '175',
            'project_id' => '124',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '176',
            'project_id' => '124',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '177',
            'project_id' => '124',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '178',
            'project_id' => '124',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '179',
            'project_id' => '124',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '180',
            'project_id' => '124',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '181',
            'project_id' => '124',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '182',
            'project_id' => '126',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '183',
            'project_id' => '126',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '184',
            'project_id' => '128',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '185',
            'project_id' => '132',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '186',
            'project_id' => '135',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '187',
            'project_id' => '135',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '188',
            'project_id' => '135',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '189',
            'project_id' => '135',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '190',
            'project_id' => '135',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '191',
            'project_id' => '135',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '192',
            'project_id' => '135',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '193',
            'project_id' => '135',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '194',
            'project_id' => '144',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '195',
            'project_id' => '144',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '196',
            'project_id' => '144',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '197',
            'project_id' => '144',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '198',
            'project_id' => '147',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '199',
            'project_id' => '149',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '200',
            'project_id' => '149',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '201',
            'project_id' => '150',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '202',
            'project_id' => '150',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '203',
            'project_id' => '150',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '204',
            'project_id' => '152',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '205',
            'project_id' => '152',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '206',
            'project_id' => '152',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '204',
            'project_id' => '153',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '207',
            'project_id' => '153',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '206',
            'project_id' => '153',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '204',
            'project_id' => '154',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '207',
            'project_id' => '154',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '206',
            'project_id' => '154',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '204',
            'project_id' => '155',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '207',
            'project_id' => '155',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '206',
            'project_id' => '155',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '204',
            'project_id' => '156',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '207',
            'project_id' => '156',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '206',
            'project_id' => '156',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '208',
            'project_id' => '158',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '209',
            'project_id' => '158',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '210',
            'project_id' => '158',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '211',
            'project_id' => '158',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '212',
            'project_id' => '158',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '213',
            'project_id' => '159',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '214',
            'project_id' => '169',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '215',
            'project_id' => '169',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '216',
            'project_id' => '169',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '217',
            'project_id' => '170',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '218',
            'project_id' => '171',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '219',
            'project_id' => '172',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '220',
            'project_id' => '173',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '221',
            'project_id' => '174',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '222',
            'project_id' => '174',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '223',
            'project_id' => '174',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '224',
            'project_id' => '174',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '225',
            'project_id' => '175',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '226',
            'project_id' => '175',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '227',
            'project_id' => '175',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '228',
            'project_id' => '175',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '229',
            'project_id' => '175',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '225',
            'project_id' => '176',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '226',
            'project_id' => '176',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '227',
            'project_id' => '176',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '228',
            'project_id' => '176',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '229',
            'project_id' => '176',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '230',
            'project_id' => '177',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '231',
            'project_id' => '177',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '232',
            'project_id' => '178',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '233',
            'project_id' => '178',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '234',
            'project_id' => '178',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '235',
            'project_id' => '178',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '236',
            'project_id' => '178',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '237',
            'project_id' => '179',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '238',
            'project_id' => '179',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '239',
            'project_id' => '180',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '240',
            'project_id' => '181',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '241',
            'project_id' => '189',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '242',
            'project_id' => '189',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '243',
            'project_id' => '191',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '244',
            'project_id' => '191',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '241',
            'project_id' => '192',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '242',
            'project_id' => '192',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '245',
            'project_id' => '193',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '246',
            'project_id' => '193',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '247',
            'project_id' => '194',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '248',
            'project_id' => '208',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '249',
            'project_id' => '209',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '250',
            'project_id' => '209',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '251',
            'project_id' => '210',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '252',
            'project_id' => '210',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '253',
            'project_id' => '211',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '253',
            'project_id' => '212',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '254',
            'project_id' => '213',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '255',
            'project_id' => '214',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '256',
            'project_id' => '214',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '257',
            'project_id' => '215',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '258',
            'project_id' => '216',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '259',
            'project_id' => '216',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '234',
            'project_id' => '216',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '260',
            'project_id' => '216',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '258',
            'project_id' => '217',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '259',
            'project_id' => '217',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '234',
            'project_id' => '217',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '261',
            'project_id' => '218',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '262',
            'project_id' => '218',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '263',
            'project_id' => '218',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '264',
            'project_id' => '218',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '265',
            'project_id' => '218',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '266',
            'project_id' => '219',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '267',
            'project_id' => '219',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '268',
            'project_id' => '220',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '269',
            'project_id' => '221',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '270',
            'project_id' => '223',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '271',
            'project_id' => '225',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '272',
            'project_id' => '225',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '80',
            'project_id' => '225',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '234',
            'project_id' => '226',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '273',
            'project_id' => '226',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '24',
            'project_id' => '226',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '274',
            'project_id' => '226',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '275',
            'project_id' => '226',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '276',
            'project_id' => '228',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '277',
            'project_id' => '228',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '278',
            'project_id' => '229',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '279',
            'project_id' => '229',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '94',
            'project_id' => '230',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '280',
            'project_id' => '232',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '281',
            'project_id' => '232',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '282',
            'project_id' => '232',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '4',
            'project_id' => '232',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '283',
            'project_id' => '232',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '284',
            'project_id' => '233',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '285',
            'project_id' => '233',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '286',
            'project_id' => '233',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '287',
            'project_id' => '234',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '284',
            'project_id' => '234',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '288',
            'project_id' => '234',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '289',
            'project_id' => '234',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '290',
            'project_id' => '234',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '154',
            'project_id' => '234',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '291',
            'project_id' => '234',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '292',
            'project_id' => '235',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '293',
            'project_id' => '235',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '294',
            'project_id' => '235',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '292',
            'project_id' => '236',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '295',
            'project_id' => '236',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '294',
            'project_id' => '236',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '97',
            'project_id' => '237',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '296',
            'project_id' => '237',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '287',
            'project_id' => '238',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '297',
            'project_id' => '238',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '289',
            'project_id' => '238',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '290',
            'project_id' => '238',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '154',
            'project_id' => '238',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '298',
            'project_id' => '238',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '299',
            'project_id' => '238',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '225',
            'project_id' => '239',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '300',
            'project_id' => '239',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '125',
            'project_id' => '239',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '301',
            'project_id' => '239',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '302',
            'project_id' => '239',
        ]);
        DB::table('project_skill')->insert([
            'skill_id' => '225',
            'project_id' => '240',
        ]);













        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '1',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '1',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '1',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '2',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '2',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '2',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '2',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '3',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '3',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '3',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '3',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '4',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '4',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '4',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '4',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '5',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '5',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '5',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '5',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '6',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '6',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '6',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '6',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '7',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '7',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '7',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '7',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '8',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '8',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '8',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '8',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '9',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '9',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '10',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '10',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '10',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '10',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '11',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '11',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '11',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '27',
            'project_id' => '12',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '13',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '13',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '13',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '13',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '14',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '14',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '14',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '14',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '15',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '15',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '15',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '15',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '16',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '26',
            'project_id' => '16',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '16',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '16',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '17',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '17',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '29',
            'project_id' => '17',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '29',
            'project_id' => '17',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '18',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '18',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '29',
            'project_id' => '18',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '29',
            'project_id' => '18',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '19',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '20',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '21',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '21',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '22',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '22',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '22',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '25',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '29',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '29',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '75',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '59',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '48',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '70',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '47',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '21',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '91',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '15',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '92',
            'project_id' => '23',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '14',
            'project_id' => '24',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '24',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '95',
            'project_id' => '24',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '56',
            'project_id' => '24',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '66',
            'project_id' => '24',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '24',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '51',
            'project_id' => '24',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '5',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '14',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '41',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '71',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '39',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '42',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '31',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '28',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '60',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '6',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '48',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '23',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '59',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '69',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '70',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '44',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '62',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '79',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '84',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '86',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '87',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '89',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '90',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '91',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '92',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '93',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '95',
            'project_id' => '25',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '31',
            'project_id' => '26',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '6',
            'project_id' => '26',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '7',
            'project_id' => '26',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '31',
            'project_id' => '27',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '6',
            'project_id' => '27',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '7',
            'project_id' => '27',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '31',
            'project_id' => '28',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '6',
            'project_id' => '28',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '7',
            'project_id' => '28',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '31',
            'project_id' => '29',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '6',
            'project_id' => '29',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '7',
            'project_id' => '29',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '6',
            'project_id' => '30',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '92',
            'project_id' => '30',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '6',
            'project_id' => '31',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '92',
            'project_id' => '31',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '35',
            'project_id' => '31',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '38',
            'project_id' => '31',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '6',
            'project_id' => '32',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '92',
            'project_id' => '32',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '35',
            'project_id' => '32',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '38',
            'project_id' => '32',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '32',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '48',
            'project_id' => '32',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '1',
            'project_id' => '32',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '92',
            'project_id' => '33',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '92',
            'project_id' => '34',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '92',
            'project_id' => '35',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '36',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '36',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '37',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '37',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '37',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '37',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '1',
            'project_id' => '37',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '35',
            'project_id' => '37',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '38',
            'project_id' => '37',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '38',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '38',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '38',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '38',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '39',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '39',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '39',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '39',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '40',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '41',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '41',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '42',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '42',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '43',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '43',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '35',
            'project_id' => '43',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '39',
            'project_id' => '43',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '40',
            'project_id' => '43',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '44',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '44',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '1',
            'project_id' => '45',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '45',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '38',
            'project_id' => '45',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '45',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '46',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '46',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '38',
            'project_id' => '46',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '46',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '1',
            'project_id' => '47',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '47',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '38',
            'project_id' => '47',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '47',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '48',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '39',
            'project_id' => '48',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '49',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '49',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '49',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '50',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '50',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '50',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '38',
            'project_id' => '51',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '35',
            'project_id' => '51',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '51',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '39',
            'project_id' => '52',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '40',
            'project_id' => '52',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '52',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '39',
            'project_id' => '53',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '40',
            'project_id' => '53',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '53',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '39',
            'project_id' => '54',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '40',
            'project_id' => '54',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '54',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '39',
            'project_id' => '55',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '40',
            'project_id' => '55',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '55',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '56',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '1',
            'project_id' => '56',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '2',
            'project_id' => '56',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '3',
            'project_id' => '56',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '48',
            'project_id' => '56',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '35',
            'project_id' => '56',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '38',
            'project_id' => '56',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '56',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '57',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '57',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '92',
            'project_id' => '57',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '94',
            'project_id' => '58',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '53',
            'project_id' => '58',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '55',
            'project_id' => '58',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '6',
            'project_id' => '58',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '44',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '62',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '18',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '36',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '63',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '69',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '70',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '58',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '21',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '22',
            'project_id' => '59',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '44',
            'project_id' => '60',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '44',
            'project_id' => '61',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '62',
            'project_id' => '61',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '44',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '62',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '18',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '36',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '63',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '69',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '70',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '58',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '21',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '22',
            'project_id' => '62',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '44',
            'project_id' => '63',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '62',
            'project_id' => '63',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '70',
            'project_id' => '63',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '21',
            'project_id' => '64',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '21',
            'project_id' => '65',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '21',
            'project_id' => '66',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '21',
            'project_id' => '67',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '21',
            'project_id' => '68',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '58',
            'project_id' => '69',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '69',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '70',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '71',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '72',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '58',
            'project_id' => '72',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '85',
            'project_id' => '72',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '73',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '74',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '58',
            'project_id' => '74',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '75',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '58',
            'project_id' => '75',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '76',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '77',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '58',
            'project_id' => '77',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '85',
            'project_id' => '77',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '96',
            'project_id' => '77',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '20',
            'project_id' => '78',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '58',
            'project_id' => '78',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '79',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '80',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '81',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '82',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '32',
            'project_id' => '83',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '84',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '32',
            'project_id' => '85',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '86',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '69',
            'project_id' => '87',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '42',
            'project_id' => '87',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '18',
            'project_id' => '88',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '88',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '96',
            'project_id' => '88',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '18',
            'project_id' => '89',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '64',
            'project_id' => '89',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '96',
            'project_id' => '89',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '18',
            'project_id' => '90',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '32',
            'project_id' => '91',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '32',
            'project_id' => '92',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '90',
            'project_id' => '93',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '90',
            'project_id' => '94',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '91',
            'project_id' => '94',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '90',
            'project_id' => '95',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '91',
            'project_id' => '95',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '87',
            'project_id' => '95',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '81',
            'project_id' => '95',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '82',
            'project_id' => '95',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '79',
            'project_id' => '95',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '90',
            'project_id' => '96',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '91',
            'project_id' => '96',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '87',
            'project_id' => '96',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '84',
            'project_id' => '96',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '87',
            'project_id' => '97',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '86',
            'project_id' => '97',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '79',
            'project_id' => '97',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '87',
            'project_id' => '98',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '86',
            'project_id' => '99',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '87',
            'project_id' => '99',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '80',
            'project_id' => '99',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '93',
            'project_id' => '99',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '86',
            'project_id' => '100',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '87',
            'project_id' => '100',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '80',
            'project_id' => '100',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '93',
            'project_id' => '100',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '86',
            'project_id' => '101',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '87',
            'project_id' => '101',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '80',
            'project_id' => '101',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '93',
            'project_id' => '101',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '86',
            'project_id' => '102',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '84',
            'project_id' => '103',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '97',
            'project_id' => '103',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '84',
            'project_id' => '104',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '97',
            'project_id' => '104',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '84',
            'project_id' => '105',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '97',
            'project_id' => '105',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '84',
            'project_id' => '106',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '97',
            'project_id' => '106',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '81',
            'project_id' => '107',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '82',
            'project_id' => '107',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '80',
            'project_id' => '107',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '79',
            'project_id' => '107',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '80',
            'project_id' => '108',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '93',
            'project_id' => '108',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '81',
            'project_id' => '109',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '82',
            'project_id' => '109',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '79',
            'project_id' => '109',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '80',
            'project_id' => '109',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '93',
            'project_id' => '109',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '81',
            'project_id' => '110',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '82',
            'project_id' => '110',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '79',
            'project_id' => '110',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '80',
            'project_id' => '110',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '93',
            'project_id' => '110',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '12',
            'project_id' => '110',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '42',
            'project_id' => '110',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '81',
            'project_id' => '111',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '82',
            'project_id' => '111',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '79',
            'project_id' => '111',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '80',
            'project_id' => '111',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '93',
            'project_id' => '111',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '81',
            'project_id' => '112',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '82',
            'project_id' => '112',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '79',
            'project_id' => '112',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '113',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '114',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '114',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '115',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '115',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '116',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '116',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '117',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '117',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '118',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '118',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '119',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '119',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '120',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '120',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '121',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '121',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '122',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '122',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '123',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '124',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '124',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '89',
            'project_id' => '125',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '42',
            'project_id' => '125',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '42',
            'project_id' => '126',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '89',
            'project_id' => '127',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '42',
            'project_id' => '127',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '127',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '89',
            'project_id' => '128',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '42',
            'project_id' => '128',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '12',
            'project_id' => '129',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '42',
            'project_id' => '129',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '91',
            'project_id' => '129',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '83',
            'project_id' => '129',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '90',
            'project_id' => '129',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '12',
            'project_id' => '130',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '12',
            'project_id' => '131',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '42',
            'project_id' => '131',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '91',
            'project_id' => '131',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '83',
            'project_id' => '131',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '90',
            'project_id' => '131',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '12',
            'project_id' => '132',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '86',
            'project_id' => '132',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '12',
            'project_id' => '133',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '84',
            'project_id' => '133',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '97',
            'project_id' => '133',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '13',
            'project_id' => '133',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '72',
            'project_id' => '133',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '57',
            'project_id' => '134',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '57',
            'project_id' => '135',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '57',
            'project_id' => '136',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '12',
            'project_id' => '136',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '57',
            'project_id' => '137',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '57',
            'project_id' => '138',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '34',
            'project_id' => '139',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '34',
            'project_id' => '140',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '34',
            'project_id' => '141',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '34',
            'project_id' => '142',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '48',
            'project_id' => '143',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '48',
            'project_id' => '144',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '48',
            'project_id' => '145',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '48',
            'project_id' => '146',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '60',
            'project_id' => '147',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '60',
            'project_id' => '148',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '59',
            'project_id' => '149',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '37',
            'project_id' => '149',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '59',
            'project_id' => '150',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '59',
            'project_id' => '151',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '56',
            'project_id' => '152',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '56',
            'project_id' => '153',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '56',
            'project_id' => '154',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '56',
            'project_id' => '155',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '56',
            'project_id' => '156',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '65',
            'project_id' => '157',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '66',
            'project_id' => '157',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '65',
            'project_id' => '158',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '66',
            'project_id' => '158',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '56',
            'project_id' => '158',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '65',
            'project_id' => '159',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '66',
            'project_id' => '159',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '56',
            'project_id' => '159',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '65',
            'project_id' => '160',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '66',
            'project_id' => '160',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '48',
            'project_id' => '160',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '65',
            'project_id' => '161',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '66',
            'project_id' => '161',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '23',
            'project_id' => '161',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '65',
            'project_id' => '162',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '66',
            'project_id' => '162',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '23',
            'project_id' => '162',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '65',
            'project_id' => '163',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '66',
            'project_id' => '163',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '66',
            'project_id' => '164',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '47',
            'project_id' => '165',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '37',
            'project_id' => '165',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '47',
            'project_id' => '166',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '37',
            'project_id' => '166',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '47',
            'project_id' => '167',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '37',
            'project_id' => '167',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '47',
            'project_id' => '168',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '37',
            'project_id' => '168',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '30',
            'project_id' => '169',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '30',
            'project_id' => '170',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '30',
            'project_id' => '171',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '172',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '8',
            'project_id' => '173',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '173',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '173',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '8',
            'project_id' => '174',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '174',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '174',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '50',
            'project_id' => '174',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '174',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '8',
            'project_id' => '175',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '8',
            'project_id' => '176',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '177',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '177',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '8',
            'project_id' => '177',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '178',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '14',
            'project_id' => '178',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '16',
            'project_id' => '178',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '17',
            'project_id' => '178',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '178',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '52',
            'project_id' => '178',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '179',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '14',
            'project_id' => '179',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '179',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '52',
            'project_id' => '179',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '180',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '95',
            'project_id' => '181',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '182',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '95',
            'project_id' => '183',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '183',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '95',
            'project_id' => '184',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '184',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '95',
            'project_id' => '185',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '185',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '95',
            'project_id' => '186',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '186',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '95',
            'project_id' => '187',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '187',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '5',
            'project_id' => '188',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '14',
            'project_id' => '189',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '52',
            'project_id' => '189',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '14',
            'project_id' => '190',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '52',
            'project_id' => '190',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '14',
            'project_id' => '191',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '14',
            'project_id' => '192',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '52',
            'project_id' => '192',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '28',
            'project_id' => '193',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '28',
            'project_id' => '194',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '41',
            'project_id' => '195',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '195',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '41',
            'project_id' => '196',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '41',
            'project_id' => '197',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '41',
            'project_id' => '198',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '198',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '70',
            'project_id' => '199',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '70',
            'project_id' => '200',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '71',
            'project_id' => '200',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '41',
            'project_id' => '200',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '70',
            'project_id' => '201',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '71',
            'project_id' => '201',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '41',
            'project_id' => '201',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '70',
            'project_id' => '202',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '71',
            'project_id' => '202',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '41',
            'project_id' => '202',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '71',
            'project_id' => '203',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '16',
            'project_id' => '204',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '52',
            'project_id' => '204',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '16',
            'project_id' => '205',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '5',
            'project_id' => '205',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '205',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '50',
            'project_id' => '205',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '205',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '28',
            'project_id' => '205',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '16',
            'project_id' => '206',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '52',
            'project_id' => '206',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '14',
            'project_id' => '206',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '16',
            'project_id' => '207',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '207',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '50',
            'project_id' => '207',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '88',
            'project_id' => '208',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '50',
            'project_id' => '208',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '208',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '10',
            'project_id' => '208',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '50',
            'project_id' => '209',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '50',
            'project_id' => '210',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '88',
            'project_id' => '211',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '50',
            'project_id' => '211',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '211',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '10',
            'project_id' => '211',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '88',
            'project_id' => '212',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '50',
            'project_id' => '212',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '212',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '10',
            'project_id' => '212',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '213',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '10',
            'project_id' => '213',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '11',
            'project_id' => '213',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '213',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '214',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '215',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '8',
            'project_id' => '215',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '216',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '216',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '217',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '217',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '8',
            'project_id' => '217',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '5',
            'project_id' => '217',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '218',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '219',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '219',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '8',
            'project_id' => '219',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '5',
            'project_id' => '219',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '71',
            'project_id' => '219',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '220',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '71',
            'project_id' => '220',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '5',
            'project_id' => '220',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '10',
            'project_id' => '221',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '10',
            'project_id' => '222',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '8',
            'project_id' => '222',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '19',
            'project_id' => '222',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '95',
            'project_id' => '222',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '222',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '10',
            'project_id' => '223',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '9',
            'project_id' => '223',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '8',
            'project_id' => '223',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '95',
            'project_id' => '224',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '46',
            'project_id' => '224',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '5',
            'project_id' => '224',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '14',
            'project_id' => '224',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '52',
            'project_id' => '224',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '51',
            'project_id' => '225',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '49',
            'project_id' => '225',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '68',
            'project_id' => '225',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '225',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '74',
            'project_id' => '225',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '75',
            'project_id' => '225',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '225',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '225',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '51',
            'project_id' => '226',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '4',
            'project_id' => '226',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '51',
            'project_id' => '227',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '49',
            'project_id' => '227',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '68',
            'project_id' => '227',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '227',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '74',
            'project_id' => '227',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '75',
            'project_id' => '227',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '227',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '227',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '51',
            'project_id' => '228',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '229',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '229',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '229',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '230',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '230',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '75',
            'project_id' => '230',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '231',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '231',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '231',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '232',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '232',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '232',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '233',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '233',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '233',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '234',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '234',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '234',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '235',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '75',
            'project_id' => '235',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '235',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '235',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '236',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '75',
            'project_id' => '236',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '236',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '236',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '237',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '75',
            'project_id' => '237',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '237',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '237',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '73',
            'project_id' => '238',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '75',
            'project_id' => '238',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '238',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '77',
            'project_id' => '238',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '239',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '75',
            'project_id' => '239',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '76',
            'project_id' => '240',
        ]);
        DB::table('project_speciality')->insert([
            'speciality_id' => '75',
            'project_id' => '240',
        ]);









        DB::table('candidates')->insert([
            'fio' => 'Мишланов Семён Сергеевич',
            'about' => 'Очень люблю пиццу и программировать. Особенная страсть заполнять данные',
            'email' => 'semomihlanav@gmail.com',
            'numz' => 'Мы не поняли что это, но это varchar',
            'phone' => '8-800-555-35-35',
            'course' => '3',
            'api_token' => '1',
            'training_group' => 'ИСТб-19-2',

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
