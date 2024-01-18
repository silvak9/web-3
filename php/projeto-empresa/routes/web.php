<?php

use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\FuncionarioController;
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

Route::get('/departamento', [DepartamentoController::class, 'index']);
Route::get('/departamento/new', [DepartamentoController::class, 'new']);
Route::post('/departamento/store',[DepartamentoController::class, 'store']);

Route::delete('/departamento/{id}', [DepartamentoController::class, 'destroy']);

Route::get('/departamento/{id}',[DepartamentoController::class, 'edit']);
Route::put('/departamento/{id}', [DepartamentoController::class, 'update']);

Route::get('/funcionario', [FuncionarioController::class, 'index']);
Route::get('/funcionario/new', [FuncionarioController::class, 'new']);
Route::post('/funcionario/store', [FuncionarioController::class, 'store']);

Route::delete('/funcionario/{id}', [FuncionarioController::class, 'destroy']);

Route::get('/funcionario/{id}', [FuncionarioController::class, 'edit']);
Route::put('/funcionario/{id}',[FuncionarioController::class, 'update']);
