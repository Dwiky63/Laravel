<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\FrontedNewsController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\ContactController;
use Idev\EasyAdmin\app\Http\Controllers\RoleController;
use Idev\EasyAdmin\app\Http\Controllers\UserController;
use Idev\EasyAdmin\app\Http\Controllers\AuthController;
use Idev\EasyAdmin\app\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/career', [CareerController::class, 'index'])->name('career');
Route::get('/news', [FrontedNewsController::class, 'index'])->name('frontendnews');
Route::get('/news/{id}', [FrontedNewsController::class, 'show'])->name('frontendnews.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/admin', [AuthController::class, 'login'])->name('login')->middleware('web');

Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin'], function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::resource('role', RoleController::class);
    Route::get('role-api', [RoleController::class, 'indexApi'])->name('role.listapi');
    Route::get('role-export-pdf-default', [RoleController::class, 'exportPdf'])->name('role.export-pdf-default');
    Route::get('role-export-excel-default', [RoleController::class, 'exportExcel'])->name('role.export-excel-default');
    Route::post('role-import-excel-default', [RoleController::class, 'importExcel'])->name('role.import-excel-default');

    Route::resource('user', UserController::class);
    Route::get('user-api', [UserController::class, 'indexApi'])->name('user.listapi');
    Route::get('user-export-pdf-default', [UserController::class, 'exportPdf'])->name('user.export-pdf-default');
    Route::get('user-export-excel-default', [UserController::class, 'exportExcel'])->name('user.export-excel-default');
    Route::post('user-import-excel-default', [UserController::class, 'importExcel'])->name('user.import-excel-default');

    Route::resource('news', NewsController::class);
    Route::get('news-api', [NewsController::class, 'indexApi'])->name('news.listapi');
    Route::get('news-export-pdf-default', [NewsController::class, 'exportPdf'])->name('news.export-pdf-default');
    Route::get('news-export-excel-default', [NewsController::class, 'exportExcel'])->name('news.export-excel-default');
    Route::post('news-import-excel-default', [NewsController::class, 'importExcel'])->name('news.import-excel-default');

    Route::get('logout', [AuthController::class, 'logout'])->name("logout");
  
    Route::get('my-account', [UserController::class, 'profile']);
    Route::post('update-profile', [UserController::class, 'updateProfile']);

});