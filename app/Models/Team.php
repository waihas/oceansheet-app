<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'connection_id',
        'workflow_id',
        'user_id',
        'team_role_id',
    ];

    public function connection() {
        return $this->belongsTo(Connection::class);
    }

    public function workflow() {
        return $this->belongsTo(Workflow::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function team_role() {
        return $this->belongsTo(TeamRole::class);
    }
}
