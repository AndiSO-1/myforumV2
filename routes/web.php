<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index']);

Route::middleware('auth')->group(function(){
    Route::Resource('opinions',OpinionController::class)->register();
    Route::post('opinions/comment', [OpinionController::class, 'newComment'])->name('opinions.comment');
    Route::Resource('references',ReferenceController::class)->register();
    Route::Resource('roles',RoleController::class)->register();
    Route::Resource('states',StateController::class)->register();
    Route::Resource('themes',ThemeController::class)->register();
    Route::Resource('topics',TopicController::class)->register();
    Route::Resource('users',UserController::class)->register();
    Route::post('users/admi',[UserController::class, 'setAdmin'])->name('users.setAdmin');
    Route::post('users/stud',[UserController::class, 'setStud'])->name('users.setStud');


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
});

require __DIR__.'/auth.php';
