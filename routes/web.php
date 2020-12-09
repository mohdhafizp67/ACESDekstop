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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/profile/edit', [App\Http\Controllers\UserController::class, 'editProfile'])->name('user.profile.edit');

Route::post('/profile/update/id={id}', [App\Http\Controllers\UserController::class, 'updateprofil'])->name('user.update');

Route::get('/leaderboard', [App\Http\Controllers\LeaderboardController::class, 'viewLeaderboard'])->name('leaderboard');

