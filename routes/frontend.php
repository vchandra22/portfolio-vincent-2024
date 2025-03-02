<?php

use App\Http\Controllers\MainIndexController;
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

Route::middleware('web')->group(function () {
    Route::get('/', [MainIndexController::class, 'index'])->name('main.index');
    Route::get('/project', [MainIndexController::class, 'indexProject'])->name('project.index');
    Route::get('/project/{slug}', [MainIndexController::class, 'projectDetail'])->name('project.detail');
    Route::get('/article', [MainIndexController::class, 'indexArticle'])->name('article.index');
    Route::get('/article/{slug}', [MainIndexController::class, 'articleDetail'])->name('article.detail');
    Route::get('/contact', [MainIndexController::class, 'indexContact'])->name('contact.index');

    Route::get('/download-cv-vincent/{cv}', [MainIndexController::class, 'downloadCV'])->name('download.file');
});
