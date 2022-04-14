<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::domain('app.oceansheet.com')->group(function () {
    Route::get('/', function () {
        return "Here u go";
    });
});

// Route::get('/', function () {
//     return 'First sub domain';
// })->domain('blog.' . env('APP_URL'));

Route::get('{path}', function () {
    return view('welcome');
})->where('path', '(.*)');
