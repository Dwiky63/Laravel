<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
