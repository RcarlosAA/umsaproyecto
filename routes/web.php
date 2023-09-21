<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EspecialistaController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\PacienteController;


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

//Route::get('/especialista',[EspecialistaController::class.'index']);
//Route::get('/', [EspecialistaController::class, 'index_login']);

Route::get('/', function () {
    return view('index_login');
    //return hola;
});

Route::get('/registrar_login', function () {
    return view('registrar_login');
});

Route::get('/login', function () {
    return view('index_login');
});




Route::post('/loginvalidacion', [EspecialistaController::class, 'login_validacion']);



Route::get('/especialista', [EspecialistaController::class, 'index']);

Route::get('/agregar_especialista', [EspecialistaController::class, 'create']);

Route::post('/agregar_especialista', [EspecialistaController::class, 'store']);

Route::get('editar_especialista/{id}', [EspecialistaController::class, 'edit']);

Route::put('actualizar_especialista/{id}', [EspecialistaController::class, 'actualizar']);

Route::get('eliminar_especialista/{id}', [EspecialistaController::class, 'eliminar']);


Route::get('panel', [Controller::class, 'panel']);

Route::get('crear', [PacienteController::class, 'crear']);
Route::post('agregar_paciente', [PacienteController::class, 'almacenar']);



/*Route::get('login_validacion', function () {
    return view('/especialista');
});*/


/*
Route::get('/', function () {
    return view('welcome');
});
*/