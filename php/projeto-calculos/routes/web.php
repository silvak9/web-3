<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KgController;
use App\Http\Controllers\RetanguloController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/retangulo', [RetanguloController::class, 'show']);
Route::get('/kg', [KgController::class, 'show']);


Route::post('/retangulo/calcular', [RetanguloController::class, 'calcularArea']);
Route::post('/kg/', [KgController::class, 'conversor']);
