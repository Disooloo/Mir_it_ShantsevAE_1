<?php

use App\Http\Controllers\Admin\CategoryController;
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

// Не работали контроллеры, поэтому писал тут.

Route::get('/', function (){
    return view('main.index', ['post' => \App\Models\Posts::all()]);
})->name('home');

Route::get('/login', function (){
    return view('auth.login');
})->name('login');



Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('administrator')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'], )->name('homeAdmin');
    Route::resource('category', CategoryController::class);
});

