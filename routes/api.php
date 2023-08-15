<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MensajeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//CLIENTE
Route::post('registrar-cliente',[ClienteController::class, 'store']);

Route::put('actualizar-cliente/{id}',[ClienteController::class, 'update']);

Route::delete('borrar-cliente/{id}',[ClienteController::class, 'destroy']);

Route::get('listar-clientes',[ClienteController::class, 'index']);

//MENSAJE
Route::post('registrar-mensaje',[MensajeController::class, 'store']);

//Route::put('actualizar-cliente/{id}',[ClienteController::class, 'update']);

//Route::delete('borrar-cliente/{id}',[ClienteController::class, 'destroy']);

//Route::get('listar-clientes',[ClienteController::class, 'index']);