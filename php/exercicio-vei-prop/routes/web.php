<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\ProprietarioController;


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

Route::get('/veiculo', [VeiculoController::class, 'index']);
Route::get('/proprietario', [ProprietarioController::class, 'index']);
Route::get('/proprietario/new',[ProprietarioController::class, 'new']);

Route::post('/proprietario/new', [ProprietarioController::class, 'store']);

Route::get('/proprietario/{id}', [ProprietarioController::class, 'edit']);
Route::put('proprietario/{id}', [ProprietarioController::class, 'update']);

Route::delete('/proprietario/{id}',[ProprietarioController::class, 'destroy']);


Route::get('/veiculo/new', [VeiculoController::class, 'new']);
Route::post('/veiculo/new', [VeiculoController::class, 'store']);

Route::delete('/veiculo/{id}',[VeiculoController::class, 'destroy']);

Route::get('/veiculo/{id}', [VeiculoController::class, 'edit']);
Route::put('/veiculo/{id}', [VeiculoController::class, 'update']);

