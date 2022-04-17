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
    Route::get('{path}', function () {
        return view('app');
    })->where('path', '(.*)');
});

Route::domain('blog.oceansheet.com')->group(function () {
    Route::get('/', function () {
        return view('blog.index');
    })->name('blog.index');
});

Route::redirect('/login', 'app.'.env('APP_URL').'/login')
    ->name('login');
Route::redirect('/register', 'app.'.env('APP_URL').'/register')
    ->name('register');

Route::get('/', function () {
    return view('welcome.index');
})->name('home');
Route::get('/about-us', function () {
    return view('welcome.about');
})->name('about');
Route::get('/pricing', function () {
    return view('welcome.pricing');
})->name('pricing');
Route::get('/product/for-google-sheets', function () {
    return view('welcome.products.for-gsheet');
})->name('products.for-gsheet');
Route::get('/product/for-microsoft-excel', function () {
    return view('welcome.products.for-microsoft');
})->name('products.for-microsoft');
Route::get('/our-workflows', function () {
    return view('welcome.workflows');
})->name('workflows');
Route::get('/workflows/excel-to-google-sheet', function () {
    return view('welcome.workflows.excel-to-gsheet');
})->name('excel-to-gsheet');
Route::get('/workflows/google-sheet-filter-data', function () {
    return view('welcome.workflows.filter-data');
})->name('workflows.filter-data');
Route::get('/workflows/many-google-sheets-to-one', function () {
    return view('welcome.workflows.many-to-one');
})->name('workflows.many-to-one');
Route::get('/workflows/one-google-sheets-to-many', function () {
    return view('welcome.workflows.one-to-many');
})->name('workflows.one-to-many');
Route::get('/work-with-us', function () {
    return view('welcome.careers');
})->name('careers');
Route::get('/product-features', function () {
    return view('welcome.features');
})->name('features');
Route::get('/security', function () {
    return view('welcome.security');
})->name('security');
Route::get('/support', function () {
    return view('welcome.support');
})->name('support');
Route::get('/contact-us', function () {
    return view('welcome.contact');
})->name('contact');
Route::get('/newsletter', function () {
    return view('welcome.newsletter');
});
    
// { path: '/login', name: 'login', component: page('auth/login.vue') },
// { path: '/register', name: 'register', component: page('auth/register.vue') },
// { path: '/password/reset', name: 'password.request', component: page('auth/password/email.vue') },
// { path: '/password/reset/:token', name: 'password.reset', component: page('auth/password/reset.vue') },
// { path: '/email/verify/:id', name: 'verification.verify', component: page('auth/verification/verify.vue') },
// { path: '/email/resend', name: 'verification.resend', component: page('auth/verification/resend.vue') },

Route::get('/terms', function () {
    return view('welcome.legal.terms');
})->name('legal.terms');
Route::get('/privacy-policy', function () {
    return view('welcome.legal.privacy-policy');
})->name('legal.privacy');
Route::get('/cookies', function () {
    return view('welcome.legal.cookies-policy');
})->name('legal.cookies');
Route::get('/privacy-and-data-protection-guide', function () {
    return view('welcome.legal.privacy-guide');
})->name('legal.guide');

// Route::get('/', function () {
//     return 'First sub domain';
// })->domain('blog.' . env('APP_URL'));


