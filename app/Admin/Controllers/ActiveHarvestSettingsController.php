<?php

namespace App\Admin\Controllers;

use App\Models\ActiveHarvestSetting;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ActiveHarvestSettingsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Активные настройки';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ActiveHarvestSetting());

        $grid->id('ID')->sortable();
        $grid->column('harvest_setting_id', __('ID активных настроек'));

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
        $show = new Show(ActiveHarvestSetting::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('harvest_setting_id', __('ID активных настроек'));
        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ActiveHarvestSetting());
        $form->number('harvest_setting_id', __('ID активных настроек'))->rules('required');
       
        return $form;
    }
}