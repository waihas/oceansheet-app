<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConnectionError extends Model
{
    use HasFactory;

    protected $fillable = [
        'connection_id',
        'error',
        'log',
    ];

    public function connection()
    {
        return $this->belongsTo(Connection::class);
    }
}
