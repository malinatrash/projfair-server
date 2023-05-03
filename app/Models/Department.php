<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Department extends Model
{
    use HasFactory;

    protected $table = "departments";
    protected $guarded = false;

    public $timestamps = false;


    public function specialities(): HasMany
    {
        return $this->hasMany(Speciality::class);
    }

    public function institute(): BelongsTo
    {
        return $this->belongsTo(Institute::class);
    }
}
