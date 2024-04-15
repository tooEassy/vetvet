<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/chat', [App\Http\Controllers\ChatController::class, 'index'])->middleware('auth')->name('chat');

