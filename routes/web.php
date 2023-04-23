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

Route::get('/', function () {
    //    session_start();
    header('location: ingreso');
    exit;
});

/********* DEMOS */
Route::get('ejem/demo', function () {
    return view('ejem/demo');
});
Route::get('ejem/phpinfo', function () {
    phpinfo();
    exit;
});
Route::get('ejem/xdebuginfo', function () {
    xdebug_info();
    exit;
});
Route::get('ejem/iconos', function () {
    return view('ejem/iconos');
});
Route::get('msgError', function () {
    return view('frmMsgError');
});

/*Controll login**/
Route::get('/ingreso', 'App\Http\Controllers\loginController@login')
    ->name("padron.ingreso");

Route::get('/cerrarSession', 'App\Http\Controllers\loginController@logout');

Route::post('/validaUsuario', 'App\Http\Controllers\loginController@validaUsuario')
    ->name("padron.validaUsuario");


/*Todos*/
Route::group(['middleware' => "App\Http\Middleware\\valPermisos:1_2_3"], function () {
    /*Rutas para todos**/
    Route::get('/inicio', 'App\Http\Controllers\loginController@inicio')
        ->name("padron.inicio");
    /* actualizacion de usuario **/
    Route::get('/configUsu', 'App\Http\Controllers\loginController@configUsu')
        ->name("padron.configUsu");
    Route::post('/actualizaUsuario', 'App\Http\Controllers\loginController@actualizaUsuario')
        ->name("padron.actualizaUsuario");
});

/* solo admin */
Route::group(['middleware' => "App\Http\Middleware\\valPermisos:1"], function () {
    /*registro de nuevos usuarios**/
    Route::resource('usuario', 'App\Http\Controllers\UsuarioController');
});
