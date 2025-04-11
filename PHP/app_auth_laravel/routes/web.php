<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// ========== ROTAS DISPONÍVEIS ==========
Route::get('/', function () {
    return view('welcome');
});


// ========== ROTAS COM VERIFICAÇÃO E VALIDAÇÃO DE USUÁRIOS ==========

Route::get('/dashboard', function () {
    $users = App\Models\User::all();
    // $users = App\Models\User::where('id', '!=', auth()->id())->get(); // Realiza uma consulta sem o usuário logado
    return view('dashboard')->with('users', $users);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/novo-usuario', [UserController::class, 'index'])->name('novo-usuario.index');
    Route::post('/novo-usuario', [UserController::class, 'store'])->name('novo-usuario.store');
    // Route::patch('/novo-usuario', [UserController::class, 'update'])->name('novo-usuario.update');
    // Route::delete('/novo-usuario', [UserController::class, 'destroy'])->name('novo-usuario.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
