<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\Task;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\TaskController;
use Faker\Guesser\Name;

// changeLanguage
Route::get('changeLanguage/{language}', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');

/**
 * Show Task Dashboard
 */
Route::get('/', [TaskController::class, 'index'])->name('/');

/**
 * Add New Task
 */
Route::post('/tasks', [TaskController::class,'store'])->name('task');

/**
 * Delete Task
 */
Route::delete('/delete/{id}',[TaskController::class, 'destroy'])->name('delete');
