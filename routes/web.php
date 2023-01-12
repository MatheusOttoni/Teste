<?php

use Illuminate\Support\Facades\Route;
use Doctrine\DBAL\Driver\AbstractMySQLDriver;
use App\Http\Controllers\PessoasController;
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



Route::get('/', [PessoasController::class, 'index'])->name('home');

Route::get('/show/{id?}', [PessoasController::class, 'show']);

Route::post('/editar', [PessoasController::class, 'editar']);

Route::get('/excluir/{id}', [PessoasController::class, 'excluir']);
