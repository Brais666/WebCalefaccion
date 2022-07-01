<?php

use Illuminate\Http\Request;

use App\User;
use App\Http\Resources\User as UserResource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\OfertaController;

Route::get('/checkMail', [AuthController::class, 'checkMail']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/addPassword', [AuthController::class, 'addPassword']);
Route::get('/user', [AuthController::class, 'me'])->middleware('auth:sanctum');
Route::post('/addName', [AuthController::class, 'addName'])->middleware('auth:sanctum');

Route::get('/checkAvailability', [RutaController::class, 'check'])->middleware('auth:sanctum');
Route::get('/applyOffert', [PedidosController::class, 'applyOffert'])->middleware('auth:sanctum');
Route::post('/order', [PedidosController::class, 'storePedidoApi'])->middleware('auth:sanctum');

Route::get('oferts', [OfertaController::class, 'all'])->middleware('auth:sanctum');
