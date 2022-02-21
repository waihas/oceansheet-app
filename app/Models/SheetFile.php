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
        return $this->belongsTo(Connection::class);
    }

    public function workflow()
    {
        return $this->belongsTo(Workflow::class);
    }

    public function sheet()
    {
        return $this->hasOne(Sheet::class);
    }

    public function range()
    {
        return $this->hasOne(SheetRange::class);
    }
}
