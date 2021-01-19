<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OpinionController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\ReferenceController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\TopicController;

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
    Route::Resource('opinions',OpinionController::class);
    Route::post('opinions/comment', [OpinionController::class, 'newComment'])->name('opinions.comment');
    Route::Resource('references',ReferenceController::class);
    Route::Resource('roles',RoleController::class);
    Route::Resource('states',StateController::class);
    Route::Resource('themes',ThemeController::class);
    Route::Resource('topics',TopicController::class);

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');
});

require __DIR__.'/auth.php';
