<?php

namespace App\Http\Services;

use App\Models\ActiveHarvestSetting;
use App\Models\Candidate;
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

    public function isCandidateBannedByHarvestSettings(Candidate $candidate): bool
    {
        if (!$this->isNowHarvesting()) {
            return true;
        }
        $currentHarvest = $this->getCurrentHarvestSetting();
        $candidateSpeciality = $candidate->getSpeciality();
        if (!isset($candidateSpeciality)) {
            return false;
        }
        $candidateSpecialityId = $candidateSpeciality->id;
        $bannedCandidateSpeciality = $currentHarvest->bannedSpecialities()->firstWhere('speciality_id', $candidateSpecialityId);

        if (!isset($bannedCandidateSpeciality)) {
            return false;
        }
        $bannedCandidateSpecialityCourse = $bannedCandidateSpeciality->course;
        if (!isset($bannedCandidateSpecialityCourse)) {
            return true;
        }
        $candidateCourse = $candidate->course;
        return $bannedCandidateSpecialityCourse == $candidateCourse;
    }
}
