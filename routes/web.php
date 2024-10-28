<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pwd/index');
});


Route::middleware('auth')->group(function () {
    route::get('/admin_dashboard',[AdminController::class,'adminauth'])->name('admin.dashboard');

    Route::get('/home', [BookController::class,'home'])->name('pwd/home');

    Route::get('/book', [BookController::class,'book'])->name('pwd/book');

Route::get('/search', [BookController::class,'search'])->name('pwd.search');
Route::get('/detail/{book}', [BookController::class,'detail'])->name('pwd.detail');
Route::get('/detail/{book}', [BookController::class,'detail2'])->name('pwd.detail');

Route::get('/detail', function () {
    return view('pwd/detail');
});
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
