@extends('welcome')
@section('title', 'Meu Site')

@section('conteudo')  

<div class="fundo_principal">

    <h1 class="titulo_cadastrados">Usuários cadastrados</h1> 

    @foreach ($usuarios_cadastrados as $usuario)

    <div class="fundo_do_registro">

        <div class="campos_registros">

            <p class="text_regist">Nome: {{ $usuario->Nome}}</p>
        
            <p class="text_regist">CPF: {{ $usuario->cpf}}</p>
       
            <p class="text_regist">Data de Nascimento: {{ $usuario->data_nascimento}}</p>
        
            <p class="text_regist">Email: {{ $usuario->Email}}</p> 
            
            <form action="/visualizar_cadastrados/{{ $usuario->id }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" id="deletar"> Deletar <ion-icon name="trash-outline"></ion-icon> </button>
            </form>

        </div>

        <img class="image_icon" src="/IMG/image_icon_no_photo.png" alt="Imagem do usuário">
    </div>

    
        
    @endforeach

</div>

@endsection
