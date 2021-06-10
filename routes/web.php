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
Route::get('/sci','AdminController@sci')->name('sci');
Route::get('/career','AdminController@career')->name('career');
Route::get('/mock','AdminController@mock')->name('mock');
Route::get('/contact','AdminController@contact')->name('contact');


Route::group([ 'prefix'=>'Career_Assessment'],function() {
    Route::get('/ielts', 'AdminController@career_ielts')->name('ielts');
    Route::get('/support', 'AdminController@career_support')->name('support.');
    Route::get('/gre', 'AdminController@career_gre')->name('gre.');
    Route::get('/aptitude', 'AdminController@career_aptitude')->name('aptitude.');
});

Route::group([ 'prefix'=>'sci'],function() {
    Route::get('/ict', 'AdminController@ict')->name('ict');
    Route::get('/kids_coding', 'AdminController@kids_coding')->name('kids_coding.');
    Route::get('/mobile_lab', 'AdminController@mobile_lab')->name('mobile_lab.');
    Route::get('/practical', 'AdminController@practical')->name('practical.');
});


Route::group([ 'prefix'=>'mock'],function(){
    Route::get('/ssc','AdminController@ssc')->name('ssc');
    Route::get('/ssc/phy','AdminController@ssc_phy')->name('ssc.phy');
    Route::get('/ssc/math','AdminController@ssc_math')->name('ssc.math');
    Route::get('/ssc/chem','AdminController@ssc_chem')->name('ssc.chem');
    Route::get('/ssc/bio','AdminController@ssc_bio')->name('ssc.bio');
    Route::get('/hsc','AdminController@hsc')->name('hsc');
    Route::get('/hsc/phy','AdminController@hsc_phy')->name('hsc.phy');
    Route::get('/hsc/math','AdminController@hsc_math')->name('hsc.math');
    Route::get('/hsc/chem','AdminController@hsc_chem')->name('hsc.chem');
    Route::get('/hsc/bio','AdminController@hsc_bio')->name('hsc.bio');
    Route::get('/admission','AdminController@admission')->name('admission');

    Route::get('/admission/engg','AdminController@adm_engg')->name('adm.engg');
    Route::get('/engg/phy','AdminController@engg_phy')->name('engg.phy');
    Route::get('/engg/math','AdminController@engg_math')->name('engg.math');
    Route::get('/engg/chem','AdminController@engg_chem')->name('engg.chem');
    Route::get('/engg/bio','AdminController@engg_bio')->name('engg.bio');

    Route::get('/admission/med','AdminController@adm_med')->name('adm.med');
    Route::get('/med/phy','AdminController@med_phy')->name('med.phy');
    Route::get('/med/math','AdminController@med_math')->name('med.math');
    Route::get('/med/chem','AdminController@med_chem')->name('med.chem');
    Route::get('/med/bio','AdminController@med_bio')->name('med.bio');

    Route::get('/admission/unite','AdminController@adm_unite')->name('adm.med');
    Route::get('/unite/phy','AdminController@unite_phy')->name('unite.phy');
    Route::get('/unite/math','AdminController@unite_math')->name('unite.math');
    Route::get('/unite/chem','AdminController@unite_chem')->name('unite.chem');
    Route::get('/unite/bio','AdminController@unite_bio')->name('unite.bio');

    Route::get('/admission/enggunite','AdminController@adm_enggunite')->name('adm.enggunite');
    Route::get('/enggunite/buet','AdminController@enggunite_buet')->name('enggunite.buet');
    Route::get('/enggunite/kuet','AdminController@enggunite_kuet')->name('enggunite.kuet');
    Route::get('/enggunite/ruet','AdminController@enggunite_ruet')->name('enggunite.ruet');
    Route::get('/enggunite/sust','AdminController@enggunite_sust')->name('enggunite.sust');


});


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


























