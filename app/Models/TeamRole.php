<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeamRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'roles',
    ];

    public function connections() {
        return $this->hasMany(Team::class);
    }
}
