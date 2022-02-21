<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workflow extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'workflow_type_id',
        'token',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function team()
    {
        return $this->hasOne(Team::class);
    }

    public function type()
    {
        return $this->belongsTo(WorkflowType::class);
    }

    public function settings()
    {
        return $this->hasOne(WorkflowSettings::class);
    }
}
