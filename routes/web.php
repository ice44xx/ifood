<?php

use App\Http\Controllers\CuponsController;
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

Route::get('/', [CuponsController::class, 'index' ]);

Route::get('/user/create', [CuponsController::class, 'create' ]);

Route::get('/restaurantes', function () {
    return view('pages/restaurantes');
});
