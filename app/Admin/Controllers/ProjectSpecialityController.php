<?php

namespace App\Admin\Controllers;

use App\Models\ProjectSpeciality;
use App\Models\Institute;
use App\Models\Department;
use App\Models\Speciality;
use App\Models\Project;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProjectSpecialityController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Специальнсть';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProjectSpeciality());
        $grid->id('ID')->sortable();
        
        $grid->column('course', __('Курс'));
        $grid->column('priority', __('Приоритет'));
        $grid->column('speciality.name', __('Специальность'));     
        $grid->column('project_id', __('Проект id'));            
        $grid->column('project.title', __('Проект')); 
       
        
       // $grid->column('department.name', __('Кафедра'));
       // $grid->column('institute.name', __('Институт'));
       //$grid->column('id', __('Id'));
       
        $grid->filter(function ($filter) {

            // Remove the default id filter
           // $filter->disableIdFilter();
            // Add a column filter
            
            //$filter->like('name', 'Название');
            $filter->like('speciality.name', 'Специальность');
            $filter->like('project.title', 'Проект');
            
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
        $show = new Show(ProjectSpeciality::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Название'));
        $show->field('institute.name', __('Институт'));
        

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProjectSpeciality());
        
        $form->select('speciality_id')->options(Speciality::all()->pluck('name', 'id'))->rules('required');  
		$form->select('project_id')->options(Project::all()->pluck('title', 'id'))->rules('required');       

        $form->number('priority', __('Приоритет'));      
        $form->number('course', __('Курс'));

            // $form->number('institute_id', 'id'))->rules('required');

        return $form;
    }
}
