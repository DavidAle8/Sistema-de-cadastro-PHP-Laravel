@extends('layouts.main')
@section('title','Meu Site')
    

@section('conteudo')
        
    <h1>Bem-Vindo ao Site!</h1>

    <div class="botoes"> 

        <a href="/visualizar_cadastrados"> 

            <button id="visualizar">
                <p id="texto"> Visualizar cadastrados</p>
            </button>

        </a>

        <a href="/cadastro"> 

            <button id="cadastrar">
                <p id="texto"> cadastrar </p> 
            </button> 

        </a>

    </div>

@endsection