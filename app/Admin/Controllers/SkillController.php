<?php

namespace App\Admin\Controllers;

use App\Models\Skill;
use App\Models\SkillCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class SkillController extends AdminController
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
        $grid = new Grid(new Skill());

        $grid->id('ID')->sortable();
        $grid->column('name', __('Название'))->sortable();
        $grid->column('skillCategory.name', __('Категория'))->sortable();

        $grid->filter(function ($filter) {

            // Remove the default id filter
            //$filter->disableIdFilter();

            // Add a column filter
            $filter->like('name', 'Название');
            $filter->like('skillCategory.name', 'Категория');
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
        $show = new Show(Skill::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Название'));
        $show->field('skillCategory.name', __('Категория'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Skill());
        $form->textarea('name', __('Название'))->rules('required');
        $form->select('skillCategory_id')->options(SkillCategory::all()->pluck('name', 'id'))->rules('required');
        return $form;
    }
}