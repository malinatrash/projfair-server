<?php

namespace App\Admin\Controllers;

use App\Models\Institute;
use App\Models\Department;
use App\Models\Speciality;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SpecialityController extends AdminController
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
        $grid = new Grid(new Speciality());
        
        $grid->id('ID')->sortable();
        //$grid->column('id', __('Id'));
        $grid->column('name', __('Название'));
        $grid->column('department.name', __('Кафедра'));
       // $grid->column('institute.name', __('Институт'));
        $grid->filter(function ($filter) {

            // Remove the default id filter
           // $filter->disableIdFilter();

            // Add a column filter
            $filter->like('name', 'Название');
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
        $show = new Show(Speciality::findOrFail($id));

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
        $form = new Form(new Speciality());

        $form->text('name', __('Название специальности (ЭВМб, ИСТб)'))->rules('required');

	    $form->select('department_id')->options(Department::all()->pluck('name', 'id'))->rules('required');

      // $form->select('institute_id')->options(Institute::all()->pluck('name', 'id'))->rules('required');

        return $form;
    }
}
