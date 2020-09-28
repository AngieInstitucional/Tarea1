<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagesController;
use App\Http\Controllers\tramiteController;
use App\Http\Controllers\LogInController;

Route::get('/',  [pagesController::class, 'inicio']);

Route::get('/login',  [pagesController::class, 'logIn']);

Route::get('/tramites',  [tramiteController::class, 'pagTramites']);

Route::post("login", [LogInController::class, 'LogIn']);