<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

# Método Post para inserir dados no nosso banco de dados 
Route::post('usuarios', [UsuarioController::class, "store"]);
# Método Get para ler um dado inserido no nosso banco de dados 
Route::get('usuarios', [UsuarioController::class, "index"]);
