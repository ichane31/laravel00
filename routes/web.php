<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use Illuminate\Support\Facades\DB;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Auth::routes(['verify'=>true]);

Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () { 
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');


 
Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
 
    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
 
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
 
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::get('/add_professor_view',[AdminController::class,'addview']);
Route::get('/add_speciality_view',[AdminController::class,'add_S_view']);
Route::get('/annuler_info/{id}',[HomeController::class,'annuler_info']);
Route::get ('/showinfo',[AdminController::class,'showinfo']);
Route::get ('/showprofesseur',[AdminController::class,'showprofesseur']);
Route::get('/approuver/{id}',[AdminController::class,'approuver']);
Route::get('/rejeter/{id}',[AdminController::class,'rejeter']);
Route::post('/upload-professor',[AdminController::class,'upload']);
Route::post('/upload-speciality',[AdminController::class,'upload_S']);
Route::match(['get','post'] , '/professorinfo',[HomeController::class,'professorinfo']);
Route::match(['get','post'] ,'/mesinfos',[HomeController::class,'mesinfos']);
Route::get('/supprimerprofesseur/{id}',[AdminController::class,'supprimerprofesseur']);
Route::get('/modifierprofesseur/{id}',[AdminController::class,'modifierprofesseur']);
Route::post('/editprofesseur/{id}',[AdminController::class,'editprofesseur']);
