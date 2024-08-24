<?php

use App\Livewire\Article\Article;
use App\Livewire\Article\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)
    ->name('home');

Route::post('/upload/file', \App\Http\Controllers\File::class . '@upload')
    ->name('fileupload')
    ->middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('admin')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/settings', \App\Livewire\Settings::class)
            ->name('settings');

        Route::get('/pages', \App\Livewire\Page\Page::class)
            ->name('pages');
        Route::get('/pages/create', \App\Livewire\Page\Create::class)
            ->name('pages.create');
        Route::get('/pages/{id}/edit', \App\Livewire\Page\Edit::class)
            ->name('pages.edit');

        Route::get('/article', Article::class)
            ->name('article');
        Route::get('/article/create', Create::class)
            ->name('article.create');
        Route::get('/article/{id}/edit', \App\Livewire\Article\Edit::class)
            ->name('article.edit');
    });

Route::get('/article/{id}', \App\Livewire\Article\Info::class)
    ->name('article.info');

Route::get('/page/{slug}', \App\Livewire\Page\Info::class)
    ->name('pages.info');
