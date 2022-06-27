<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/welcome', function () {
    return view( 'welcome');
});

Route::get('/{page}', [WelcomeController::class, 'show']);


