<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\tramiteController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\infoTramiteController;
use App\Http\Controllers\editarTramiteController;

Route::get('/',  [pagesController::class, 'inicio']);

Route::get('/login',  [pagesController::class, 'logIn']);

Route::get('/tramites',  [tramiteController::class, 'pagTramites'])->name('tramites');

Route::get('/infoTramite/{id}',  [infoTramiteController::class, 'pagInfoTramite'])->name('informacion');

Route::post("/login", [LogInController::class, 'LogIn']);

Route::post('/editarEstado', [editarTramiteController::class, 'editarEstado'])->name('editar');

Route::get('/tramitesBuscarVarios',  [tramiteController::class, 'buscarTramitesComboBox'])->name('buscar1');

Route::get('/tramitesBuscarFechas',  [tramiteController::class, 'buscarTramitesFechas'])->name('buscar1');
