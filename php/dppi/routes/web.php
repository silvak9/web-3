<?php

use App\Http\Controllers\ProjetoController;
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

Route::get('/', [ProjetoController::class, 'index']);
Route::get('/new', [ProjetoController::class, 'create']);

Route::post('/projetos/save', [ProjetoController::class, 'store']);

Route::delete('/projetos/{id}', [ProjetoController::class, 'destroy']);

Route::get('/projetos/{id}', [ProjetoController::class, 'edit']);
Route::put('/projetos/{id}', [ProjetoController::class, 'update']);