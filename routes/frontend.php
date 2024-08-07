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
    Route::get('/home', [MainIndexController::class, 'index'])->name('main.index');
    Route::get('/project', [MainIndexController::class, 'indexProject'])->name('project.index');
    Route::get('/sigma-platform', [MainIndexController::class, 'showProject'])->name('project.show');
});
