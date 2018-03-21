<?php

use App\Task;
use Illuminate\Http\Request;

/**
 * Display All Contents
 */
Route::get('/', function () {
    return view('content');
});

/**
 * Add A New Content
 */
Route::post('/content', function (Request $request) {
    
});

/**
 * Delete An Existing Content
 */
Route::delete('/content/{id}', function ($id) {
    //
});