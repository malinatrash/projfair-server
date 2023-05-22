<?php

namespace App\Admin\Controllers;

use App\Models\Supervisor;
use App\Models\ProjectSupervisorRole;
use App\Models\ProjectSupervisorRoles;
use App\Models\ProjectSupervisor;
use App\Models\Project;
use App\Models\StateParticipation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectSupervisorRoleController extends AdminController
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
   
		$grid = new Grid(new ProjectSupervisorRole());
        $grid->column('id', __('Id'));
       // $grid->column('created_at', __('Дата создания'));
       // $grid->column('updated_at', __('Дата обновления'))->sortable();
       // $grid->column('project_id', __('Id проекта'));
       // $grid->column('project.title', __('Проект'));                                                            
        //$grid->column('supervisor.fio', __('Сотрудник'));
       // $grid->column('supervisor_id', __('id Сотрудник'));
    //    $grid->column('projectSupervisorRoles.name', __(Роль'));
  
       // $grid->filter(function ($filter) {

            // Remove the default id filter
         //   $filter->disableIdFilter();

            // Add a column filter
           // $filter->like('project.title', 'Название проекта');
          // $filter->like('priority', 'Приоритет');
          // $filter->like('supervisor.fio', 'ФИО');
           
        //});

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
        $show = new Show(ProjectSupervisorRole::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('created_at', __('Дата создания'));
        $show->field('updated_at', __('Дата обновления'));
        $show->field('priority', __('Приоритет'));
        $show->field('project.title', __('Проект'));
     
      
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProjectSupervisorRole());
        $form->date('created_at', __('Дата создания'));
        $form->date('updated_at', __('Дата обновления'));
        
       	$form->select('state_id',__('Cостояние'))->options(StateParticipation::all()->pluck('state', 'id'))->rules('required');
        $form->text('review', __('Отзыв рукля'));
        $form->select('project_id',__('Проект'))->options(Project::all()->pluck('title', 'id'))->rules('required');
        $form->select('candidate_id',__('Студент'))->options(Candidate::all()->pluck('fio', 'id'))->rules('required');       
	
        $prioretes = [
            1 => 1,
            2 => 2,
            3 => 3,
        ];
        $form->select('priority', 'Приоритет')->options($prioretes)->rules('required');
        return $form;
    }
}
