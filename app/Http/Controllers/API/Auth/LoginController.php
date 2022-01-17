<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Exceptions\VerifyEmailException;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function attemptLogin(Request $request)
    {
        $token = $this->guard()->attempt($this->credentials($request));

        if (! $token) {
            return false;
        }

        $user = $this->guard()->user();
        if ($user instanceof MustVerifyEmail && ! $user->hasVerifiedEmail()) {
            return false;
        }

        $this->guard()->setToken($token);

        return true;
    }

    protected function sendLoginResponse(Request $request)
    {
        $this->clearLoginAttempts($request);

        $token = (string) $this->guard()->getToken();
        $expiration = $this->guard()->getPayload()->get('exp');

        return response()->json([
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => $expiration - time(),
        ]);
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        $user = $this->guard()->user();
        if ($user instanceof MustVerifyEmail && ! $user->hasVerifiedEmail()) {
            throw VerifyEmailException::forUser($user);
        }

        throw ValidationException::withMessages([
            'credentials' => [trans('auth.failed')]
        ]);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
    }
}
