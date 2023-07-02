<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BarController;
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

// Route::middleware('auth')->group(function () {
    // Routes that require authentication

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    });
   

// Logout route
// Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
//     ->middleware('auth')
//     ->name('logout');

Route::get('/', function () {
    return view('welcome');
});

    Route::resource('/bars', BarController::class);
    //->middleware(['auth'])->name('dashboard');
        // Add more routes here
// require __DIR__.'/auth.php';
