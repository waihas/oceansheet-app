<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheetRange extends Model
{
    use HasFactory;

    protected $fillable = [
        'from',
        'to',
    ];

    public function sheet_file()
    {
        return $this->belongsTo(SheetFile::class);
    }
}
