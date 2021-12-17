<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnviaCorreoController;
use App\Http\Controllers\generaConstancia;
use App\Http\Controllers\bcryptPassword;

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

//Route::get('/login', [prueba::class, 'index']);
Route::get('/valida', [prueba::class, 'validaCorreo'])->name('valida');
/*Auth::routes();*/

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/enviaCorreo', [EnviaCorreoController::class, 'enviaCorreo'])->name('enviaCorreo');
Route::get('/enviaCorreoConstancia', [EnviaCorreoController::class, 'enviaCorreoConstancia'])->name('enviaCorreoConstancia');
Route::post('/descargaConstancia', [generaConstancia::class, 'descargaConstancia'])->name('descargaConstancia');
Route::get('/actualizaPassword', [bcryptPassword::class, 'updatePassword'])->name('actualizaPassword');
