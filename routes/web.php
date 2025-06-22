<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth\SocialController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/auth/google', [SocialController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [SocialController::class, 'handleGoogleCallback']);



Route::middleware(['auth', 'verified'])->prefix('student')->name('students.')->group(function () {
    Route::get('/dashboard/{hash}', [StudentController::class, 'dashboard'])->name('dashboard');
});


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');



Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    $user = Auth::user();
    $hash = Crypt::encryptString($user->id);

    return redirect()->route('students.dashboard', ['hash' => $hash])
        ->with('status', 'Email verified successfully!');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('status', 'verification-link-sent');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');