<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'number_updates',
        'price',
        'features',
    ];

    public function users()
    {
        return $this->hasMany(UserPlan::class);
    }
}
