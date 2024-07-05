<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\HarvestSetting;
use App\Models\ActiveHarvestSetting;
use App\Http\Resources\ProjectReportResource;
use Carbon\Carbon;


class ReportController extends Controller
{
    public function __invoke(Request $request)
    {
        // получение активной настройки
        $activeHarvestSetting = ActiveHarvestSetting::first();
        $harvestSettingId = $activeHarvestSetting->harvest_setting_id;        
        $harvestSetting = HarvestSetting::find($harvestSettingId);


        // получение даты окончания проектов для актуального периода
        $endDate =  $harvestSetting->end_date_project_harvest;

        // получаем конкретный год из endDate
        $year = substr($endDate, 0, 4);

        // приводим в к виду год-01-01
        $startDateString = $year . '-01-01';

        //получаем проекты 
        $projects = Project::with('supervisors')
            ->where('date_end', '>=', $startDateString)
            ->get();
                                                   
        return ProjectReportResource::collection($projects);
    }
}
