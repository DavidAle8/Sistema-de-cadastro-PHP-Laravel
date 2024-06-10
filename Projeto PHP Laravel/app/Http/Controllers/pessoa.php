<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Cliente;

class pessoa extends Controller{
    
    public function home(){

        return view('welcome');
    }

    public function cadastrar(){
        
        return view('cadastro');
    }

    public function insert(Request $request){

        $usuario = new Cliente();
        //Parte da TABELA           Parte do name do FORMULÁRIO
        $usuario->Nome = $request->nome;
        $usuario->cpf = $request->cpf;
        $usuario->data_nascimento = $request->data_nascimento;
        $usuario->Email = $request->email;

        $usuario->save();

        return redirect('/')->with('msg','Usuário cadastrado com sucesso!');

    }

    public function visualizar(){ 

        $usuarios_cadastrados = Cliente::all();

        return view('clientes_cadastrados',['usuarios_cadastrados' => $usuarios_cadastrados]);

    }

}
