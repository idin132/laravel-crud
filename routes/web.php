<?php

use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeranController;
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

// Route::get('/', function () {
//     return view('welcome');
// });





Route::get('login', [LoginController::class, 'login'])->name('login');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/', [CastController::class, 'index']);
    Route::resource('cast', CastController::class);
    Route::get('genre', [GenreController::class, 'index'])->name('genre');
    Route::resource('genre', GenreController::class);
    Route::resource('film', FilmController::class);

    Route::resource('user', UserController::class);
    Route::get('/user/{id}/profile', [UserController::class, 'show'])->name('user.profile.show');

    Route::get('/peran', [PeranController::class, 'index'])->name('peran.index');
});

Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');
Route::post('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout');
