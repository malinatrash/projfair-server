<?php

namespace App\Http\Services;

use App\Models\ActiveHarvestSetting;
use App\Models\HarvestSetting;

class HarvestSettingService
{
    private function getActiveHarvestSetting(): ActiveHarvestSetting | null
    {
        return ActiveHarvestSetting::find(1);
    }

    public function getCurrentHarvestSetting(): HarvestSetting | null
    {
        return $this->getActiveHarvestSetting()?->harvest;
    }

    public function getCurrentHarvestStart(): string | null
    {
        return $this->getCurrentHarvestSetting()?->start_date_participation_harvest;
    }

    public function getCurrentHarvestDeadline(): string | null
    {
        return $this->getCurrentHarvestSetting()?->end_date_participation_harvest;
    }

    /**
     * Идет ли сейчас сбор заявок
     */
    public function isNowHarvesting(): bool
    {
        $harvestStart = $this->getCurrentHarvestStart();
        $harvestEnd = $this->getCurrentHarvestDeadline();
        $nowDate = strtotime(date('Y-m-d'));
        $startDate = strtotime($harvestStart);
        $endDate = strtotime($harvestEnd);

        return (($nowDate >= $startDate) && ($nowDate <= $endDate));
    }
}
