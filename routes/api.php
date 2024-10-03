<?php

use App\Http\Controllers\Api\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/students', [studentController::class, 'index']);

// Route::put('/students/{id}', function(){
//     return "Actualizando estudiantes";
// });
Route::put('/students/{id}', [studentController::class, 'update']);
Route::patch('/students/{id}', [studentController::class, 'updatePartial']);
Route::post('/students', [studentController::class, 'store']);
Route::get('/students/{id}', [studentController::class, 'show']);
Route::delete('/students/{id}', [studentController::class, 'destroy']);


// Route::delete('/students/{id}', function(){
//     return "Eliminando estudiantes";
// });

// Route::get('/students/{id}', function(){
//     return "Obteniendo un estudiante"; modificacion 9.20
// });
