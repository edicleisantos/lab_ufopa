<?php

use App\Http\Controllers\Admin\{
        AdminController,
    UserController
};
use Illuminate\Support\Facades\Route;

// Rotas para os usuários administradores do sistema
Route::prefix('admin')->group(function(){
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/', [AdminController::class, 'index'])->name('home.index');
});

Route::get('/', function () {
    return view('welcome');
});
