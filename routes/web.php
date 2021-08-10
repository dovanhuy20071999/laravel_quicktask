<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Models\Task;

// changeLanguage
Route::get('changeLanguage/{language}', [LanguageController::class, 'changeLanguage'])->name('changeLanguage');

/**
 * Show Task Dashboard
 */
Route::get('/', function () {
    //
});

/**
 * Add New Task
 */
Route::post('/task', function (Request $request) {
    //
});

/**
 * Delete Task
 */
Route::delete('/task/{id}', function (Task $id) {
    //
});
