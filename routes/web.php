<?php

use App\Http\Controllers\EstudianteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Crear_estudiante',[EstudianteController::class,'Crear_estudiante']);
Route::get('/mostrar_estudiantes',[EstudianteController::class,'mostrar_estudiantes']);
Route::get('/buscar_estudiante/{id}',[EstudianteController::class,'buscar_estudiante']);
Route::get('/borrar_estudiante/{id}',[EstudianteController::class,'borrar_estudiante']);
Route::get('/modificar_estudiante/{id}',[EstudianteController::class,'modificar_estudiante']);//manuelmente por codigo


