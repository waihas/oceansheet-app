<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkflowError extends Model
{
    use HasFactory;

    protected $fillable = [
        'workflow_id',
        'error',
        'log',
    ];

    public function workflow()
    {
        return $this->belongsTo(Workflow::class);
    }
}
