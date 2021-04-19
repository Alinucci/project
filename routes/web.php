<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LoginController;

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

Route::get('locale/{locale}', [StudentController::class, 'changeLocale'])->name('locale');

Route::middleware(['set_locale'])->group(function(){
    Route::get('/', [StudentController::class, 'edx']);
    Route::group(['middleware' => ['auth']], function () { 
        Route::get('/java', [StudentController::class, 'java']);
        Route::get('/student', [StudentController::class, 'index']);
        Route::get('/edit/{id}', [StudentController::class, 'edit']);
        Route::get('/show/{id}', [StudentController::class, 'show']);
        Route::get('/create', [StudentController::class, 'create']);
        Route::get('/contact', [StudentController::class, 'contact']);
        Route::post('/store', [StudentController::class, 'store']);
        Route::post('/update/{id}', [StudentController::class, 'update']);
        Route::post('/send-message', [StudentController::class, 'sendEmail'])->name('contact.send');
    });
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
