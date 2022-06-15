<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

use App\Models\User;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\PostController;
use GuzzleHttp\Middleware;
use Illuminate\Auth\Events\Login;

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

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/admin', [LoginController::class, 'admin'])->middleware('is_admin');
Route::get('/announcer', [AdminController::class, 'announcer'])->middleware('is_admin');
// Route::get('/login', [LoginController::class, 'index'])->name('admin')->middleware('guest');
// Route::get('/', [LoginController::class, 'admin'])->name('admin')->middleware('is_admin');

Route::get('/post', [PostController::class, 'index'])->middleware('auth');
Route::get('/create', [PostController::class, 'create'])->middleware('auth');


Route::post('/post', [PostController::class, 'store'])->middleware('auth');
Route::get('/post-{post:id}', [PostController::class, 'show'])->middleware('auth');
// Route::get('/post/create', [PostController::class, 'create'])->middleware('auth');

Route::resource('/dashboard', DataUserController::class)->middleware('is_admin');

Route::get('/', function() {
    return view('homepage', [
        'title' => 'Home'
    ]);
});

Route::get('/collections', [LoginController::class, 'collections'])->middleware('auth');
Route::get('/profile', [LoginController::class, 'profile'])->middleware('auth');
Route::post('/profile', [LoginController::class, 'update_profile'])->middleware('auth');

// Route::get('/', [LoginController::class, 'homepage_user'])->middleware('auth');

Route::get('/{desainer:username}', function(User $desainer) {
    return view('post.desainerpost', [
        'title' => 'Desainer Portfolios',
        'posts' => $desainer->posts
    ]);
});