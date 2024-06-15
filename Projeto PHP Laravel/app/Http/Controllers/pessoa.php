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

    public function destroy($id){
        
        Cliente::findOrFail($id)->delete();

        return redirect('/visualizar_cadastrados')->with('msg','Usuário deletado com sucesso!!');
    }

    public function atualizar($id){

        $usuario = Cliente::findOrFail($id);

        return view('atualizar', ['usuario' => $usuario]);
    }

    public function update(Request $request){

        Cliente::findOrFail($request->id)->update($request->all());

        return redirect('/visualizar_cadastrados')->with('msg','Usuário atualizado com sucesso!!');
    }
    
}
