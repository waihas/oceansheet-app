<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'token',
        'user_id',
        'team_id'
    ];

    public function errors()
    {
        return $this->hasMany(ConnectionError::class);
    }

    public function team()
    {
        return $this->hasOne(Team::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
