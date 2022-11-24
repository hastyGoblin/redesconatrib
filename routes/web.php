<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnviaCorreoController;
use App\Http\Controllers\generaConstancia;
use App\Http\Controllers\bcryptPassword;
use App\Http\Controllers\EstatusController;
use App\Http\Controllers\AceptadoRechazadoController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\LogoutBitacoraController;
use App\Mail\RegistroMail;
use Illuminate\Support\Facades\Mail;
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
use App\Http\Controllers\prueba;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/enviaCorreo', [EnviaCorreoController::class, 'enviaCorreo'])->name('enviaCorreo');
Route::get('/enviaCorreoConstancia', [EnviaCorreoController::class, 'enviaCorreoConstancia'])->name('enviaCorreoConstancia');
Route::post('/descargaConstancia', [generaConstancia::class, 'descargaConstancia'])->name('descargaConstancia');
Route::get('/actualizaPassword', [bcryptPassword::class, 'updatePassword'])->name('actualizaPassword');

Route::post('/aceptarUsuario', [EstatusController::class, 'aceptarUsuario'])->name('aceptarUsuario');
Route::post('/rechazarUsuario', [EstatusController::class, 'rechazarUsuario'])->name('rechazarUsuario');

Route::get('/usuarioAceptado', [AceptadoRechazadoController::class, 'usuarioAceptado'])->name('usuarioAceptado');
Route::post('/usuarioRechazado', [AceptadoRechazadoController::class, 'usuarioRechazado'])->name('usuarioRechazado');
Route::post('/validarInicio', [AceptadoRechazadoController::class, 'validaInicioRed'])->name('validarInicio');
Route::get('/regLogout', [LogoutBitacoraController::class, 'registraLogout'])->name('regLogout');

Route::post('/habilitaConstancia', [generaConstancia::class, 'habilitaConstancia'])->name('habilitaConstancia');
Route::post('/usuarioConstancias', [generaConstancia::class, 'descargaConstancia'])->name('usuarioConstancias');

Route::post('/descargaConstancia', [generaConstancia::class, 'descargaConstancia'])->name('descargaConstancia');
Route::get('/descargaManual', [generaConstancia::class, 'descargaManual'])->name('descargaManual');
//Route::post('/calendario', [CalendarioController::class, 'redCalendario'])->name('calendario');

