<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConnectionSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'connection_id',
        'run_time',
        'filter_data',
    ];

    public function connection()
    {
        return $this->belongsTo(Connection::class);
    }
}
