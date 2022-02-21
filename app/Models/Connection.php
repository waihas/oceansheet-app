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
        'from_sheet_file_id',
        'to_sheet_file_id',
        'count_run'
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

    public function source_sheet()
    {
        return $this->hasOne(SheetFile::class, 'sheet_file_id', 'from_sheet_file_id');
    }
    
    public function output_sheet()
    {
        return $this->hasOne(SheetFile::class, 'sheet_file_id', 'to_sheet_file_id');
    }

    public function settings()
    {
        return $this->hasOne(ConnectionSettings::class);
    }
}
