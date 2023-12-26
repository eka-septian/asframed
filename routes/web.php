<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoriesController;
use App\Models\Stories;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/stories', [StoriesController::class, 'index'])->name('stories.index');
Route::get('/stories/{stories}', [StoriesController::class, 'show'])->name('stories.show');

Route::middleware('auth')->group(function () {
    Route::get('/create', [StoriesController::class, 'create'])->name('stories.create');
    Route::post('/create', [StoriesController::class, 'store'])->name('stories.store');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
