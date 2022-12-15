<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/login', function () {
//     return view('home');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();




    Route::get('/', [AuthController::class, 'home'])->name('home');
    Route::get('/home', [AuthController::class, 'home'])->name('home');




    Route::get('/video-management', [VideoController::class, 'listVideo'])->name('management');

    Route::get('/video-add', [VideoController::class, 'add'])->name('video.add');
    Route::post('/video-add-success', [VideoController::class, 'store'])->name('video.store');

    Route::get('/video-update/{id}', [VideoController::class, 'edit'])->name('video.update');
    Route::post('/video-update-success', [VideoController::class, 'update'])->name('video.edit');

    Route::get('/video-delete/{id}', [VideoController::class, 'delete'])->name('video.delete');


Route::post('/register_url', [AuthController::class, 'store'])->name('auth.register');
Route::get('/login', [AuthController::class, 'getLogin'])->name('login');
Route::get('/login/home', [AuthController::class, 'homeLogin'])->name('login_done');
Route::post('/login_url', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

route::get('/checkout/{id}', [AuthController::class, 'checkout'])->name('auth.checkout');


route::get('/done', [AuthController::class, 'done'])->name('auth.done');


Route::post('/search-admin', [VideoController::class, 'searchAdmin'])->name('admin.search');
Route::post('/search', [VideoController::class, 'search'])->name('search');
Route::post('/search-login', [VideoController::class, 'searchLogin'])->name('login.search');
