<?php

namespace App\Admin\Controllers;

use App\Models\Project;
use App\Models\Skill;
use App\Models\Speciality;
use App\Models\State;
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
        $grid->column('requirements', __('Requirements'));
        $grid->column('customer', __('Заказчик'));
        $grid->column('additional_inf', __('Доп. инф.'));
        $grid->column('product_result', __('Продуктовый рез.'));
        $grid->column('study_result', __('Учебный рез.'));
        $grid->column('supervisors', __('Руководители (через запятую)'));
        $grid->column('state.state', __('Состояние'));
        $grid->column('type.type', __('Тип'));

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
        });

        $grid->filter(function ($filter) {

            // Remove the default id filter
            //$filter->disableIdFilter();

            // Add a column filter
            $filter->like('title', 'Название');
            $filter->like('state.state', 'Заказчик');
            $filter->like('supervisors', 'Руководители');
            $filter->like('customer', 'Состояние');
            
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
        $show->field('supervisors', __('Руководители (через запятую)'));
        $show->field('state.state', __('Состояние'));
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
        $form->textarea('supervisors', __('Руководители (через запятую)'))->rules('required');
        $form->select('state_id', __('Состояние'))->options(State::all()->pluck('state', 'id'))->rules('required');
        
        //$form->number('supervisor_id', __('Supervisor id'));
        
        $form->select('type_id', __('Тип'))->options(Type::all()->pluck('type', 'id'))->rules('required');
        $form->multipleSelect('specialities', 'Специальности')->options(Speciality::all()->pluck('name', 'id'))->rules('required');
        $form->multipleSelect('skills', 'Требуемые навыки')->options(Skill::all()->pluck('name', 'id'));

        return $form;
    }
}
