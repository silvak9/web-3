<?php

use App\Http\Controllers\JogadorController;
use App\Http\Controllers\TimeController;
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
    return view('index');
});

Route::get('/time', [TimeController::class, 'index']);
Route::get('/jogador', [JogadorController::class, 'index']);

Route::get('/jogador/new', [JogadorController::class, 'new']);
Route::post('/jogador/new', [JogadorController::class, 'store']);

Route::get('/jogador/{id}', [JogadorController::class, 'edit']);
Route::put('/jogador/{id}', [JogadorController::class, 'update']);

Route::delete('/jogador/{id}', [JogadorController::class, 'destroy']);