<?php

namespace App\Traits;

use App\Models\SheetFile as SF;
use Illuminate\Http\Request;

trait SheetFile
{
    protected function createSheetFile(Request $request, $connectionId, $sheetSourceId, $rangeSourceId)
    {
        // check record if already existe using fileId & connection_id
        // create record if not
        SheetFile::create([
            'spreadsheetId' => $request->source_spreadsheetId,
            'name' => $request->source_name,
            'mimeType' => $request->source_mimeType,
            'size' => $request->source_size,
            'webViewLink' => $request->source_webViewLink,
            'shared' => $request->source_shared,
            'ownedByMe' => $request->source_ownedByMe,
            'exportLinks' => $request->source_exportLinks,
            'connection_id' => $connectionId, //$connection->id,
            'type' => 'source',
            'sheet_id' => $sheetSourceId, //$sheetSource->id,
            'sheet_range_id' => $rangeSourceId, //$rangeSource->id,
        ]);

        // return id of the record
    }
}