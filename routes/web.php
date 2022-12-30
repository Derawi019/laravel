<?php

use App\Http\Controllers\Dashboard\CategoriesController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);
Route::view('/pages/about', 'front.pages.about');
Route::view('/pages/contact', 'front.pages.contact');
Route::view('/pages/category', 'front.pages.category');
Route::view('/pages/styles', 'front.pages.styles');
Route::get('/pages/{name}', [HomeController::class, 'show']);
Route::view('/dashboard', 'layouts.dashboard');
Route::get('/dashboard/categories', [CategoriesController::class, 'index'])->name('dashboard.categories.index');
Route::get('/dashboard/categories/create', [CategoriesController::class, 'create'])
    ->name('dashboard.categories.create');
Route::post('/dashboard/categories', [CategoriesController::class, 'store'])
    ->name('dashboard.categories.store');
