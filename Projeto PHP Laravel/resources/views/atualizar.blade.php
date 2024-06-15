@extends('welcome')
@section('title','Meu Site')
    

@section('conteudo')

    <div class="form-container">
        
        <div class="formulario">

            <h1>Atualizção do Usuário {{$usuario->nome}}</h1>

            <form action="/update/{{$usuario->id}}" method="POST" class="form">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <p>Nome:</p>
                    <input type="text" name="nome" value="{{$usuario->Nome}}">
                </div>
            
                <div class="form-group">
                    <p>CPF:</p>
                    <input type="text" name="cpf" value="{{$usuario->cpf}}">
                </div>
        
                <div class="form-group">
                    <p>Data de Nascimento:</p>
                    <input type="date" name="data_nascimento" value="{{date('Y-m-d',strtotime($usuario->data_nascimento));}}">
                </div>
            
                <div class="form-group">
                    <p>Email:</p>
                    <input type="email" name="email" value="{{$usuario->Email}}">
                </div>

                {{-- <div class="form-group">
                    <p><label for="imagem"> Foto do usuário: </label></p>
                    <input type="file" id="imagem" name="imagem" class="from-control-file">
                </div> --}}

                <button type="submit" class="cadastro"> Atualizar </button>
            
            </form>

        </div>

    </div>
 
@endsection