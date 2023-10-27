<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

    // Menampilkan daftar tugas
Route::get('/', [TaskController::class, 'index'])->name('tasks.index');

// Menampilkan formulir untuk menambah tugas baru
Route::get('/tasks/create', [TaskController::class, 'create'])->name('tasks.create');

// Menyimpan tugas baru ke dalam database
Route::post('/tasks',  [TaskController::class, 'store'])->name('tasks.store');

// Menampilkan formulir untuk mengedit tugas
Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');

// Menyimpan pembaruan tugas ke dalam database
Route::put('/tasks/{task}',  [TaskController::class, 'update'])->name('tasks.update');

// Menghapus tugas
Route::delete('/tasks/{task}',  [TaskController::class, 'destroy'])->name('tasks.destroy');

// Mencari tugas berdasarkan judul dan/atau status
Route::get('/tasks/search',  [TaskController::class, 'search'])->name('tasks.search');


