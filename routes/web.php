<?php

use App\Livewire\Article\Article;
use App\Livewire\Article\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)
    ->name('home');

Route::get('/article/{id}', \App\Livewire\Article\Info::class)
    ->name('article.info');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/article', Article::class)
        ->name('article');
    Route::get('/article/create', Create::class)
        ->name('article.create');
    Route::get('/article/{id}/edit', \App\Livewire\Article\Edit::class)
        ->name('article.edit');
});
