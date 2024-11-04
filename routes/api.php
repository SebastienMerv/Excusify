<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/excuse', [\App\Http\Controllers\ExcuseController::class, 'getExcuse']);
