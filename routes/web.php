<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CommentController;

Route::get('/', [CommentController::class, 'index']);
Route::post('/save', [CommentController::class, 'save'])->name('save');
