<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipationDeadLine extends Model
{
    use HasFactory;
    protected $table = "participation_dead_lines";

    protected $guarded = false;

    public $timestamps = false;
}
