<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\AppController;

// Route::get('/projects', function () {
//     echo "projects";
//     return ;
//     // return view('pages.home');
// });

 
Route::get('/', [AppController::class, 'index']);

Route::get('/my-projects', [AppController::class, 'myProjects']);

Route::get('/about', [AppController::class, 'about']);

Route::get('/contact', [AppController::class, 'contact']);
Route::get('/vcard', function () {
    return Storage::download('app/contact/vongsakoen_vCard.vcf');
});

