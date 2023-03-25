<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;
    protected $table = "groups";
    protected $guarded = false;

    public $timestamps = false;


    public function specialityCourse()
    {
        return $this->belongsTo(SpecialityCourse::class, 'specialityCourse_id');
    }
}
