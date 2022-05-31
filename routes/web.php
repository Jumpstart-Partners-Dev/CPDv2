<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\PageController;
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

// static pages
Route::view('/terms', 'pages.extra.terms');
Route::view('/contact', 'pages.extra.contact');

// content pages
Route::get('/blogs', [PageController::class, 'blog']);
Route::get('/blog/{slug}', [PageController::class, 'blog']);

Route::get('/search', [PageController::class, 'search']);

Route::get('/categories', [PageController::class, 'categories']);
Route::get('/category/{alias}', [PageController::class, 'category']);

// prioritize other routes above
// always put store route at bottom to avoid getting 404
Route::get('/{alias}', [PageController::class, 'store']);
Route::get('/', [PageController::class, 'index']);