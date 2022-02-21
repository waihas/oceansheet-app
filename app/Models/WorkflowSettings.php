<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkflowSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'workflow_id',
        'run_time',
    ];

    public function workflow()
    {
        return $this->belongsTo(Workflow::class);
    }
}
