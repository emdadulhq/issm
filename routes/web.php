<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

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


// Route::get('/exam',function(){
// 	return view('/exam.create');
// });





Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');







Auth::routes(['verify' => true]);



Route::get('/home', 'HomeController@index')->name('home');


Route::group([ 'prefix'=>'admin'],function(){
    Route::get('/quiz','AdminController@quiz')->name('admin.quiz');
    Route::get('/course','AdminController@course')->name('admin.course');
    Route::get('/mailbox','AdminController@mailbox')->name('admin.mailbox');
    Route::get('/compose','AdminController@compose')->name('admin.compose');
    Route::get('/readmail','AdminController@readmail')->name('admin.readmail');
    Route::get('/bcalender','AdminController@bcalender')->name('admin.bcalender');
    Route::get('/lcalender','AdminController@lcalender')->name('admin.lcalender');
    Route::get('/bookmark','AdminController@bookmark')->name('admin.bookmark');
    Route::get('/review','AdminController@review')->name('admin.review');
    Route::get('/listing','AdminController@listing')->name('admin.listing');
    Route::get('/profile','AdminController@profile')->name('admin.profile');
    Route::get('/permission','AdminController@permission')->name('admin.permission');
    Route::post('/store','AdminController@store')->name('admin.store');
//    Route::get('/show/{id}','AdminController@show')->name('admin.show');
    Route::get('/minquiz','AdminController@minquiz')->name('admin.minquiz');
    Route::get('/startquiz','AdminController@startquiz')->name('admin.startquiz');
    Route::get('/run_quiz','AdminController@run_quiz')->name('admin.run_quiz');


});

Route::resource('quiz','QuizController');
Route::resource('examinfo','ExaminfoController');
Route::resource('makequestion' , 'QuestionController');
Route::resource('student','StudentController');
Route::resource('answer','AnswerController');
Route::resource('result' , 'ResultController');


























