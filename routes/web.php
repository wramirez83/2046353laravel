<?php

use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProgramController::class, 'saveProgram']);
Route::get('/get', [ProgramController::class, 'getProgram']);

