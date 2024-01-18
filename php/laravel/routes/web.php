<?php

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
    return "<h1>Inicio da Revisão</h1>";
});

Route::get('/prof', function(){
    return "<h1>Pagina prof</h1>";
});

Route::get('/disc/{prof}', function($prof){
    return "<h1>Disciplina ofertada pelo professor: " . $prof . "</h1>";
});
