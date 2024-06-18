<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

// Route::get('/', function () {
//     return view('pages.home');
// });

 
Route::get('/', [AppController::class, 'index']);

Route::get('/projects', [AppController::class, 'projects']);

Route::get('/about', [AppController::class, 'about']);

Route::get('/contact', [AppController::class, 'contact']);

