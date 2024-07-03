<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\EventEditController;
use Illuminate\Support\Facades\Route;


Route::resource('events', EventController::class);

Route::redirect('/', 'events');
 
Route::get('/edit', [EventEditController::class, 'index'])->name('edit');