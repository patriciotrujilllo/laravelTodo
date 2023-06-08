<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;
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

Route::get('/tareas', [TodosController::class, 'index'])->name('todos');

Route::get('/tareas/{id}', [TodosController::class, 'show'])->name('todo-edit'); //mustra solo una tarea
Route::post('/tareas', [TodosController::class, 'store'])->name('todos-add');
Route::patch('/tareas/{id}', [TodosController::class, 'update'])->name('todos-update');
Route::delete('/tareas/{id}', [TodosController::class, 'destroy'])->name('todos-destroy'); //el name tiene mas importancia, esto es en el caso que quisieramos cambiar la ruta, solo tendriamos que hacerlo en este lugar

Route::resource('categories', CategoriesController::class);
