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
            'name' => 'АТбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АТбп',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АТМб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АСУб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АСУбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ААбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АДб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АДбз',
            'institute_id' => '2'
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
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АРб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АРбв',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РРб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РРбп',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'БЖТбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'БТПб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'НДбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'НДб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ВВб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ВВбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭВМб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭВМбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГСХб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГСХбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГСХбп',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГМФб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГРб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЮРГб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЮРГбв',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЖРб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЖРбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЖКб',
            'institute_id' => '8'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИРб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИРбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИНС',
            'institute_id' => '9'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИСТб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИСМб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИИКб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'КНбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'КНб',
            'institute_id' => '5'
        ]);

        DB::table('specialities')->insert([
            'name' => 'НМб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЛИМб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЛИМбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МБб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МДБб',
            'institute_id' => '8'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МЦб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МЦбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МИРб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МЭб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МЭбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИФб',
            'institute_id' => '3'
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
            'name' => 'МТбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МТбп',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИБб',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УСТб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УТСбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ООСб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИСТбп',
            'institute_id' => '4'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ПМб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ПМбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'БТб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ПГСб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ПГСбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РДб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РДбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АТПб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'АТПбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПАб',
            'institute_id' => '8'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ДИб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'СРбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭСТб',
            'institute_id' => '10'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ТЭбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ТВб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ТВбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭЛб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭЛбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭЛбп',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'КТбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ММб',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ТПб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ТПбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ТХб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЮРУб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИНб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УКб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УКбп',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УКбпз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УПб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'УПбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИЭб',
            'institute_id' => '8'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ФКб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ФКбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ХТОб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ХТбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ХТТб',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ХТТбп',
            'institute_id' => '3'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭИб',
            'institute_id' => '8'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭТЭКб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПОб',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПОбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭУНб',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭУНбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'НДДб',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'НДДбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭСб',
            'institute_id' => '10'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭСбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭЛТбп',
            'institute_id' => '10'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭАПЭб',
            'institute_id' => '10'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭАПб',
            'institute_id' => '10'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПб',
            'institute_id' => '10'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПбз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭЭЗбп',
            'institute_id' => '5'
        ]);

        // Специалитет

        DB::table('specialities')->insert([
            'name' => 'НГДСз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГИСиРФ',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РМ',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГИС',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РФ',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГЭ',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГМ',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГМз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'НБ',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'НБз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ИГ',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГГ',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГГз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'МД',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ОПз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ОП',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГО',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГОз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГП',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГПз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'СДМ',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'СДМз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РГ',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'СМ',
            'institute_id' => '1'
        ]);
        DB::table('specialities')->insert([
            'name' => 'СМз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'СУЗ',
            'institute_id' => '5'
        ]);
        DB::table('specialities')->insert([
            'name' => 'РТз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПЭБ',
            'institute_id' => '7'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ЭПЭБз',
            'institute_id' => '2'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГА',
            'institute_id' => '6'
        ]);
        DB::table('specialities')->insert([
            'name' => 'ГАз',
            'institute_id' => '2'
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
        // DB::table('state_participations')->insert([
        //     'state' => 'В архиве',
        // ]);



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
            'title' => 'Разработка автоматизированной «дорожной карты» подготовки и проведения мероприятий в ИРНИТУ',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '3',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Профиль потребителя энергоресурсов.',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '4',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание корпоративной программы благополучия сотрудников «Well-being» (мобильная версия)',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '5',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Предпринимательские качества у научных работников',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '3',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Стратегическое управление ключевыми потенциалами развития территориальных социально-экономических систем ',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '6',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => '«Продвижение ИРНИТУ в социальных сетях»',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '7',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Зеленый университет',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '8',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание периодического еженедельного студенческого видеоконтента «InfoHours» в соцсетях',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '8',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Создание лонгрида',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '8',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Социальный студенческий проект «Вам не стыдно?»',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '7',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Современное уголовное судопроизводство: проблемы и перспективы развития',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '9',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Защита трудовых прав граждан',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '10',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Подготовка хрестоматии по трудовому праву',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '10',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Совершенствование законодательства и юридической практики в сферах геологоразведки, добычи полезных ископаемых, вторичного использования ресурсов',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '11',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Проблемы применения гражданского законодательства',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '12',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Сравнительно-правовое исследование законодательства о банкротстве стран ближнего зарубежья',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '12',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Правоохранительная деятельность в информационном пространстве ',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '13',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Защита прав потребителей',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '14',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Цифровые криминалистические лаборатории',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '15',
            'type_id' => '1',
        ]);
        DB::table('projects')->insert([
            'title' => 'Осуществление права государственной и муниципальной собственности  в условиях развития современного гражданского законодательства',
            'places' => '12',
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
            'state_id' => '2',
            'supervisor_id' => '16',
            'type_id' => '1',
        ]);


        DB::table('candidates')->insert([
            'fio' => 'Мишланов Семён Сергеевич',
            'about' => 'Очень люблю пиццу и программировать. Особенная страсть заполнять данные',
            'email' => 'semomihlanav@gmail.com',
            'numz' => 'Мы не поняли что это, но это varchar',
            'phone' => '8-800-555-35-35',
            'course' => '3',
            'api_token' => '1',
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
