<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReceitaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('receitas/receitas', [ReceitaController::class, 'index'])->name('receitas.index');
    Route::get('receitas/myReceitas', [ReceitaController::class, 'myReceitas'])->name('receitas.my_receitas');

    Route::get('/receitas/create', [ReceitaController::class, 'create'])->name('receitas.create');
    Route::post('/receitas', [ReceitaController::class, 'store'])->name('receitas.store');
    Route::get('/receitas/{receita}/edit', [ReceitaController::class, 'edit'])->name('receitas.edit');
    Route::put('/receitas/{receita}', [ReceitaController::class, 'update'])->name('receitas.update');
    Route::delete('/receitas/{receita}', [ReceitaController::class, 'destroy'])->name('receitas.destroy');
    Route::get('/receitas/{receita}', [ReceitaController::class, 'show'])->name('receitas.show');
});

require __DIR__.'/auth.php';
