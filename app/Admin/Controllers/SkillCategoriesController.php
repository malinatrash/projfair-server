<?php

namespace App\Admin\Controllers;

use App\Models\Skill;
use App\Models\SkillCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SkillCategoriesController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Skill';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new SkillCategory());

        $grid->id('ID')->sortable();
        $grid->column('name', __('Категория'))->sortable();
       
        $grid->filter(function ($filter) {

            // Remove the default id filter
            //$filter->disableIdFilter();

            // Add a column filter
            $filter->like('name', 'Категория');
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
        $show = new Show(SkillCategory::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Категория'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new SkillCategory());
        $form->textarea('name', __('Категория'))->rules('required');
       
        return $form;
    }
}