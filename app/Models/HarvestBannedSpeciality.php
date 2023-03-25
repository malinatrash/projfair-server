<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HarvestBannedSpeciality extends Model
{
    use HasFactory;

    protected $table = "harvest_banned_specialities";

    protected $guarded = false;

    public $timestamps = false;

    public function speciality(): BelongsTo
    {
        return $this->belongsTo(Speciality::class, 'speciality_id');
    }
}
