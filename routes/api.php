<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumnocontroller;
use App\Http\Controllers\logcontroller;

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

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

*/

/*Rutas para obtener, borrar, crear y modificar alumnos*/

Route::prefix('/alumno')->group(function () {
    Route::get('', [alumnocontroller::class, 'getAll']);
    Route::get('/{id}', [alumnocontroller::class, 'getbyid'])->middleware('validacion');
});

Route::delete('/deletealumno/{id}', [alumnocontroller::class, 'delete'])->middleware('validacion');
Route::post('/addalumno', [alumnocontroller::class, 'post']);
Route::put('/modifyalumno/{id}', [alumnocontroller::class, 'put'])->middleware('validacion');

/*Rutas relacionadas con Login utilizando el modelo User*/

Route::post('/registro', [logcontroller::class, 'login']);
Route::get('/user', [logcontroller::class, 'whoami'])->middleware('validacionlogin');
Route::get('/logout', [logcontroller::class, 'logout'])->middleware('validacionlogin');
