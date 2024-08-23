<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\ArticleController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ManageContentController;
use App\Http\Controllers\Backend\MediaSocialController;
use App\Http\Controllers\Backend\ProjectController;
use App\Http\Controllers\Backend\SkillController;
use App\Http\Controllers\Backend\TechStackController;
use App\Http\Controllers\Backend\UserSettingController;
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
    Route::delete('/delete-project/{id}', [ProjectController::class, 'destroy'])->name('backend.delete_project');


    Route::get('/article', [ArticleController::class, 'index'])->name('backend.article');
    Route::get('/article/create-new-article', [ArticleController::class, 'create'])->name('backend.create_article');
    Route::post('create-new-article', [ArticleController::class, 'store'])->name('backend.store_article');
    Route::get('/article/create-new-article/{slug}', [ArticleController::class, 'show'])->name('backend.show_article');
    Route::get('/article/{slug}', [ArticleController::class, 'show'])->name('backend.show_article');
    Route::get('/article/edit-article/{slug}', [ArticleController::class, 'edit'])->name('backend.edit_article');
    Route::put('/update-article/{blog}', [ArticleController::class, 'update'])->name('backend.update_article');
    Route::delete('/delete-article/{id}', [ArticleController::class, 'destroy'])->name('backend.delete_article');

    Route::get('/content', [ManageContentController::class, 'index'])->name('backend.content');

    Route::get('/media-social', [MediaSocialController::class, 'index'])->name('backend.media_social');
    Route::get('/media-social/create-new-media', [MediaSocialController::class, 'create'])->name('backend.create_media_social');
    Route::post('create-new-media', [MediaSocialController::class, 'store'])->name('backend.store_media_social');
    Route::get('/media-social/{uuid}', [MediaSocialController::class, 'edit'])->name('backend.edit_media_social');
    Route::put('/update-media-social/{mediaSocial}', [MediaSocialController::class, 'update'])->name('backend.update_media_social');
    Route::delete('/delete-media-social/{id}', [MediaSocialController::class, 'destroy'])->name('backend.delete_media_social');

    Route::get('tech-stack', [TechStackController::class, 'index'])->name('backend.tech');
    Route::get('tech-stack/create-new-stack', [TechStackController::class, 'create'])->name('backend.create_tech');
    Route::post('tech-stack/create-new-stack', [TechStackController::class, 'store'])->name('backend.store_tech');
    Route::get('tech-stack/{uuid}', [TechStackController::class, 'edit'])->name('backend.edit_tech');
    Route::put('update-tech-stack/{techStack}', [TechStackController::class, 'update'])->name('backend.update_tech');
    Route::delete('delete-tech-stack/{id}', [TechStackController::class, 'destroy'])->name('backend.delete_tech');


    Route::get('skill', [SkillController::class, 'index'])->name('backend.skill');
    Route::get('skill/create-new-skill', [SkillController::class, 'create'])->name('backend.create_skill');
    Route::post('create-new-skill', [SkillController::class, 'store'])->name('backend.store_skill');
    Route::get('skill/{uuid}', [SkillController::class, 'edit'])->name('backend.edit_skill');
    Route::put('update-skill/{skill}', [SkillController::class, 'update'])->name('backend.update_skill');
    Route::delete('delete-skill/{id}', [SkillController::class, 'destroy'])->name('backend.delete_skill');

    Route::get('setting-user/{uuid}', [UserSettingController::class, 'edit'])->name('backend.edit_user');
    Route::put('update-user/{user}', [UserSettingController::class, 'update'])->name('backend.update_user');
});
