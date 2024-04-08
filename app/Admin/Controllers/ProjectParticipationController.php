<?php

namespace App\Admin\Controllers;

use App\Models\Candidate;
use App\Models\Participation;
use App\Models\Project;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectParticipationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Заявки на участие';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
   
		$grid = new Grid(new Participation());
        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Дата создания'))->hide();
        $grid->column('updated_at', __('Дата обновления'))->sortable();
        $grid->column('priority', __('Приоритет'));
        $grid->column('review', __('Ревью'));        
        $grid->column('project_id', __('Id проекта'));
        $grid->column('project.title', __('Проект'));     
        $grid->column('candidate.id', __('id студента'));                                                       
        $grid->column('candidate.numz', __('Номер зачётки'));
        $grid->column('candidate.phone', __('Телефон'))->hide();
        $grid->column('candidate.email', __('email'))->hide();
        $grid->column('candidate.fio', __('Студент'));
        $grid->column('candidate.training_group', __('Группа'));        
        //$grid->column('state_id', __('Состояние'));
        $grid->column('state_id', __('Состояние'))->display(function ($state_id){
			$states = array("Новая", "Отклонена", "В команде", "Архив");
            return $states[$state_id-1];
        });
  
  
        $grid->filter(function ($filter) {

            // Remove the default id filter
            //$filter->disableIdFilter();

            // Add a column filter
            $filter->like('project_id', 'ID проекта');
            $filter->like('project.title', 'Название проекта');
           $filter->like('priority', 'Приоритет');
           $filter->like('candidate_id', 'ID студента');
           $filter->like('candidate.fio', 'ФИО');
           $filter->like('candidate.numz', 'Номер зачётки');
           $filter->like('candidate.training_group', 'Группа');
           $filter->like('candidate.course', 'Курс');
          // $filter->like('state_id', __('Состояние'));
           $filter->equal('state_id', 'Состояние')->select([1=>"Новая",
            3=>"В команде",
            4=>"Архив"
        	]);
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
        $show = new Show(Participation::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('created_at', __('Дата создания'));
        $show->field('updated_at', __('Дата обновления'));
        $show->field('priority', __('Приоритет'));
        $show->field('review', __('Отзыв рукля'));
        $show->field('project.title', __('Проект'));
        $show->field('candidate.fio', __('Студент'));
        
        $show->field('candidate.course', __('Курс'));
        $show->field('candidate.numz', __('Номер зачётки'));
        $show->field('candidate.training_group', __('Группа'));
        $show->field('state_id', __('Состояние'));
      
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Participation());
        $form->date('created_at', __('Дата создания'));
        $form->date('updated_at', __('Дата обновления'));
        
       	//$form->select('state_id',__('Cостояние'))->options(StateParticipation::all()->pluck('state', 'id'))->rules('required');
        $form->text('review', __('Отзыв рукля'));
        
        $form->number('project_id',__('Проект id'))->rules('required');
		 
        //$form->select('project_id',__('Проект'))->options(Project::all()->pluck('title', 'id'))->rules('required');
        //$form->select('candidate_id',__('Студент'))->options(Candidate::all()->pluck('fio', 'id'))->rules('required');       
		$form->select('candidate_id',__('Студент'))->options(Candidate::all()->pluck('numz', 'id'))->rules('required');       
	
        $prioretes = [
            1 => 1,
            2 => 2,
            3 => 3,
            4 => 4,
            5 => 5
        ];
        $form->select('priority', 'Приоритет')->options($prioretes)->rules('required');
        $states = [
            1=>"Новая",
            //2=>"reserved",
            3=>"Одобрена",
            4=>"Архив"
            
        ];
        $form->select('state_id', 'Состояние')->options($states)->rules('required');
        return $form;
    }
}
