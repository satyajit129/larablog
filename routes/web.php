<?php

use App\Models\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PostCategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class,'index']);
    
    
});
Route::prefix('admin/PostCategory')->group(function () {
    Route::get('/', [PostCategoryController::class, 'index'])->name('admin.PostCategory.index');
    Route::get('/create', [PostCategoryController::class, 'create'])->name('admin.PostCategory.create');
    Route::post('/store', [PostCategoryController::class, 'store'])->name('admin.PostCategory.store');
    Route::get('/edit', [PostCategoryController::class, 'edit'])->name('admin.PostCategory.edit');
    // Add more routes for categories if needed
});
