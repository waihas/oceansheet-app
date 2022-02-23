<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Connection;
use App\Models\ConnectionError;
use App\Models\ConnectionSettings;
use App\Models\Sheet;
use App\Models\SheetFile;
use App\Models\SheetRange;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ConnectionController extends Controller
{
    public function all(Request $request)
    {
        return response()->json([
            'success' => true,
            'data' => $request->user()->connections
        ]);
    }

    public function create(Request $request)
    {
        // validate all the data
        $request->validate([
            'source_sheetId' => 'required',
            'source_title' => 'required',
            // 'source_index',
            // 'source_sheetType',
            // 'source_rowCount',
            // 'source_columnCount',

            'output_sheets_count' => 'required',
            // 'run_time',

            'output_1_sheetId' => 'required',
            'output_1_title' => 'required',
            // 'output_1_index',
            // 'output_1_sheetType',
            // 'output_1_rowCount',
            // 'output_1_columnCount',
            
            // 'output_2_sheetId',
            // 'output_2_title',
            // 'output_2_index',
            // 'output_2_sheetType',
            // 'output_2_rowCount',
            // 'output_2_columnCount',
            
            // 'output_3_sheetId',
            // 'output_3_title',
            // 'output_3_index',
            // 'output_3_sheetType',
            // 'output_3_rowCount',
            // 'output_3_columnCount',

            'source_from' => 'required|string',
            'source_to' => 'required|string',

            'output_1_from' => 'required|string',
            'output_1_to' => 'required|string',
            // 'output_2_from',
            // 'output_2_to',
            // 'output_3_from',
            // 'output_3_to',

            'source_spreadsheetId' => 'required',
            // 'source_name',
            // 'source_mimeType',
            // 'source_size',
            // 'source_webViewLink',
            // 'source_shared',
            // 'source_ownedByMe',
            // 'source_exportLinks',

            'output_1_spreadsheetId' => 'required',
            // 'output_1_name',
            // 'output_1_mimeType',
            // 'output_1_size',
            // 'output_1_webViewLink',
            // 'output_1_shared',
            // 'output_1_ownedByMe',
            // 'output_1_exportLinks',
            
            // 'output_2_spreadsheetId',
            // 'output_2_name',
            // 'output_2_mimeType',
            // 'output_2_size',
            // 'output_2_webViewLink',
            // 'output_2_shared',
            // 'output_2_ownedByMe',
            // 'output_2_exportLinks',
            
            // 'output_3_spreadsheetId',
            // 'output_3_name',
            // 'output_3_mimeType',
            // 'output_3_size',
            // 'output_3_webViewLink',
            // 'output_3_shared',
            // 'output_3_ownedByMe',
            // 'output_3_exportLinks',
        ]);

        // 1. save connection
        $connection = Connection::create([
            'name' => $request->source_title .'_' .date('H').date('i'),
            'token' => Str::orderedUuid(),
            'user_id' => $request->user()->id,
            'count_updates' => 1
        ]);

        // 2. save connection settings
        ConnectionSettings::create([
            'connection_id' => $connection->id,
            'run_time' => $request->run_time == '' ? null : $request->run_time,
            // 'filter_data',
        ]);

        // 3. save sheets and sheet files and ranges
        // source
        $sheetSource = Sheet::create([
            'sheetId' => $request->source_sheetId,
            'title' => $request->source_title,
            'index' => $request->source_index,
            'sheetType' => $request->source_sheetType,
            'rowCount' => $request->source_rowCount,
            'columnCount' => $request->source_columnCount,
        ]);
        $rangeSource = SheetRange::create([
            'from' => $request->source_from,
            'to' => $request->source_to,
        ]);
        SheetFile::create([
            'spreadsheetId' => $request->source_spreadsheetId,
            'name' => $request->source_name,
            'mimeType' => $request->source_mimeType,
            'size' => $request->source_size,
            'webViewLink' => $request->source_webViewLink,
            'shared' => $request->source_shared,
            'ownedByMe' => $request->source_ownedByMe,
            'exportLinks' => $request->source_exportLinks,
            'connection_id' => $connection->id,
            'type' => 'source',
            'sheet_id' => $sheetSource->id,
            'sheet_range_id' => $rangeSource->id,
        ]);

        // output_1
        $sheetOutput1 = Sheet::create([
            'sheetId' => $request->output_1_sheetId,
            'title' => $request->output_1_title,
            'index' => $request->output_1_index,
            'sheetType' => $request->output_1_sheetType,
            'rowCount' => $request->output_1_rowCount,
            'columnCount' => $request->output_1_columnCount,
        ]);
        $rangeOutput1 = SheetRange::create([
            'from' => $request->output_1_from,
            'to' => $request->output_1_to,
        ]);
        SheetFile::create([
            'spreadsheetId' => $request->output_1_spreadsheetId,
            'name' => $request->output_1_name,
            'mimeType' => $request->output_1_mimeType,
            'size' => $request->output_1_size,
            'webViewLink' => $request->output_1_webViewLink,
            'shared' => $request->output_1_shared,
            'ownedByMe' => $request->output_1_ownedByMe,
            'exportLinks' => $request->output_1_exportLinks,
            'connection_id' => $connection->id,
            'type' => 'output',
            'sheet_id' => $sheetOutput1->id,
            'sheet_range_id' => $rangeOutput1->id,
        ]);
        
        // output_2
        if($request->output_sheets_count > 1)
        {
            $sheetOutput2 = Sheet::create([
                'sheetId' => $request->output_2_sheetId,
                'title' => $request->output_2_title,
                'index' => $request->output_2_index,
                'sheetType' => $request->output_2_sheetType,
                'rowCount' => $request->output_2_rowCount,
                'columnCount' => $request->output_2_columnCount,
            ]);
            $rangeOutput2 = SheetRange::create([
                'from' => $request->output_2_from,
                'to' => $request->output_2_to,
            ]);
            SheetFile::create([
                'spreadsheetId' => $request->output_2_spreadsheetId,
                'name' => $request->output_2_name,
                'mimeType' => $request->output_2_mimeType,
                'size' => $request->output_2_size,
                'webViewLink' => $request->output_2_webViewLink,
                'shared' => $request->output_2_shared,
                'ownedByMe' => $request->output_2_ownedByMe,
                'exportLinks' => $request->output_2_exportLinks,
                'connection_id' => $connection->id,
                'type' => 'output',
                'sheet_id' => $sheetOutput2->id,
                'sheet_range_id' => $rangeOutput2->id,
            ]);
        }

        // output_3
        if($request->output_sheets_count == 3)
        {
            $sheetOutput3 = Sheet::create([
                'sheetId' => $request->output_3_sheetId,
                'title' => $request->output_3_title,
                'index' => $request->output_3_index,
                'sheetType' => $request->output_3_sheetType,
                'rowCount' => $request->output_3_rowCount,
                'columnCount' => $request->output_3_columnCount,
            ]);
            $rangeOutput3 = SheetRange::create([
                'from' => $request->output_3_from,
                'to' => $request->output_3_to,
            ]);
            SheetFile::create([
                'spreadsheetId' => $request->output_3_spreadsheetId,
                'name' => $request->output_3_name,
                'mimeType' => $request->output_3_mimeType,
                'size' => $request->output_3_size,
                'webViewLink' => $request->output_3_webViewLink,
                'shared' => $request->output_3_shared,
                'ownedByMe' => $request->output_3_ownedByMe,
                'exportLinks' => $request->output_3_exportLinks,
                'connection_id' => $connection->id,
                'type' => 'output',
                'sheet_id' => $sheetOutput3->id,
                'sheet_range_id' => $rangeOutput3->id,
            ]);
        }

        // 6. decrement user updates counter
        $request->user()->plan->updates--;
        $request->user()->plan->save();

        return response()->json([
            'success' => true,
            'message' => "Connection created successfully."
        ]);
    }

    public function run($token, Request $request)
    {
        // decrement user updates counter
        $request->user()->plan->updates--;
        $request->user()->plan->save();

        $connection = Connection::where('token', $token)->firstOrFail();
        $connection->count_updates--;
        $connection->save();

        return response()->json([
            'success' => true,
            'message' => "Connection runned successfully."
        ]);
    }

    public function saveError(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'error' => 'required',
            'log' => 'required',
        ]);

        $connection = Connection::where('token', $request->token)->firstOrFail();

        ConnectionError::create([
            'connection_id' => $connection->id,
            'error' => $request->error,
            'log' => $request->log,
        ]);

        return response()->json([
            'success' => true,
            'message' => "Error saved successfully."
        ]);
    }

    public function get($token, Request $request)
    {
        $conn = Connection::where('token', $token)->firstOrFail();
        return response()->json([
            'success' => true,
            'data' => [
                'source_spreadsheetId' => $conn->source_sheet->spreadsheetId,
                'source_spreadsheetName' => $conn->source_sheet->name,
                'source_title' => $conn->source_sheet->sheet->title,
                'source_from' => $conn->source_sheet->sheet_range->from,
                'source_to' => $conn->source_sheet->sheet_range->to,
                'output_1_spreadsheetId' => $conn->output_sheet->spreadsheetId,
                'output_1_spreadsheetName' => $conn->output_sheet->name,
                'output_1_title' => $conn->output_sheet->sheet->title,
                'output_1_from' => $conn->output_sheet->sheet_range->from,
            ]
        ]);
    }
}
