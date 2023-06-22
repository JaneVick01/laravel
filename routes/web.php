<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BarController;
use App\Http\Controllers\PostController;
use App\Models\Post;


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

// this controls all routes like below see 1

Route::resources([
    'faq' => FaqController::class,
]);

// 1
//Route::get('/faq', [FaqController::class, 'index']);
//Route::get('/faq/create', [FaqController::class, 'create']);
//Route::post('/faq', [FaqController::class, 'store']);
//Route::get('/faq/{id}', [FaqController::class, 'show']);
//Route::get('/faq/{id}/edit', [FaqController::class, 'edit']);
//Route::get('/faq/{id}', [FaqController::class, 'update']);
//Route::get('/faq/{id}', [FaqController::class, 'destroy']);

Route::get('/blog', [BlogController::class, 'index']);

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/', function () {
    // Take the 3 newest posts
    $latestPosts = Post::orderBy('published_at', 'desc')->take(3)->get();

    return view('welcome', compact('latestPosts'));
})->name('home');

// Resource routes of the base pages.
Route::resource('/posts', PostController::class);

Route::resource('/bars', BarController::class);

