<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/articles', [ArticleController::class, 'index'])->name('Article.articles');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('Article.create');
    Route::post('/articles/store', [ArticleController::class, 'store'])->name('Article.store');
    Route::get('/articles/{articles}/edit', [ArticleController::class, 'edit'])->name('Article.edit');
    Route::put('/articles/{articles}/update', [ArticleController::class, 'update'])->name('Article.update');
    Route::delete('/articles/{articles}/destroy', [ArticleController::class, 'destroy'])->name('Article.destroy');


});

require __DIR__.'/auth.php';
