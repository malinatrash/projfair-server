<?php

namespace App\Admin\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Speciality;
use App\Models\Department;
use App\Models\Institute;
use App\Models\ProjectSupervisor;
use App\Models\Supervisor;

//use App\Models\State;
use App\Models\Type;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Проекты';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Project());

        $grid->column('id', __('Id'))->sortable();
        $grid->column('created_at', __('Дата создания'));
        $grid->column('updated_at', __('Дата обновления'));
        $grid->column('title', __('Название'));
        $grid->column('places', __('Кол-во мест'));
        $grid->column('goal', __('Цель'));
        $grid->column('description', __('Описание'));
        $grid->column('difficulty', __('Сложность'));
        $grid->column('date_start', __('Дата начала'));
        $grid->column('date_end', __('Дата конца'));
        $grid->column('requirements', __('Requirements'))->hide();
        $grid->column('customer', __('Заказчик'))->width(150);
        $grid->column('additional_inf', __('Доп. инф.'))->hide();
        $grid->column('product_result', __('Продуктовый рез.'));
        $grid->column('study_result', __('Учебный рез.'));
        $grid->column('supervisorsNames', __('Имена наставников'));
        $grid->column('prev_project_id', __('Предыдущий проект'));
        $grid->column('department.id', __('Подразделение id'));
        $grid->column('department.name', __('Подразделение'));
        $grid->column('department.institute_id', __('Институт'));
        $grid->column('theme_source_id', __('Источник темы'));
        //$grid->column('state_id', __('Состояние'));
        $grid->column('state_id', __('Состояние'))->display(function ($state_id){
			$states = array("Идет набор", "Активный", "Добор", "В архиве", "Обработка заявок", "Черновик", "На рассмотрении", "Отклонен", "Одобрен");
            return $states[$state_id-1];
        });
        $grid->column('type.type', __('Тип'));
 		
 		
 		$grid->supervisors()->display(function ($supervisors) {
            $supervisors = array_map(function ($supervisors) {
                return "<span class='label label-success'>{$supervisors['fio']} </span>";
            }, $supervisors);

            return join('<br> ', $supervisors);
        });
        $grid->specialities()->display(function ($specialities) {			 
            $specialities = array_map(function ($speciality) {
                return "<span class='label label-success'>{$speciality['name']}</span>";
            }, $specialities);

            return join('<br> ', $specialities);
        });
        
        $grid->skills()->display(function ($skills) {

            $skills = array_map(function ($skill) {
                return "<span class='label label-success'>{$skill['name']}</span>";
            }, $skills);

            return join('<br> ', $skills);
        })->width(200)->hide();
/*
        $grid->supervisors()->display(function ($supervisors) {

            $supervisors = array_map(function ($supervisor) {
                return "<span class='label label-success'>{$supervisor['fio']}</span>";
            }, $supervisors);

            return join('<br> ', $supervisors);
        });
*/
        $grid->filter(function ($filter) {

            // Remove the default id filter
            //$filter->disableIdFilter();

            // Add a column filter
            $filter->like('title', 'Название');
            //$filter->like('state_id', 'Состояние');
            $filter->equal('state_id', 'Состояние')->select([1=>"Идет набор",
            2=>"Активный",
            4=>"В архиве",
            5=>"Обработка заявок",
            6=>"Черновик",
            7=>"На рассмотрении",
            8=>"Отклонен",
            9=>"Одобрен",
            ]);
             $filter->equal('department.institute_id', 'Институт')->select([0=>"Межинститутские",
            1=>"Институт авиамашиностроения и транспорта",
            3=>"Институт высоких технологий",
            4=>"Институт информационных технологий и анализа данных",
            5=>"Институт архитектуры, строительства и дизайна",
            6=>"Институт недропользования",
            7=>"Институт экономики и права",
            8=>"БРИКС",
            9=>"Институт лингвистики и межкультурной коммуникации",
            10=>"Институт энергетики",
            16=>"Сибирская школа геонаук",
            ]);
            //$filter->like('department.institute_id', 'Институт id');
            $filter->like('supervisorsNames', 'Руководители');
            $filter->like('customer', 'Заказчик');

        });

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Project::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('created_at', __('Дата создания'));
        $show->field('updated_at', __('Дата обновления'));
        $show->field('title', __('Название'));
        $show->field('places', __('Кол-во мест'));
        $show->field('goal', __('Цель'));
        $show->field('description', __('Описание'));
        $show->field('difficulty', __('Сложность'));
        $show->field('date_start', __('Дата начала'));
        $show->field('date_end', __('Дата конца'));
        $show->field('requirements', __('Requirements'));
        $show->field('customer', __('Заказчик'));
        $show->field('additional_inf', __('Доп. инф.'));
        $show->field('product_result', __('Продуктовый рез.'));
        $show->field('study_result', __('Учебный рез.'));
        $show->field('supervisorsNames', __('Имена наставников'));
        $show->field('prev_project_id', __('Предыдущий проект'));
        $show->field('department.id', __('Подразделение id'));
        $show->field('department.name', __('Подразделение'));
        $show->field('department.institute_id', __('Институт id'));
        $show->field('theme_source_id', __('Источник темы'));
        $show->field('state_id', __('Состояние'));
        //$show->field('supervisor_id', __('Supervisor id'));
        $show->field('type.type', __('Тип'));

        $show->specialities('Специальности', function ($specialities) {

            $specialities->id();
            $specialities->name();
        });

        $show->skills('Навыки', function ($skills) {

            $skills->id();
            $skills->name();
        });

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Project());

        $form->text('title', __('Название'))->rules('required');
        $form->number('places', __('Кол-во мест'))->rules('required|min:1');
        $form->textarea('goal', __('Цель'))->rules('required');
        $form->textarea('description', __('Описание'))->rules('required');

        $directors = [
            1 => 'Легкий',
            2 => 'Средний',
            3 => 'Сложный',
        ];
        $form->select('difficulty', 'Сложность')->options($directors)->rules('required');

        $form->date('date_start', __('Date start'))->default(date('Y-m-d'))->rules('required');
        $form->date('date_end', __('Date end'))->default(date('Y-m-d'))->rules('required');
        $form->textarea('requirements', __('Требования'));
        $form->textarea('customer', __('Заказчик'));
        $form->textarea('additional_inf', __('Доп. Инф.'));
        $form->textarea('product_result', __('Продуктовый рез.'))->rules('required');
        $form->textarea('study_result', __('Учебный рез.'))->rules('required');
        //$form->textarea('supervisors', __('Руководители (через запятую)'))->rules('required');
        //$form->select('state_id', __('Состояние'))->options(State::all()->pluck('state', 'id'))->rules('required');
		$p_states = [
            1 => 'Идёт набор',
            2 => 'Активный',
            4 => 'В архиве',
            5 => 'Обработка заявок',
            6 => 'Черновик',
            7 => 'На рассмотрении',
            8 => 'Отклонен',
            9 => 'Одобрен',
        ];
		$form->select('state_id', __('Состояние'))->options($p_states)->rules('required');
  		//$form->number('state_id', __('Состояние'))->rules('required');
        //$form->number('supervisor_id', __('Supervisor id'));
         $form->textarea('supervisorsNames', __('Имена наставников'));
        $form->number('prev_project_id', __('Предыдущий проект'));
        $form->number('department_id', __('Подразделение id'));
        $form->textarea('supervisorsNames', __('Имена наставников'));
        //$form->textarea('department.name', __('Подразделение'));
        $form->number('theme_source_id', __('Источник темы'));
        $form->select('type_id', __('Тип'))->options(Type::all()->pluck('type', 'id'))->rules('required');
        $form->multipleSelect('specialities', 'Специальности')->options(Speciality::all()->pluck('name', 'id'))->rules('required');
        $form->multipleSelect('skills', 'Требуемые навыки')->options(Skill::all()->pluck('name', 'id'));

        return $form;
    }
}
