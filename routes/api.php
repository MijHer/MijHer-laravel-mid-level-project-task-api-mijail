<?php

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\TaskController;
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

//esto es para los prjects
Route::get('/projects', [ProjectController::class], 'index');
Route::post('/projects', [ProjectController::class], 'store');
Route::get('/projects/{uuid}', [ProjectController::class], 'show');
Route::put('/projects/{uuid}', [ProjectController::class], 'update');
Route::delete('/projects/{uuid}', [ProjectController::class], 'destroy');

//esto es para task

Route::get('/task', [TaskController::class], 'index');
Route::post('/task', [TaskController::class], 'store');
Route::get('/task/{uuid}', [TaskController::class], 'show');
Route::put('/task/{uuid}', [TaskController::class], 'update');
Route::delete('/task/{uuid}', [TaskController::class], 'destroy');