<?php

use Illuminate\Support\Facades\Route;
use App\Events\WebsocketDemoEvent;

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
    broadcast(new WebsocketDemoEvent('test'));
    return view('welcome');
});

Auth::routes();
Route::get('/password/resets/{token}/{email}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');

//ajax routes
Route::get('/register/ajax/get-district/{data}', [App\Http\Controllers\ApiController::class, 'ajaxDistrict'])->name('register.ajax.district');

Route::get('/register/ajax/get-school/{data}', [App\Http\Controllers\ApiController::class, 'ajaxSchool'])->name('register.ajax.school');


Route::get('/video', [App\Http\Controllers\UserController::class, 'Video'])->name('user.introductionvideo');


Route::middleware('student')->group(function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile/edit', [App\Http\Controllers\UserController::class, 'editProfile'])->name('user.profile.edit');

Route::post('/profile/update', [App\Http\Controllers\UserController::class, 'updateprofil'])->name('user.update');

Route::get('/leaderboard', [App\Http\Controllers\LeaderboardController::class, 'viewLeaderboard'])->name('leaderboard');

//Lessons
Route::get('/courses', [App\Http\Controllers\LessonController::class, 'courses'])->name('lesson.courses');

Route::get('/introduction', [App\Http\Controllers\LessonController::class, 'introduction'])->name('lesson.introduction');

Route::get('/vrlessons', [App\Http\Controllers\LessonController::class, 'vrlessons'])->name('lesson.vrlessons');

Route::get('/additivelessons', [App\Http\Controllers\LessonController::class, 'additivelessons'])->name('lesson.additivelessons');

Route::get('/iotlessons', [App\Http\Controllers\LessonController::class, 'iotlessons'])->name('lesson.iotlessons');

Route::get('/bigdatalessons', [App\Http\Controllers\LessonController::class, 'bigdatalessons'])->name('lesson.bigdatalessons');

Route::get('/cloudlessons', [App\Http\Controllers\LessonController::class, 'cloudlessons'])->name('lesson.cloudlessons');

Route::get('/cyberlessons', [App\Http\Controllers\LessonController::class, 'cyberlessons'])->name('lesson.cyberlessons');

Route::get('/universallessons', [App\Http\Controllers\LessonController::class, 'universallessons'])->name('lesson.universallessons');

Route::get('/advancedlessons', [App\Http\Controllers\LessonController::class, 'advancedlessons'])->name('lesson.advancedlessons');

Route::get('/autolessons', [App\Http\Controllers\LessonController::class, 'autolessons'])->name('lesson.autolessons');

Route::get('/lokasivr', [App\Http\Controllers\LessonController::class, 'lokasivr'])->name('lesson.lokasivr');

// Game
Route::get('/karakter', [App\Http\Controllers\LessonController::class, 'karakter'])->name('lesson.karakter');

Route::get('/videogame', [App\Http\Controllers\LessonController::class, 'videogame'])->name('lesson.videogame');


//Quiz
Route::get('/quiz/choose-quiz', [App\Http\Controllers\QuizController::class, 'chooseQuiz'])->name('quiz.choose-quiz');

Route::get('/quiz/introquiz, {id}', [App\Http\Controllers\QuizController::class, 'introquiz'])->name('quiz.intro-start');

Route::post('/quiz/start', [App\Http\Controllers\QuizController::class, 'startQuiz'])->name('quiz.start-quiz');

Route::post('/quiz/submit-result', [App\Http\Controllers\QuizController::class, 'submitQuiz'])->name('quiz.submit-result');

Route::get('/quiz/result-quiz/{id}', [App\Http\Controllers\QuizController::class, 'resultQuiz'])->name('quiz.result-quiz');


//student
Route::get('/statistik', [App\Http\Controllers\UserController::class, 'statistik'])->name('user.student.statistik');

Route::get('/profile', [App\Http\Controllers\UserController::class, 'profil'])->name('user.student.profile');


//game
Route::get('/game/menu', [App\Http\Controllers\UserController::class, 'gameDemo'])->name('user.game.demo');

Route::get('/game/demo', [App\Http\Controllers\UserController::class, 'gameDemoDrone'])->name('user.game.drone');

Route::get('/game/tutorial', [App\Http\Controllers\GameController::class, 'tutorial'])->name('user.game.tutorial');

Route::get('/game/test', [App\Http\Controllers\GameController::class, 'test'])->name('user.game.test');



Route::get('/feedback', [App\Http\Controllers\UserController::class, 'feedback'])->name('others.feedback');

Route::post('/feedback/save', [App\Http\Controllers\UserController::class, 'feedbackSave'])->name('others.feedback.save');

Route::get('/profile/change-password', [App\Http\Controllers\UserController::class, 'viewChangePassword'])->name('user.change-password');

Route::post('/profile/change-password/save', [App\Http\Controllers\UserController::class, 'saveChangePassword'])->name('user.change-password.save');

Route::get('/leaderboard', [App\Http\Controllers\LeaderboardController::class, 'viewLeaderboard'])->name('activities.leaderboard');

Route::get('/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('activities.chat');


});

Route::middleware('admin')->group(function () {
  Route::get('/home-admin', [App\Http\Controllers\AdminController::class, 'index'])->name('home-admin');

  //Profile
  Route::get('/admin/profile/edit-profile', [App\Http\Controllers\AdminController::class, 'viewEditProfile'])->name('admin.profiles.edit-profile');

  Route::post('/admin/profile/edit-profile/updating', [App\Http\Controllers\AdminController::class, 'updatingProfile'])->name('admin.profiles.edit-profile.updating');

  Route::get('/admin/profile/change-password', [App\Http\Controllers\AdminController::class, 'viewChangePassword'])->name('admin.profiles.change-password');

  Route::post('/admin/profile/change-password/updating', [App\Http\Controllers\AdminController::class, 'updatingPassword'])->name('admin.profiles.change-password.updating');

  //Activities
  Route::get('/admin/activities/lesson/list', [App\Http\Controllers\LessonController::class, 'listlesson'])->name('admin.activities.lesson.list');

  Route::post('/admin/activities/lesson/list/update-link', [App\Http\Controllers\LessonController::class, 'updateLink'])->name('admin.activities.lesson.list.update');

  Route::get('/admin/activities/lesson/add-new-lesson', [App\Http\Controllers\LessonController::class, 'addLesson'])->name('admin.activities.lesson.add');

  Route::post('/admin/activities/lesson/add-new-lesson/save', [App\Http\Controllers\LessonController::class, 'saveLesson'])->name('admin.activities.lesson.add.save');

  Route::get('/admin/activities/quiz/list', [App\Http\Controllers\QuizController::class, 'viewQuizList'])->name('admin.activities.quiz.list');

  Route::get('/admin/activities/quiz/add-new-quiz', [App\Http\Controllers\QuizController::class, 'addQuiz'])->name('admin.activities.quiz.add');

  Route::post('/admin/activities/quiz/add-new-quiz/save', [App\Http\Controllers\QuizController::class, 'saveQuiz'])->name('admin.activities.quiz.add.save');

  Route::get('/admin/activities/quiz/edit-quiz/{id}', [App\Http\Controllers\QuizController::class, 'editQuiz'])->name('admin.activities.quiz.edit');

  Route::post('/admin/activities/quiz/edit-quiz/updating/{id}', [App\Http\Controllers\QuizController::class, 'updatingQuiz'])->name('admin.activities.quiz.edit.updating');

  Route::post('/admin/activities/quiz/remove', [App\Http\Controllers\QuizController::class, 'removeQuiz'])->name('admin.activities.quiz.remove');

  Route::get('/admin/activities/quiz/question-banks/list/{id}', [App\Http\Controllers\QuizController::class, 'viewQuestionBank'])->name('admin.activities.quiz.question-banks.list');

  Route::get('/admin/activities/quiz/question-banks/add-new-question/{id}', [App\Http\Controllers\QuizController::class, 'addQuestionBank'])->name('admin.activities.quiz.question-banks.add');

  Route::post('/admin/activities/quiz/question-banks/add/save', [App\Http\Controllers\QuizController::class, 'saveQuestionBank'])->name('admin.activities.question-banks.add.save');

  Route::get('/admin/activities/quiz/question-banks/edit/{id}', [App\Http\Controllers\QuizController::class, 'editQuestionBank'])->name('admin.activities.question-banks.edit');

  Route::post('/admin/activities/quiz/question-banks/edit/updating', [App\Http\Controllers\QuizController::class, 'updateQuestionBank'])->name('admin.activities.question-banks.edit.updating');

  Route::post('/admin/activities/quiz/question-banks/remove', [App\Http\Controllers\QuizController::class, 'removeQuestionBank'])->name('admin.activities.question-banks.remove');



  //Others
  Route::get('/admin/others/user-list/list', [App\Http\Controllers\AdminController::class, 'viewUserList'])->name('admin.others.user-list.list');

  Route::get('/admin/others/user-list/edit/{id}', [App\Http\Controllers\AdminController::class, 'editUserList'])->name('admin.others.user-list.edit');

  Route::post('/admin/others/user-list/edit/updating', [App\Http\Controllers\AdminController::class, 'updateUserList'])->name('admin.others.user-list.edit.updating');

  Route::post('/admin/others/user-list/disable', [App\Http\Controllers\AdminController::class, 'disableStatus'])->name('admin.others.user-list.disable');

  Route::post('/admin/others/user-list/activate', [App\Http\Controllers\AdminController::class, 'activateStatus'])->name('admin.others.user-list.activate');

  Route::get('/admin/others/audit/list', [App\Http\Controllers\AdminController::class, 'viewAuditList'])->name('admin.others.audit-trail.audit-trail-log');

  Route::post('/admin/others/audit/list/filter', [App\Http\Controllers\AdminController::class, 'viewAuditListFilter'])->name('admin.others.audit-trail.audit-trail-log.filter');

  Route::get('/admin/chat', [App\Http\Controllers\ChatController::class, 'index'])->name('admin.others.chat');

  Route::get('/admin/others/announcement/list', [App\Http\Controllers\AnnouncementController::class, 'viewAnnouncementList'])->name('admin.others.announcement.list');

  Route::get('/admin/others/announcement/create', [App\Http\Controllers\AnnouncementController::class, 'createAnnouncement'])->name('admin.others.announcement.create');

  Route::get('/admin/others/announcement/edit', [App\Http\Controllers\AnnouncementController::class, 'editAnnouncement'])->name('admin.others.announcement.edit');

  Route::post('/admin/others/announcement/add/save', [App\Http\Controllers\AnnouncementController::class, 'addAnnouncement'])->name('admin.others.announcement.add.save');

  Route::post('/admin/others/announcement/delete/', [App\Http\Controllers\AnnouncementController::class, 'deleteAnnouncement'])->name('admin.others.announcement.delete');

  Route::get('/admin/others/feedback/list', [App\Http\Controllers\AdminController::class, 'viewFeedbackList'])->name('admin.others.feedback.list');


});

// outside of middleware
Route::get('/messages', [App\Http\Controllers\ChatController::class, 'fetchMessages'])->name('chat/messages');

Route::post('/message', [App\Http\Controllers\ChatController::class, 'sendMessages'])->name('chat/sendMessages');
