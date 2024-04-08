<?php

namespace App\Admin\Controllers;

use App\Models\Department;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DepartmentsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Кафедры';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
   
		$grid = new Grid(new Department());
        $grid->column('id', __('Id'));
        $grid->column('name', __('Название'));
        $grid->column('institute.name', __('Институт'));
        $grid->column('kampus_id', __('Кампус_ИД'));        
       
        
        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
           $filter->like('name', __('Название'));
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
        $show = new Show(Department::findOrFail($id));
        $show->field('id', __('Id'));
        
        $show->field('name', __('Название'));
        $show->field('kampus_id', __('Кампус_ИД'));
        
      
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Department());
        $form->text('name', __('Название'))->rules('required');
        $form->number('institute_id', __('ID Института'))->rules('required');        
        $form->number('kampus_id', __('Кампус_ИД'))->rules('required');
        return $form;
    }
}
