<?php

namespace App\Admin\Controllers;

use App\Models\Supervisor;
use App\Models\Department;
//use App\Models\Groups;
use App\Models\Project;
//use App\Models\StateParticipation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SupervisorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Сотрудники';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
   
		$grid = new Grid(new Supervisor());
        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Дата создания'));
        $grid->column('updated_at', __('Дата обновления'))->sortable();
        $grid->column('about', __('Инфа'));
        $grid->column('email', __('Емейл'));        
        $grid->column('kampus_id', __('Номер кампус'));
        $grid->column('fio', __('ФИО'));
        $grid->column('position', __('Должность'));        
        $grid->column('department_id', __('id кафедры')); 
        $grid->column('department.name', __('Кафедра')); 
  
        $grid->filter(function ($filter) {
            // Add a column filter
           $filter->like('kampus_id', 'камус_id');
           $filter->like('fio', 'ФИО');
           $filter->like('department.name', 'Кафедра');
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
        $show = new Show(Supervisor::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('created_at', __('Дата создания'));
        $show->field('updated_at', __('Дата обновления'));
        $show->field('about', __('Инфа'));
        $show->field('email', __('Емейл'));        
        $show->field('kampus_id', __('Номер кампус'));
        $show->field('fio', __('ФИО'));
        $show->field('department.name', __('Кафедра'));
        
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Supervisor());
        $form->date('created_at', __('Дата создания'));
        $form->date('updated_at', __('Дата обновления'));
        $form->text('about', __('Инфа'))->default('нет инфо');
        $form->text('email', __('Емейл'))->default('istu@edu'); 
        $form->text('position', __('Должность'));
        $form->text('kampus_id', __('Номер кампус'));
        $form->text('fio', __('ФИО'));
        
        $form->select('department_id',__('Кафедра'))->options(Department::all()->pluck('name', 'id'))->rules('required');
             
  
               return $form;
    }
}
