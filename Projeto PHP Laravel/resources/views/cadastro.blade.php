@extends('welcome')
@section('title','Meu Site')
    

@section('conteudo')

<div class="form-container">
    
    <div class="formulario">
        <h1>Cadastro</h1>

        <form action="/insert_client" method="POST" class="form">
            @csrf
            <div class="form-group">
                <p>Nome:</p>
                <input type="text" name="nome">
            </div>
        
            <div class="form-group">
                <p>CPF:</p>
                <input type="text" name="cpf">
            </div>
      
            <div class="form-group">
                <p>Data de Nascimento:</p>
                <input type="date" name="data_nascimento">
            </div>
        
            <div class="form-group">
                <p>Email:</p>
                <input type="email" name="email">
            </div>

            <button type="submit" class="cadastro"> Cadastrar </button>
        
        </form>

    </div>

</div>
 
@endsection