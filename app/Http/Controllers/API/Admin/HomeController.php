<?php

namespace App\Http\Controllers\API\Admin;

use App\Http\Controllers\Controller;
use App\Models\Connection;
use App\Models\ConnectionError;
use App\Models\Feedback;
use App\Models\Newsletter;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function users(Request $request)
    {
        return response()->json([
            'success' => true,
            'data' => User::all()
        ]);
    }

    public function errors(Request $request)
    {
        return response()->json([
            'success' => true,
            'data' => ConnectionError::all()
        ]);
    }
    
    public function newsletters(Request $request)
    {
        return response()->json([
            'success' => true,
            'data' => Newsletter::all()
        ]);
    }
    
    public function feedbacks(Request $request)
    {
        return response()->json([
            'success' => true,
            'data' => Feedback::all()
        ]);
    }
    
    public function connectionsByTime($time, Request $request)
    {
         $connections = Connection::whereHas('settings', function ($query) use($time) {
                        $query->where('run_time', 'like', $time);
                })->get();

        return response()->json([
            'success' => true,
            'data' => $connections,
        ]);
    }
}
