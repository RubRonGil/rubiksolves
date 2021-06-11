<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ResolveController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\User_cubeController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/inicio', function(){ return view('welcome'); });
Route::get('/notacion', function(){ return view('notaciones/notacion'); });
Route::get('/notacion/2x2x2', function(){ return view('notaciones/not2x2x2'); });
Route::get('/notacion/3x3x3', function(){ return view('notaciones/not3x3x3'); });
Route::get('/notacion', function(){ return view('notaciones/notacion'); });
Route::get('/resolucion', function(){ return view('resoluciones/resolucion'); });
Route::get('/resolucion/2x2x2', function(){ return view('resoluciones/princ2x2x2'); });
Route::get('/resolucion/3x3x3', function(){ return view('resoluciones/princ3x3x3'); });
Route::get('/mantenimiento', function(){ return view('mantenimiento'); });

Route::group(['middleware' => ['role:Admin']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

Route::group(['middleware' => ['permission:role-list']], function() {
    Route::resource('roles', RoleController::class);
});

Route::post('user_cubes/userCubes', 'User_cubeController@userCubes');
Route::resource('user_cubes', User_cubeController::class);
Route::resource('resolves', ResolveController::class);

Route::group(['middleware' => ['auth']],function(){
    Route::get('/perfil', function(){ return view('users/modify'); });
    Route::resource('marks', MarkController::class);
    Route::resource('tiempos', GameController::class);
    Route::put('/addCubo', 'GameController@addCubo')->name('tiempos.addCubo');
    Route::post('/addResolve', 'GameController@addResolve')->name('tiempos.addResolve');
    Route::post('/addMark', 'GameController@addMark')->name('tiempos.addMark');
    Route::post('modificar', [UserController::class, 'editUser'])->name('modificar.editUser');
    Route::post('modificarContraseña', [UserController::class, 'editPass'])->name('modificar.editPass');
});