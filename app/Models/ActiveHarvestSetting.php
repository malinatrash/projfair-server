<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActiveHarvestSetting extends Model
{
    use HasFactory;
    protected $table = "active_harvest_setting";

    public $timestamps = false;

    /**
     * Получить активную настройку
     */
    public function harvest(): BelongsTo
    {
        return $this->belongsTo(HarvestSetting::class, 'harvest_setting_id');
    }
}
