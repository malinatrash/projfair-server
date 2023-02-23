<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HarvestSetting extends Model
{
    use HasFactory;

    protected $table = "harvest_settings";
    protected $guarded = false;

    /**
     * Получить все заявки на проект
     */
    public function bannedSpecialities()
    {
        return $this->hasMany(HarvestBannedSpeciality::class, 'harvest_setting_id');
    }
}
