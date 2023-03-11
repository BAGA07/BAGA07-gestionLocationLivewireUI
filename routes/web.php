<?php

use App\Http\Livewire\Utilisateurs;
use App\Models\Article;
use App\Models\TypeArticle;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    "middleware" => ["auth", "auth.admin"],
    "as" => "admin."
], function () {

    Route::group([
        "prefix" => "habilitations",
        "as" => "habilitations."
    ], function () {
        Route::get('/utilisateurs', Utilisateurs::class)
            ->name('users.index')
            ->middleware("auth.admin");
    });
});

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    /*   Route::get('users', [\App\Http\Controllers\UserController::class, 'index'])->name('users.index'); */

    Route::get('profile', [\App\Http\Controllers\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
});
