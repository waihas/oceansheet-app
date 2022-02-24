<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function createFeedback(Request $request)
    {
        $request->validate([
            'note' => 'required',
            'message' => 'required|string',
        ]);

        Feedback::create([
            'user_id' => $request->user()->id,
            'note' => $request->note,
            'message' => $request->message,
        ]);

        return response()->json([
            'success' => true
        ]);
    }
}
