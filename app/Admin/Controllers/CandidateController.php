<?php

namespace App\Admin\Controllers;

use App\Models\Candidate;
//use App\Models\Groups;
use App\Models\Project;
use App\Models\StateParticipation;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CandidateController extends AdminController
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
   
		$grid = new Grid(new Candidate());
        $grid->column('id', __('Id'));
        $grid->column('created_at', __('Дата создания'));
        $grid->column('updated_at', __('Дата обновления'))->sortable();
        $grid->column('about', __('о студенте'));
        $grid->column('email', __('Емейл'));        
        $grid->column('numz', __('Номер зачётки'));
        $grid->column('fio', __('Студент'));
        $grid->column('training_group', __('Группа'));        
        $grid->column('course', __('Курс'));        
  //      $grid->column('groups.name', __('Группа название'));
   //     $grid->column('canSendParticipations', __('может ли'));
  
  
        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            
           $filter->like('numz', 'зачетка');
           $filter->like('fio', 'ФИО');
           $filter->like('training_group', 'Группа');
           $filter->like('course', 'Курс');
    //       $filter->like('canSendParticipations', 'может ли');
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
        $show = new Show(Candidate::findOrFail($id));
        $show->field('id', __('Id'));
        $show->field('created_at', __('Дата создания'));
        $show->field('updated_at', __('Дата обновления'));
        $show->field('about', __('о студенте'));
        $show->field('email', __('Емейл'));        
        $show->field('numz', __('Номер зачётки'));
        $show->field('fio', __('Студент'));
        $show->field('training_group', __('Группа'));        
        $show->field('course', __('Курс'));        
     //   $show->field('groups.name', __('Группа название'));
     //   $show->field('canSendParticipations', __('может ли'));
      
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Candidate());
        $form->date('created_at', __('Дата создания'));
        $form->date('updated_at', __('Дата обновления'));
        $form->text('about', __('о студенте'))->default('нет инфо');
        $form->text('email', __('Емейл'))->default('istu@edu'); 
        $form->text('phone', __('Телефон'))->default('000000');
        $form->text('numz', __('Номер зачётки'));
        $form->text('fio', __('Студент'));
        $form->text('training_group', __('Группа'));        
        $form->number('course', __('Курс'));        
      //  $form->text('groups.name', __('Группа название'));
      //  $form->number('canSendParticipations', __('Состояние'));
       //	$form->select('state_id',__('Cостояние'))->options(StateParticipation::all()->pluck('state', 'id'))->rules('required');
      //  $form->text('review', __('Отзыв рукля'));
       // $form->select('project_id',__('Проект'))->options(Project::all()->pluck('title', 'id'))->rules('required');
      //  $form->select('candidate_id',__('Студент'))->options(Candidate::all()->pluck('fio', 'id'))->rules('required');       
/*	
        $prioretes = [
            1 => 1,
            2 => 2,
            3 => 3,
        ];
        $form->select('priority', 'Приоритет')->options($prioretes)->rules('required');
 */
               return $form;
    }
}
