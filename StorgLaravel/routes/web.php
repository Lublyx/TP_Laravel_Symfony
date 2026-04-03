<?php

use App\Http\Controllers\Controller;

Route::get('/', [Controller::class, 'index']);
Route::post('/', [Controller::class, 'register']);

Route::get('/connection', [Controller::class, 'connectionForm']);
Route::post('/connection', [Controller::class, 'connection']);

Route::get('/file', [Controller::class, 'file']);
Route::post('/file', [Controller::class, 'logout']);

Route::post('/upload', [Controller::class, 'upload']);

Route::get('/download/{fileName}', [Controller::class, 'download']);