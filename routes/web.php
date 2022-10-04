<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\GaleriaController;
use App\Models\categoria;

Route::get('/fotos/create',[GaleriaController::class, 'create']);
//rota de edição de campo
Route::get('/fotos/{id}',[GaleriaController::class, 'show']);

Route::put('fotos/update/{id}',[GaleriaController::class,'update']);
//fim
Route::post('/fotos', [GaleriaController::class, 'store']);

Route::delete('/fotos/{id}',[GaleriaController::class, 'destroy']);

Route::get('/',[GaleriaController::class, 'namoro']);

Route::get('/namoro1ano/{categoria_id}',[GaleriaController::class, 'namoro1ano']);

Route::get('/namoro2anos/{categoria_id}',[GaleriaController::class, 'namoro2anos']);

Route::get('/namoro3anos/{categoria_id}',[GaleriaController::class, 'namoro3anos']);

Route::get('/viagens/{categoria_id}',[GaleriaController::class, 'viagens']);

Route::get('/videos/{categoria_id}',[GaleriaController::class, 'videos']);

Route::get('/Anotacao/{categoria_id}',[GaleriaController::class, 'Anotacao']);
