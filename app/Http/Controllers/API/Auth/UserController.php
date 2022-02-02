<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use App\Models\UserCloudStorage;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function current(Request $request)
    {
        return response()->json($request->user());
    }

    public function updateProfile(Request $request)
    {
        $user = $request->user();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        return tap($user)->update($request->only('name', 'email'));
    }

    public function saveDriveUserId(Request $request)
    {
        $this->validate($request, [
            'baID' => 'required'
        ]);

        if($request->user()->cloud()->exists()) {
            $request->user()->cloud()->update([
                'google_drive_signed_id' => $request->baID
            ]);
        }
        else {
            UserCloudStorage::create([
                'user_id' => $request->user()->id,
                'google_drive_signed_id' => $request->baID
            ]);
        }
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|confirmed|min:6',
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);
    }
}
