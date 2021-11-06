<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TopController;
use App\Http\Controllers\ProfilesController;
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

Route::get('/', [IndexController::class, 'index'])->name('main');
Route::get('/blog', [IndexController::class, 'blog'])->name('main.index.blog');
Route::get('/blog/{blog}', [IndexController::class, 'show'])->name('main.index.show');
//--At first I wanted to do everything separately. top 10, news, etc. But time is running out, and a little laziness--
Route::get('/top', [TopController::class, 'index'])->name('main.top.index');
Route::get('/top/{top}', [TopController::class, 'index'])->name('main.top.top');
//--------------------------------------------------------------------------------------------------------------------
Route::get('/search', [IndexController::class, 'search'])->name('main.index.search');
Route::get('/blogs', [IndexController::class, 'blog_search'])->name('main.blog.search');
//--------------------------------------------------------------------------------------------------------------------
Route::get('/profiles', [ProfilesController::class, 'index'])->name('main.profile.index');
Route::get('/profiles/destroy', [ProfilesController::class, 'destroy'])->name('main.profile.destroy');
//--------------------------------------------------------------------------------------------------------------------
Route::get('/auth', function (){
    return view('auth.login');
})->name('auth');
//--------------------------------------------------------------------------------------------------------------------
Route::middleware(['role:admin'])->prefix('administrator')->group(function () {
    Route::get('/', [HomeController::class, 'index'], )->name('homeAdmin');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
    Route::resource('blog', BlogController::class);
    Route::resource('user', UserController::class);
});
Auth::routes();

