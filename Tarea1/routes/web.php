<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\tramiteController;
use App\Http\Controllers\LogInController;
use App\Http\Controllers\infoTramiteController;

Route::get('/',  [pagesController::class, 'inicio']);

Route::get('/login',  [pagesController::class, 'logIn']);

Route::get('tramites',  [tramiteController::class, 'pagTramites']);

Route::get('infoTramite/{id}',  [infoTramiteController::class, 'pagInfoTramite'])->name('informacion');

Route::post("login", [LogInController::class, 'LogIn']);
