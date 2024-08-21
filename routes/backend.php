<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ProjectController;
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

Route::middleware(['guest', 'redirect.auth'])->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
    Route::post('/login', [AuthController::class, 'store'])->name('auth.authenticate');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'destroy'])->name('auth.logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('backend.dashboard');

    Route::get('/project', [ProjectController::class, 'index'])->name('backend.project');
    Route::get('/project/create-new-project', [ProjectController::class, 'create'])->name('backend.create_project');
    Route::post('create-new-project', [ProjectController::class, 'store'])->name('backend.store_project');
    Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('backend.show_project');
    Route::get('/project/edit-project/{slug}', [ProjectController::class, 'edit'])->name('backend.edit_project');
    Route::put('/update-project/{project}', [ProjectController::class, 'update'])->name('backend.update_project');

    Route::get('/article', [ArticleController::class, 'index'])->name('backend.article');
    Route::get('/article/create-new-article', [ArticleController::class, 'create'])->name('backend.create_article');
    Route::post('create-new-article', [ArticleController::class, 'store'])->name('backend.store_article');
    Route::get('/article/create-new-article/{slug}', [ArticleController::class, 'show'])->name('backend.show_article');
    Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('backend.show_article');
    Route::get('/article/edit-article/{slug}', [ArticleController::class, 'edit'])->name('backend.edit_article');
    Route::put('/update-article/{blog}', [ArticleController::class, 'update'])->name('backend.update_article');
});
