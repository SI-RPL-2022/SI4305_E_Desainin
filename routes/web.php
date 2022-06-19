<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnouncementController;
use Illuminate\Support\Facades\Route;

use App\Models\User;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Models\Announcement;
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
Route::post('/announcer', [AnnouncementController::class, 'store'])->middleware('is_admin');

Route::get('/post', [PostController::class, 'index'])->middleware('auth');
Route::get('/create', [PostController::class, 'create'])->middleware('auth');


Route::post('/post', [PostController::class, 'store'])->middleware('auth');
Route::get('/post-{post:id}', [PostController::class, 'show'])->middleware('auth');
Route::post('save-comment/post-{post:id}', [CommentController::class, 'store'])->middleware('auth');

Route::resource('/dashboard', DataUserController::class)->middleware('is_admin');

Route::get('/', function(Announcement $announcement) {
    return view('homepage', [
        'title' => 'Home',
        'announcements' => $announcement->all()
    ]);
});

Route::get('/collections', [LoginController::class, 'collections'])->middleware('auth');
Route::get('/profile', [LoginController::class, 'profile'])->middleware('auth');
Route::post('/profile', [LoginController::class, 'update_profile'])->name('update')->middleware('auth');

Route::get('/{desainer:username}', function(User $desainer) {
    return view('post.desainerpost', [
        'title' => 'Desainer Portfolios',
        'posts' => $desainer->posts
    ]);
});