<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'sheetId',
        'title',
        'index',
        'sheetType',
        'rowCount',
        'columnCount',
    ];

    public function sheet_file()
    {
        return $this->hasOne(SheetFile::class);
    }
}
