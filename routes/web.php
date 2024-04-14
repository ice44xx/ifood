<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/user/register', [HomeController::class, 'createUser']);

Route::get('/restaurantes/{id}', [HomeController::class, 'show']);

Route::get('/restaurantes', function () {
    return view('pages/restaurantes');
});

Route::post('/create', [UserController::class, 'store']);


