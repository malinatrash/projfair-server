<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProjectSpeciality extends Model
{
    use HasFactory;
    protected $table = "project_speciality";

    public $timestamps = false;

    protected $guarded = false;

    public function speciality(): BelongsTo
    {
        return $this->belongsTo(Speciality::class);
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
