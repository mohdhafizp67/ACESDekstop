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


Route::get('/courses', [App\Http\Controllers\LessonController::class, 'courses'])->name('lesson.courses');


Route::get('/feedback', [App\Http\Controllers\UserController::class, 'feedback'])->name('others.feedback');

Route::get('/profile/change-password', [App\Http\Controllers\UserController::class, 'viewChangePassword'])->name('user.change-password');

Route::get('/leaderboard', [App\Http\Controllers\LeaderboardController::class, 'viewLeaderboard'])->name('activities.leaderboard');



Route::middleware('admin')->group(function () {
  Route::get('/home-admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home-admin');

  Route::get('/admin/profile/edit-profile', [App\Http\Controllers\AdminController::class, 'viewEditProfile'])->name('admin.profiles.edit-profile');

  Route::get('/admin/profile/change-password', [App\Http\Controllers\AdminController::class, 'viewChangePassword'])->name('admin.profiles.change-password');

  Route::post('/admin/profile/change-password/updating', [App\Http\Controllers\AdminController::class, 'updatingPassword'])->name('admin.profiles.change-password.updating');

});

