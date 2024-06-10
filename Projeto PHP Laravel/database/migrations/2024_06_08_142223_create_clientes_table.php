<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Client;

return new class extends Migration{
    /**
     * Run the migrations.
    */
    public function up(): void{

        Schema::create('clientes', function (Blueprint $table) {
            
            $table->id();
            $table->string('Nome',100);
            $table->string('cpf');
            $table->string('data_nascimento');
            $table->string('Email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
    */
    public function down(): void{
        Schema::dropIfExists('clientes');
    }
};
