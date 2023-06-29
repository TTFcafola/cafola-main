<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('usuarios.index');
});

Route::resource('/usuarios', UserController::class);
Route::resource('/produto', ProdutoController::class);
Route::resource('/categoria', CategoriaController::class);