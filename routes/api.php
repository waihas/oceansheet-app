<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\OAuthController;
use App\Http\Controllers\API\Auth\PasswordController;
use App\Http\Controllers\API\Auth\RegisterController;
use App\Http\Controllers\API\Auth\UserController;
use App\Http\Controllers\API\Auth\VerificationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('logout', [LoginController::class, 'logout']);

    Route::get('user', [UserController::class, 'current']);

    Route::patch('settings/profile', [UserController::class, 'updateProfile']);
    Route::patch('settings/password', [UserController::class, 'updatePassword']);
});

Route::group(['middleware' => 'guest:sanctum'], function () {
    Route::post('login', [LoginController::class, 'login']);
    Route::post('register', [RegisterController::class, 'register']);

    Route::post('password/email', [PasswordController::class, 'sendResetLinkEmail']);
    Route::post('password/reset', [PasswordController::class, 'reset']);

    Route::post('email/verify/{user}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend']);

    Route::post('oauth/{driver}', [OAuthController::class, 'redirectToProvider']);
    Route::get('oauth/{driver}/callback', [OAuthController::class, 'handleProviderCallback'])->name('oauth.callback');
});


// Route::group(['middleware' => 'auth:api'], function () {
//     Route::post('logout', 'Auth\LoginController@logout');

//     Route::get('/user', 'Auth\UserController@current');

//     Route::patch('settings/profile', 'Settings\ProfileController@update');
//     Route::patch('settings/password', 'Settings\PasswordController@update');
// });

// Route::group(['middleware' => 'guest:api'], function () {
//     Route::post('login', 'Auth\LoginController@login');
//     Route::post('register', 'Auth\RegisterController@register');

//     Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
//     Route::post('password/reset', 'Auth\ResetPasswordController@reset');

//     Route::post('email/verify/{user}', 'Auth\VerificationController@verify')->name('verification.verify');
//     Route::post('email/resend', 'Auth\VerificationController@resend');

//     Route::post('oauth/{driver}', 'Auth\OAuthController@redirectToProvider');
//     Route::get('oauth/{driver}/callback', 'Auth\OAuthController@handleProviderCallback')->name('oauth.callback');
// });