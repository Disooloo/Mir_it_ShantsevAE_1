<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('main');


Route::get('/auth', function (){
    return view('auth.login');
})->name('auth');



Auth::routes();
//Route::get('/login', [App\Http\Controllers\HomeController::class, 'index'])->name('login');
Route::resource('/profiles', ProfilesController::class);
Route::resource('/blog', BlogController::class);

Route::middleware(['role:admin'])->prefix('administrator')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'], )->name('homeAdmin');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});

