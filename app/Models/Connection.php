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
        // 'from_sheet_file_id',
        // 'to_sheet_file_id',
        'count_updates'
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

    public function sheet_files()
    {
        return $this->hasMany(SheetFile::class);
    }

    public function source_sheet()
    {
        return $this->hasOne(SheetFile::class)->where('sheet_files.type', '=', 'source');
    }

    public function output_sheets()
    {
        return $this->hasMany(SheetFile::class)->where('sheet_files.type', '=', 'output');
    }

    // public function source_sheet()
    // {
    //     return $this->hasOne(SheetFile::class);
    //     // return $this->belongsTo(SheetFile::class, 'from_sheet_file_id');
    // }
    
    // public function output_sheet()
    // {
    //     return $this->hasMany(SheetFile::class);
    //     // return $this->belongsTo(SheetFile::class, 'to_sheet_file_id');
    // }

    public function settings()
    {
        return $this->hasOne(ConnectionSettings::class);
    }
}
