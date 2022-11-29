<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EventoController::class, 'home']);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {



Route::get('/evento', [EventoController::class, 'index']);
Route::post ('/evento/mostrar', [EventoController::class, 'show']);
Route::post('/evento/adicionar', [EventoController::class, 'store']);
Route::post('/evento/editar/{id}', [EventoController::class, 'edit']);
Route::post('/evento/atualizar/{evento}', [EventoController::class, 'update']);
Route::post('/evento/excluir/{id}', [EventoController::class, 'destroy']);

});