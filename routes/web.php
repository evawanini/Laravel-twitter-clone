<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TweetController;
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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/dashboard', [TweetController::class, 'index'])->name('dashboard');
Route::post('/dashboard', [TweetController::class, 'store'])->name('saveTweet');
Route::get('/dashboard/create', [TweetController::class, 'create']);
Route::get('/dashboard/{tweet}', [TweetController::class, 'show']);

Route::get('/profiles/{user}', [ProfileController::class, 'show'])->name('profile');
