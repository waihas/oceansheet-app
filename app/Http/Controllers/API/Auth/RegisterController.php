<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function registered(Request $request, User $user)
    {
        if ($user instanceof MustVerifyEmail) {
            $user->sendEmailVerificationNotification();

            return response()->json(['status' => trans('verification.sent')]);
        }

        $user['token'] = $user->createToken('OceanSheet')->plainTextToken;
        
        return response()->json($user);
    }

    protected function validator(array $data)
    {
        $rules = [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'terms' => 'required|accepted'
        ];

        $messages = [
            'terms.accepted' => 'The Terms & Conditions must be accepted.'
        ];

        return Validator::make($data, $rules, $messages);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // public function createAccount(Request $request)
    // {
    //     $attr = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|unique:users,email',
    //         'password' => 'required|string|min:6|confirmed'
    //     ]);

    //     $user = User::create([
    //         'name' => $attr['name'],
    //         'password' => bcrypt($attr['password']),
    //         'email' => $attr['email']
    //     ]);

    //     return $this->success([
    //         'token' => $user->createToken('OceanSheet')->plainTextToken
    //     ]);
    // }
}
