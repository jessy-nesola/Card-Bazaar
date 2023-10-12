<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, 'homepage'])->name('homepage');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/{name}/show', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/announcement/create', [AnnouncementController::class, 'create'])->middleware('auth')->name('announcements.create');