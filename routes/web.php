<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerPrincipale;
use Illuminate\Support\Facades\Route;

Route::get('/', [ControllerPrincipale::class, 'home'])->name('home');

Route::get('show', [ControllerPrincipale::class, 'show'])->name('show');

Route::get('contact', [ControllerPrincipale::class, 'contact'])->name('contact');


Route::post('create', [ControllerPrincipale::class, 'create'])->name('create');

Route::get('article/{article}', [ControllerPrincipale::class, 'article'])->name('article');

Route::get('edit', [ControllerPrincipale::class, 'edit'])->name('edit');

Route::get('ButtonUpdate', [ControllerPrincipale::class, 'ButtonUpdate'])->name('paginaup');

