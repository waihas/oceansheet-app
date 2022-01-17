<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
// use App\Models\User;
// use App\Models\OAuthProvider;
// use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use Laravel\Socialite\Facades\Socialite;
// use App\Exceptions\EmailTakenException;

class OAuthController extends Controller
{
    // public function __construct()
    // {
    //     config([
    //         'services.github.redirect' => route('oauth.callback', 'github'),
    //     ]);
    // }

    // public function redirectToProvider($provider)
    // {
    //     return [
    //         'url' => Socialite::driver($provider)->stateless()->redirect()->getTargetUrl(),
    //     ];
    // }

    // public function handleProviderCallback($provider)
    // {
    //     $user = Socialite::driver($provider)->stateless()->user();
    //     $user = $this->findOrCreateUser($provider, $user);

    //     $this->guard()->setToken(
    //         $token = $this->guard()->login($user)
    //     );

    //     return view('oauth/callback', [
    //         'token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => $this->guard()->getPayload()->get('exp') - time(),
    //     ]);
    // }

    // protected function findOrCreateUser($provider, $user)
    // {
    //     $oauthProvider = OAuthProvider::where('provider', $provider)
    //         ->where('provider_user_id', $user->getId())
    //         ->first();

    //     if ($oauthProvider) {
    //         $oauthProvider->update([
    //             'access_token' => $user->token,
    //             'refresh_token' => $user->refreshToken,
    //         ]);

    //         return $oauthProvider->user;
    //     }

    //     if (User::where('email', $user->getEmail())->exists()) {
    //         throw new EmailTakenException;
    //     }

    //     return $this->createUser($provider, $user);
    // }

    // protected function createUser($provider, $sUser)
    // {
    //     $user = User::create([
    //         'name' => $sUser->getName(),
    //         'email' => $sUser->getEmail(),
    //         'email_verified_at' => now(),
    //     ]);

    //     $user->oauthProviders()->create([
    //         'provider' => $provider,
    //         'provider_user_id' => $sUser->getId(),
    //         'access_token' => $sUser->token,
    //         'refresh_token' => $sUser->refreshToken,
    //     ]);

    //     return $user;
    // }
}
