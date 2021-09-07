<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('proyectos', 'App\Http\Controllers\ProyectoController@index');
Route::get('proyectos/{id_proyecto}', 'App\Http\Controllers\ProyectoController@show');
