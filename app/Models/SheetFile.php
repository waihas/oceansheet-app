<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SheetFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'spreadsheetId',
        'name',
        'mimeType',
        'size',
        'webViewLink',
        'shared',
        'ownedByMe',
        'exportLinks',
        'sheet_id',
        'sheet_range_id',
    ];

    protected $casts = [
        'exportLinks' => 'array'
    ];

    public function connection()
    {
        return $this->hasOne(Connection::class);
    }

    public function workflow()
    {
        return $this->hasOne(Workflow::class);
    }

    public function sheet()
    {
        return $this->belongsTo(Sheet::class);
    }

    public function sheet_range()
    {
        return $this->belongsTo(SheetRange::class);
    }
}
