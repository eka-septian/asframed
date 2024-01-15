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

Route::get('/', [StoriesController::class, 'index'])->name('stories.index');
Route::get('/stories/{stories}', [StoriesController::class, 'show'])->name('stories.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create', [StoriesController::class, 'create'])->name('stories.create');
    Route::post('/create', [StoriesController::class, 'store'])->name('stories.store');
    Route::get('/stories/{stories}/edit', [StoriesController::class, 'edit'])->name('stories.edit');
    Route::patch('/stories/{stories}', [StoriesController::class, 'update'])->name('stories.update');
    Route::delete('/stories/{stories}', [StoriesController::class, 'destroy'])->name('stories.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/{user:name}', [ProfileController::class, 'index'])->name('profile.index');