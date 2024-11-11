<?php

use App\Http\Controllers\PemesananController;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroller;
use App\Models\Post;

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
    return view('home', [
        'posts' => Post::latest()->paginate(6)->withQueryString()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/posts', [Postcontroller::class, 'index']);
Route::get('/posts/{post:slug}', [Postcontroller::class, 'show']);

Route::get('/pemesanan', [PemesananController::class, 'create'])->name('pemesanan.create')->middleware('guest');
Route::post('/pemesanan/store', [PemesananController::class, 'store'])->name('pemesanan.store')->middleware('guest');

