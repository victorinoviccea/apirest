<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return Usuario::all();
    }

    public function store(Request $req){
        Usuario::create([
            "cpf"=> $req->cpf,
            "nome"=> $req->nome,
            "data_nascimento"=> $req->data_nascimento
        ]);
        return response ("Criado com sucesso!");
    }
}
