<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard/', [DashboardController::class, 'show']);

Route::resource('/articles', ArticlesController::class);

Route::resource('/faqs', FaqController::class);

//Route::get('/faqs', [FaqController::class, 'index']);
//Route::get('/faqs/create', [FaqController::class, 'create']);
//Route::post('/faqs', [FaqController::class, 'store']);
//Route::get('/faqs/{faq}', [FaqController::class, 'show']);
//Route::get('/faqs/{faq}/edit', [FaqController::class, 'edit']);
//Route::put('/faqs/{faq}', [FaqController::class, 'update']);
//Route::delete('/faqs/{faq}', [FaqController::class, 'destroy']);
