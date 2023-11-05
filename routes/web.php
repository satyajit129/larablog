<?php

use App\Http\Controllers\admin\BlogPost;
use App\Http\Controllers\admin\BlogPostController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PostCategoryController;
use App\Http\Controllers\admin\PostSubCategoryController;
use App\Http\Controllers\admin\TagController;

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

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
});

// route of category 
Route::prefix('admin/PostCategory')->group(function () {
    Route::get('/', [PostCategoryController::class, 'index'])->name('admin.PostCategory.index');
    Route::get('/create', [PostCategoryController::class, 'create'])->name('admin.PostCategory.create');
    Route::post('/store', [PostCategoryController::class, 'store'])->name('admin.PostCategory.store');
    Route::get('/edit/{id}', [PostCategoryController::class, 'edit'])->name('admin.PostCategory.edit');
    Route::post('/update/{id}', [PostCategoryController::class, 'update'])->name('admin.PostCategory.update');
    Route::get('/destroy/{id}', [PostCategoryController::class, 'destroy'])->name('admin.PostCategory.destroy');
});

// route of Subcategory 
Route::prefix('admin/PostSubCategory')->group(function () {
    Route::get('/', [PostSubCategoryController::class, 'index'])->name('admin.PostSubCategory.index');
    Route::get('/create', [PostSubCategoryController::class, 'create'])->name('admin.PostSubCategory.create');
    Route::post('/store', [PostSubCategoryController::class, 'store'])->name('admin.PostSubCategory.store');
    Route::get('/edit/{id}', [PostSubCategoryController::class, 'edit'])->name('admin.PostSubCategory.edit');
    Route::post('/update/{id}', [PostSubCategoryController::class, 'update'])->name('admin.PostSubCategory.update');
    Route::get('/destroy/{id}', [PostSubCategoryController::class, 'destroy'])->name('admin.PostSubCategory.destroy');
    Route::get('/byCategory/{id}', [PostSubCategoryController::class,'byCategory'])->name('admin.PostSubCategory.byCategory');
});

// route of Tag 
Route::prefix('admin/PostTag')->group(function () {
    Route::get('/', [TagController::class, 'index'])->name('admin.PostTag.index');
    Route::get('/create', [TagController::class, 'create'])->name('admin.PostTag.create');
    Route::post('/store', [TagController::class, 'store'])->name('admin.PostTag.store');
    Route::get('/edit/{id}', [TagController::class, 'edit'])->name('admin.PostTag.edit');
    Route::post('/update/{id}', [TagController::class, 'update'])->name('admin.PostTag.update');
    Route::get('/destroy/{id}', [TagController::class, 'destroy'])->name('admin.PostTag.destroy');
});

// route of Post 
Route::prefix('admin/Post')->group(function () {
    
    Route::get('/', [BlogPostController::class, 'index'])->name('admin.BlogPost.index');
    Route::get('/create', [BlogPostController::class, 'create'])->name('admin.BlogPost.create');
    Route::post('/store', [BlogPostController::class, 'store'])->name('admin.BlogPost.store');
    Route::get('/edit/{id}', [BlogPostController::class, 'edit'])->name('admin.BlogPost.edit');
    Route::post('/update/{id}', [BlogPostController::class, 'update'])->name('admin.BlogPost.update');
    Route::get('/destroy/{id}', [BlogPostController::class, 'destroy'])->name('admin.BlogPost.destroy');
});
