<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/upload/file', \App\Http\Controllers\File::class . '@upload')
    ->name('fileupload');
    //->middleware(['auth:sanctum', config('jetstream.auth_session')]);
