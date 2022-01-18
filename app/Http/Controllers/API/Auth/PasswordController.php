<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{
    use ResetsPasswords;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function rules()
    {
        return [
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ];
    }

    // To send reset link via email
    public function sendResetLinkEmail(Request $request)
    {
        $attr = $request->validate([
            'email' => ['required', 'email'],
        ]);

        $response = Password::sendResetLink(['email' => $attr['email']]);

        if ($response == Password::RESET_LINK_SENT) {
            return ['status' => trans($response)];
        }

        return response()->json(['email' => trans($response)], 400);
    }

    protected function sendResetResponse(Request $request, $response)
    {
        return ['status' => trans($response)];
    }

    protected function sendResetFailedResponse(Request $request, $response)
    {
        return response()->json(['email' => trans($response)], 400);
    }
}
