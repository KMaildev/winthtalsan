<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('activities', ActivitieController::class);
Route::get('activities/{id}', [ActivitieController::class, 'show'])->name('show');
Route::resource('projects', ProjectController::class);
Route::resource('about', AboutController::class);
Route::get('/md', [AboutController::class, 'md'])->name('md');
Route::get('/team', [AboutController::class, 'team'])->name('team');
Route::resource('services', ServiceController::class);
