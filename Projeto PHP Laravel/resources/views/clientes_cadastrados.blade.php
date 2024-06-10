@extends('welcome')
@section('title', 'Meu Site')

@section('conteudo')  

<div class="fundo_principal">

    <h1 class="titulo_cadastrados">Usuários cadastrados</h1> 

    @foreach ($usuarios_cadastrados as $usuarios_cadastrados)

    <div class="fundo_do_registro">

        <div class="campos_registros">

            <p class="text_regist">Nome: {{ $usuarios_cadastrados->Nome}}</p>
        
            <p class="text_regist">CPF: {{ $usuarios_cadastrados->cpf}}</p>
       
            <p class="text_regist">Data de Nascimento: {{ $usuarios_cadastrados->data_nascimento}}</p>
        
            <p class="text_regist">Email: {{ $usuarios_cadastrados->Email}}</p>  

        </div>

        <img class="image_icon" src="/IMG/image_icon_no_photo.png" alt="Imagem do usuário">
    </div>

    
        
    @endforeach

</div>

@endsection
