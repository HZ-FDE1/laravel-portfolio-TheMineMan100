<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\FaqController;

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

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/posts/{post}', [PostsController::class, 'show']);

Route::get('/profile/', [ProfileController::class, 'show']);

Route::get('/dashboard/', [DashboardController::class, 'show'])->name('dashboard');

Route::resource('/grades', GradeController::class);

Route::resource('/articles', ArticlesController::class);

Route::resource('/faqs', FaqController::class);
