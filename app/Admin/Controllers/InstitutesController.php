<?php

namespace App\Admin\Controllers;

use App\Models\Institute;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class InstitutesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Институты';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
   
		$grid = new Grid(new Institute());
        $grid->column('id', __('Id'));
        $grid->column('name', __('Название'));
        $grid->column('kampus_id', __('Кампус_ИД'));        
        $grid->column('max_approved_projects', __('Кол-во разрешенных проектов'));
        
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
        $show = new Show(Institute::findOrFail($id));
        $show->field('id', __('Id'));
        
        $show->field('name', __('Название'));
        $show->field('kampus_id', __('Кампус_ИД'));
        $show->field('max_approved_projects', __('Кол-во разрешенных проектов'));
      
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Institute());
        $form->text('name', __('Название'))->rules('required');
        $form->number('kampus_id', __('Кампус_ИД'))->rules('required');        
        $form->number('max_approved_projects', __('Кол-во разрешенных проектов'))->rules('required');
        return $form;
    }
}
