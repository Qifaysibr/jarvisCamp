<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * HTTP methods:
 * 1. Get: untuk menampilkan sesuatu
 * 2. Post: untuk menambah data
 * 3. Put: untuk mengubah data
 * 4. Delete: untuk menghapus data
 */

// route untuk menampilkan halaman tugas
Route::get('/tasks', [TaskController::class, 'index']);

// route untuk menampilkan detail tugas
Route::get('/tasks/{id}', [TaskController::class, 'show']);