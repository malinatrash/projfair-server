<?php

namespace App\Admin\Controllers;

use App\Models\HarvestSetting;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class HarvestSettingsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Настройки приема заявок';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new HarvestSetting());

        $grid->id('ID')->sortable();
        $grid->column('start_date_participation_harvest', __('Начало сбора студ заявок'));
        $grid->column('end_date_participation_harvest', __('Окончание сбора студ заявок'));
        $grid->column('start_date_project_harvest', __('Начало сбора препод заявок'));
        $grid->column('end_date_project_harvest', __('Окончание сбора препод заявок'));
        

        $grid->filter(function ($filter) {

            // Remove the default id filter
            //$filter->disableIdFilter();

            // Add a column filter
           // $filter->like('ID', 'ID');
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
        $show = new Show(HarvestSetting::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('start_date_participation_harvest', __('Начало сбора студ заявок'));
        $show->field('end_date_participation_harvest', __('Окончание сбора студ заявок'));
        $show->field('start_date_project_harvest', __('Начало сбора препод заявок'));
        $show->field('end_date_project_harvest', __('Окончание сбора препод заявок'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new HarvestSetting());
        $form->date('start_date_participation_harvest', __('Начало сбора студ заявок'))->format('YYYY-MM-DD')->rules('required');
        $form->date('end_date_participation_harvest', __('Окончание сбора студ заявок'))->format('YYYY-MM-DD')->rules('required');
        $form->date('start_date_project_harvest', __('Начало сбора препод заявок'))->format('YYYY-MM-DD')->rules('required');
        $form->date('end_date_project_harvest', __('Окончание сбора препод заявок'))->format('YYYY-MM-DD')->rules('required');
        
        return $form;
    }
}