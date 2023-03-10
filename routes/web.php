<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contacts', [HomeController::class, 'contacts']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/projects', [HomeController::class, 'projects']);
Route::get('/products', [HomeController::class, 'products']);
// Route::get('/', [HomeController::class, 'index']);

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticated']);
Route::get('/logout', [AuthController::class, 'logout']);

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

