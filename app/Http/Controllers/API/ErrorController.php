<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ApiCallError;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function saveError(Request $request)
    {
        $request->validate([
            'error' => 'required|string',
            'log' => 'required'
        ]);
        
        ApiCallError::create([
            'user_id' => $request->user()->id,
            'error' => $request->error,
            'log' => $request->log,
        ]);
    }
}
