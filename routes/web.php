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
    return view('welcome');
});

Route::get('/consultas', [ConsultasController::class, 'consultasAnidadas']);
Route::get('/verSoldado', [ConsultasController::class, 'verSoldado']);
Route::get('/verCompany', [ConsultasController::class, 'verCompany']);
Route::get('/verArmas', [ConsultasController::class, 'verArmas']);
Route::get('/verQuarter', [ConsultasController::class, 'verQuarter']);
