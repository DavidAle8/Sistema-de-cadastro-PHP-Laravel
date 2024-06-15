<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pessoa;

// Route::get('/', function () {
//     return view('welcome');
// });
    
Route::get('/', [pessoa::class, 'home']);
Route::get('/cadastro', [pessoa::class, 'cadastrar']);
Route::post('/insert_client', [pessoa::class, 'insert']);
Route::get('/visualizar_cadastrados', [pessoa::class, 'visualizar']);
Route::delete('/visualizar_cadastrados/{id}',[pessoa::class, 'destroy']);
Route::get('/atualizar/{id}',[pessoa::class,'atualizar']);
Route::put('/update/{id}',[pessoa::class, 'update']);

//http://127.0.0.1:8000
//C:\Users\aless\OneDrive\Documentos\Meus códigos\PHP projeto\Projeto

//php artisan serve - roda o servidor
//php artisan migrate - cria algumas tabelas base do laravel
//php artisan make:controller *nome do controller* - cria um controller
//php artisan migrate:status - olha os campos da tabela
//php artisan migrate:fresh - deleta todas as tabelas e roda as migrates novamente (cuidado para não apagar dados já existentes) (Faz isso quando vc coloca novos campos na tabela, pois ele atualiza a tabela)
//php artisan migrate:rollback - Pode remover um campo da tabela
//php artisan migrate:reset - desfaz as migrations
//php artisan migrate:refresh - Faz rodar todas as migratios novamente. Faz o rollback e migrate logo sem seguida
//php artisan make:migration create_events_table - cria uma tabela. Neste caso "events_table" é o nome da tabela
//php artisan migrate:status - vê o status das migrations ou da tabela
//php artisan make:add_*nome do campo que deseja adicionar na tabela*_to_*tabela qual vai ter o campo adicionado dentro dela*
