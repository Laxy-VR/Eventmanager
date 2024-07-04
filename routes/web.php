<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;


Route::resource('events', EventController::class);

Route::resource('registrations', RegistrationController::class);

Route::redirect('/', 'events');

Route::redirect('/', 'registrations' );
 
Route::get('/edit', [EventController::class, 'edit'])->name('edit');

Route::get('/create', [EventController::class, 'create'])->name('create');

Route::get('/', [EventController::class, 'store'])->name('store');

Route::get('/registrations/create/{event}', [RegistrationController::class, 'create'])->name('registrations.create');

Route::post('/registrations', [RegistrationController::class, 'store'])->name('registrations.store');

