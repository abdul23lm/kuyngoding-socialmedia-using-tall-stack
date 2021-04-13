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

Route::view('/', 'welcome')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('timeline', 'TimelineController');
    Route::livewire('status/{hash}/edit', 'status.edit')->layout('layouts.app')->name('status.edit');
    Route::livewire('status/{hash}/delete', 'status.delete')->layout('layouts.modal')->name('status.delete');
});

Route::livewire('settings', 'account.edit')->layout('layouts.app', ['title' => 'Settings'])
    ->name('settings')->middleware('auth');

Route::livewire('user/{identifier}', 'account.show')->layout('layouts.app')
    ->name('account.show');

Route::livewire('status/{hash}', 'status.show')
    ->layout('layouts.app')->name('status.show');

Route::layout('layouts.auth')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::livewire('login', 'auth.login')
            ->name('login');

        Route::livewire('register', 'auth.register')
            ->name('register');
    });

    Route::livewire('password/reset', 'auth.passwords.email')
        ->name('password.request');

    Route::livewire('password/reset/{token}', 'auth.passwords.reset')
        ->name('password.reset');

    Route::middleware('auth')->group(function () {
        Route::livewire('email/verify', 'auth.verify')
            ->middleware('throttle:6,1')
            ->name('verification.notice');

        Route::livewire('password/confirm', 'auth.passwords.confirm')
            ->name('password.confirm');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('email/verify/{id}/{hash}', 'Auth\EmailVerificationController')
        ->middleware('signed')
        ->name('verification.verify');

    Route::post('logout', 'Auth\LogoutController')
        ->name('logout');
});
