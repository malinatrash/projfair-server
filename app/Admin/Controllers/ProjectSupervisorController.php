<?php

namespace App\Admin\Controllers;

use App\Models\Supervisor;
use App\Models\ProjectSupervisorRole;
use App\Models\ProjectSupervisor;
use App\Models\Project;
use App\Models\StateParticipation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectSupervisorController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Роли сотрудников';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
   
		$grid = new Grid(new ProjectSupervisor());
        $grid->column('id', __('Id'));
       // $grid->column('created_at', __('Дата создания'));
       // $grid->column('updated_at', __('Дата обновления'))->sortable();
        $grid->column('project_id', __('Id проекта'));
        $grid->column('project.title', __('Проект'));                                                            
        $grid->column('project.date_start', __('Дата начала'));                                                            
        $grid->column('supervisor.fio', __('Сотрудник'));
        $grid->column('supervisor_id', __('id Сотрудник'));
       
  		$grid->roles()->display(function ($roles) {

            $roles = array_map(function ($role) {
                return "<span class='label label-success'>{$role['name']}</span>";
            }, $roles);

            return join('<br> ', $roles);
        });
        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

           $filter->like('project.id', 'ID проекта'); 
           $filter->like('project.title', 'Название проекта');
           $filter->like('supervisor.fio', 'ФИО');
           $filter->equal('roles.name', 'Роль')->select(['Руководитель' => 'Руководитель','Создатель задания'=>'Создатель задания','Сонаставник'=>'Сонаставник']);
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
        $show = new Show(ProjectSupervisor::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('project_id', __('Id проекта'));
        $show->field('project.title', __('Проект'));                                                         
       	$show->field('supervisor.fio', __('Сотрудник'));
        $show->field('supervisor_id', __('id Сотрудник'));
     
      
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProjectSupervisor());
      //  $form->date('created_at', __('Дата создания'));
       // $form->date('updated_at', __('Дата обновления'));
        
        $form->select('project_id',__('Проект'))->options(Project::all()->pluck('title', 'id'))->rules('required');
        $form->select('supervisor_id',__('Сотрудник'))->options(Supervisor::all()->pluck('fio', 'id'))->rules('required');       
	
       
        $form->multipleSelect('roles', 'Роли')->options(ProjectSupervisorRole::all()->pluck('name', 'id'))->rules('required');
        return $form;
    }
}
