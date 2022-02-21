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
            'data' => Connection::all()
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

            'output_sheetId' => 'required',
            'output_title' => 'required',
            // 'output_index',
            // 'output_sheetType',
            // 'output_rowCount',
            // 'output_columnCount',

            'source_from' => 'required|string',
            'source_to' => 'required|string',

            'output_from' => 'required|string',
            'output_to' => 'required|string',

            'source_spreadsheetId' => 'required',
            // 'source_name',
            // 'source_mimeType',
            // 'source_size',
            // 'source_webViewLink',
            // 'source_shared',
            // 'source_ownedByMe',
            // 'source_exportLinks',

            'output_spreadsheetId' => 'required',
            // 'output_name',
            // 'output_mimeType',
            // 'output_size',
            // 'output_webViewLink',
            // 'output_shared',
            // 'output_ownedByMe',
            // 'output_exportLinks',
        ]);

        // 1. save sheet
        $sheetSource = Sheet::create([
            'sheetId' => $request->source_sheetId,
            'title' => $request->source_title,
            'index' => $request->source_index,
            'sheetType' => $request->source_sheetType,
            'rowCount' => $request->source_rowCount,
            'columnCount' => $request->source_columnCount,
        ]);

        $sheetOutput = Sheet::create([
            'sheetId' => $request->output_sheetId,
            'title' => $request->output_title,
            'index' => $request->output_index,
            'sheetType' => $request->output_sheetType,
            'rowCount' => $request->output_rowCount,
            'columnCount' => $request->output_columnCount,
        ]);

        // 2. save range
        $rangeSource = SheetRange::create([
            'from' => $request->source_from,
            'to' => $request->source_to,
        ]);
        
        $rangeOutput = SheetRange::create([
            'from' => $request->output_from,
            'to' => $request->output_to,
        ]);

        // 3. save sheetfile
        $sourceSheetFile = SheetFile::create([
            'spreadsheetId' => $request->source_spreadsheetId,
            'name' => $request->source_name,
            'mimeType' => $request->source_mimeType,
            'size' => $request->source_size,
            'webViewLink' => $request->source_webViewLink,
            'shared' => $request->source_shared,
            'ownedByMe' => $request->source_ownedByMe,
            'exportLinks' => $request->source_exportLinks,
            'sheet_id' => $sheetSource->id,
            'sheet_range_id' => $rangeSource->id,
        ]);
        
        $outputSheetFile = SheetFile::create([
            'spreadsheetId' => $request->output_spreadsheetId,
            'name' => $request->output_name,
            'mimeType' => $request->output_mimeType,
            'size' => $request->output_size,
            'webViewLink' => $request->output_webViewLink,
            'shared' => $request->output_shared,
            'ownedByMe' => $request->output_ownedByMe,
            'exportLinks' => $request->output_exportLinks,
            'sheet_id' => $sheetOutput->id,
            'sheet_range_id' => $rangeOutput->id,
        ]);

        // 4. save connection
        $connection = Connection::create([
            'name' => $request->source_title .'_'. $request->output_title . '_' . date('H:i'),
            'token' => Str::orderedUuid(),
            'user_id' => $request->user()->id,
            'from_sheet_file_id' => $sourceSheetFile->id,
            'to_sheet_file_id' => $outputSheetFile->id,
            'count_run' => 1
        ]);

        // 5. save connectionsettings
        ConnectionSettings::create([
            'connection_id' => $connection->id,
            // 'run_time' => '08:00',
            // 'filter_data',
        ]);

        // 6. decrement user updates counter
        // $request->user()->plan()->updates--;
        // $request->user()->plan()->save();

        return response()->json([
            'success' => true,
            'message' => "Connection created successfully."
        ]);
    }

    public function run($token, Request $request)
    {
        // decrement user updates counter
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
                'source_spreadsheetId' => $conn->source_sheet()->spreadsheetId,
                'source_title' => $conn->source_sheet()->sheet()->title,
                'source_from' => $conn->source_sheet()->range()->from,
                'source_to' => $conn->source_sheet()->range()->to,
                'output_spreadsheetId' => $conn->output_sheet()->spreadsheetId,
                'output_title' => $conn->output_sheet()->sheet()->title,
                'output_from' => $conn->output_sheet()->range()->from,
            ]
        ]);
    }
}
