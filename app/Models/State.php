<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Состояние проекта
 * 1 - Идёт набор
 * 2 - Активный
 * 3 - Добор
 * 4 - В архиве
 */
class State extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
